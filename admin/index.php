<?php
include('../include/sc_fns.php');

@session_start();
if(!isset($_SESSION['adminid']))
{
	go_to_new_page('login.html');
}
$adminid = $_SESSION['adminid'];
$adminname = $_SESSION['adminname'];

do_html_head_admin('视频审核');
//do_html_head_admin('视频审核', 'admin');
do_html_body_review_admin($adminname);


?>