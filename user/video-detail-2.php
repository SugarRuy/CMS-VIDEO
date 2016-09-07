<?php 
include('../include/sc_fns.php');
@session_start();
//js_alert($_SESSION['userid']);
if(!isset($_GET['videoid']))
{
	go_to_new_page('index.php');
}
$videoid = getGet('videoid');

do_html_title('视频详情');

if(isset($_SESSION['userid']))
{
//添加播放记录
//更新播放次数
	$userid = $_SESSION['userid'];
	insert_playlist_with_userid_videoid($userid, $videoid);
	update_video_playtimes_by_videoid($videoid);
}

if(isset($_SESSION['username'])){
	do_html_login_header($_SESSION['username']);
}else{
	do_html_nologin_header();
}
do_html_content_block_video_detail($videoid);

do_html_footer();


?>