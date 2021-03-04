<?php 
require_once "../connect.php";
require_once "../guid.php";
require_once "../basic.php";


class auth{
	public $table = 'users';
	public function login($login, $password){
		global $GUID;
		if ($login == '' || $password == '') return false;
		// $check = $GUID->get($table);

		echo $table;
	}
}

$auth = new auth;
$auth->login('login', 'password');
?>