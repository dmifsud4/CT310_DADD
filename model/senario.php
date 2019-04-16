<?php

class Model_Senario extends Orm\Model{

	protected static $_table_name = 'senarios';

	protected static $_primary_key = array('id');

	protected static $_has_many = array('comments');

	protected static $_belongs_to = array('user');

	protected static $_properties = array(
		'id',
		'psi90_br', 'psi90_pr',
		'hai1_br', 'hai1_pr',
		'hai2_br', 'hai2_pr',
		'hai3_br', 'hai3_pr',
		'hai4_br', 'hai4_pr',
		'hai5_br', 'hai5_pr',
		'hai6_br', 'hai6_pr',
		'pc01_br', 'pc01_pr',
		'mort30ami_br', 'mort30ami_pr',
		'mort30hf_br', 'mort30hf_pr',
		'mort30pn_br', 'mort30pn_pr',
		'mspb1_br', 'mspb1_pr',
		'cwn_br', 'cwn_pr',
		'cwd_br', 'cwd_pr',
		'rhs_br', 'rhs_pr',
		'ct_br', 'ct_pr',
		'cm_br', 'cm_pr',
		'cqhe_br', 'cqhe_pr',
		'di_br', 'di_pr',
		'or_br', 'or_pr',
		'hospital_id',
		'user_id' // Foreign key

	);

}
