<?php

class Chat extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
	}
	
	public function index() {
		
		$data = array();
		
		$data['userid'] = Session::get( 'userid' );
		
		$this->view->load( 'chat/index', $data );
	}
	
	public function signin() {
		if( $this->model->register_user($_POST['username']) ) {
			redirect('chat/index');
		} else {
			redirect('chat/index?error=1');
		}
	}

}
