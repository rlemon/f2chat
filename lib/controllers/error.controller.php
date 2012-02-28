<?php

class Error extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function show($message) {
		$this->view->message = $message;
		$this->view->load('error/generic', false);
	}
}
