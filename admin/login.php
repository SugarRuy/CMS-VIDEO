<?php
include('../include/sc_fns.php');

@session_start();
if(!isset($_POST['Username']) || !isset($_POST['Password']) )
{
	//js_alert('Illegal Access!');
	go_to_new_page('login.html');
}
else
{
	$adminname = getPost('Username');
	$password = sha1(getPost('Password'));
	if(verify_password_admin($adminname, $password))
	{
		$_SESSION['adminname'] = $adminname;
		$adminid =  getAdminidByAdminname($adminname);
		$_SESSION['adminid'] = $adminid;

		go_to_new_page('review.php');	
	}
	else
	{
		js_alert('Bad Password');
		go_to_new_page('login.html');
	}
}
?>