<?php
include('../include/sc_fns.php');
@session_start();

$adminid = isset($_SESSION['adminid']) ? $_SESSION['adminid'] : '';
if($adminid == '')
{
	exit();
}

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
	case 'deleteSilenced':

		if(!isset($_GET['silencedid']))
		{

			exit();
		}
		else
		{
			$silencedid = getGet('silencedid');
			update_silencedstatus_by_silencedid($silencedid, 0);
		}
		break;		
	case 'normalComment':
		if(isset($_GET['commentid']) )
		{
			$commentid = getGet('commentid');
			update_commentstatus_by_commentid($commentid, 2);
		}
		else 
			;
		break;
	case 'abnormalComment':
		if(isset($_GET['commentid']) )
		{
			js_alert('成功');
			$commentid = getGet('commentid');
			update_commentstatus_by_commentid($commentid, 0);
		}
		else 
			js_alert('shibai');
		break;

	case 'silenceUser':
		if(!isset($_GET['userid']) || !isset($_GET['timetype']))
		{
			echo '失败';
			exit();
		}
		else
		{
			//$time_array = array(0,3600*24, 3600*24*7, 3600*24*30, 3600*24*365*100);
			$time_array = array(0, 1, 7, 30, 1000);
			$userid = getGet('userid');
			$timetype = getGet('timetype');
			$addtime = $time_array[$timetype];
			$releasetime = date('Y-m-d H:i:s',strtotime("+$addtime day +8 hour")); 
			insert_silenced_table_by_userid_with_releasetime($userid, $releasetime,$adminid);
			update_userstatus_by_userid($userid, 0);
			echo "成功禁言,释放时间:$releasetime";
		}
		break;
	case 'releaseUser':
		if(!isset($_GET['userid']) )
		{
			echo '失败';
			exit();
		}
		else
		{
			$userid = getGet('userid');
			delete_silenced_by_userid($userid);
			update_userstatus_by_userid($userid, 1);
		}
		break;
	default:
		# code...
		break;
}
?>