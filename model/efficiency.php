<?php

class Model_Efficiency extends Orm\Model{

	protected static $_table_name = 'efficiency';

	protected static $_primary_key = array('hospital_id');

	protected static $_belongs_to = array('hospital');

	protected static $_properties = array(
		'hospital_id',
		'mspb1_br','mspb1_pr','mspb1_ap','mspb1_ip','mspb1_ms'
	);

}
