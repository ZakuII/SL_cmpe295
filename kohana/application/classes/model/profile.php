<?php defined('SYSPATH') or die('No direct script access.');

class Model_Profile extends ORM {

  protected $_table_name = 'Profile';
  protected $_has_one = array(
	'patient' => array('model' => 'patient', 'foreign_key' => 'user_id'),
	'doctor' => array('model' => 'doctor', 'foreign_key' => 'user_id'),	
	'visitation' => array('model' => 'visitation', 'foreign_key' => 'user_id'),
  );	
	
}