<?php

class Chat_Model extends Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function register_user($username) {

		$sth = $this->db->prepare("INSERT INTO `chat_users` (`username`, `status`, `time_mod`) VALUES ( :username, :status, :time )");
		$ret = $sth->execute(array(
			':username' => $username,
			':status' => 1,
			':time' => time()
		));
		if( $ret ) {
			Session::set( 'userid', $username );
		}
		
		return $ret;
	}
	
	public function get_all_rooms() {
		
		$sth = $this->db->prepare("SELECT * FROM chat_rooms");
		$sth->execute();
		$res = $sth->fetchAll();
		
		return $res;
	}

}
