<?php

class Auth_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function username_exists($username) {
		$sth = $this->db->prepare("SELECT * FROM users WHERE username = :username");
		$sth->execute(array(
			':username' => $username
		));
		return count( $sth->fetchAll() ) > 0;
	}
	
	public function login_user($username, $password) {
		$sth = $this->db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$sth->execute(array(
			':username' => $username,
			':password' => $password
		));
		$res = $sth->fetchAll();
		if( count($res) > 0 ) {
			foreach( $res as $k => $v ) {
				Session::set('user_' . $k, $v);
			}
			return true;
		}
		return false;
	}
	
	public function logout_user($id) {
		$sth = $this->db->prepate("UPDATE users SET last_visible = :last_visible WHERE id = :id");
		$res = $sth->execute(array(
			':last_visible' => date(),
			':id' => $id
		));
		if( $res ) {
			Session::destroy();
			return true;
		}
		return false;
	}
	
	public function register_user($username, $password, $email) {
		$sth = $this->db->prepare("INSERT INTO users (username, password, last_visible, registration_date, email) VALUES ( :username, :password, :last_visible, :registration_date, :email)");
		$res = $sth->execute(array(
			':username' => $username,
			':password' => $password,
			':last_visible' => date(),
			':registration_date' => date(),
			':email' => $email
		));
		if( $res ) {
			$this->login_user($username, $password);
		}
		return $res;
	}
	
	public function delete_account($id) {
		
	}
	
}
