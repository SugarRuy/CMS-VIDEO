<?php

include('../include/sc_fns.php');
@session_start();
//使用ajax查询

if(!isset($_SESSION['userid']) )
{
	echo ('请先登录');
	exit();
}
if(!isset($_POST['comment']))
{
	echo ('请填写评论内容');
	exit();
}
if(!isset($_POST['videoid']))
{
	echo ('请勿非法操作');
	exit();
}
$userid = $_SESSION['userid'];
$videoid = getPost('videoid');
$comment = getPost('comment');

if(!verify_silenced($userid))
{
	echo '您已被禁言,解除时间:'.getReleasetimeByUserid($userid);
	exit();
}
//$myfile = fopen("testfile.txt", "w");
//fwrite($myfile, $userid.'\n'.$videoid.'\n'.$comment);
//js_alert($userid.$videoid.$comment);
if(insert_comment_with_userid_videoid($comment, $userid, $videoid))
	echo '评论成功';
else
	echo '数据库原因评论失败';
//输出查库数据
?>