<?php defined('SYSPATH') or die('No direct script access.');

class Controller_question_MiscQuest2 extends Controller {

	public function action_index()
	{
	
        $personQ = ORM::factory('MiscQuestion')->find_all(); 

		echo 'helloing';
		echo "</br>";
		
		$columns = Database::instance()->list_columns('MiscQuestion');
		foreach ($columns as $key => $value){
           echo $key;
           echo "</br>";
    	}
	}

	
	//update new ANSWER to question
	 public function action_post() {
		
		echo "checking :".$_POST['pid'];
		if(isset($_POST['pid'])){
	 	$personA = new Model_MiscAnswer($_POST['pid']);
	 	
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
		}//isset
    }
   

    public function action_getEdit(){
    	$personQ = ORM::factory('MiscQuestion')->find_all(); 
		$columns = Database::instance()->list_columns('MiscQuestion');    	
    	$tblSize = sizeof($personQ);
    	$colSize = sizeof($columns);    	
    	$tblCnt = 0;
    	
		if(isset($_GET['id'])){
			$personA = new Model_MiscAnswer($_GET['id']);
		}
		
    	//echo'{ "MiscQuestion": [';
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
			if(isset($_GET['id'])){
				echo ', "answer":"';
           		$tempID = $pQ->id;
				$content = $personA->$tempID;
				if($content==NULL){
					echo "";
				}
				else{
					echo $content;
				}
           		echo '"';
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
	
} // End Welcome
