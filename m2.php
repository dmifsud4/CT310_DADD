<?php

use \Model\Report;
\Package::load('email');

class Controller_M2 extends Controller_Template {

	public function action_index() {
		$data = array();
		$this->template->title = 'Home';
		$this->template->subtitle = 'Home';
		$this->template->content = View::forge('m2/index', $data);
	}

	public function action_about() {
		$data = array();
		$this->template->title = 'About';
		$this->template->subtitle = 'About';
		$this->template->content = View::forge('m2/about', $data);
	}

	public function action_more_information() {
		$data = array();
		$this->template->title = 'More Information';
		$this->template->subtitle = 'More Information';
		$this->template->content = View::forge('m2/more_information', $data);
	}
	
	/*
        Email Stuff:
	*/
	
    public static function post_sendEmail() {
	
        $fromEmail = Input::post('fromEmail');
        $message = Input::post('message');
	
        $email = Email::forge();
        
        $email->from($fromEmail, 'Default User');
        
//         $email->to('dofe6096@rams.colostate.edu', 'Dorian Ferrer');
        
        $email->to(array('dofe6096@rams.colostate.edu' => 'Dorian Ferrer',
                        'ct310@cs.colostate.edu' => 'CT 310'));
        
        $email->subject('DemoRequest_Team7_DADD');
        
        $email->body($message);
	
        try
        {
            $email->send();
        }
        catch(\EmailValidationFailedException $e)
        {
            // The validation failed
        }
        catch(\EmailSendingFailedException $e)
        {
            // The driver could not send the email
        }
	
        Response::redirect('index.php/m2/more_information.php');

	}
	
	/*
        Main Form Stuff:
	*/
	
    public function post_saveData(){
        $filename = "/s/bach/m/under/dofe6096/local_html/ct310/m2/XMLSaves/".(Input::post('fileName'));
        
        $input = array(
            "VBP" => array(
                array (
                    "ROW" => 'Expected Medicare Reimbursement:',
                    "INPUT" => Input::post('baseR')
                ),
                array (
                    "ROW" => 'VBP Bonus/Penalty:',
                    "INPUT" => '$24,730.51'
                ),
                array (
                    "ROW" => 'Adjusted Medicare Reimbursement:',
                    "INPUT" => '$2,456,101.10'
                )
            ),
            "SAFETY" => array(
                array (
                    "ROW" => 'Baseline:',
                    "PSI" => Input::post('PSI-90B'),
                    "PC" => Input::post('PC-01B'),
                    "CLABSI" => Input::post('CLABSIB'),
                    "CAUTI" => Input::post('CAUTIB'),
                    "HAI3" => Input::post('HAI-3B'),
                    "HAI4" => Input::post('HAI-4B'),
                    "MRSA" => Input::post('MRSAB'),
                    "CDI" => Input::post('CDIB')
                ),
                array (
                    "ROW" => 'Performance:',
                    "PSI" => Input::post('PSI-90P'),
                    "PC" => Input::post('PC-01B'),
                    "CLABSI" => Input::post('CLABSIP'),
                    "CAUTI" => Input::post('CAUTIP'),
                    "HAI3" => Input::post('HAI-3P'),
                    "HAI4" => Input::post('HAI-4P'),
                    "MRSA" => Input::post('MRSAP'),
                    "CDI" => Input::post('CDIP')
                ),
                array (
                    "ROW" => 'Benchmark:',
                    "PSI" => '0.709498',
                    "PC" => '0',
                    "CLABSI" => '0',
                    "CAUTI" => '0',
                    "HAI3" => '0',
                    "HAI4" => '0',
                    "MRSA" => '0',
                    "CDI" => '0.004'
                ),
                array (
                    "ROW" => 'Threshold:',
                    "PSI" => '0.964542',
                    "PC" => '0.020408',
                    "CLABSI" => '0.369',
                    "CAUTI" => '0.906',
                    "HAI3" => '0.824',
                    "HAI4" => '0.71',
                    "MRSA" => '0.767',
                    "CDI" => '0.805'
                ),
                array (
                    "ROW" => 'Achievement Score:',
                    "PSI" => '10/10',
                    "PC" => '8/10',
                    "CLABSI" => '4/10',
                    "CAUTI" => '0/10',
                    "HAI3" => '0/10',
                    "HAI4" => '0/10',
                    "MRSA" => '6/10',
                    "CDI" => '0/10'
                ),
                array (
                    "ROW" => 'Improvement Score:',
                    "PSI" => '9/9',
                    "PC" => '0/9',
                    "CLABSI" => '0/9',
                    "CAUTI" => '1/9',
                    "HAI3" => '0/9',
                    "HAI4" => '6/9',
                    "MRSA" => '6/9',
                    "CDI" => '0/9'
                ),
                array (
                    "ROW" => 'Measure Score:',
                    "PSI" => '10/10',
                    "PC" => '8/10',
                    "CLABSI" => '4/10',
                    "CAUTI" => '1/10',
                    "HAI3" => '0/10',
                    "HAI4" => '6/10',
                    "MRSA" => '6/10',
                    "CDI" => '0/10'
                )
            ),
            "CLINICAL" => array(
                array (
                    "ROW" => 'Baseline:',
                    "AMI" => Input::post('MORT-30-AMIB'),
                    "HF" => Input::post('MORT-30-HFB'),
                    "PN" => Input::post('MORT-30-PNB')
                ),
                array (
                    "ROW" => 'Performance:',
                    "AMI" => Input::post('MORT-30-AMIP'),
                    "HF" => Input::post('MORT-30-HFP'),
                    "PN" => Input::post('MORT-30-PNP')
                ),
                array (
                    "ROW" => 'Benchmark:',
                    "AMI" => '0.873053',
                    "HF" => '0.907656',
                    "PN" => '0.9079'
                ),
                array (
                    "ROW" => 'Threshold:',
                    "AMI" => '0.850916',
                    "HF" => '0.883421',
                    "PN" => '0.88286'
                ),
                array (
                    "ROW" => 'Achievement Score:',
                    "AMI" => 'N/A',
                    "HF" => 'N/A',
                    "PN" => 'N/A'
                ),
                array (
                    "ROW" => 'Improvement Score:',
                    "AMI" => 'N/A',
                    "HF" => 'N/A',
                    "PN" => 'N/A'
                ),
                array (
                    "ROW" => 'Measure Score:',
                    "AMI" => '8/10',
                    "HF" => '0/10',
                    "PN" => '1/10'
                )
            ),
            "EFFIC" => array(
                array (
                    "ROW" => 'Baseline:',
                    "MSPB" => Input::post('MSPB-1B')
                ),
                array (
                    "ROW" => 'Performance:',
                    "MSPB" => Input::post('MSPB-1P')
                ),
                array (
                    "ROW" => 'Benchmark:',
                    "MSPB" => '0.832678'
                ),
                array (
                    "ROW" => 'Threshold:',
                    "MSPB" => '0.986777'
                ),
                array (
                    "ROW" => 'Achievement Score:',
                    "MSPB" => '8/10'
                ),
                array (
                    "ROW" => 'Improvement Score:',
                    "MSPB" => '0/9'
                ),
                array (
                    "ROW" => 'Measure Score:',
                    "MSPB" => '8/10'
                )
            ),
            "HCAHPS" => array(
                array (
                    "ROW" => 'Baseline:',
                    "NURSE" => Input::post('CWNB'),
                    "DOCT" => Input::post('CWDB'),
                    "RESPO" => Input::post('HSRB'),
                    "CARE" => Input::post('CTB'),
                    "MEDIC" => Input::post('MCB'),
                    "CLEAN" => Input::post('CQB'),
                    "DISCH" => Input::post('DIB'),
                    "OVER" => Input::post('OHRB')
                ),
                array (
                    "ROW" => 'Performance:',
                    "NURSE" => Input::post('CWNP'),
                    "DOCT" => Input::post('CWDP'),
                    "RESPO" => Input::post('HSRP'),
                    "CARE" => Input::post('CTP'),
                    "MEDIC" => Input::post('MCP'),
                    "CLEAN" => Input::post('CQP'),
                    "DISCH" => Input::post('DIP'),
                    "OVER" => Input::post('OHRP')
                ),
                array (
                    "ROW" => 'Benchmark:',
                    "NURSE" => '86.68',
                    "DOCT" => '88.51',
                    "RESPO" => '80.35',
                    "CARE" => '62.44',
                    "MEDIC" => '73.66',
                    "CLEAN" => '79',
                    "DISCH" => '91.63',
                    "OVER" => '84.58'
                ),
                array (
                    "ROW" => 'Threshold:',
                    "NURSE" => '0.01470588235',
                    "DOCT" => '3.644981413',
                    "RESPO" => '-1.54518664',
                    "CARE" => '0.8193812557',
                    "MEDIC" => '-1.975218659',
                    "CLEAN" => '-1.353731343',
                    "DISCH" => '1.913518887',
                    "OVER" => '4.049825784'
                ),
                array (
                    "ROW" => 'Achievement Score:',
                    "NURSE" => '0/10',
                    "DOCT" => '4/10',
                    "RESPO" => '0/10',
                    "CARE" => '1/10',
                    "MEDIC" => '0/10',
                    "CLEAN" => '0/10',
                    "DISCH" => '2/10',
                    "OVER" => '4/10'
                ),
                array (
                    "ROW" => 'Improvement Score:',
                    "NURSE" => '0/9',
                    "DOCT" => '1/9',
                    "RESPO" => '0/9',
                    "CARE" => '0/9',
                    "MEDIC" => '0/9',
                    "CLEAN" => '0/9',
                    "DISCH" => '0/9',
                    "OVER" => '0/9'
                ),
                array (
                    "ROW" => 'Measure Score:',
                    "NURSE" => '0/10',
                    "DOCT" => '4/10',
                    "RESPO" => '0/10',
                    "CARE" => '1/10',
                    "MEDIC" => '0/10',
                    "CLEAN" => '0/10',
                    "DISCH" => '2/10',
                    "OVER" => '4/10'
                )
            )
        );
        
        $doc = new DOMDocument();
        $doc->formatOutput = true;
        
        $r = $doc->createElement("REPORT");
        $doc->appendChild($r);
        
        //TODO:
        foreach($input as $key1 => $table) {
            $tab = $doc->createElement($key1);
            
            foreach($table as $category) {
                $cat = $doc->createElement("CATEGORY");
                
                foreach($category as $key2 => $item) {
                    $it = $doc->createElement($key2);
                    $it->appendChild($doc->createTextNode($category[$key2]));
                    $cat->appendChild($it);
                }
                
                $tab->appendChild($cat);
            }
            
            $r->appendChild($tab);
            
        }
        
        $final = $doc->saveXML();
    
		Report::save_data($filename, $final);
		
		Response::redirect('index/m2/');
	}
	
	public function action_list() {
        $data = array();
        
        $data['people'][] = Form::get_people();
        
        $this->template->title = '';
	}
	
	public function get_add() {
	
	}
	
	public function post_add() {
	
	}
	
	/*
	
	Insert form function here:
	
	public function get_add() {
		$data = array();
		$this->template->title = 'Form Page';
		$this->template->subtitle = 'Form Example'; 
		$this->template->content = View::forge('home/add', $data);
		//~ return Response::forge(View::forge('home/add'));
	}
	
	public function post_add() {
		Response::redirect('index/home/list');
	}
	
	*/

}
