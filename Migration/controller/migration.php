<?php

use \Model\Form;

class Controller_Migration extends Controller_Template {
	
	public function action_migrations() {
		$data = array();
		$data['migrations'] = Form::get_migrations();
		$this->template->title = 'Migrations';
		$this->template->subtitle = 'Migrations';
		$this->template->content = View::forge('m3/migrations', $data);
	}

    public function post_run_migrations() {
    
        $arr = array();
        
        foreach ($_POST as $key => $elem) {
            array_push($arr, $elem);
        }

        Form::run_migration($arr[1], $arr[2]);
        $_POST = array();
        Response::redirect("index/m3/migrations");
    }
    
    public function post_update_migrations() {
        Form::update_migrations();
        Response::redirect("index/m3/migrations");
    }

}
