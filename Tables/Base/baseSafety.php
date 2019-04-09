<?php

class Model_ScenarioSafety extends Orm\Model{
	
	protected static $_properties = array(
		'hospital_ID',
		
		'Thresh_PSI_90','Bench_PSI_90','Base_PSI_90','Perf_PSI_90',
		'Ach_PSI_90','Imp_PSI_90','Msr_PSI_90',
		
		'Thresh_CLABSI','Bench_CLABSI','Base_CLABSI','Perf_CLABSI',
		'Ach_CLABSI','Imp_CLABSI','Msr_CLABSI',
		
		'Thresh_CAUTI','Bench_CAUTI','Base_CAUTI','Perf_CAUTI',
		'Ach_CAUTI','Imp_CAUTI','Msr_CAUTI',
		
		'Combined_SSI_Msr',
		
		'Thresh_HAI_3','Bench_HAI_3','Base_HAI_3','Perf_HAI_3',
		'Ach_HAI_3','Imp_HAI_3','Msr_HAI_3',
		
		'Thresh_HAI_4','Bench_HAI_4','Base_HAI_4','Perf_HAI_4',
		'Ach_HAI_4','Imp_HAI_4','Msr_HAI_4',
		
		'Thresh_MRSA','Bench_MRSA','Base_MRSA','Perf_MRSA',
		'Ach_MRSA','Imp_MRSA','Msr_MRSA',
		
		'Thresh_CDI','Bench_CDI','Base_CDI','Perf_CDI',
		'Ach_CDI','Imp_CDI','Msr_CDI',
		
		'Thresh_PC_01','Bench_PC_01','Base_PC_01','Perf_PC_01',
		'Ach_PC_01','Imp_PC_01','Msr_PC_01',
		
	);
}
