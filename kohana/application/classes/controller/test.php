<?php defined('SYSPATH') or die('No direct script access.');

class Controller_test extends Controller {

	public function action_index()
	{
		//$this->response->body('testing');
		$articles = ORM::factory('article2')->find_all(); // loads all article object from table		
        
		/*$articles = ORM::factory('article2',1);
		echo $articles->id;
		echo $articles->name;
		echo $articles->content;
		echo "</br>";
		*/
		echo 'hello';
		echo "</br>";
		
		/*foreach ($articles as $article){
		echo $article->id;
		echo $article->name;
		echo $article->content;
		echo "</br>";
		//print_r($article);
		}*/
		
	//$result = ORM::factory('my_table')->find_all();
    $columns = Database::instance()->list_columns('users');
    /*foreach ($articles as $row){
      foreach ($columns as $key => $value){
        echo $row->{$key};
        echo $key;
        echo "</br>";
      }
    }*/
    
    foreach ($columns as $key => $value){
        echo $key;
        echo "</br>";
    }
		
		//$view = new View('article2/index');
        //$view->set("articles", $articles); // set "articles" object to view
        //$this->response->body($view);
	}
	
	 public function action_another() {
        //$this->response->body('added another action...');
		$patient = ORM::factory('profile',7);
		echo $patient->id." / ".$patient->patient->id." / reason : ".$patient->visitation->reason;
    }
	
	

} // End Welcome
