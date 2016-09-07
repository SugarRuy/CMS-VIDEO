<?php
include('../include/sc_fns.php');

@session_start();

define("PAGENAME", "author-edit.php");
if(!isset($_SESSION['userid']))
{
	js_alert('未登录');
	go_to_new_page('index.php');
}
if( !isset($_POST['new']) || 
	!isset($_POST['old']) || 
	!isset($_POST['renew']) || 
	$_POST['new']=='' || 
	$_POST['old']=='' || 
	$_POST['renew']=='')
{
	js_alert('表单未填写完全');
	go_to_new_page(PAGENAME);
}
$userid = $_SESSION['userid'];
$new = sha1(getPost('new'));
$old = sha1(getPost('old'));
$renew = sha1(getPost('renew'));
$username = getUsernameByUserid($userid);

if($new != $renew)
{
	js_alert('两次密码不一致');
	go_to_new_page(PAGENAME);
}
if(!verify_password($username, $old))
{
	js_alert('密码错误');
	go_to_new_page(PAGENAME);	
}
else
{
	if(update_user_password_by_userid_with_newpassword($userid, $new))
		js_alert("修改成功,新密码为:".getPost('new'));
	else 
		js_alert("数据库原因失败");
}


go_to_new_page(PAGENAME);


?>