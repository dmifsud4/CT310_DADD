<?php

class Model_Hcahp extends Orm\Model{

	protected static $_table_name = 'hcahp';

	protected static $_primary_key = array('hospital_id');

	protected static $_belongs_to = array('hospital');

	protected static $_properties = array(
		'hospital_id',
		'cwn_br','cwn_pr','cwn_ap','cwn_ip','cwn_ds',
		'cwd_br','cwd_pr','cwd_ap','cwd_ip','cwd_ds',
		'rohs_br','rohs_pr','rohs_ap','rohs_ip','rohs_ds',
		'ct_br','ct_pr','ct_ap','ct_ip','ct_ds',
		'cam_br','cam_pr','cam_ap','cam_ip','cam_ds',
		'caqohe_br','caqohe_pr','caqohe_ap','caqohe_ip','caqohe_ds',
		'di_br','di_pr','di_ap','di_ip','di_ds',
		'oroh_br','oroh_pr','oroh_ap','oroh_ip','oroh_ds'
	);

}
