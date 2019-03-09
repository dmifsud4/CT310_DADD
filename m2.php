<?php

use \Model\Report;

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
	
	public function action_save_data($fileName){
		Report::save_data('report.csv');
	}
	
	public function get_home(){
			
	}
	
	public function post_home() {

		
	
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
