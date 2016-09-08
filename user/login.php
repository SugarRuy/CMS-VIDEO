<?php 
require_once('../include/sc_fns.php');
@session_start();
if(!isset($_POST['username']) || 
	!isset($_POST['password']))
{
	go_to_not_enough_post_page();
}

$username = $_POST['username'];
$password = sha1($_POST['password']);

if(verify_password($username, $password))
{
	$_SESSION['username'] = $username;
	//获取userid
	$_SESSION['userid'] = getUseridByUsername($username);
	//js_alert($_SESSION['userid']);
	go_to_new_page('author-login.php');
}else{
	js_alert('登录失败');
	go_to_new_page('author-login.php');
}

?>