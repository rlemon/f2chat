<?php

class Room extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
	}
	
	public function index() {
		$this->room_list();
	}
	
	public function room_list() {
		
		$data = array();
		
		$data['userid'] = Session::get( 'userid' );
		
		$this->view->load( 'chat/index', $data );
	}
	

}
