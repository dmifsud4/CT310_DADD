<?php

class Model_ScenarioCare extends Orm\Model{
	
	protected static $_properties = array(
		'hospital_ID',
		'Base_MORT_30_AMI','Base_MORT_30_HF','Base_MORT_30_PN',
		'Perf_MORT_30_AMI','Perf_MORT_30_HF','Perf_MORT_30_PN',
		'Bench_MORT_30_AMI','Bench_MORT_30_HF','Bench_MORT_30_PN',
		'Thresh_MORT_30_AMI','Thresh_MORT_30_HF','Thresh_MORT_30_PN',
		'Ach_MORT_30_AMI','Ach_MORT_30_HF','Ach_MORT_30_PN',
		'Imp_MORT_30_AMI','Imp_MORT_30_HF','Imp_MORT_30_PN',
		'Msr_MORT_30_AMI','Msr_MORT_30_HF','Msr_MORT_30_PN'
	);
	
}
