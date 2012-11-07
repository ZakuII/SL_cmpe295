<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Jqm extends Controller {
 
    public function action_index() {
        $view = new View('jqm/index'); // loads the 'article/index.php' file under 'application/view' folder
        $this->response->body($view); // render the  view as response
    }
 
}