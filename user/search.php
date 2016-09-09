<?php 
include('../include/sc_fns.php');
//包含titie
@session_start();
$keyword = isset($_GET['keyword'])? $_GET['keyword']:'';

do_html_title('搜索结果');

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}

do_html_content_block_search($keyword);
do_html_footer();

?>