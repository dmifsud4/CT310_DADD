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

		$data = array();
		$this->template->title = 'Report';
		$this->template->subtitle = 'Report';
		$data['hospital'] = Model_Hospital::find(50071);
		$view = View::forge('m3/report', $data);
		$this->template->content = Presenter::forge('report', 'view', null, $view);

	 }

	 public function post_report()
		{
			$pn = Input::post('pn');
		 $data = array();
		 $this->template->title = 'Report';
		 $this->template->subtitle = 'Report';
		 $data['hospital'] = Model_Hospital::find($pn);
		 $view = View::forge('m3/report', $data);
		 $this->template->content = Presenter::forge('report', 'view', null, $view);

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
