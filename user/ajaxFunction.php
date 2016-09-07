<?php
include('../include/sc_fns.php');
@session_start();
$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : '';
/*if($adminid == '')
{

}*/
$method = isset($_GET['method']) ? getGet('method') : '';

switch ($method) {
	case 'logout':
		$_SESSION=array();
		session_destroy();
		break;
	case 'pass':
		
		break;
	case 'nopass':

		break;
	case 'deleteVideo':
		if(!isset($_GET['videoid']))
		{
			echo '请勿非法操作';
		}
		$videoid = getGet('videoid');
		if($userid != getUseridByVideoid($videoid))
		{
			echo '不能删除别人的视频';
		}
		if(!update_videostatus_by_videoid(-1, $videoid))
			echo "删除失败";
		else
			echo '';
		break;

	case 'deleteVideoThoroughly':
		if(!isset($_GET['videoid']))
		{
			echo '请勿非法操作';
		}
		$videoid = getGet('videoid');
		if($userid != getUseridByVideoid($videoid))
		{
			echo '不能删除别人的视频';
		}
		if(!update_videostatus_by_videoid(-2, $videoid))
			echo "彻底删除失败";
		if(!remove_video_from_disk_by_videoid($videoid))
			echo "从磁盘删除失败";
		else
			echo '';
		break;

	case 'recoveryVideo':
		if(!isset($_GET['videoid']))
		{
			echo '请勿非法操作';
		}
		$videoid = getGet('videoid');
		if($userid != getUseridByVideoid($videoid))
		{
			echo '不能删除别人的视频';
		}
		if(!update_videostatus_by_videoid(0, $videoid))
			echo "无法恢复视频";
		else
			echo '恢复视频，等待再次审核...';
		break;		
	default:
		# code...
		break;
}
?>