<?php 
	function print_a( $array ){
		echo "<pre>";
		print_r( $array );
		echo "</pre>";
	}

	function config( $data = false ){
		global $GUID;
		$config = $GUID -> get( 'config', 'id = 1' );

		if ( $data ) return $config[ $data ];
		else return $config;
	}
	function redirect($url, $backURL = false){
		if ( $backURL ) {
			$url = $url."?backurl=".base64_encode($backURL);
		}
		header("Location: " . $url);
	}
	function currentURL($params = true){
		$url = ( ( !empty($_SERVER['HTTPS'] ) ) ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		if ( $params === false ) $url = explode('?', $url)[0];
		
		return $url;
	}
?>