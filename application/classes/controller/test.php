<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$user = ORM::factory('user',1);
		$rendered_view = View::factory('test/index')
			->bind('name' , $user_name);
		
		$user_name = $user->get_name();
		$this->response->body($rendered_view);
	}

} // End Welcome
