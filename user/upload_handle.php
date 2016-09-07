<?php
include('../include/sc_fns.php');
//print_r($_FILES);

@session_start();
if(!isset($_SESSION['username'])) // 用户名未
{
	//go_to_no_login_page();
}

$img_file_path = '../upload/img/';
$video_file_path = '../upload/video/';

$new_img_path = '';//新的封面图片路径
$new_video_path = '';//新的视频文件路径

$username = $_SESSION['username'];
$userid = $_SESSION['userid']; 

$introduction = (isset($_POST['introduction'])) ? $_POST['introduction'] :'';
$label = (isset($_POST['label'])) ? $_POST['label'] :'';
$original = (isset($_POST['original'])) ? $_POST['original'] :'';



//处理视频文件
if(!isset($_POST['video']) 
|| !isset($_POST['picture'])
|| !isset($_POST['title'])
|| !isset($_POST['type']))
{
	js_alert('字段不完整');
	go_to_new_page('upload.php');
	//go_to_not_enough_post_page();
}

//处理视频文件
$array_extention_interdite = array( 'flv' , 'wmv' , 'rmvb','mp4' ); //上传文件的扩展名
$video_extension_name = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);
if(in_array($video_extension_name, $array_extention_interdite)
	&& ($_FILES["video"]["size"] < 200000000))
{
	js_alert("视频上传成功");
	$rand_num = rand(100000, 999999);
	$new_video_path = $video_file_path.sha1($rand_num.'_'. $_FILES["video"]["name"]).'.'. $video_extension_name; 
	move_uploaded_file($_FILES["video"]["tmp_name"], $new_video_path);
}


//处理图片文件
$array_extention_interdite = array( 'png' , 'jpeg' , 'jpg','gif' );
$img_extension_name = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
if (in_array($img_extension_name, $array_extention_interdite)
	&& ($_FILES["picture"]["size"] < 20000000))
{
	$rand_num = rand(100000, 999999);
	$new_img_path = $img_file_path. sha1($rand_num.'_'. $_FILES["picture"]["name"]) .'.'.$img_extension_name; 
    move_uploaded_file($_FILES["picture"]["tmp_name"], $new_img_path);
    

}

$info_array = $_POST;
$info_array['videolink'] = $new_video_path;
$info_array['imglink'] = $new_img_path;
$info_array['userid'] = $userid;
insert_new_video($info_array);

//go_to_new_page('./upload.php');

?>