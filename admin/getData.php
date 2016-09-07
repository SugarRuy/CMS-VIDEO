<?php
include('../include/sc_fns.php');
@session_start();
$adminid = isset($_SESSION['adminid']) ? $_SESSION['adminid'] : '';
if($adminid == '')
{
	$session
	go_to_new_page('login.html');
}
$method = isset(getGet('method')) ? getGet('method') : '';

switch ($method) {
	case 'select':
		# code...
		break;
	case 'insert':
		# code...
		break;
	case 'delete':
		# code...
		break;
	case 'update':
		# code...
		break;	
	default:
		# code...
		break;
}
?>