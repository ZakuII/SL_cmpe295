<?php
class Model_Member extends ORM
{
	protected $_table_name = 'user';   
	function get_name()
	{
		return $this->name;
	}
}
