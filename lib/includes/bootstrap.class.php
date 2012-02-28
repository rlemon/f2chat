<?php

 class Bootstrap {
	public function __construct() {
		$url = isset( $_GET[ 'url' ] ) ? explode( '/', rtrim( $_GET[ 'url' ], '/' ) ) : null;
		if ( empty( $url[ 0 ] ) ) {
			$url[ 0 ] = 'chat';
		}
		$file = 'lib/controllers/' . $url[ 0 ] . '.controller.php';
		if ( !file_exists( $file ) ) {
			$this->error('404');
		}
		require $file;
		if ( !class_exists( $url[ 0 ] ) ) {
			$this->error('404');
		}
		$controller = new $url[ 0 ];
		$controller->load_model( $url[ 0 ] );
		if ( isset( $url[ 1 ] ) ) {
			if ( !method_exists( $controller, $url[ 1 ] ) ) {
				$this->error('404');
			}
			$params = array_slice( $url, 2 );
			call_user_func_array( array(
				 $controller,
				$url[ 1 ] 
			), $params );
		} else {
			$controller->index();
		}
	}
	public function error($message) {
		require( 'lib/controllers/error.controller.php' );
		$error = new Error();
		$error->show($message);
		exit;
	}
 }
