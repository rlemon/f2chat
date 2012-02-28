<?php

class Controller {

	public function __construct() {
		$this->view = new View();
	}

	public function load_model( $name ) {
		$path = 'lib/models/' . $name . '.model.php';
		if ( file_exists( $path ) ) {
			require $path;
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}
	}
}
