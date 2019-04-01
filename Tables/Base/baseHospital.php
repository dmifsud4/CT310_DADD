<?php

class Model_BaseHospital extends Orm\Model{
	
	protected static $_properties = array('id', 'hospitalName');
	
	protected static $_has_one = array(
		'baseSafety' => array(
			'key_from' => 'id',
			'model_to' => 'Model_BaseSafety',
			'key_to' => 'hospital_ID'
		),
		'baseEfficiency' => array(
			'key_from' => 'id',
			'model_to' => 'Model_BaseEfficiency',
			'key_to' => 'hospital_ID'
		),
		'baseCare' => array(
			'key_from' => 'id',
			'model_to' => 'Model_BaseCare',
			'key_to' => 'hospital_ID'
		),
		'baseHCAHPS' => array(
			'key_from' => 'id',
			'model_to' => 'Model_BaseHCAHPS',
			'key_to' => 'hospital_ID'
		)
	);
	
}
