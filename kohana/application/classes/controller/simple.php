<?php defined('SYSPATH') or die('No direct script access.');

class Controller_simple extends Controller {

	public function action_index()
	{
		$this->response->body('hello SIMPLE!');
		$simples = ORM::factory('simple3')->find_all();
		//echo $articles->question;
		//$simple = ORM::factory('simple2')->with('simple3')->where('user_id','=','5')->find_all();
		//print_r ($simple);
		foreach($simples as $simple){
			//echo $student->firstname.": ".$student->project->title;
			echo $simple->id." : ".$simple->user_id." : ".$simple->question."</br>";
			echo $simple->simple2;
		}
		
	}
	
	 public function action_another() {
        $this->response->body('added another action...');
    }

} // End Welcome
