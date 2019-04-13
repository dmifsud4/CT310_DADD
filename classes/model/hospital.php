<?php

class Model_Hospital extends Orm\Model{

	protected static $_properties = array(
		'id',
		'name',
		'addr',
		'city',
		'state',
		'zip',
		'county'
		);

	protected static $_has_one = array('safety','efficiency','care','hcahp');



		//'calc' => array(
			//'key_from' => 'id',
			//'model_to' => 'Model_Calcs',
			//'key_to' => 'pn'
		//)


}
