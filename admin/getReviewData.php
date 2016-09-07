<?php
include('../include/sc_fns.php');
/*@session_start();
$adminid = isset($_SESSION['adminid']) ? $_SESSION['adminid'] : '';
if($adminid == '')
{
	exit();
}*/

$method = isset($_GET['method']) ? getGet('method') : '';

$videoid = isset($_GET['videoid']) ? getGet('videoid') : '';

switch ($method) {
	case 'select':
		//echo json_encode(select_video_by_status(0));
		break;
	case 'pass':
		update_videostatus_by_videoid(1, $videoid);
		break;
	case 'nopass':
		update_videostatus_by_videoid(-2, $videoid);
		break;
	case 'tabledata':
		do_html_review_table_admin();
		break;
	default:
		# code...
		break;
}
?>