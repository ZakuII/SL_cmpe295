<?php defined('SYSPATH') or die('No direct script access.');

class Controller_question_personQuest extends Controller {

	public function action_index()
	{
	
        $personQ = ORM::factory('personQuest')->find_all(); 

		echo 'helloing';
		echo "</br>";
		
		$columns = Database::instance()->list_columns('PersonalQuestion');
		foreach ($columns as $key => $value){
           echo $key;
           echo "</br>";
    	}
	}
	
	//update new question ANSWER
	 public function action_post() {
		
		
	 	$personA = new Model_personAnswer();
	 	
	 	$parsedID = explode(",",$_POST['pqID']);
	 	$parsedIDSize = sizeof($parsedID);
	 	$parsedCount = explode(",",$_POST['pqCnt']);
	 	$parsedCountSize = sizeof($parsedCount);
	 	$outstr="";
	 
	 	for ($i=0; $i<$parsedIDSize; $i++){
	 		//$outstr = $outstr." $parsedID[$i],";
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
	 					//$storeStr = $storeStr.$_POST[$tempPost];
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
	 				//echo " $tempPost = ";
	 				if(isset($_POST[$tempPost])){
	 					$storeStr = $storeStr.$_POST[$tempPost];
	 				}
	 				else{
	 					$storeStr = "";
	 				}
	 				
	 				if(($j+1)<$ckbx[0]){
	 					$storeStr = $storeStr."|";
	 				}
	 					 				
	 				//echo "$storeStr ";
	 			}
	 		}
	 		$personA->$tempID = $storeStr;
	 		//echo "[$tempID] $storeStr ";
	 	}//for i
	 	$personA->save();
	 	echo "Saved to ID: $personA->id";
		
    }
    
	//update display field
	public function action_postShow(){
		
		$personQ = ORM::factory('personQuest')->find_all(); 
		
		$parsedpqid = explode(",",$_POST['pqID']);
		
		
		for ($i=0; $i<sizeof($parsedpqid); $i++){
			//echo $parsedpqid[$i]." ";
			$index = "edit_".$parsedpqid[$i];
			$toDisplay = $_POST[$index];
			//echo " [".$parsedpqid[$i]."] ";
			$personA = new Model_personQuest($parsedpqid[$i]);
			//echo $personA->question;
			$personA->display = $toDisplay;
			$personA->save();
			//echo " [". $index. "]:". $toDisplay;
			//$personQ[$parsedpqid[$i]]->question
			//$personQ->$parsedpqid[$i]->question
		}
		echo "Saved";
	}
	
	
    public function action_getQuestion(){
    	$personQ = ORM::factory('personQuest')->find_all(); 

    	$columns = Database::instance()->list_columns('PersonalQuestion');
    	
    	$tblSize = sizeof($personQ);
    	$colSize = sizeof($columns);
    	
    	$tblCnt = 0;
    	
    	echo'{ "personalQuestion": [';
    	//echo "</br>";
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
           		//echo ", $tblSize";
           		echo ", ";
    		//echo "</br>";
    	}
    	echo ']}';
    }
	
	public function action_getQuestion2(){
    	$personQ = ORM::factory('personQuest')->find_all(); 

    	$columns = Database::instance()->list_columns('PersonalQuestion');
    	
    	$tblSize = sizeof($personQ);
    	$colSize = sizeof($columns);
    	
    	$tblCnt = 0;
    	
    	echo'{ "Question": [';
    	//echo "</br>";
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
           		//echo ", $tblSize";
           		echo ", ";
    		//echo "</br>";
    	}
    	echo ']}';
    }
	

    public function action_getAnswer(){
    	
    	if(isset($_GET['id'])){
    		
    		$personQ = ORM::factory('personQuest')->find_all(); 

    		$personA = new Model_personAnswer($_GET['id']);
    	
	    	$tblSize = sizeof($personQ);
    	
    		$tblCnt = 0;
    	
    	
    	echo'{ "personalAnswer": [';
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
    		
    		$personQ = ORM::factory('personQuest')->find_all(); 

    		$personA = new Model_personAnswer($_GET['id']);
    	
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
