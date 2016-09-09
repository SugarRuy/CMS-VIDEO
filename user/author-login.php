<?php 
include('../include/sc_fns.php');
@session_start();
//js_alert($_SESSION['userid']);
if(!isset($_SESSION['username']))
{
	go_to_new_page('index.php');
}
$userid = $_SESSION['userid'];
$user_info_array = select_user_by_userid($userid);

do_html_title('个人中心');

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}

$userid = $_SESSION['userid'];

do_html_content_block_personal($userid);

do_html_footer();
?>