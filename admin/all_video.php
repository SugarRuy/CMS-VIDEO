<?php 
include('../include/sc_fns.php');

@session_start();
if(!isset($_SESSION['adminid']))
{
	go_to_new_page('login.html');
}
$adminid = $_SESSION['adminid'];
$adminname = $_SESSION['adminname'];	

do_html_head_admin('所有视频');
do_html_topbar_admin($adminname);
do_html_left_menu_admin();

do_html_all_video_content_admin();

do_html_footer_admin();

?>