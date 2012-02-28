<?php

class Auth extends Controller {
	
	public function __construct() {
		parent::__construct();
		Session::init();
	}
	
	public function login() {
		if( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
			$this->model->login_user( $username, md5( $password ) );
		}
		redirect('');
	}
	
	public function logout() {
		$this->model->logout_user( Session::get('user_id') );
	}
	
	public function register() {
		if( isset( $_POST['username'] ) && isset( $_POST['password'] ) && isset( $_POST['email'] ) ) {
			$this->model->register_user( $_POST['username'], md5( $_POST['password'] ), $_POST['email'] );
		}
		print_r($_SESSION);
		//redirect('');
	}
	
	public function delete() {
		
	}
	
}
