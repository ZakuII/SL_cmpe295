<?php defined('SYSPATH') or die('No direct script access.');

class Controller_form_Prescription extends Controller {

public function action_index()
	{
		//$this->response->body('hello, profile!');
		//echo date("D M j G:i:s T Y");  
		echo gmdate("YmdGis").'</br>';  
		//echo gmdate("r");  
	}
	
	public function action_another() {
        $this->response->body('added another action...');	
    }	
		
	public function action_process() {
        //echo "processing";				
					
		if(isset($_POST['DocProId'])){
			
			$hl7Time = gmdate("YmdGis");  
			$logTime = gmdate("r"); 
			$time = gmdate("Y-m-d H:i:s"); 			
		
			$doctorProfile = ORM::factory('profile',$_POST['DocProId']);
			
			//make Log File First	
			$logString = '[Created] : '.$logTime."\n";
			$logString .= '[Reason] : '.$_POST['mxReason']."\n";
			$logString .= '[Hospital] : '.$_POST['mxplace'].', id = '.$_POST['mxplaceId']."\n";
			$logString .= '[Pharmacy] : '.$_POST['pharmacy']."\n";
			$logString .= '[Pharmacy Location] : '.$_POST['pharmacyLoc']."\n";
			$logString .= '[Perscription] : '.$_POST['medicine'].', Amount = '.$_POST['medAmnt']."\n";
			$logString .= '[Direction] : Take '.$_POST['mxD1'];
			$logString .= ' Every '.$_POST['mxD2'];
			$logString .= ' Hours for '.$_POST['mxD3']." days"."\n";
			$logString .= '[Additional Direction] : '.$_POST['Directions']."\n";
			$logString .= '[Refills] : '.$_POST['mxRefill']."\n";
			$logString .= '[Prescribed by] : Dr. '. $doctorProfile->firstname.' '.$doctorProfile->lastname."\n";
			$logString .= "\n-------------------------------------------\n\n";
			
			$logString2 = '[Created] : '.$logTime."</br>";
			$logString2 .= '[Reason] : '.$_POST['mxReason']."</br>";
			$logString2 .= '[Hospital] : '.$_POST['mxplace'].', id = '.$_POST['mxplaceId']."</br>";
			$logString2 .= '[Pharmacy] : '.$_POST['pharmacy']."</br>";
			$logString2 .= '[Pharmacy Location] : '.$_POST['pharmacyLoc']."</br>";
			$logString2 .= '[Perscription] : '.$_POST['medicine'].', Amount = '.$_POST['medAmnt']."</br>";
			$logString2 .= '[Direction] : Take '.$_POST['mxD1'];
			$logString2 .= ' Every '.$_POST['mxD2'];
			$logString2 .= ' Hours for '.$_POST['mxD3']." days"."</br>";
			$logString2 .= '[Additional Direction] : '.$_POST['Directions']."</br>";
			$logString2 .= '[Refills] : '.$_POST['mxRefill']."</br>";
			$logString2 .= '[Prescribed by] : Dr. '. $doctorProfile->firstname.' '.$doctorProfile->lastname."</br>";
			$logString2 .= "</br>-------------------------------------------</br></br>";			
			
			//uncomment later
			$this->LogPrescription($logString,$_POST['PatProId'],$logString2);
			
			//Json Make						
			$msgStr = $this->resultGet($_POST['PatProId']);				
			$myArray = array(
				"Created" => $time,
				"Reason" => $_POST['mxReason'],
				"Hospital" => $_POST['mxplace'].', id = '.$_POST['mxplaceId'],
				"Pharmacy" => $_POST['pharmacy'],
				"Pharmacy Location" => $_POST['pharmacyLoc'],
				"Perscription" => $_POST['medicine'].', Amount = '.$_POST['medAmnt'],
				"Direction" => 'Take '.$_POST['mxD1'].' Every '.$_POST['mxD2'].' Hours for '.$_POST['mxD3'].' days',
				"Additional Direction" => $_POST['Directions'],
				"Refills" => $_POST['mxRefill'],
				"Prescribed By" => 'Dr. '. $doctorProfile->firstname.' '.$doctorProfile->lastname,
			);		
				
			if($msgStr == ""){			
				$myAry = array(
				$myArray
				);
				$saveStr = json_encode($myAry);
				$this->resultSave($saveStr,$_POST['PatProId']);
			}		
			else{
				$myAry = (json_decode($msgStr, true));
				$myAry[] = $myArray;
				$saveStr = json_encode($myAry);
				$this->resultSave($saveStr,$_POST['PatProId']);			
			}								
			
			//make HL7 String
			//reference:
			//http://amisha.pragmaticdata.com/~gunther/oldhtml/segments.html
			//http://www.corepointhealth.com/resource-center/hl7-resources/hl7-rde-message-pharmacy
			
			$hl7str = 'MSH|^~\&||'.$_POST['mxplace'].'||'.$_POST['pharmacy'].'|'.$hl7Time.'||RDE'.$hl7Time.'|P|2.3||'."\n";
			$hl7str .= 'EVN|O01|'.$hl7Time.'||02||'."\n";
			$hl7str .= 'PID||'.$_POST['mxPPid'].$_POST['mxPPid'].'|'.$_POST['mxFname'].$_POST['mxLname'].'||||||||||||||||||||'."\n";
			$hl7str .= 'PV1||1^I/P^00|R|||'.$_POST['DocProId'].'^'.$doctorProfile->lastname.'^'.$doctorProfile->firstname.'^^^^^||||||||||'.$_POST['DocProId'].'^'.$doctorProfile->lastname.'^'.$doctorProfile->firstname.'|I||||||||||||||||||||||||||||'.$hl7Time."\n";
			$hl7str .= 'IN1|'.$_POST['mxPPid'].'|'.$_POST['insureID'].'|'.$_POST['insurePlace'].'||||||||'."\n";
			$hl7str .= 'ORC|NW|0000010|||IP||1^BID&1000,2200,^^'.$hl7Time.'^^0^0^'."\n";
			$hl7str .= 'RXO|'.$hl7Time.'|'.$_POST['medAmnt'].'|||Take '.$_POST['mxD1'].' Every '.$_POST['mxD2'].' Hours for '.$_POST['mxD3']." days|".$_POST['Directions'].'||N|||'.$_POST['medAmnt'].'|||'."\n";
			$hl7str .= 'RXE|1^BID&1000,2200,^^'.$hl7Time.'^^0^0|^^'.$_POST['medicine'].'|'.$_POST['medAmnt'].'||MG||||||1||||||||||||||'."\n";
			
			$this->HL7Prescription($hl7str,$_POST['PatProId']);
			$url = 'hl7script/hl7Perscribe 127.0.0.1 '.$_POST['PatProId'];
			//$last_line = system($url, $retval);
			echo "0";		
		}
		else{
			echo "-1";
		}
		
    }		
	
	private function directoryMake($path){	
		if (!is_dir($path)) {
			mkdir($path);
		}
	}
	
	private function LogPrescription($logString,$UserPatID,$logString2){	
		$myDirectory = "userdata/prescription/".$UserPatID;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/prescriptionLog.txt";
		$fh = fopen($myFile, 'a+') or die("can't open file");
		fwrite($fh, $logString);
		fclose($fh);			

		$myFile2 = $myDirectory."/prescriptionLog-v2.txt";
		$fh2 = fopen($myFile2, 'a+') or die("can't open file");
		fwrite($fh2, $logString2);
		fclose($fh2);			
	}
	
	private function HL7Prescription($logString,$UserPatID){	
		$myDirectory = "userdata/prescription/".$UserPatID;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/hl7Perscription.txt";
		$fh = fopen($myFile, 'w+') or die("can't open file");
		fwrite($fh, $logString);
		fclose($fh);			
	}
	
	private function resultGet($patient){
	
		$myDirectory = "userdata/prescription/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/prescriptionjson.txt";
		if(file_exists($myFile)){
			$message = file_get_contents($myFile);
			if($message=="FALSE"){
				$message = "";
			}
		}
		else{
			$message = "";
		}
		return $message;
	}	
	
	private function resultSave($saveStr,$patient){
	
		$myDirectory = "userdata/prescription/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/prescriptionjson.txt";
		$fh = fopen($myFile, 'w+') or die("can't open file");
		fwrite($fh, $saveStr);
		fclose($fh);			
	}

	

} // 
