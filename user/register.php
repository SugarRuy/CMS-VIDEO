<?php 
require_once('../include/sc_fns.php');
session_start();

$username = $_POST['r_name'];
$password = sha1($_POST['r_password']);

if(register($username, $password))
{
	//do something to inform the user.
	js_alert('Register Success');
	go_to_new_page('author-login.php');
	
}else{
	//go_to_error_page();
}


?>