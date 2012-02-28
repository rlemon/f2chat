<?php

class View {

	public function __construct() {
	}

	public function load($view, $data = array()) {
		foreach( $data as $k => $v ) {
			$this->{$k} = $v;
		}
		require( 'lib/views/header.php' );
		require( 'lib/views/' . $view . '.php' );
		require( 'lib/views/footer.php' );
	}
	
	public function json($data) {
		if( is_array( $data ) ) {
			echo json_encode($data);
		} else {
			echo $data;
		}
	}

}
