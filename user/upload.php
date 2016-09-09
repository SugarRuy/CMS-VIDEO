<?php
include('../include/sc_fns.php');
//包含titie
@session_start();

do_html_title('上传视频');

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}
do_html_content_block_upload();

do_html_footer();
?>