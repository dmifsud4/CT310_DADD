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

		 if( ! Auth::check() ) {
			Response::redirect('index/m3/sign_in');
		} else {

		$data = array();
		$this->template->title = 'Report';
		$this->template->subtitle = 'Report';
		$data['hospital'] = Model_Hospital::find(50071);
		$view = View::forge('m3/report', $data);
		$this->template->content = Presenter::forge('report', 'view', null, $view);
	}

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

	public function action_sign_in() {
		$data = array();
		// Input from post?
		if (Input::post()) {

			// get the username & password
			$username = Input::post('username');
			$password_hash = Input::post('password');

			// Check the credentials
			if( Auth::login($username, $password_hash) ) {
				// redirect if successful
				$data['login_error'] = "Successful!";
				Response::redirect('index/m3/report');
    	    }
        	else {
				// add an error to the page
				$data['login_error'] = 'Wrong username/password combo. Try again';
			}
    	}
		$this->template->title = 'Sign In';
		$this->template->content = View::forge('m3/sign_in', $data);
	}

	public function action_logout() {
		$data = array();
		$this->template->title = 'Logout';

		if( Auth::check() ) {
			Auth::logout();
			$this->template->content = View::forge('m3/index', $data);
		}
	}

	public function action_sign_up() {
	$data = array();
	$this->template->title = 'Register Page';
	$this->template->content = View::forge('m3/sign_up', $data);
	}

	public function post_sign_up() {
	$data = array();
	$username = Input::post('username');
	$pass = Input::post('password');
	$email = Input::post('email');
	$id = Auth::create_user($username,$pass,$email,5);
	Response::redirect_back('');
}

    public function post_loadHos() {
    $option = $_POST["ID"];
    var_dump($option);
    Response::redirect("index/m3/report");
    }

	public function action_ct() {
		// get table name
    \Config::load('ormauth', true);
    $table = \Config::get('ormauth.table_name', 'users');
    // USER TABLES
    // table users
    $dump[$table] = \DBUtil::create_table($table, array(
        'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
        'username' => array('type' => 'varchar', 'constraint' => 50),
        'password' => array('type' => 'varchar', 'constraint' => 255),
        'group_id' => array('type' => 'int', 'constraint' => 11, 'default' => 1),
        'email' => array('type' => 'varchar', 'constraint' => 255),
        'last_login' => array('type' => 'varchar', 'constraint' => 25),
        'previous_login' => array('type' => 'varchar', 'constraint' => 25, 'default' => 0),
        'login_hash' => array('type' => 'varchar', 'constraint' => 255),
        'user_id' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'created_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'updated_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
    ), array('id'));
    // add a unique index on username and email
    \DBUtil::create_index($table, array('username', 'email'), 'username', 'UNIQUE');
    $dump[$table.'_metadata'] = \DBUtil::create_table($table.'_metadata', array(
        'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
        'parent_id' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'key' => array('type' => 'varchar', 'constraint' => 20),
        'value' => array('type' => 'varchar', 'constraint' => 100),
        'user_id' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'created_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'updated_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
    ), array('id'));
    // table users_user_role
    $dump[$table.'_user_roles'] = \DBUtil::create_table($table.'_user_roles', array(
        'user_id' => array('type' => 'int', 'constraint' => 11),
        'role_id' => array('type' => 'int', 'constraint' => 11),
    ), array('user_id', 'role_id'));
    // table users_user_perms
    $dump[$table.'_user_permissions'] = \DBUtil::create_table($table.'_user_permissions', array(
        'user_id' => array('type' => 'int', 'constraint' => 11),
        'perms_id' => array('type' => 'int', 'constraint' => 11),
    ), array('user_id', 'perms_id'));
    //GROUP TABLES
    // table users_group
    $dump[$table.'_groups'] = \DBUtil::create_table($table.'_groups', array(
        'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
        'name' => array('type' => 'varchar', 'constraint' => 255),
        'user_id' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'created_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'updated_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
    ), array('id'));
    // table users_group_role
    $dump[$table.'_group_roles'] = \DBUtil::create_table($table.'_group_roles', array(
        'group_id' => array('type' => 'int', 'constraint' => 11),
        'role_id' => array('type' => 'int', 'constraint' => 11),
    ), array('group_id', 'role_id'));
    // table users_group_perms
    $dump[$table.'_group_permissions'] = \DBUtil::create_table($table.'_group_permissions', array(
        'group_id' => array('type' => 'int', 'constraint' => 11),
        'perms_id' => array('type' => 'int', 'constraint' => 11),
    ), array('group_id', 'perms_id'));
    //ROLE TABLES
    // table users_role
    $dump[$table.'_roles'] = \DBUtil::create_table($table.'_roles', array(
        'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
        'name' => array('type' => 'varchar', 'constraint' => 255),
        'filter' => array('type' => 'enum', 'constraint' => "'', 'A', 'D'", 'default' => ''),
        'user_id' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'created_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'updated_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
    ), array('id'));
    // table users_role_perms
    $dump[$table.'_role_permissions'] = \DBUtil::create_table($table.'_role_permissions', array(
        'role_id' => array('type' => 'int', 'constraint' => 11),
        'perms_id' => array('type' => 'int', 'constraint' => 11),
    ), array('role_id', 'perms_id'));
    //PERM TABLES
    // table users_perms
    $dump[$table.'_permissions'] = \DBUtil::create_table($table.'_permissions', array(
        'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
        'area' => array('type' => 'varchar', 'constraint' => 25),
        'permission' => array('type' => 'varchar', 'constraint' => 25),
        'description' => array('type' => 'varchar', 'constraint' => 255),
        'user_id' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'created_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
        'updated_at' => array('type' => 'int', 'constraint' => 11, 'default' => 0),
    ), array('id'));
    // add a unique index on group and permission
    \DBUtil::create_index($table.'_permissions', array('area', 'permission'), 'permission', 'UNIQUE');
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die();
}

}
