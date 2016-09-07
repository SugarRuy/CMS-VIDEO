<?php
include('../include/sc_fns.php');
//print_r($_FILES);

@session_start();

define("PAGENAME", "author-edit.php");

if(!isset($_SESSION['username'])) // 用户名未
{
	js_alert('未登录');
	go_to_new_page('index.php');
}

$img_file_path = '../upload/img_user/';

$new_img_path = '';//新的头像图片路径

$username = $_SESSION['username'];
$userid = $_SESSION['userid']; 

//获取旧信息
$info_array = select_user_by_userid($userid);
$imagelink_old = $info_array[0]['IMAGELINK'];
$birthday_old = $info_array[0]['BIRTHDAY'];
$sex_old = $info_array[0]['SEX'];
$introduction_old = $info_array[0]['USERTEXT'];


//获取get信息

$introduction = (!empty($_POST['introduction'])) ? getPost('introduction') :$introduction_old;
$birthday = (!empty($_POST['birthday'])) ? getPost('birthday') :$birthday_old;
$sex = (!empty($_POST['sex'])) ? getPost('sex') :$sex_old;
$new_img_path = (!empty($_FILES['picture']['tmp_name']))?'':$imagelink_old;
//echo empty($_FILES['picture']['tmp_name'])?'是':'否';
js_alert("介绍:$introduction, 生日: $birthday, 性别:$sex, 新的头像:$new_img_path");

//处理图片文件
$array_extention_interdite = array( 'png' , 'jpeg' , 'jpg','gif' );
if(isset($_FILES['picture']))
{
	$img_extension_name = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
	if (in_array($img_extension_name, $array_extention_interdite)
		&& ($_FILES["picture"]["size"] < 20000000))
	{
		$rand_num = rand(100000, 999999);
		$new_img_path = $img_file_path. sha1($rand_num.'_'. $_FILES["picture"]["name"]) .'.'.$img_extension_name; 
	    move_uploaded_file($_FILES["picture"]["tmp_name"], $new_img_path);
	}
}
$info_array['introduction'] = $introduction;
$info_array['birthday'] = $birthday;
$info_array['sex'] = $sex;
$info_array['imglink'] = $new_img_path;

if(update_user_info_by_userid($info_array, $userid))
	js_alert('修改成功');
else
	js_alert('数据库原因修改失败');

go_to_new_page(PAGENAME);

?>