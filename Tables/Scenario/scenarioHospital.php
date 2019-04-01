<?php

class Model_ScenarioHospital extends Orm\Model{
	
	protected static $_properties = array('id', 'hospitalName');
	
	protected static $_has_one = array(
		'baseSafety' => array(
			'key_from' => 'id',
			'model_to' => 'Model_ScenarioSafety',
			'key_to' => 'hospital_ID'
		),
		'baseEfficiency' => array(
			'key_from' => 'id',
			'model_to' => 'Model_ScenarioEfficiency',
			'key_to' => 'hospital_ID'
		),
		'baseCare' => array(
			'key_from' => 'id',
			'model_to' => 'Model_ScenarioCare',
			'key_to' => 'hospital_ID'
		),
		'baseHCAHPS' => array(
			'key_from' => 'id',
			'model_to' => 'Model_ScenarioHCAHPS',
			'key_to' => 'hospital_ID'
		)
	);
}
