<?php

class Chat extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
	}
	
	public function index() {
		
		$data = array();
		
		$this->view->load( 'chat/index', $data );
	}
	

}
