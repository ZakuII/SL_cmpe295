<?php defined('SYSPATH') or die('No direct script access.');

class Controller_profile_patient extends Controller {

	public function action_index()
	{
		echo gmdate("r");  
	}	

	//gets a patient basic information
	public function action_getPatientInfo(){
	
		if(isset($_GET['ppatID'])){		
			
			$formatFlag = 0;
			echo'{ "patient": [';
			$object = ORM::factory('Profile',$_GET['ppatID']);
			
			if($object->id != "" && $object->type == 'patient'){			
				echo "{ ";
				echo '"fname":"'.$object->firstname.'", ';
				echo '"lname":"'.$object->lastname.'", ';
				
				
				//extract patient information				
				$personalAns = ORM::factory('personAnswer',$object->patient->personQ_id);
				$medicalAns = ORM::factory('MedicalAnswer',$object->patient->medicalQ_id);
				
				/*$columns = Database::instance()->list_columns('personanswer');
					foreach ($columns as $key => $value){
					echo $key;
					echo "</br>";
				}*/
				
				//$key is id of where insurance information is stored
				$key = 19;
				if(isset($personalAns->$key)){
					$insurance = explode("|", $personalAns->$key);
					echo '"insureP":"'.$insurance[0].'", ';
					echo '"insureID":"'.$insurance[1].'", ';
				}
				else{
					echo '"insureP":"", ';
					echo '"insureID":"", ';
				}
				
				//$key is id of where allergy information is stored
				$key = 1;
				if(isset($medicalAns->$key)){
					echo '"Allergy":"'.$medicalAns->$key.'" ,';
				}
				else{
					echo '"Allergy":"", ';
				}
				
				
				
				if($object->patient->checked_In == 1){
					echo '"time":"'.$object->visitation->checked_time.'", ';
					echo '"reason":"'.$object->visitation->reason.'"';	
				}
				
				else if($object->patient->checked_In == 0){
					echo '"time":"<i>Released</i>", ';
					echo '"reason":"<i>Checked Out</i>"';
				}
												
				echo " }";
				
			}//if id
			echo ']}';
			
		}//if isset
	}
	
	public function action_getPatientInfo2(){
	
		if(isset($_GET['ppatID'])){		
			
			$formatFlag = 0;
			echo'{ "patient": [';
			$object = ORM::factory('Profile',$_GET['ppatID']);
			
			if($object->id != "" && $object->type == 'patient'){
				echo "{ ";
				echo '"fname":"'.$object->firstname.'", ';
				echo '"lname":"'.$object->lastname.'", ';
				echo '"patid":"'.$object->patient->id.'", ';
				
				if($object->patient->checked_In == 1){
					echo '"time":"'.$object->visitation->checked_time.'", ';
					echo '"reason":"'.$object->visitation->reason.'"';	
				}
				
				else if($object->patient->checked_In == 0){
					echo '"time":"<i>Released</i>", ';
					echo '"reason":"<i>Checked Out</i>"';
				}
								
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
} 
