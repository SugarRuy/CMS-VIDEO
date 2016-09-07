<?php 
function getGet($getName){//安全性过滤后再使用
	return $_GET[$getName]; 
}

function getPost($getName){//安全性过滤后再使用
	return $_POST[$getName]; 
}
?>