<?php defined('SYSPATH') or die('No direct script access.');

class Controller_form_Procedure extends Controller {

public function action_index()
	{
		//$this->response->body('hello, profile!');
		//echo date("D M j G:i:s T Y");  
		//$date = date("D M j G:i:s T Y");  
		//echo gmdate("YmdGis").'</br>';
		//$date = gmdate("YmdGis");
		//echo $date.'</br>';
		$hl7Time = gmdate("YmdGis"); 
		echo $hl7Time.'</br>';
		$newdate = strtotime ( '10 day' , strtotime ( $hl7Time ) ) ;		
		$newdate = date ( 'YmdGis' , $newdate );
		echo $newdate;
		//echo gmdate("r");  
	}
	
	public function action_another() {
        $this->response->body('added another action...');	
    }	
		
	public function action_process() {
        //echo "processing procedure";				
		//insurePlace, insureID
		if(isset($_POST['DocProId'])){
			
			$hl7Time = gmdate("YmdGis");  
			$logTime = gmdate("r");  
			$hl7Time2 = date("YmdGis");  
			$hl7timeExpire = strtotime ( '10 day' , strtotime ( $hl7Time2 ) ) ;		
			$hl7timeExpire = date ( 'YmdGis' , $hl7timeExpire );			
			
			//make Log File First	
			$logString = '[Created] : '.$logTime."\n";
			$logString .= '[Reason] : '.$_POST['procReason']."\n";
			$logString .= '[Hospital] : '.$_POST['procplace'].', id = '.$_POST['procplaceId']."\n";
			$logString .= '[Procedure Insitute] : '.$_POST['proLocName']."\n";
			$logString .= '[Procedure Location] : '.$_POST['proLoc']."\n";
			$logString .= '[Procedure Location ID] : '.$_POST['proLocId']."\n";
			$logString .= '[Procedure] : '.$_POST['procedure']."\n";
			$logString .= '[Additional Direction] : '.$_POST['AddDirections']."\n";
			$logString .= '[Scheduled by] : Dr. '.$_POST['procDocFname'].' '.$_POST['procDocLname'];
			$logString .= ', '.$_POST['procDocType'].'[id] : '.$_POST['procDocPid']."\n";
			$logString .= "\n-------------------------------------------\n\n";
			
			$logString2 = '[Created] : '.$logTime."</br>";
			$logString2 .= '[Reason] : '.$_POST['procReason']."</br>";
			$logString2 .= '[Hospital] : '.$_POST['procplace'].', id = '.$_POST['procplaceId']."</br>";
			$logString2 .= '[Procedure Insitute] : '.$_POST['proLocName']."</br>";
			$logString2 .= '[Procedure Location] : '.$_POST['proLoc']."</br>";
			$logString2 .= '[Procedure Location ID] : '.$_POST['proLocId']."</br>";
			$logString2 .= '[Procedure] : '.$_POST['procedure']."</br>";
			$logString2 .= '[Additional Direction] : '.$_POST['AddDirections']."</br>";
			$logString2 .= '[Scheduled by] : Dr. '.$_POST['procDocFname'].' '.$_POST['procDocLname'];
			$logString2 .= ', '.$_POST['procDocType'].'[id] : '.$_POST['procDocPid']."</br>";
			$logString2 .= "</br>-------------------------------------------</br></br>";
			
			//uncomment later
			//$this->LogProcedure($logString,$_POST['PatProId'],$logString2);
			
			//make HL7 String
			//reference:
			//http://amisha.pragmaticdata.com/~gunther/oldhtml/segments.html
			//http://www.corepointhealth.com/resource-center/hl7-resources/hl7-rde-message-pharmacy
			
			$hl7str = 'MSH|^~\&||'.$_POST['procplace'].'||'.$_POST['proLocName'].'^'.$_POST['proLoc'].'|'.$hl7Time.'||ORU|'.$hl7Time.'|P|2.3||'."\n";
			$hl7str .= 'EVN|O01|'.$hl7Time.'||02||'."\n";
			$hl7str .= 'PID||'.$_POST['proLocId'].$_POST['proLocId'].'|'.$_POST['procFname'].$_POST['procLname'].'||||||||||||||||||||'."\n";
			$hl7str .= 'PV1||1^I/P^00|R|||'.$_POST['procDocPid'].'^'.$_POST['procDocLname'].'^'.$_POST['procDocFname'].'^^^^^||||||||||'.$_POST['procDocPid'].'^'.$_POST['procDocLname'].'^'.$_POST['procDocFname'].'|I||||||||||||||||||||||||||||'.$hl7Time."\n";
			$hl7str .= 'IN1|'.$_POST['procPPid'].'|'.$_POST['procinsureID'].'|'.$_POST['procinsurePlace'].'|||||||||'."\n";
			$hl7str .= 'OBR|1|'.$_POST['procPPid'].'^'.$_POST['procedure'].'||'.$hl7Time.'|'.$hl7timeExpire.'|||||||||'.$hl7timeExpire.'|^^^^|^^||||||||||||||||||^^|||||||||||||'."\n";
			
			$hl7str .= 'OBX|1|ST||1|Result|||N|||F|||||^^|||'."\n";
			$hl7str .= 'NTE|1||'.$_POST['AddDirections']."\n";
			
			$this->HL7Procedure($hl7str,$_POST['PatProId']);
			$url = 'hl7script/hl7SendProcedure 127.0.0.1 '.$_POST['PatProId'];
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
	
	private function LogProcedure($logString,$UserPatID,$logString2){	
		$myDirectory = "userdata/procedures/".$UserPatID;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/procedureLog.txt";
		$fh = fopen($myFile, 'a+') or die("can't open file");
		fwrite($fh, $logString);
		fclose($fh);			

		$myFile2 = $myDirectory."/procedureLog-v2.txt";
		$fh2 = fopen($myFile2, 'a+') or die("can't open file");
		fwrite($fh2, $logString2);
		fclose($fh2);			
	}
	
	private function HL7Procedure($logString,$UserPatID){	
		$myDirectory = "userdata/procedures/".$UserPatID;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/hl7Procedure.txt";
		$fh = fopen($myFile, 'w+') or die("can't open file");
		fwrite($fh, $logString);
		fclose($fh);			
	}	

} // 
