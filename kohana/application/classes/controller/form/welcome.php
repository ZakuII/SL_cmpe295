<?php defined('SYSPATH') or die('No direct script access.');

class Controller_form_Welcome extends Controller {

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
	
	public function action_another() {
        $this->response->body('added another action...');
		$object = ORM::factory('Patient');
    }
	

} // End Welcome
