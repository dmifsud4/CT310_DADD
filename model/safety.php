<?php

class Model_Safety extends Orm\Model{

	protected static $_table_name = 'safety';

	protected static $_primary_key = array('hospital_id');

	protected static $_belongs_to = array('hospital');

	protected static $_properties = array(
		'hospital_id',
		'psi90_br','psi90_pr','psi90_ap','psi90_ip','psi90_ms',
		'hai1_br','hai1_pr','hai1_ap','hai1_ip','hai1_ms',
		'hai2_br','hai2_pr','hai2_ap','hai2_ip','hai2_ms',
		'Combined_SSI_Msr',
		'hai3_br','hai3_pr','hai3_ap','hai3_ip','hai3_ms',
		'hai4_br','hai4_pr','hai4_ap','hai4_ip','hai4_ms',
		'hai5_br','hai5_pr','hai5_ap','hai5_ip','hai5_ms',
		'hai6_br','hai6_pr','hai6_ap','hai6_ip','hai6_ms',
		'pc01_br','pc01_pr','pc01_ap','pc01_ip','pc01_ms'
	);
}
