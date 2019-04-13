<?php

\Package::load('email');
class Controller_M3 extends Controller_Template {

	public function action_index() {
		$data = array();
		$this->template->title = 'Home';
		$this->template->subtitle = 'Home';
		$this->template->content = View::forge('m3/index', $data);
	}

	public function action_report()
	 {
		//$data = array();
		//$this->template->title = 'Report';
		//$this->template->subtitle = 'Report';
		$view = View::forge('m3/report');
		//return
		$this->template->content = Presenter::forge('report', 'view', null, $view);
		//View::forge('m3/report/report', $data);
	 }

	 public function action_about() {
		$data = array();
		$this->template->title = 'About';
		$this->template->subtitle = 'About';
		$this->template->content = View::forge('m3/about', $data);
	}

	public function action_more_information() {
		$data = array();
		$this->template->title = 'More Information';
		$this->template->subtitle = 'More Information';
		$this->template->content = View::forge('m3/more_information', $data);
	}

}
