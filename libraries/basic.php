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
	function login(){
		
	}
?>