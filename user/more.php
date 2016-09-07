<?php
include('../include/sc_fns.php');
//包含titie
@session_start();
$videotype = isset($_GET['videotype'])? $_GET['videotype']:1;

do_html_title('more video');

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}

do_html_content_block_more($videotype);
do_html_footer();

?>