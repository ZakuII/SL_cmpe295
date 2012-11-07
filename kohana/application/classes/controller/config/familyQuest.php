<?php defined('SYSPATH') or die('No direct script access.');

//config
class Controller_config_FamilyQuest extends Controller {

	public function action_index(){
	
        $personQ = ORM::factory('FamilyQuestion')->find_all(); 

		echo 'hello';
		echo "</br>";
		
		$columns = Database::instance()->list_columns('FamilyQuestion');
		foreach ($columns as $key => $value){
           echo $key;
           echo "</br>";
    	}
	}
	
	 public function action_post() {
        $personQ = new Model_FamilyQuestion();
        $personQ->values($_POST); 
        $personQ->save(); 
        
        echo "Saved, ID: $personQ->id";
		
		$sid = $personQ->id;
		
		$raw_sql_here = "alter table FamilyAnswer add column `".$sid."` text";
		$query = DB::query(NULL, $raw_sql_here);
		$result = $query->execute();
    }
	
	public function action_edit() {
		
		if(isset($_POST['edit']) && isset($_POST['id'])){
		
			$personQ = new Model_FamilyQuestion($_POST['id']);
			
			if($personQ->arrangement == -1){
			
				if($_POST['edit']=="remove"){
				
					echo "will remove this question: ".$personQ->question;
				
					$sid = $personQ->id;
				
					$raw_sql_here = "alter table FamilyAnswer drop column `".$sid."`";
					$query = DB::query(NULL, $raw_sql_here);
					$result = $query->execute();
					$personQ->delete();

				}
			
				else if($_POST['edit']=="question"){
				
					if(isset($_POST['question'])){
						echo "this question: ".$personQ->question;
						$personQ->question = $_POST['question'];
						$personQ->save();
					
						echo " was saved to".$personQ->question." at ".$personQ->id;
					}
				}
			
				else if($_POST['edit']=="all"){
			
					echo "will edit all this question: ".$personQ->question;
				
					$personQ->question = $_POST['question'];
					$personQ->type = $_POST['type'];
					$personQ->numFields = $_POST['numFields'];
					$personQ->fieldContent = $_POST['fieldContent'];
					$personQ->save();
				
					$sid = $personQ->id;
				
					$raw_sql_here = "alter table FamilyAnswer drop column `".$sid."`";
					$query = DB::query(NULL, $raw_sql_here);
					$result = $query->execute();
			
					$raw_sql_here = "alter table FamilyAnswer add column `".$sid."` text";
					$query = DB::query(NULL, $raw_sql_here);
					$result = $query->execute();
				
					echo " was saved to".$personQ->question." at ".$personQ->id;
				}
			}
			else{
				echo "The Question ".$personQ->question." cannot be editted";
			}
		}
	}
    
    public function action_getQuestion() {
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
} 
