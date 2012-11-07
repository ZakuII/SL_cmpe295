<?php defined('SYSPATH') or die('No direct script access.');

class Controller_profile_message extends Controller {

	public function action_index(){
		echo "msg";
	}
	
	public function action_getMsgUpdateDoc(){	
	
		if(isset($_POST['DocProId']) && isset($_POST['ppatId'])){
			echo $this->getDoctorAssoc($_POST['DocProId'],$_POST['ppatId']);
		}
		else{
			echo "0";
		}		
	}		
	
	public function action_getMsgUpdatePat(){
	}
	
	public function action_removeUpdate(){
	
		if(isset($_POST['DocProId']) && isset($_POST['ppatId'])){
			
			$by = $_POST['by'];
			$doctor = $_POST['DocProId'];;
			$patient = $_POST['ppatId'];;
			if($by=="doc"){
				$object = ORM::factory('profile',$doctor);
				if($object->id != "" && $object->type == 'doctor'){
					$this->doctorAssocUpdate($object->doctor->id,$patient,"remove");
				}				
			}
			else if($by=="pat"){
				$object = ORM::factory('profile',$patient);
				if($object->id != "" && $object->type == 'patient'){
					$this->patientAssocUpdate($object->patient->id,$doctor,"remove");
				}
			}
			else{
			echo "0";
			}		
		}
		else{
			echo "0";
		}			
	}		
	
	public function action_message(){
		echo "msg</br>";
		
		$msgAmnt = 16;
		$msgAmntNeg = -16;		
		$time = gmdate("r"); 
		$doctor = $_POST['DocProId'];
		$patient = $_POST['ppatId'];
		$msg = $_POST['msg'];
		$by = $_POST['by'];
		
			
		$msgStr = $this->messageGet($patient,$doctor);		
		
		if($msgStr == ""){
			//echo "nothing in file </br>";
			
			$myArray = array(
				array(
					"time" => $time,
					"by" => $by,
					"msg" => $msg,
				)
	
			); 
			$saveStr = json_encode($myArray);
			$this->messageSave($saveStr,$patient,$doctor);
			
		}		
		else{
			//echo "found: ". $msgStr."</br>";		
			$myAry = (json_decode($msgStr, true));
			$myArray = array(
					"time" => $time,
					"by" => $by,
					"msg" => $msg,	
			); 	
			$myAry[] = $myArray;
			
			$size = count($myAry);
			//echo "</br>Length: ".$size;			
			if($size <= $msgAmnt){
				$saveStr = json_encode($myAry);
				$this->messageSave($saveStr,$patient,$doctor);
			}
			else{
				//echo "</br>FULL";	
				$output = array_slice($myAry, $msgAmntNeg, $msgAmnt);
				$saveStr = json_encode($output);
				$this->messageSave($saveStr,$patient,$doctor);
			}
						
			if($by=="pat"){
				$object = ORM::factory('profile',$doctor);
				if($object->id != "" && $object->type == 'doctor'){
					$this->doctorAssocUpdate($object->doctor->id,$patient,"add");
				}				
			}
			else if($by=="doc"){
				$object = ORM::factory('profile',$patient);
				if($object->id != "" && $object->type == 'patient'){
					$this->patientAssocUpdate($object->patient->id,$doctor,"add");
				}
			}
			
		}
		
		
	}
	
	private function directoryMake($path){	
		if (!is_dir($path)) {
			mkdir($path);
		}
	}
	
	private function messageGet($patient,$doctor){
	
		$myDirectory = "userdata/message/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/message-".$doctor.".txt";
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
	
	private function messageSave($saveStr,$patient,$doctor){
	
		$myDirectory = "userdata/message/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/message-".$doctor.".txt";
		$fh = fopen($myFile, 'w+') or die("can't open file");
		fwrite($fh, $saveStr);
		fclose($fh);			
	}
	
	//--association manipulation
	private function doctorAssocUpdate($docID, $UserPatID, $val){
		$object = ORM::factory('doctor',$docID);
		if($object->id != ""){
			$storeArray = json_decode($object->msgUpdate,true);
			if($val == "add"){				
				$temp = $storeArray[$UserPatID];
				$temp++;
				$storeArray[$UserPatID] = $temp;				
			}
			else if($val == "remove"){
				$storeArray[$UserPatID]=0;
			}
			$object->msgUpdate = json_encode($storeArray);
			$object->save();
		}
	}
	
	private function patientAssocUpdate($patID, $UserDocID, $val){
		$object = ORM::factory('patient',$patID);
		if($object->id != ""){
			$storeArray = json_decode($object->msgUpdate,true);
			if($val == "add"){
				$temp = $storeArray[$UserDocID];
				$temp++;
				$storeArray[$UserDocID] = $temp;
			}
			else if($val == "remove"){
				$storeArray[$UserDocID]=0;
			}
			$object->msgUpdate = json_encode($storeArray);
			$object->save();
		}
	}
	
	private function getDoctorAssoc($docID,$patID){
		$object = ORM::factory('profile',$docID);
		if($object->id != "" && $object->type = "doctor"){
			$update = $object->doctor->msgUpdate;
			if(isset($update) && $update != ""){
				$storeArray = json_decode($update,true);
				
				if (array_key_exists($patID, $storeArray)) {
					return $storeArray[$patID];
				}
				else{
					return "0";
				}				
			}
			else{
				return "0";
			}
		}
		else{
			return "0";
		}
	}
	
	private function getPatientAssoc($patID,$docID){
		$object = ORM::factory('profile',$patID);
		if($object->id != "" && $object->type = "patient"){		
			$update = $object->patient->msgUpdate;
			if(isset($update) && $update != ""){
				$storeArray = json_decode($update,true);
				
				if (array_key_exists($docID, $storeArray)) {
					return $storeArray[$docID];
				}
				else{
					return "0";
				}				
			}
			else{
				return "0";
			}		
		}		
		else{
			return "0";
		}
	}
	
} 
