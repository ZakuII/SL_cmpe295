<?php defined('SYSPATH') or die('No direct script access.');

class Controller_config_permission extends Controller {

	public function action_index()
	{
		$this->response->body('hello, permission!');
	}
	
	public function action_save() {
        
		$object = ORM::factory('Permission')->where('user_type','=',$_POST['newPermName'])->find();
		if($object->id != ""){
				echo "-1";
		}
		else{
			$object->user_type = $_POST['newPermName'];
			$object->personQ_id = $_POST['toggle_pq'];
			$object->medicalQ_id = $_POST['toggle_mq'];
			$object->environmentQ_id = $_POST['toggle_eq'];
			$object->socialQ_id = $_POST['toggle_sq'];
			$object->familyQ_id = $_POST['toggle_fq'];
			$object->miscQ_id = $_POST['toggle_xq'];
			$object->save();
			echo $object->id;
		}
    }
	
	public function action_saveEdit() {
				
		if(isset($_POST['id'])){
			$object = ORM::factory('Permission',$_POST['id']);
			if($object->id == ""){
				echo "-1";
			}
			else{
				$object->user_type = $_POST['newPermName'];
				$object->personQ_id = $_POST['toggle_pq'];
				$object->medicalQ_id = $_POST['toggle_mq'];
				$object->environmentQ_id = $_POST['toggle_eq'];
				$object->socialQ_id = $_POST['toggle_sq'];
				$object->familyQ_id = $_POST['toggle_fq'];
				$object->miscQ_id = $_POST['toggle_xq'];
				$object->save();
				echo $object->id;
			}
		}
		else{
			echo "-1";
		}
    }
	
	public function action_remove() {
		
		if(isset($_POST['id'])){
			$object = ORM::factory('Permission',$_POST['id']);
			if($object->id == ""){
				echo "-1";
			}
			else{
				$object->delete();
				echo "0";
			}
		}
		else{
			echo "-1";
		}	
	}
	
	public function action_getPermission() {
		
		$permissions = ORM::factory('permission')->find_all(); 

    	$columns = Database::instance()->list_columns('Permission');
    	
    	$tblSize = sizeof($permissions);
    	$colSize = sizeof($columns);
    	$tblCnt = 0;
    	
    	echo'{ "permission": [';
    	foreach ($permissions as $pQ){
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
	
	public function action_getPermissionShow() {
		
		$permissions = ORM::factory('permission')->find_all(); 

    	//$columns = Database::instance()->list_columns('Permission');
    	
    	$tblSize = sizeof($permissions);
    	//$colSize = sizeof($columns);
    	$tblCnt = 0;
    	
    	echo'{ "permission": [';
    	foreach ($permissions as $pQ){
    		echo "{ ";
    		$count=0;
			echo'"id":"'.$pQ->id.'", "type":"'.$pQ->user_type.'"';
    		$tblCnt++;
    		echo " }";
    		if($tblCnt < $tblSize)
           		echo ", ";
    	}
    	echo ']}';				
	}
} 

