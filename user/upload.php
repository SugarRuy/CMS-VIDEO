<?php
include('../include/sc_fns.php');
//包含titie
@session_start();
if(!isset($_SESSION['username'])) // 未登录
{
	go_to_new_page('index.php');
	eixt();
}
do_html_title('上传视频');

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}
do_html_content_block_upload();

do_html_footer();
?>