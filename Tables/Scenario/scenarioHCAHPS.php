<?php

class Model_ScenarioHCAHPS extends Orm\Model{
	
	protected static $_properties = array(
		'hospital_ID',
		
		'Floor_Comm_Nurses','Thresh_Comm_Nurses','Bench_Comm_Nurses','Base_Comm_Nurses',
		'Perf_Comm_Nurses','Ach_Comm_Nurses','Imp_Comm_Nurses','Msr_Comm_Nurses',
		
		'Floor_Comm_Doctors','Thresh_Comm_Doctors','Bench_Comm_Doctors','Base_Comm_Doctors',
		'Perf_Comm_Doctors','Ach_Comm_Doctors','Imp_Comm_Doctors','Msr_Comm_Doctors',
		
		'Floor_Responsiveness','Thresh_Responsiveness','Bench_Responsiveness','Base_Responsiveness',
		'Perf_Responsiveness','Ach_Responsiveness','Imp_Responsiveness','Msr_Responsiveness',
		
		'Floor_Transition','Thresh_Transition','Bench_Transition',	'Base_Transition',
		'Perf_Transition',	'Ach_Transition','Imp_Transition','Msr_Transition',
		
		'Floor_Med_Communication','Thresh_Med_Communication','Bench_Med_Communication','Base_Med_Communication',
		'Perf_Med_Communication','Ach_Med_Communication','Imp_Med_Communication','Msr_Med_Communication',
		
		'Floor_Cleanliness','Thresh_Cleanliness','Bench_Cleanliness','Base_Cleanliness',
		'Perf_Cleanliness','Ach_Cleanliness','Imp_Cleanliness','Msr_Cleanliness',
		
		
		'Floor_Discharge','Thresh_Discharge','Bench_Discharge','Base_Discharge',
		'Perf_Discharge','Ach_Discharge','Imp_Discharge','Msr_Discharge',
			
		'Floor_Overall','Thresh_Overall','Bench_Overall',	'Base_Overall',
		'Perf_Overall','Ach_Overall','Imp_Overall','Msr_Overall'
		
	);
	
}
