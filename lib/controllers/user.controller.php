<?php

class User extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
	}
	
	public function check_userid() {
		
		if( isAjaX() ) {
			$data = array();
			$username = cleanInput( $_POST['userid'] );
			
			if( checkVar( $username ) && !$this->model->username_exists( $username ) ) {
    		  $data['result'] = "<div class='message success'>Great! You found a username not in use</div>";
    		  $data['inuse'] = TRUE;
			} else {
    		  $data['result'] = "<div class='message warning'>That username is already in use. (Usernames take 2 minutes without use to expire)</div>";
    		  $data['inuse'] = FALSE;
			}
			
			$this->view->json( $data );
			
		} 
		
	}


}
