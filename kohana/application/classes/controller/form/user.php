<?php defined('SYSPATH') or die('No direct script access.');

class Controller_form_user extends Controller {
	
	public function action_index()
	{
		$title = "Toggle";
		$object = ORM::factory('MedicalQuestion')->where('question','=',$title)->find();
		echo $object->id;
		echo $object->fieldContent;
		
		$this->response->body('hello, world!');
	}
	
	 public function action_another() {
        $this->response->body('added another action...');
		$object = ORM::factory('Patient');
    }
	
	public function action_store() {
		
		
		if(isset($_POST['patID'])){
		
			$patient = ORM::factory('Patient')->where('id','=',$_POST['patID'])->find();
		
			$personA = new Model_personAnswer($patient->personQ_id);
			$medicalA = new Model_MedicalAnswer($patient->medicalQ_id);
			$EnvironmentalA = new Model_EnvironmentalAnswer($patient->environmentQ_id);
			$socialA = new Model_SocialAnswer($patient->socialQ_id);
			$familyA = new Model_FamilyAnswer($patient->familyQ_id);
			$miscA = new Model_MiscAnswer($patient->miscQ_id);		
		}		
		
		else{
			$patient = new Model_patient();
			$personA = new Model_personAnswer();
			$medicalA = new Model_MedicalAnswer();
			$EnvironmentalA = new Model_EnvironmentalAnswer();
			$socialA = new Model_SocialAnswer();
			$familyA = new Model_FamilyAnswer();
			$miscA = new Model_MiscAnswer();
			$patient->user_id = $_POST['uid'];
		}
		
		//--------------------Person
	 	
	 	$parsedID = explode(",",$_POST['pqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['pqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		$tempID = $parsedID[$i];
	 		$tempNum = $parsedCount[$i];
	 		//echo "$tempID | $tempNum, ";
	 		$storeStr = "";
	 		
	 		//checkbox detect
	 		$ckbx = explode(":",$tempNum);
	 		if(sizeof($ckbx)>1){
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "pq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$ckbxTemp = $_POST[$tempPost];
	 					for($k=0;$k<sizeof($ckbxTemp);$k++){
	 						$storeStr = $storeStr.$ckbxTemp[$k];
	 						if(($k+1)<sizeof($ckbxTemp)){
	 							$storeStr = $storeStr.",";
	 						}
	 					}
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}

	 			}
	 		}
	 		//not checkbox
	 		else{
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "pq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$storeStr = $storeStr.$_POST[$tempPost];
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}
	 			}
	 		}
	 		$personA->$tempID = $storeStr;
	 	}//for i
	 	$personA->save();
		$patient->personQ_id = $personA->id;
		
		//--------------------Medical		
	 	
	 	$parsedID = explode(",",$_POST['mqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['mqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		$tempID = $parsedID[$i];
	 		$tempNum = $parsedCount[$i];
	 		//echo "$tempID | $tempNum, ";
	 		$storeStr = "";
	 		
	 		//checkbox detect
	 		$ckbx = explode(":",$tempNum);
	 		if(sizeof($ckbx)>1){
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "mq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$ckbxTemp = $_POST[$tempPost];
	 					for($k=0;$k<sizeof($ckbxTemp);$k++){
	 						$storeStr = $storeStr.$ckbxTemp[$k];
	 						if(($k+1)<sizeof($ckbxTemp)){
	 							$storeStr = $storeStr.",";
	 						}
	 					}
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}

	 			}
	 		}
	 		//not checkbox
	 		else{
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "mq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$storeStr = $storeStr.$_POST[$tempPost];
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}
	 			}
	 		}
	 		$medicalA->$tempID = $storeStr;
	 	}//for i
	 	$medicalA->save();
		$patient->medicalQ_id = $medicalA->id;
		
		//--------------------Environmental
			 	
	 	$parsedID = explode(",",$_POST['eqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['eqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		$tempID = $parsedID[$i];
	 		$tempNum = $parsedCount[$i];
	 		//echo "$tempID | $tempNum, ";
	 		$storeStr = "";
	 		
	 		//checkbox detect
	 		$ckbx = explode(":",$tempNum);
	 		if(sizeof($ckbx)>1){
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "eq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$ckbxTemp = $_POST[$tempPost];
	 					for($k=0;$k<sizeof($ckbxTemp);$k++){
	 						$storeStr = $storeStr.$ckbxTemp[$k];
	 						if(($k+1)<sizeof($ckbxTemp)){
	 							$storeStr = $storeStr.",";
	 						}
	 					}
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}

	 			}
	 		}
	 		//not checkbox
	 		else{
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "eq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$storeStr = $storeStr.$_POST[$tempPost];
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}
	 			}
	 		}
	 		$EnvironmentalA->$tempID = $storeStr;
	 	}//for i
	 	$EnvironmentalA->save();
		$patient->environmentQ_id = $EnvironmentalA->id;
		
		//--------------------Social
	 	
	 	$parsedID = explode(",",$_POST['sqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['sqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		$tempID = $parsedID[$i];
	 		$tempNum = $parsedCount[$i];
	 		//echo "$tempID | $tempNum, ";
	 		$storeStr = "";
	 		
	 		//checkbox detect
	 		$ckbx = explode(":",$tempNum);
	 		if(sizeof($ckbx)>1){
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "sq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$ckbxTemp = $_POST[$tempPost];
	 					for($k=0;$k<sizeof($ckbxTemp);$k++){
	 						$storeStr = $storeStr.$ckbxTemp[$k];
	 						if(($k+1)<sizeof($ckbxTemp)){
	 							$storeStr = $storeStr.",";
	 						}
	 					}
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}

	 			}
	 		}
	 		//not checkbox
	 		else{
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "sq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$storeStr = $storeStr.$_POST[$tempPost];
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}
	 			}
	 		}
	 		$socialA->$tempID = $storeStr;
	 	}//for i
	 	$socialA->save();
		$patient->socialQ_id = $socialA->id;		
		
		//--------------------Family
		
	 	$parsedID = explode(",",$_POST['fqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['fqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		$tempID = $parsedID[$i];
	 		$tempNum = $parsedCount[$i];
	 		//echo "$tempID | $tempNum, ";
	 		$storeStr = "";
	 		
	 		//checkbox detect
	 		$ckbx = explode(":",$tempNum);
	 		if(sizeof($ckbx)>1){
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "fq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$ckbxTemp = $_POST[$tempPost];
	 					for($k=0;$k<sizeof($ckbxTemp);$k++){
	 						$storeStr = $storeStr.$ckbxTemp[$k];
	 						if(($k+1)<sizeof($ckbxTemp)){
	 							$storeStr = $storeStr.",";
	 						}
	 					}
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}

	 			}
	 		}
	 		//not checkbox
	 		else{
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "fq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$storeStr = $storeStr.$_POST[$tempPost];
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}
	 			}
	 		}
	 		$familyA->$tempID = $storeStr;
	 	}//for i
	 	$familyA->save();
		$patient->familyQ_id = $familyA->id;		
		
		//--------------------Misc
	 	
	 	$parsedID = explode(",",$_POST['xqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['xqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		$tempID = $parsedID[$i];
	 		$tempNum = $parsedCount[$i];
	 		//echo "$tempID | $tempNum, ";
	 		$storeStr = "";
	 		
	 		//checkbox detect
	 		$ckbx = explode(":",$tempNum);
	 		if(sizeof($ckbx)>1){
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "xq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$ckbxTemp = $_POST[$tempPost];
	 					for($k=0;$k<sizeof($ckbxTemp);$k++){
	 						$storeStr = $storeStr.$ckbxTemp[$k];
	 						if(($k+1)<sizeof($ckbxTemp)){
	 							$storeStr = $storeStr.",";
	 						}
	 					}
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}

	 			}
	 		}
	 		//not checkbox
	 		else{
	 			for($j=0;$j<$ckbx[0];$j++){
	 				$tempPost = "xq_".$tempID."_".$j;
	 				if(isset($_POST[$tempPost])){
	 					$storeStr = $storeStr.$_POST[$tempPost];
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}
	 			}
	 		}
	 		$miscA->$tempID = $storeStr;
	 	}//for i
	 	$miscA->save();
		$patient->miscQ_id = $miscA->id;	
		
		//--------------------
		$patient->save();
		echo "Saved to ID: $patient->id";		
    }
	
	public function action_getPatient() {
	
		if(isset($_GET['id'])){
			//$patient = ORM::factory('Patient')->find_all();
			$patient = ORM::factory('Patient')->where('id','=',$_GET['id'])->find();		
    	
			echo '{ "Patient": [{';
			echo '"personQ":"';
			echo $patient->personQ_id;
			echo '",';
			
			echo '"medicalQ":"';
			echo $patient->medicalQ_id;
			echo '",';
			
			echo '"environmentalQ":"';
			echo $patient->environmentQ_id;
			echo '",';
			
			echo '"socialQ":"';
			echo $patient->socialQ_id;
			echo '",';
			
			echo '"familyQ":"';
			echo $patient->familyQ_id;
			echo '",';
			
			echo '"miscQ":"';
			echo $patient->miscQ_id;
			echo '"';
			
			echo '}]}';
		}
	
	}

}

