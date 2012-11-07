<?php defined('SYSPATH') or die('No direct script access.');

class Controller_admin_settings extends Controller {

	public function action_index()
	{
		$this->response->body('hello, admin!');
	}
	
	 public function action_another() {
        $this->response->body('added another action...');
    }

} // End Welcome
