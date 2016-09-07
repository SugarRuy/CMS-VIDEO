<?php


function go_to_new_page($url)
{
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}

function go_to_no_login_page()
{
	js_alert('该功能未完成');
}


function go_to_error_page()
{
	js_alert('该功能未完成');
}

function go_to_not_enough_post_page()
{
	js_alert('该功能未完成');
}
?>