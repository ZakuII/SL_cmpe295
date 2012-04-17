<?php
class Controller_Home extends Controller {

	public function action_index()
	{
		$rendered_view = View::factory('home/index')->render();
		$this->response->body($rendered_view);
	}

} // End Welcome
