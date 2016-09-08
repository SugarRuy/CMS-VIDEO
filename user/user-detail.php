<?php 
include('../include/sc_fns.php');
@session_start();
//js_alert($_SESSION['userid']);
if(!isset($_GET['userid']))
{
	go_to_new_page('index.php');
}
$userid = $_GET['userid'];
$user_info_array = select_user_by_userid($userid);

do_html_title('PERSONAL CENTER');

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}


do_html_content_block_user_detail($userid);

do_html_footer();
?>