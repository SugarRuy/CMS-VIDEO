<?php 
include('../include/sc_fns.php');
@session_start();
//js_alert($_SESSION['userid']);
if(!isset($_SESSION['username']))
{
	go_to_new_page('index.php');
}

do_html_title('PERSONAL CENTER');

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}
do_html_content_block_personal_edit();

do_html_footer();
?>