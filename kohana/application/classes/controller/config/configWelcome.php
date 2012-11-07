<?php defined('SYSPATH') or die('No direct script access.');

class Controller_config_configWelcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, config!');
	}
	
	 public function action_another() {
        $this->response->body('added another action...');
    }

} // End Welcome
