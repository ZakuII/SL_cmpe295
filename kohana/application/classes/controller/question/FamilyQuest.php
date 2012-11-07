<?php defined('SYSPATH') or die('No direct script access.');

//question
class Controller_question_FamilyQuest extends Controller {

	public function action_index(){
	
        $personQ = ORM::factory('FamilyQuestion')->find_all(); 

		echo 'helloing';
		echo "</br>";
		
		$columns = Database::instance()->list_columns('FamilyQuestion');
		foreach ($columns as $key => $value){
           echo $key;
           echo "</br>";
    	}
	}
	
	//update new question ANSWER
	 public function action_post() {
		
	 	$personA = new Model_FamilyAnswer();
	 	
	 	$parsedID = explode(",",$_POST['pqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['pqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 	$outstr="";
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		$tempID = $parsedID[$i];
	 		$tempNum = $parsedCount[$i];
	 		echo "$tempID | $tempNum, ";
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
	 	echo "Saved to ID: $personA->id";
    }
    
	//update display field
	public function action_postShow(){
		
		$personQ = ORM::factory('FamilyQuestion')->find_all(); 
		
		$parsedpqid = explode(",",$_POST['pqID']);
		
		for ($i=0; $i<sizeof($parsedpqid); $i++){
			$index = "edit_".$parsedpqid[$i];
			$toDisplay = $_POST[$index];
			$personA = new Model_FamilyQuestion($parsedpqid[$i]);
			$personA->display = $toDisplay;
			$personA->save();
		}
		echo "Saved";
	}
	
    public function action_getQuestion(){
    	$personQ = ORM::factory('FamilyQuestion')->find_all(); 

    	$columns = Database::instance()->list_columns('FamilyQuestion');
    	
    	$tblSize = sizeof($personQ);
    	$colSize = sizeof($columns);
    	$tblCnt = 0;
    	
    	echo'{ "FamilyQuestion": [';
    	foreach ($personQ as $pQ){
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
	
	public function action_getQuestion2(){
    	$personQ = ORM::factory('FamilyQuestion')->find_all(); 

    	$columns = Database::instance()->list_columns('FamilyQuestion');
    	
    	$tblSize = sizeof($personQ);
    	$colSize = sizeof($columns);
    	$tblCnt = 0;
    	
    	echo'{ "Question": [';
    	foreach ($personQ as $pQ){
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

	/*
    public function action_getAnswer(){
    	
    	if(isset($_GET['id'])){
    		
    		$personQ = ORM::factory('FamilyQuest')->find_all(); 
    		$personA = new Model_FamilyAnswer($_GET['id']);
	    	$tblSize = sizeof($personQ);
    		$tblCnt = 0;
    	
    	echo'{ "FamilyAnswer": [';
    	foreach ($personQ as $pQ){
    		//if($pQ->display==1){
    			echo '{ "question":"';
           		echo $pQ->question;
				echo '", "display":"';
				echo $pQ->display;
           		echo '", "content":"';
           	
           		$id = $pQ->id;
           		$tempField = explode("|",$pQ->fieldContent);
           		$tempContent = explode("|",$personA->$id);
           		
           		for($i=0;$i<sizeof($tempField);$i++){
           			$tempField2 = explode(":",$tempField[$i]);
           			if($tempField2[1]=="")
           				//echo "[No Label] : ";
           				echo " ";
           			else
           				echo "$tempField2[1] : ";
           			
           			echo $tempContent[$i];
           			//echo $personA->$id;
           			
           			if($i+1<sizeof($tempField)){echo "</br>";}
           		}
           	
           		echo'"';
    			$tblCnt++;
    			echo " }";
    			if($tblCnt < $tblSize)
           			echo ",";
    		//}
    	}
    	echo ']}';
    	}//if isset
    }*/
	
	public function action_getAnswer(){
    	
    	if(isset($_GET['id'])){
    		
    		$personQ = ORM::factory('FamilyQuestion')->find_all(); 
    		$personA = new Model_FamilyAnswer($_GET['id']);
	    	$tblSize = sizeof($personQ);
    		$tblCnt = 0;
    	
    	
    	echo'{ "FamilyAnswer": [';
    	//echo "</br>";
    	foreach ($personQ as $pQ){
    		//if($pQ->display==1){
    			echo '{ "question":"';
           		echo $pQ->question;
				echo '", "display":"';
				echo $pQ->display;
           		echo '", "content":"';
           	
           		$id = $pQ->id;
				
				if($personA->$id==NULL){
					echo " ";
				}
				else{
					$tempField = explode("|",$pQ->fieldContent);
					$tempContent = explode("|",$personA->$id);
           		
					for($i=0;$i<sizeof($tempField);$i++){
						$tempField2 = explode(":",$tempField[$i]);
						if($tempField2[1]=="")
							//echo "[No Label] : ";
							echo " ";
						else
							//echo "$tempField2[1] : ";
							echo "<em><strong> $tempField2[1] </strong></em> : ";
           			
						echo $tempContent[$i];
						//echo $personA->$id;
           			
						if($i+1<sizeof($tempField)){echo "</br>";}
					}
				}
				
           		echo'"';
    			$tblCnt++;
    			echo " }";
    			if($tblCnt < $tblSize)
           			echo ",";
    			//echo "</br>";
    		//}
    	}//for each
    	echo ']}';
    	
    	}//if isset
    }
	
	public function action_getAnswer2(){
    	
    	if(isset($_GET['id'])){
    		
    		$personQ = ORM::factory('FamilyQuestion')->find_all(); 
    		$personA = new Model_FamilyAnswer($_GET['id']);
	    	$tblSize = sizeof($personQ);
    		$tblCnt = 0;
    	
    	
    	echo'{ "Answer": [';
    	//echo "</br>";
    	foreach ($personQ as $pQ){
    		//if($pQ->display==1){
    			echo '{ "question":"';
           		echo $pQ->question;
				echo '", "display":"';
				echo $pQ->display;
           		echo '", "content":"';
           	
           		$id = $pQ->id;
				
				if($personA->$id==NULL){
					echo " ";
				}
				else{
					$tempField = explode("|",$pQ->fieldContent);
					$tempContent = explode("|",$personA->$id);
           		
					for($i=0;$i<sizeof($tempField);$i++){
						$tempField2 = explode(":",$tempField[$i]);
						if($tempField2[1]=="")
							//echo "[No Label] : ";
							echo " ";
						else
							//echo "$tempField2[1] : ";
							echo "<em><strong> $tempField2[1] </strong></em> : ";
           			
						echo $tempContent[$i];
						//echo $personA->$id;
           			
						if($i+1<sizeof($tempField)){echo "</br>";}
					}
				}
				
           		echo'"';
    			$tblCnt++;
    			echo " }";
    			if($tblCnt < $tblSize)
           			echo ",";
    			//echo "</br>";
    		//}
    	}//for each
    	echo ']}';
    	
    	}//if isset
    }
	
} // End Welcome
