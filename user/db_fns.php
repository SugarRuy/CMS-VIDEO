<?php

function db_connect() {
    $result = new mysqli('localhost', 'admin', 'linux', 'experiment_manage');
    if (!$result) {
        return false;
    }
    return $result;
}

function db_result_to_array($result) {
   	$res_array = array();
   	if (count($result) == 0)
   		return array();
   	for ($count=0; $row = $result->fetch_assoc(); $count++) {
     	$res_array[$count] = $row;
   	}

   	return $res_array;
}
 
function verify_password( $username, $password)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		return false;
	}
	else
	{
		$_query = "select password from where username='".$username."';";
		$result = @$conn->query($_query);
	   	$num_result = @$result->num_rows;
   		if ($num_result == 0) 
   		{	//用户名不存在
      		return false;
   		}

   		$result = db_result_to_array($result);
		if ($result[0]['password'] == $password)
		{//密码错误
			return true;
		}
		return false;
	}
	$conn->close();
}

function post_form_to_string($post_form, $column_name)
{//把$_POST
	$string_post = '';
	$length_column_name = count($column_name);
	for($i=0 ; $i<$length_column_name; $i++){
		$post_values = $post_form[$column_name[$i]];
		if($i == 0)
			if(is_string($post_values)){
				$string_post = "'$post_values'";	
			}else{
				$string_post = "$post_values";
			}
			
		else{
			if(is_string($post_values)){
				$string_post = "$string_post,"."'$post_values'";
			}else{
				$string_post = "$string_post,"."$post_values";
			}
		}
	}
	return $string_post;
}
?>