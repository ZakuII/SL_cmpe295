<?php
class Controller_Test extends Controller {

	public function action_index()
	{
		$rendered_view = View::factory('test/index')->render();
		$this->response->body($rendered_view);
	}

} // End Welcome