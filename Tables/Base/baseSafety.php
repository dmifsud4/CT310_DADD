<?php

class Model_ScenarioSafety extends Orm\Model{
	
	protected static $_properties = array(
		'hospital_ID',
		
		'Thresh_PSI_90','Bench_PSI_90','Base_PSI_90','Perf_PSI_90',
		'Ach_PSI_90','Imp_PSI_90','Msr_PSI_90',
		
		'Thresh_HAI_3','Bench_HAI_3','Base_HAI_3','Perf_HAI_3',
		'Ach_HAI_3','Imp_HAI_3','Msr_HAI_3',
		
		'Thresh_HAI_4','Bench_HAI_4','Base_HAI_4','Perf_HAI_4',
		'Ach_HAI_4','Imp_HAI_4','Msr_HAI_4',
		
		'Thresh_PC_01','Bench_PC_01','Base_PC_01','Perf_PC_01',
		'Ach_PC_01','Imp_PC_01','Msr_PC_01',
		
		
		'Base_CLABSI','Base_CAUTI',
		'Base_MRSA','Base_CDI',
		
		'Perf_CLABSI','Perf_CAUTI',
		'Perf_MRSA','Perf_CDI',
		
		'Bench_CLABSI','Bench_CAUTI',
		'Bench_MRSA','Bench_CDI',
		
		'Thresh_CLABSI','Thresh_CAUTI',
		'Thresh_MRSA','Thresh_CDI',
		
		'Ach_CLABSI','Ach_CAUTI',
		'Ach_MRSA','Ach_CDI',
		
			
		'Imp_CLABSI','Imp_CAUTI',
		'Imp_MRSA','Imp_CDI',
		
		'Msr_CLABSI','Msr_CAUTI',
		'Msr_MRSA','Msr_CDI',
	);
}
