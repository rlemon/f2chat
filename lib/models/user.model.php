<?php

class User_Model extends Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function username_exists($username) {
		
		$sth = $this->db->prepare("SELECT * FROM chat_users WHERE username = :username");
		$sth->execute(array(
			':username' => $username
		));
		
		if( $sth->rowCount() > 0 ) {
			return true;
		}
		return false;
	}

}
