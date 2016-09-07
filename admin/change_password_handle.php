<?php
include('../include/sc_fns.php');

@session_start();
if(!isset($_SESSION['adminid']))
{
	go_to_new_page('login.html');
}
if( !isset($_POST['new']) || 
	!isset($_POST['old']) || 
	!isset($_POST['renew']) || 
	$_POST['new']=='' || 
	$_POST['old']=='' || 
	$_POST['renew']=='')
{
	js_alert('表单未填写完全');
	go_to_new_page('change_paw.php');
}
$adminid = $_SESSION['adminid'];
echo $new = sha1(getPost('new'));
$old = sha1(getPost('old'));
$renew = sha1(getPost('renew'));
$adminname = getAdminnameByAdminid($adminid);

if($new != $renew)
{
	js_alert('两次密码不一致');
	go_to_new_page('change_paw.php');
}
if(!verify_password_admin($adminname, $old))
{
	js_alert('密码错误');
	go_to_new_page('change_paw.php');	
}
else
{
	if(update_admin_password_by_adminid_with_newpassword($adminid, $new))
		js_alert("修改成功,新密码为:".getPost('new'));
	else 
		js_alert("数据库原因失败");
}


go_to_new_page('change_paw.php');


?>