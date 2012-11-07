<?php defined('SYSPATH') or die('No direct script access.');

class Controller_profile_login extends Controller {

	public function action_index(){

		if(isset($_POST['logPW']) && isset($_POST['logUN'])){
			$pw = $_POST['logPW'];
			$un = $_POST['logUN'];
			if($pw != "" && $un != ""){
				$object = ORM::factory('profile')->where('username','=',$un)->find();
				if($object->id != ""){
					$pwH = hash('sha256', $pw);
					if($object->password == $pwH){
						$uType = $object->type;
						$uId = $object->id;
						if($uType == 'admin'){
							echo $uId;
							echo ",config/front.html";
						}
						else if($uType == 'doctor'){
							echo $uId;
							echo ",users/doctor.html";
						}
						else if($uType == 'nurse'){
							echo $uId;
							echo ",users/nurse.html";
						}
						else if($uType == 'patient'){
							echo $uId;
							echo ",users/patient.html";
						}
					}
					else{
						echo "-2";
					}
				}
				else{
					echo "-2";
				}				
			}	
			else{
				echo "-1";
			}
		}
		
		else{
			echo "-1";
		}
		
		

	}
} 
