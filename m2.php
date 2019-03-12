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
	
    public function action_save_data($fileName){
		Report::save_data('report.csv');
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
