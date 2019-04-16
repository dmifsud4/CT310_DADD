<?php

class Model_Comment extends Orm\Model{

	protected static $_table_name = 'comments';

	protected static $_primary_key = array('id');

	protected static $_belongs_to = array('senario');

	protected static $_properties = array(
		'id',
		'body', 'senario_id'
	);

}
