<?php

class Model_Care extends Orm\Model{

	protected static $_table_name = 'care';

	protected static $_primary_key = array('hospital_id');

	protected static $_belongs_to = array('hospital');

	protected static $_properties = array(
		'hospital_id',
		'mort30ami_br','mort30ami_pr','mort30ami_ap','mort30ami_ip','mort30ami_ms',
		'mort30hf_br','mort30hf_pr','mort30hf_ap','mort30hf_ip','mort30hf_ms',
		'mort30pn_br','mort30pn_pr','mort30pn_ap','mort30pn_ip','mort30pn_ms'
	);

}
