<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Test extends Controller {

  public function action_index()
  {
    $this->response->body('I got here!');
  }

}