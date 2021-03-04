<?php 
	class connect{
		public function mysqliD( $host = 'localhost', $username = 'root', $password  = 'root', $database ){
			global $errors;
			$connect = new mysqli( $host, $username, $password, $database );

			if ( $connect ) return $connect;
			else $errors->error(100);
		}
	}
	
	$connectObj = new connect;
	$connect = $connectObj->mysqliD('localhost', 'root', 'root', 'test-db');
 ?>