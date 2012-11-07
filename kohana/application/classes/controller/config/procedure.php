<?php defined('SYSPATH') or die('No direct script access.');

class Controller_config_procedure extends Controller {

	public function action_index()
	{
		$this->response->body('procedure');
	}	
	
	public function action_make() {
		$this->createReturnResult();
	}
	
	public function action_getImages() {		
		$retval = 0;
		if(isset($_GET['ppatID'])){
			$path = "userdata/images/".$_GET['ppatID'];
			if (is_dir($path)){
				//echo "directory found";
				$resultfiles = $this->get_files($path, array( "jpg" ) );
				//print_r( $resultfiles );
				//echo count($resultfiles);
				echo json_encode($resultfiles);
			}						
		}
	}
	
	public function action_parse() {
		
		//$this->createReturnResult();
				
		$time = gmdate("Y-m-d H:i:s"); 
		echo $time;				
		
		//---------------------
		
		$resultDir = "userdata/incoming";
		$resultfiles = $this->get_files($resultDir, array( "txt" ) );
  
		print_r( $resultfiles );
		
		//echo "</br>";
		echo count($resultfiles);
		
		for($a=0;$a<count($resultfiles);$a++){
					
			$msgStr = $this->hl7resultGetv2($resultfiles[$a]);
			echo "[".$msgStr."]";
			if($msgStr != ""){			
				$msgSegments = explode("\n", $msgStr);
				for($i=0;$i<count($msgSegments);$i++){
					$msgParts = explode("|", $msgSegments[$i]);
					if($msgParts[0] == 'PID'){
						if($msgParts[2] != ""){
							$patient = ltrim($msgParts[2], "0");
						}
					}
					else if($msgParts[0] == 'OBX'){
						if($msgParts[1] == '1'){
							$myArray = array(
							"time" => $time,
							"type" => $msgParts[3],
							);					
						}
						$myArray[$msgParts[4]] = $msgParts[5];				
					}
			
				}//for i
			}//if
			
			if(isset($patient)){
				$msgStr = $this->resultGet($patient);		
		
				if($msgStr == ""){			
					$myAry = array(
					$myArray
					);
					$saveStr = json_encode($myAry);
					$this->resultSave($saveStr,$patient);			
				}		
				else{
					$myAry = (json_decode($msgStr, true));
					$myAry[] = $myArray;
					$saveStr = json_encode($myAry);
					$this->resultSave($saveStr,$patient);			
				}		
				$thefile = $resultDir.'/'.$resultfiles[$a];
				unlink($thefile);		//delete the file after parsing
				//$command = 'rm /opt/lampp/htdocs/kohana/'.$thefile;
				//system($command, $retval);
				echo "</br>".$a." - ".$patient;
			}
		}//for a
		
		
		//---------------------
				
		
		/*
		$patientTEST = 13;
		$msgStr = $this->hl7resultGet($patientTEST);		
		
		if($msgStr != ""){
			
			$msgSegments = explode("\n", $msgStr);
			for($i=0;$i<count($msgSegments);$i++){
				$msgParts = explode("|", $msgSegments[$i]);
				if($msgParts[0] == 'PID'){
					if($msgParts[2] != ""){
						$patient = ltrim($msgParts[2], "0");
					}
				}
				else if($msgParts[0] == 'OBX'){
					if($msgParts[1] == '1'){
						$myArray = array(
							"time" => $time,
							"type" => $msgParts[3],
						);					
					}
					$myArray[$msgParts[4]] = $msgParts[5];				
				}
			
			}
			
		}
		//remember to delete HL7 results file
		//var_dump($myArray);
		
		$msgStr = $this->resultGet($patient);		
		
		if($msgStr == ""){			
			$myAry = array(
				$myArray
			);
			$saveStr = json_encode($myAry);
			$this->resultSave($saveStr,$patient);
			
		}		
		else{
			$myAry = (json_decode($msgStr, true));
			$myAry[] = $myArray;
			$saveStr = json_encode($myAry);
			$this->resultSave($saveStr,$patient);			
		}			*/		
	}
	
	
	public function action_populate() {
		echo "populating the database";
		//$object = ORM::factory('procedure');
		/*$object->name = "Comprehensive Blood Count (CBC)";
		$object->numArg = 5;
		$args = "";
		$args .= "Red Blood Count:trillion cells/L:4.32:5.72|";
		$args .= "Hemoglobin:grams/dL:13.5:17.5|";
		$args .= "Hematocrit:%:38.8:50.0|";
		$args .= "White Blood Cell Count:billion cells/L:3.5:10.5|";
		$args .= "Platclet Count:billions/L:150:450";
		$object->Args = $args;
		$object->save();*/
		
		/*$object->name = "Fasting Blood Sugar (FBS)";
		$object->numArg = 1;
		$args = "";
		$args .= "Glucose:mg/dL:70:100";
		$object->Args = $args;
		$object->save();*/
		
		/*$object->name = "Lipid Blood Test";
		$object->numArg = 4;
		$args = "";
		$args .= "Total Cholestrol:mg/dL:100:199|";
		$args .= "HDL:mg/dL:40:+|";
		$args .= "LDL:mg/dL:-:70|";
		$args .= "Triglycerides:mg/dL:-:150";
		$object->Args = $args;
		$object->save();*/
		
		/*$object->name = "Thyroid Blood Test";
		$object->numArg = 3;
		$args = "";
		$args .= "TSH:mU/mL:0.4:5.5|";
		$args .= "Thynoxine:ug/dL:5:11|";
		$args .= "TRO:IU/mL:0:5.0";	
		$object->Args = $args;
		$object->save();*/
		
		/*$object->name = "Comprehensive Metabolic Panel (CMP)";
		$object->numArg = 14;
		$args = "";		
		$args .= "Albumin:g/dL:3.9:5.0|";
		$args .= "Alkaline Phosphatse:IU/L:44:147|";
		$args .= "ALT:IU/L:8:37|";
		$args .= "AST:IU/L:10:37|";
		$args .= "BUN:mg/dL:7:20|";
		$args .= "Calcium:mg/dL:8.5:10.9|";
		$args .= "Chloride:mmol/L:96:106|";
		$args .= "CO2:mmol/L:20:29|";
		$args .= "Creatine:mg/dL:0.8:1.4|";
		$args .= "Glucose Test:mg/dL:100:100|";
		$args .= "Potassium:mEq/L:3.7:5.2|";
		$args .= "Sodium:mEq/L:136:144|";
		$args .= "Total Bilrubin:mg/dL:0.2:1.9|";
		$args .= "Total Protein:g/dL:6.3:7.9";
		$object->Args = $args;
		$object->save();*/
    }
	
	public function action_getProcedure() {
		
		$procedures = ORM::factory('procedure')->find_all(); 

    	$columns = Database::instance()->list_columns('procedure');
    	
    	$tblSize = sizeof($procedures);
    	$colSize = sizeof($columns);
    	$tblCnt = 0;
    	
    	echo'{ "procedure": [';
    	foreach ($procedures as $pQ){
    		echo "{ ";
    		$count=0;
    		foreach ($columns as $key => $value){
    			echo '"';
    			echo "$key";
    			echo '":"';
           		echo $pQ->$key;
           		echo '"';
           		$count++;
           		if($count < $colSize)
           			echo ", ";
    		}
    		$tblCnt++;
    		echo " }";
    		if($tblCnt < $tblSize)
           		echo ", ";
    	}
    	echo ']}';				
	}
			
	public function action_populateResult() {		
		
		//$time = gmdate("r"); 
		$time = gmdate("Y-m-d H:i:s"); 
		$patient = 13;		
		echo $time;
				
		
		/*$myArray = array(
			"time" => $time,
			"type" => 'Comprehensive Blood Count (CBC)',
			"RB Count" => 7.44,
			"Hemoglobin" => 12.9,
			"Hematocrit" => 64.0,
			"WBC Count" => 3.1,			
			"Platclet Count" => 504,	
		);*/
		
		/*$myArray = array(
			"time" => $time,
			"type" => 'Fasting Blood Sugar (FBS)',
			"Glucose" => 65,
		);*/
				
		/*$myArray = array(
			"time" => $time,
			"type" => 'Lipid Blood Test',
			"TC" => 111,
			"HDL" => 42,
			"LDL" => 43,
			"Triglycerides" => 86,	
		);*/		
		
		/*$myArray = array(
			"time" => $time,
			"type" => 'Thyroid Blood Test',
			"TSH" => 2.2,
			"Thynoxine" => 7,
			"TRO" => 3.2,
		);*/		
		
		/*$myArray = array(
			"time" => $time,
			"type" => 'Comprehensive Metabolic Panel (CMP)',
			"Albumin" => 4.2,
			"Alkaline" => 97,
			"ALT" => 32,
			"AST" => 30,
			"BUN" => 12,
			"Ca" => 9.8,
			"Cl" => 99,
			"CO2" => 24,
			"Creatine" => 1.1,
			"Glucose" => 102,
			"K" => 3.2,
			"Na" => 136,
			"Bilrubin" => 0.2,
			"Protein" => 8.2,
		);*/
		
		$msgStr = $this->resultGet($patient);		
		
		if($msgStr == ""){			
			$myAry = array(
				$myArray
			);
			$saveStr = json_encode($myAry);
			$this->resultSave($saveStr,$patient);
			
		}		
		else{
			$myAry = (json_decode($msgStr, true));
			$myAry[] = $myArray;
			$saveStr = json_encode($myAry);
			$this->resultSave($saveStr,$patient);			
		}				
	}
	
	
	private function directoryMake($path){	
		if (!is_dir($path)) {
			mkdir($path);
		}
	}
	
	private function resultGet($patient){
	
		$myDirectory = "userdata/procedures/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/result.txt";
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
	
		$myDirectory = "userdata/procedures/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/result.txt";
		$fh = fopen($myFile, 'w+') or die("can't open file");
		fwrite($fh, $saveStr);
		fclose($fh);			
	}
	
	private function hl7resultGet($patient){
	
		$myDirectory = "userdata/procedures/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/hl7result.txt";
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
	
	private function hl7resultGetv2($file){
	
		$myDirectory = "userdata/incoming/";;
		$myFile = $myDirectory.$file;		
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
	
	
	//reference:
	//http://www.hcup-us.ahrq.gov/datainnovations/clinicaldata/AppendixL_HL7DataTransmissionReqs.jsp
	private function createReturnResult(){

		//$patient = '13';
		$hl7Time = gmdate("YmdGis"); 
		$hl7str = 'MSH|?~\&||SJSU CMPE295 Hospital Lab||SJSU CMPE295 Hospital|'.$hl7Time.'||CSU?Z01||P|2.5.1'."\n";
		//following date should be birth date
		//$hl7str .= 'PID|1|000000013|||||YYYYMMDD|M||||||||||000000013'."\n";
		$hl7str .= 'PID|1|000000007|||||YYYYMMDD|M||||||||||000000007'."\n";
		//time should be entry / dismiss time
		$hl7str .= 'PV1|1|||||||||||||||||||||||||||||||||||||||||'.$hl7Time.'|'.$hl7Time."\n";	
		
		//for CBC test
		/*$hl7str .= 'OBX|1|NM|Comprehensive Blood Count (CBC)|RB Count|5.1|trillion cells/L|4.32 - 5.72||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";
		$hl7str .= 'OBX|2|NM|Comprehensive Blood Count (CBC)|Hemoglobin|15.1|grams/dL|13.5 - 17.5||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";
		$hl7str .= 'OBX|3|NM|Comprehensive Blood Count (CBC)|Hematocrit|35.1|%|38.8 - 50.0||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";
		$hl7str .= 'OBX|4|NM|Comprehensive Blood Count (CBC)|WBC Count|5.3|billion cells/L|3.5 - 10.5||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";
		$hl7str .= 'OBX|5|NM|Comprehensive Blood Count (CBC)|Platclet Count|253|billions/L|150 - 450||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";*/
		
		//for Thyroid Blood Test test
		$hl7str .= 'OBX|1|NM|Thyroid Blood Test|TSH|3.5|mU/mL|0.4 - 5.5||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";
		$hl7str .= 'OBX|2|NM|Thyroid Blood Test|Thynoxine|6.8|ug/dL|5 - 11||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";
		$hl7str .= 'OBX|3|NM|Thyroid Blood Test|TRO|2.3|IU/mL|0 - 5.0||||F|||'.$hl7Time.'|||||'.$hl7Time."\n";
		
		//$myDirectory = "userdata/procedures/".$patient;
		$myDirectory = "userdata/tempResult";
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/hl7result".$hl7Time.".txt";
		$fh = fopen($myFile, 'w+') or die("can't open file");
		fwrite($fh, $hl7str);
		fclose($fh);
	}
	
	private function get_files( $directory, $filter = array( "*" ) ){
		$results = array(); 
		$filter = (array) $filter; 
	
		$handler = opendir( $directory );	

		while ($file = readdir($handler)) {

			if(is_dir($file))
			continue;

			$extension2 = explode( ".", $file );
			$extension = end($extension2);
		
			if ($file != "." && $file != ".." && (in_array($extension, $filter) || in_array("*", $filter))){
				$results[] = $file;
			}
		}
		closedir($handler);
		return $results;
	}		
	
} // End Procedure
