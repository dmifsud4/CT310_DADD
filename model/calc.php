<?php

class Model_Calc extends Orm\Model{

	protected static $_table_name = 'calc';

	protected static $_primary_key = array('hospital_id');

	protected static $_belongs_to = array('hospital');

	protected static $_properties = array(
		'hospital_id',
		'bmr', 'vbp', 'amr'
	);

}
