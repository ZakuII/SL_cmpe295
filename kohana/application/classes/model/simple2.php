<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_simple2 extends ORM {

  protected $_table_name = 'simple2';   
  
  protected $_belongs_to = array(
  'simple3' => array ('foreign_key' => 'user_id' )
  );
  
}