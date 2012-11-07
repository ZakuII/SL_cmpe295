<?php defined('SYSPATH') or die('No direct script access.');

class Controller_profile_profile extends Controller {

	public function action_index()
	{
		//$this->response->body('hello, profile!');
		//echo date("D M j G:i:s T Y");  
		//echo gmdate("D M j G:i:s T Y");  
		echo gmdate("r");  

	}
	
	 public function action_newProfile() {
        //echo "profile!";
		
		if(isset($_POST['username'])){
			
			$object = ORM::factory('profile')->where('username','=',$_POST['username'])->find();
			if($object->id != ""){
				echo "-1";
			}
			else{
			//$object = ORM::factory('profile');
				$object->username = $_POST['username'];
				$object->password = hash('sha256', $_POST['password']);
				$object->type = $_POST['ProfileType'];
				$object->dateCreated = gmdate("r");
				$object->email = $_POST['email'];
				$object->firstname = $_POST['firstname'];
				$object->lastname = $_POST['lastname'];
				$object->question = $_POST['question'];
				$object->answer = $_POST['answer'];
				$object->save();			
				echo $object->id;	
			}
		}
    }
	
	public function action_testProfile() {
	
		echo "hellow </br>";
		//$object = ORM::factory('profile','7');
		//echo $object->patient->personQ_id;
		//$this->doctorAssocUpdate(3,8,1);
		//$this->removeDoctorAssoc(2,8);
		//$this->listDcotorAssoc(2);
		//$this->patientAssocUpdate(2,1,1);
		//$this->listPatientAssoc(2);
		//$this->removePatientAssoc(2,1);
		//$this->patientLogVisit();
	}		
	
	public function action_assignAssociation() {
	
		if(isset($_POST['PDocID']) && isset($_POST['PPatID'])){
			$patientProfile = ORM::factory('profile',$_POST['PPatID']);
			$doctorProfile = ORM::factory('profile',$_POST['PDocID']);
			$this->doctorAssocUpdate($doctorProfile->doctor->id,$_POST['PPatID'],1);
			$this->patientAssocUpdate($patientProfile->patient->id,$_POST['PDocID'],1);
			$patient = ORM::factory('patient',$patientProfile->patient->id);
			$patient->checked_In = 1;
			
			$visit = ORM::factory('visitation');
			$visit->reason = $_POST['reason'];
			$visit->checked_time = gmdate("r");
			$visit->user_id = $_POST['PPatID'];
			$visit->save();
			
			$patient->visitation_id = $visit->id;
			
			$patient->save();
			echo "1";
		}
		else{
			echo "-1";
		}
	
	}
	
	public function action_removeAssociation() {
			
		if(isset($_POST['PPatID']) && isset($_POST['pid'])){
			$this->removeAssocWithPatient($_POST['pid'], $_POST['PPatID']);
			echo "0";
		}
		else{
			echo "-1";
		}	
	}
	
	public function action_searchPatientCheckedIn() {	
	
		$profile = ORM::factory('profile')->where('type','=','patient')->find_all(); 
		$formatFlag = 0;
    	
		echo'{ "patient": [';
		foreach ($profile as $pQ){
			if($pQ->patient->checked_In == 1){
				if($formatFlag==0){
					echo "{ ";
					$formatFlag = 1;
				}
				else{
					echo ", { ";
				}
				$count=0;
				echo'"proId":"'.$pQ->id.'", "patID":"'.$pQ->patient->id.'", "uname":"'.$pQ->username.'", "fname":"'.$pQ->firstname.'", "lname":"'.$pQ->lastname.'"';
				echo " }";
			}
		}
		echo ']}';
	
	}
	
	public function action_searchPatient() {	
		
		if($_GET['un'] != ""){		
			$profile = ORM::factory('profile')->where('type','=','patient')->where('username','=',$_GET['un'])->find_all(); 
			$tblSize = sizeof($profile);
			$tblCnt = 0;
    	
			echo'{ "patient": [';
			foreach ($profile as $pQ){
				echo "{ ";
				$count=0;
				echo'"proId":"'.$pQ->id.'", "patID":"'.$pQ->patient->id.'", "uname":"'.$pQ->username.'", "fname":"'.$pQ->firstname.'", "lname":"'.$pQ->lastname.'"';
				$tblCnt++;
				echo " }";
				if($tblCnt < $tblSize)
					echo ", ";
			}
			echo ']}';	
		}
		else if($_GET['fn'] != "" && $_GET['ln'] != ""){
			$profile = ORM::factory('profile')->where('type','=','patient')->where('firstname','=',$_GET['fn'])->where('lastname','=',$_GET['ln'])->find_all(); 
			$tblSize = sizeof($profile);
			$tblCnt = 0;
    	
			echo'{ "patient": [';
			foreach ($profile as $pQ){
				echo "{ ";
				$count=0;
				echo'"proId":"'.$pQ->id.'", "patID":"'.$pQ->patient->id.'", "uname":"'.$pQ->username.'", "fname":"'.$pQ->firstname.'", "lname":"'.$pQ->lastname.'"';
				$tblCnt++;
				echo " }";
				if($tblCnt < $tblSize)
					echo ", ";
			}
			echo ']}';	
		}
		else if($_GET['fn'] != ""){
			$profile = ORM::factory('profile')->where('type','=','patient')->where('firstname','=',$_GET['fn'])->find_all(); 
			$tblSize = sizeof($profile);
			$tblCnt = 0;
    	
			echo'{ "patient": [';
			foreach ($profile as $pQ){
				echo "{ ";
				$count=0;
				echo'"proId":"'.$pQ->id.'", "patID":"'.$pQ->patient->id.'", "uname":"'.$pQ->username.'", "fname":"'.$pQ->firstname.'", "lname":"'.$pQ->lastname.'"';
				$tblCnt++;
				echo " }";
				if($tblCnt < $tblSize)
					echo ", ";
			}
			echo ']}';	
		}
		else if($_GET['ln'] != ""){
			$profile = ORM::factory('profile')->where('type','=','patient')->where('lastname','=',$_GET['ln'])->find_all(); 
			$tblSize = sizeof($profile);
			$tblCnt = 0;
    	
			echo'{ "patient": [';
			foreach ($profile as $pQ){
				echo "{ ";
				$count=0;
				echo'"proId":"'.$pQ->id.'", "patID":"'.$pQ->patient->id.'", "uname":"'.$pQ->username.'", "fname":"'.$pQ->firstname.'", "lname":"'.$pQ->lastname.'"';
				$tblCnt++;
				echo " }";
				if($tblCnt < $tblSize)
					echo ", ";
			}
			echo ']}';	
		}
		else{
			echo'{ "patient": [';
			echo ']}';	
		}
	
	}
	
	private function directoryMake($path){	
		if (!is_dir($path)) {
			mkdir($path);
		}
	}
	
	private function patientLogVisit($logString,$UserPatID,$logString2){
	
		$myDirectory = "userdata/visit/".$UserPatID;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/visitLog.txt";
		$fh = fopen($myFile, 'a+') or die("can't open file");
		fwrite($fh, $logString);
		fclose($fh);	
		
		$myFile2 = $myDirectory."/visitLog-v2.txt";
		$fh2 = fopen($myFile2, 'a+') or die("can't open file");
		fwrite($fh2, $logString2);
		fclose($fh2);	
		
	}
	
	private function doctorAssocUpdate($docID, $UserPatID, $val){
		$object = ORM::factory('doctor',$docID);
		if($object->id != ""){
			$storeArray = json_decode($object->association,true);
			$storeArray[$UserPatID]=$val;
			$object->association = json_encode($storeArray);
			$object->save();
		}
	}
	
	private function patientAssocUpdate($patID, $UserDocID, $val){
		$object = ORM::factory('patient',$patID);
		if($object->id != ""){
			$storeArray = json_decode($object->association,true);
			$storeArray[$UserDocID]=$val;
			$object->association = json_encode($storeArray);
			$object->save();
		}
	}
	
	private function getDcotorAssoc($docID){
		$object = ORM::factory('doctor',$docID);
		if($object->id != ""){
		
		}
	}
	
	private function getPatientAssoc($patID){
		$object = ORM::factory('patient',$patID);
		if($object->id != ""){
		
		}
	}
	
	
	
	private function resultGet($patient){
	
		$myDirectory = "userdata/visit/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/Visitjson.txt";
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
	
		$myDirectory = "userdata/visit/".$patient;
		$this->directoryMake($myDirectory);
		$myFile = $myDirectory."/Visitjson.txt";
		$fh = fopen($myFile, 'w+') or die("can't open file");
		fwrite($fh, $saveStr);
		fclose($fh);			
	}
	
	
	
	private function removeAssocWithPatient($patID, $UserPatID){
		$object = ORM::factory('patient',$patID);
		if($object->id != ""){
			
			$visit = ORM::factory('visitation',$object->visitation_id);
			if($visit->id != ""){
				$logString = '[Checked in] : '.$visit->checked_time."\n";
				$logString .= '[Reason] : '.$visit->reason."\n";
				$logString .= '[Examined by] : ';
				
				$logString2 = '[Checked in] : '.$visit->checked_time."</br>";
				$logString2 .= '[Reason] : '.$visit->reason."</br>";
				$logString2 .= '[Examined by] : ';
				
				$time = gmdate("Y-m-d H:i:s"); 
				$checked_In = $visit->checked_time;
				$visitReason = $visit->reason;
				
				$visit->delete();
			}			
		
			$logString3 = "";
			$storeArray = json_decode($object->association,true);
			$keys = array_keys($storeArray);
			foreach($keys as $key){
				
				//if there is an association, remove it (set it to zero)
				if($storeArray[$key] == 1){
					$storeArray[$key] = 0;
					$doctorProfile = ORM::factory('Profile',$key);
					if($doctorProfile->id != ""){
						$this->doctorAssocUpdate($doctorProfile->doctor->id,$UserPatID,0);
						if(isset($logString)){
						$logString .= $doctorProfile->doctor->specialization.' / Dr. '.$doctorProfile->firstname.' '.$doctorProfile->lastname.' / id = '.$doctorProfile->id."\n";
						
						$logString2 .= $doctorProfile->doctor->specialization.' / Dr. '.$doctorProfile->firstname.' '.$doctorProfile->lastname.' / id = '.$doctorProfile->id."</br>";
						
						$logString3 .= $doctorProfile->doctor->specialization.' - Dr. '.$doctorProfile->firstname.' '.$doctorProfile->lastname.' - id = '.$doctorProfile->id." ";
						
						}
					}
				}
				
			}
			if(isset($logString)){
				$logString .= '[Checked out] : '.gmdate("r")."\n";
				$logString .= "\n-------------------------------------------\n\n";
				
				$logString2 .= '[Checked out] : '.gmdate("r")."</br>";
				$logString2 .= "</br>-------------------------------------------</br></br>";
				
				$this->patientLogVisit($logString,$UserPatID,$logString2);
				
				$msgStr = $this->resultGet($UserPatID);	
				
				$myArray = array(
					"Checked In" => $checked_In,
					"Reason" => $visitReason,
					"Examined by" => $logString3,
					"Checked Out" => $time,
				);		
				
				if($msgStr == ""){			
					$myAry = array(
					$myArray
					);
					$saveStr = json_encode($myAry);
					$this->resultSave($saveStr,$UserPatID);
				}		
				else{
					$myAry = (json_decode($msgStr, true));
					$myAry[] = $myArray;
					$saveStr = json_encode($myAry);
					$this->resultSave($saveStr,$UserPatID);			
				}		
				
				
			}
			$object->association = json_encode($storeArray);
			$object->checked_In = 0;
			$object->save();
		}
	
	}
	
	private function listDcotorAssoc($docID){
		$object = ORM::factory('doctor',$docID);
		if($object->id != ""){
			$storeArray = json_decode($object->association,true);
			$keys = array_keys($storeArray);
			foreach($keys as $key)
				echo $key." : ".$storeArray[$key]."</br>";
		}
	}
	
	private function listPatientAssoc($patID){
		$object = ORM::factory('patient',$patID);
		if($object->id != ""){
			$storeArray = json_decode($object->association,true);
			$keys = array_keys($storeArray);
			foreach($keys as $key)
				echo $key." : ".$storeArray[$key]."</br>";
		}
	}
	
	private function removeDoctorAssoc($docID,$UserPatID){
		$object = ORM::factory('doctor',$docID);
		if($object->id != ""){
			$storeArray = json_decode($object->association,true);
			unset($storeArray[$UserPatID]);
			$object->association = json_encode($storeArray);
			$object->save();			
		}
	}
	
	private function removePatientAssoc($patID,$UserDocID){
		$object = ORM::factory('patient',$patID);
		if($object->id != ""){
			$storeArray = json_decode($object->association,true);
			unset($storeArray[$UserDocID]);
			$object->association = json_encode($storeArray);
			$object->save();	
		}
	}
} 
