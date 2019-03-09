<?php

namespace Model;

class Report extends \Model {

	public static function get_data($filename) {
		$csv = array_map('str_getcsv', file($filename));
		return $csv;
	}

	public static function get_Report_headers(){
		return  'expected_reimbursement, VBP, Adjusted_Reimbursement, '.
				//Safey
				'B_PSI90, B_PC-01, B_CLASBSI, B_CAUTI, B_SSI, B_MRSA, B_CDI '.
				'T_PSI90, T_PC-01, T_CLASBSI, T_CAUTI, T_SSI, T_MRSA, T_CDI '.
				'S_PSI90, S_PC-01, S_CLASBSI, S_CAUTI, S_SSI, S_MRSA, S_CDI '.
				//Care
				'B_MORT_AMI, B_MORT_HF, B_MORT_PN '.
				'T_MORT_AMI, T_MORT_HF, T_MORT_PN '.
				'S_MORT_AMI, S_MORT_HF, S_MORT_PN '.
				//HCAHPS
				'B_Nurse, B_Doctors, B_Staff, B_Care, B_Medicine, B_Cleanliness, B_Discharge, B_Overall '.
				'T_Nurse, T_Doctors, T_Staff, T_Care, T_Medicine, T_Cleanliness, T_Discharge, T_Overall '.
				'S_Nurse, S_Doctors, S_Staff, S_Care, S_Medicine, S_Cleanliness, S_Discharge, S_Overall '.
				//Effiency
				'B_MSPB1, T_MSPB1, S_MSPB1'
				."/n";
	}

	public static function get_hardCoded_Record(){
		return
			'2431370.59, 24730.51, 2456101.10,'. //reimbursement
			//safety
			'0.709498, 0,0,0,0,0,'.	//benchmark
			'0.964542,0.020408,0.369,0.906,0.824,0.767,0.805, '. //Threshold
			'10/10,8/10,4/10,1/10,1/10,6/10,0/10, '.	//score
			//Care
			'0.873053,0.907656,0.9079, '. //benchmark
			'0.850916,0.883421, 0.88286, '. //threshold
			'8/10,0/10,1/10, '.
			//HCAHPS
			'86.68,88.51,80.35,62.44,73.66,79,91.63,84.58, '. //benchmark
			'0.01470588235,3.644981413,-1.54518664,0.8193812557,-1.975218659,-1.353731343,1.913518887,4.049825784, '. //threshold
			'0/10,4/10,0/10,1/10,0/10,0/10,2/10,4/10,' .
			//Effiency
			'0.832678, '. //benchmark
			'0.986777, '. //threshold
			'8/10'.
			"\n"; //score
	}

	public static function save_data($fileName){
		$headers = Report::get_Report_headers();
		$data = Report::get_hardCoded_Record();




		$csv_handler = fopen(DOCROOT .'default.csv', 'w+');
		fwrite($csv_handler, $headers . $data);
		fclose($csv_handler);
	}

	public static function load_data($fileName){


	}

	// Get a data set from CSV file

	public static function get_set($name) {
		$query_results = array_map('str_getcsv', file(DOCROOT . 'data.csv'));
		$person = array();

		foreach($query_results as $line) {
			if ($name == $line[0]) {
				array_push($person, $line[1]);


		}
}
		return $person;


}

public static function calculate($name) {
	return $name . "yoyo";
}




}
