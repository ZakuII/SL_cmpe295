<?php defined('SYSPATH') or die('No direct script access.');

class Controller_profile_doctor extends Controller {

	public function action_index()
	{

		echo gmdate("r");  

	}
	
	 public function action_newDoctor() {
		
		if(isset($_POST['id'])){
			
			$object = ORM::factory('doctor')->where('user_id','=',$_POST['id'])->find();
			if($object->id != ""){
				echo "-1";
			}
			else{
				$object->user_id = $_POST['id'];
				$parsedStr = explode( '|', $_POST['doctorType']);
				$object->specialization_id = $parsedStr[1];
				$object->specialization = $parsedStr[0];
				$object->save();
				echo $object->id;
			}		
		}
		else{
			echo "-1";
		}
    }
	
	public function action_showDoctor(){
		//$profile = ORM::factory('profile')->where('type','=','doctor')->find_all();
		$profile = ORM::factory('profile')->where('type','=','doctor')->order_by('lastname', 'asc')->find_all();
		$tblSize = sizeof($profile);
		$tblCnt = 0;
		echo'[';
			foreach ($profile as $pQ){
				echo "{ ";
				$count=0;
				echo'"value":"'.$pQ->id.'", "label":"'.$pQ->firstname.' '.$pQ->lastname.'", "type":"'.$pQ->doctor->specialization.'", "docID":"'.$pQ->doctor->id.'"';
				$tblCnt++;
				echo " }";
				if($tblCnt < $tblSize)
					echo ", ";
			}
		echo ']';			
	}
	
	//Json of doctors associated with a given patient
	public function action_showPatientDoctor(){
	
		if(isset($_GET['patId'])){		
			
			$formatFlag = 0;
			echo'{ "patient": [';
			$object = ORM::factory('patient',$_GET['patId']);
			if($object->id != ""){
				$storeArray = json_decode($object->association,true);
				$keys = array_keys($storeArray);
				foreach($keys as $key){					
					$pQ = ORM::factory('profile',$key);
					if($pQ->id != "" && $pQ->type == "doctor"){
						if($formatFlag==0){
							echo "{ ";
							$formatFlag = 1;
						}
						else{
							echo ", { ";
						}
						echo'"value":"'.$pQ->id.'", "label":"'.$pQ->firstname.' '.$pQ->lastname.'", "type":"'.$pQ->doctor->specialization.'", "docID":"'.$pQ->doctor->id.'"';					
						echo " }";
					}
				}//for each
			}//if id
			echo ']}';
		}//if isset
	}
	
	//includes update count for messages
	public function action_showPatientDoctor2(){
	
		if(isset($_GET['patId'])){		
			
			$formatFlag = 0;
			echo'{ "patient": [';
			$object = ORM::factory('patient',$_GET['patId']);
			if($object->id != ""){
				$storeArray = json_decode($object->association,true);								
				$keys = array_keys($storeArray);
				foreach($keys as $key){					
					$pQ = ORM::factory('profile',$key);
					if($pQ->id != "" && $pQ->type == "doctor"){
						if($formatFlag==0){
							echo "{ ";
							$formatFlag = 1;
						}
						else{
							echo ", { ";
						}
						$msgUP = $this->getPatientAssoc($object,$key);
						echo'"value":"'.$pQ->id.'", "label":"'.$pQ->firstname.' '.$pQ->lastname.'", "type":"'.$pQ->doctor->specialization.'", "up":"'.$msgUP.'", "docID":"'.$pQ->doctor->id.'"';					
						echo " }";
					}
				}//for each
			}//if id
			echo ']}';
		}//if isset
	}
	
	
	//gets a doctor basic information
	public function action_getDoctorInfo(){
	
		if(isset($_GET['DocProId'])){		
			
			$formatFlag = 0;
			//echo'{ [';
			echo'{ "doctor": [';
			$object = ORM::factory('Profile',$_GET['DocProId']);
			if($object->id != "" && $object->type == 'doctor'){
				echo "{ ";
				echo '"fname":"'.$object->firstname.'", ';
				echo '"lname":"'.$object->lastname.'", ';
				echo '"special":"'.$object->doctor->specialization.'"';
				echo " }";
			}//if id
			echo ']}';
			
		}//if isset
	}
	
	//gets a doctor's patients list
	public function action_getDoctorPatList(){
	
		if(isset($_GET['DocProId'])){		
			
			$formatFlag = 0;
			echo'{ "patient": [';
			$object = ORM::factory('Profile',$_GET['DocProId']);
			if($object->id != "" && $object->type == 'doctor'){
				
				$storeArray = json_decode($object->doctor->association,true);
				$keys = array_keys($storeArray);
				
				foreach($keys as $key){					
					$pQ = ORM::factory('profile',$key);
					if($pQ->id != "" && $pQ->type == "patient"){
						if($formatFlag==0){
							echo "{ ";
							$formatFlag = 1;
						}
						else{
							echo ", { ";
						}
						if($storeArray[$key]==1){
							echo '"time":"'.$pQ->visitation->checked_time.'", ';
							echo '"reason":"'.$pQ->visitation->reason.'", ';						
						}
						
						else if($storeArray[$key]==0){
							echo '"time":"Released", ';
							echo '"reason":"None", ';
						}
						
						echo '"fname":"'.$pQ->firstname.'", ';
						echo '"lname":"'.$pQ->lastname.'", ';
						echo '"val":"'.$storeArray[$key].'", ';
						echo '"propid":"'.$pQ->id.'", ';
						echo '"patid":"'.$pQ->patient->id.'"';
						
						echo " }";
					}
				}//for each
			}//if id
			echo ']}';
			
		}//if isset	
	}	
	
	public function action_getPermission() {
	
		if(isset($_GET['DocProId'])){		
			
			//echo'{ [';
			echo'{ "doctor": [';
			$object = ORM::factory('Profile',$_GET['DocProId']);
			if($object->id != "" && $object->type == 'doctor'){
				$permit = ORM::factory('Permission',$object->doctor->specialization_id);
				if($permit->id != ""){					
					echo "{ ";
					echo '"pq":"'.$permit->personQ_id.'", ';
					echo '"mq":"'.$permit->medicalQ_id.'", ';
					echo '"eq":"'.$permit->environmentQ_id.'", ';
					echo '"sq":"'.$permit->socialQ_id.'", ';
					echo '"fq":"'.$permit->familyQ_id.'", ';
					echo '"xq":"'.$permit->miscQ_id.'"';
					echo " }";
				}
			}//if id
			echo ']}';
			
		}//if isset
	
	}
	
	private function getPatientAssoc($object,$docID){				
		$update = $object->msgUpdate;
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
	
} 
