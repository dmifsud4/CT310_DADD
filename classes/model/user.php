<?php

class Model_User extends Orm\Model{

	protected static $_table_name = 'users';

	protected static $_primary_key = array('id');

	protected static $_has_many = array('senarios');

	protected static $_properties = array(
		'id',
		'username','password'
	);

}
