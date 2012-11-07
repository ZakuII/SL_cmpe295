<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_simple3 extends ORM {
 
	protected $_table_name = 'simple3';  
	protected $_has_one = array(
	'simple2' => array ('model' => 'simple2', 'foreign_key' => 'user_id' )
	);
}