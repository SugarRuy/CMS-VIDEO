<?php

function db_connect() {
    $result = new mysqli('localhost', 'admin', 'linux', 'cms');
    if (!$result) {
        return false;
    }
    return $result;
}

function db_result_to_array($result) {
   	$res_array = array();
   	if ($result->num_rows == 0)
   		return array();
   	for ($count=0; $row = $result->fetch_assoc(); $count++) {
     	$res_array[$count] = $row;
   	}

   	return $res_array;
}

function db_query($_query)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		$conn->close();
		return false;
	}
	else

	{
		$result = @$conn->query($_query);
		$num_result = @$result->num_rows;
	}
	$result = @db_result_to_array($result);
	$result['count'] = is_null($num_result)?0:$num_result;
	$conn->close();

	return $result;
	//
	//return true;
}

function db_query_without_result($_query)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		$conn->close();
		return false;
	}

	else
	{
		$result = @$conn->query($_query);
		if($result == null)
		{		
			$conn->close();
			return false;
		}
	}
	$conn->close();
	return true;	
}


function verify_password($username, $password)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		return false;
	}
	else
	{
		$_query = "select password from user_table where username='".$username."';";
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


function getUseridByUsername($username)
{
	$conn = db_connect();
	$_query = "select userid from user_table where username='".$username."';";
	$result = @$conn->query($_query);
	$num_result = @$result->num_rows;
	if($num_result == 0)
	{
		return null;
	}
	$result = db_result_to_array($result);
	$userid = $result[0]['userid'];
	$conn->close();
	return $userid;
}

function register($username, $password)
{
	$conn = db_connect();
	if(getUseridByUsername($username)!=null)
		return false;
	else
	{
		$_query = "insert into user_table (username, password) values (
					'$username','$password');";

		$result = @$conn->query($_query);
		if($result == null)
			return false;
	}
	$conn->close();
	return true;
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

function insert_new_video($info_array)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		return false;
	}
	else
	{
		$videolink = $info_array['videolink'];
		$videoname = $info_array['title'];
		$imagelink = $info_array['imglink'];
		$videotext = $info_array['introduction'];
		$videolabel = $info_array['label'];
		$uploadtime = date("Y-m-d H:i:s");
		$videotype = $info_array['type'];
		$original = $info_array['original'];
		$userid = $info_array['userid'];

		$_query = "insert into video_table (VIDEOLINK, VIDEONAME, IMAGELINK, VIDEOTEXT, VIDEOLABEL, USERID, VIDEOTYPE, ORIGINAL, UPLOADTIME) VALUES 
			('$videolink', '$videoname', '$imagelink', '$videotext', '$videolabel', $userid, $videotype, $original, '$uploadtime');";
		
		@$conn->query($_query);

	}
	$conn->close();
	return true;
}

function select_video_by_type($videotype, $videostatus = '')
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		return false;
	}
	else
	{
		if($videostatus !=''){
			$_query = "select * from video_table where VIDEOTYPE=$videotype and VIDEOSTATUS=$videostatus;";
		}else{
			$_query = "select * from video_table where VIDEOTYPE=$videotype;";
			}
		$result = @$conn->query($_query);
		$num_result = @$result->num_rows;
	}
	$result = @db_result_to_array($result);
	$result['count'] = is_null($num_result)?0:$num_result;
	$conn->close();

	return $result;
	//
	//return true;
}

function getUsernameByUserid($userid)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		return false;
	}
	else
	{
		$_query = "select USERNAME from user_table where USERID=$userid;";
		$result = @$conn->query($_query);
		$num_result = @$result->num_rows;
	}
	$result = db_result_to_array($result);
	if($num_result == 0)
		return '';
	$username = $result[0]['USERNAME'];
	$conn->close();

	return $username;	
}

function select_video_by_userid($userid, $videostatus = '')
{
		if(!is_int($videostatus) && $videostatus !='')
		{//表达式
			$_query = "select * from video_table where USERID=$userid $videostatus;";
		}
		elseif(is_null($videostatus))
		{
			$_query = "select * from video_table where USERID=$userid;";		
		}
		else
		{
			$_query = "select * from video_table where USERID=$userid and VIDEOSTATUS=$videostatus;";

		}

	return $result = db_query($_query);
	//
	//return true;
}

function select_video_by_userid_and_videostatus_range($userid, $range)
{
	$_query = "select * from video_table where USERID=$userid $range;";
	return db_query($_query);
}

function select_user_by_userid($userid, $userstatus = '')
{

	if(!is_int($userstatus) && $userstatus !=''){//表达式
		$_query = "select * from user_table where USERID=$userid $userstatus;";
	}elseif($userstatus !=''){//空
		$_query = "select * from user_table where USERID=$userid and USERSTATUS=$userstatus;";
	}else{//userstatus
		$_query = "select * from user_table where USERID=$userid;";
	}
	$result = db_query($_query);
	return $result;
}

function select_video_by_status($videostatus )
{

	$_query = "select * from video_table where VIDEOSTATUS=$videostatus;";
	$result = db_query($_query);

	return $result;	
}
function select_video_by_videostatus($videostatus )
{//换个名字
	return select_video_by_status($videostatus );
}

function select_video_by_videostatus_except($videostatus)
{
	$_query = "select * from video_table where VIDEOSTATUS!=$videostatus;";	
	return db_query($_query);
}

function update_videostatus_by_videoid($videostatus, $videoid)
{
	$_query = "update video_table set VIDEOSTATUS=$videostatus where VIDEOID=$videoid;";
	return db_query($_query);

}

function select_comment_by_videoid($videoid, $commentstatus=1)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		$conn->close();
		return false;
	}
	else
	{
		$_query = "select * from comment_table where VIDEOID=$videoid and COMMENTSTATUS>=$commentstatus;";
		$result = @$conn->query($_query);
		$num_result = @$result->num_rows;		
	}
	$result = @db_result_to_array($result);
	$result['count'] = is_null($num_result)?0:$num_result;
	$conn->close();

	return $result;	
}

function select_video_by_keyword($keyword, $videostatus = '')
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		$conn->close();
		return false;
	}
	else
	{
		if($videostatus !=''){
			$_query = "select * from video_table where VIDEONAME LIKE '%$keyword%' or VIDEOTEXT LIKE '%$keyword%' or VIDEOLABEL LIKE '%$keyword%' and VIDEOSTATUS=$videostatus;";
		}else{
			$_query = "select * from video_table where VIDEOTYPE=$videotype;";
			}
		$result = @$conn->query($_query);
		$num_result = @$result->num_rows;
	}
	$result = @db_result_to_array($result);
	$result['count'] = is_null($num_result)?0:$num_result;
	$conn->close();

	return $result;
	//
	//return true;
}

//以下三个函数均未做测试
function select_same_type_video_by_videoid($videoid)
{//只查询出已审核状态视频

	$_query = "select * from video_table where VIDEOID!=$videoid and VIDEOTYPE=(select VIDEOTYPE from video_table where VIDEOID=$videoid ) and VIDEOSTATUS=1;";
	$result = db_query($_query);
	return $result;	
}

function select_video_by_videoid($videoid)
{
	$_query = "select * from video_table where VIDEOID=$videoid;";
	$result = db_query($_query);
	return $result;	
}

function select_most_play_video($topnum=10)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		$conn->close();
		return false;
	}
	else
	{
		$_query = "select * from video_table order by PLAYTIMES desc;";
		$result = @$conn->query($_query);
		$num_result = @$result->num_rows;	
	}
	$conn->close();
	$result = @db_result_to_array($result);
	$topnum = $num_result<=$topnum?$num_result:$topnum; // 选取较小的值以免爆索引

	$result = array_slice($result, 0, $topnum);
	$result['count'] = $topnum;

	return $result;	
}

function verify_silenced($userid)
{//返回值为true,用户正常；
//返回值为false,用户处于禁言
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		$conn->close();
		return false; 
	}
	else
	{
		$_query = "select USERSTATUS from user_table where 	USERID=$userid;";
		$result = db_query($_query);
		if($result[0]['USERSTATUS'] == 1)
		{//用户状态正常
			$conn->close();	
			return true;
		}
		elseif($result[0]['USERSTATUS'] == 0)
		{//用户状态异常
			$_query = "select * from silenced_table where userid=$userid  and SILENCEDSTATUS=1;";
			$result = db_query($_query);
			$count = $result['count'];
			if($count == 0 )
			{//无在记录的禁言记录
				$_query = "update user_table set USERSTATUS=1 where userid=$userid";//改正有误记录
				@$conn->query($_query);
				return true;
			}
			elseif(strtotime($result[0]['RELEASETIME'])<=time())
			{//释放时间已过，删除并释放
				$_query = "update silenced_table set SILENCEDSTATUS=0 where userid=$userid";
				@$conn->query($_query);
				return true;
			}
			else
			{
				return false;
			}

		}

	}
	return false;
	$conn->close();	
}

function getReleasetimeByUserid($userid)
{
	$_query = "select RELEASETIME from silenced_table where USERID=$userid;";
	$result = db_query($_query);
	return $result[0]['RELEASETIME'];
}

function insert_comment_with_userid_videoid($comment, $userid, $videoid)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		$conn->close();
		return false;
	}
	else
	{	
		$_query = "insert into comment_table (COMMENTTEXT, USERID, VIDEOID) values ('$comment', $userid, $videoid);";
		@$conn->query($_query);
		return true;
	}
	return false;
	$conn->close();	
}

function update_user_password_by_userid_with_newpassword($userid, $new)
{
	$_query = "update user_table set PASSWORD='$new' where USERID=$userid;";
	return db_query_without_result($_query);	
}

function update_user_info_by_userid($info, $userid)
{
	$_query = 'not a sql';

	if(true/*isset($info['introduction']) && isset($info['sex']) && isset($info['birthday']) && isset($info['imglink'])*/)
	{
		$sex = $info['sex'];
		$birthday = $info['birthday'];
		$usertext = $info['introduction'];
		$imagelink = $info['imglink'];
		$_query = "update user_table set 
					SEX='$sex', 
					BIRTHDAY='$birthday', 
					USERTEXT='$usertext', 
					IMAGELINK='$imagelink' where USERID=$userid; ";
	}

	return db_query_without_result($_query);
}

function insert_playlist_with_userid_videoid($userid, $videoid)
{
	$_query = "insert into playlist_table (USERID, VIDEOID) values ($userid, $videoid);";
	return db_query_without_result($_query);
}

function update_video_playtimes_by_videoid($videoid)
{
	$_query = "update video_table set PLAYTIMES=PLAYTIMES+1 where VIDEOID=$videoid;";
	return db_query_without_result($_query);
}

function getImagelinkByUserid($userid)
{
	$_query = "select IMAGELINK from user_table where USERID=$userid;";
	$result = db_query($_query);
	return $result[0]['IMAGELINK'];
}

function getUseridByVideoid($videoid)
{
	$_query = "select USERID from video_table where VIDEOID=$videoid;";
	$result = db_query($_query);
	if($result['count']==0)
		return -1;
	else
		return $result[0]['USERID'];
}














/*Following code is for admin part only */


function verify_password_admin($adminname, $password)
{
	$conn = db_connect();
	if(!$conn)
	{//数据库链接失败
		return false;
	}
	else
	{
		$_query = "select password from admin_table where adminname='".$adminname."';";
		$result = @$conn->query($_query);
	   	$num_result = @$result->num_rows;
   		if ($num_result == 0) 
   		{	//用户名不存在
   			$conn->close();
      		return false;
   		}
   		$result = db_result_to_array($result);
		if ($result[0]['password'] == $password)
		{//密码错误
			$conn->close();
			return true;
		}
		$conn->close();
		return false;
	}
}

function getAdminidByAdminname($adminname)
{
	$conn = db_connect();
	$_query = "select adminid from admin_table where adminname='".$adminname."';";
	$result = @$conn->query($_query);
	$num_result = @$result->num_rows;
	if($num_result == 0)
	{
		return null;
	}
	$result = db_result_to_array($result);
	$adminid = $result[0]['adminid'];
	$conn->close();
	return $adminid;
}

function getAdminnameByAdminid($adminid)
{
	$conn = db_connect();
	$_query = "select ADMINNAME from admin_table where adminid='".$adminid."';";
	$result = @$conn->query($_query);
	$num_result = @$result->num_rows;
	if($num_result == 0)
	{
		return null;
	}
	$result = db_result_to_array($result);
	$adminname = $result[0]['ADMINNAME'];
	$conn->close();
	return $adminname;
}

function select_silenced_user_in_silenced_table()
{
	$_query = "select * from silenced_table where SILENCEDSTATUS=1;";
	return db_query($_query);
}

function update_silencedstatus_by_silencedid($silencedid, $silencedstatus)
{
	$_query = "update silenced_table set SILENCEDSTATUS=$silencedstatus where SILENCEDID=$silencedid;";

	return db_query_without_result($_query);
}

function select_bad_comment()
{
	$keyword_array = array("%傻逼%","%SB%","%妈%","%逼%","%屎%","%放屁%","%垃圾%","%lj%","%太监%","%炸弹%","%社会主义%","%共产党%","%习近平%","%毛泽东%","%苍老师%"); 
	$_query = "select * from comment_table where COMMENTSTATUS=1 and ( " ;
	$temp = '';
	for($i=0; $i<count($keyword_array); $i++)
	{
		$temp .= "COMMENTTEXT LIKE '$keyword_array[$i]' or ";
	}
	$temp = $temp . ' 0 );';
	$_query .= $temp;
	return db_query($_query);

}

function update_commentstatus_by_commentid($commentid, $commentstatus)
{
	$_query = "update comment_table set commentstatus=$commentstatus where commentid=$commentid;";
	return db_query($_query);
}

function getPasswordByAdminid($adminid)
{//好像没啥用
	$_query = "select PASSWORD from admin_table where ADMINID=$adminid;";
	$result = db_query($_query);
	if($result['count'] != 0)
	{
		return $result[0]['PASSWORD'];
	}
	return false;
}

function update_admin_password_by_adminid_with_newpassword($adminid, $newpassword)
{
	$_query = "update admin_table set PASSWORD='$newpassword' where ADMINID=$adminid;";
	return db_query_without_result($_query);
}

function insert_into_admin_table($adminname, $password)
{
	$_query = "insert into admin_table (ADMINNAME, PASSWORD) values ('$adminname', $password);";
	return db_query_without_result($_query);
}

function delete_admin_by_adminid($adminid)
{
	$_query = "delete from admin_table where ADMINID=$adminid;";
	return db_query_without_result($_query);	
}

function select_all_comment()
{
	$_query = "select * from comment_table ;";
	return db_query($_query);	
}
function select_all_comment_by_commentstatus($commentstatus)
{
	$_query = "select * from comment_table where COMMENTSTATUS=$commentstatus;";
	return db_query($_query);	
}


function select_all_user()
{
	$_query = "select * from user_table;";
	return db_query($_query);
}

function insert_silenced_table_by_userid_with_releasetime($userid, $releasetime, $adminid)
{
	$_query = "insert into silenced_table (ADMINID, USERID, RELEASETIME) values ($adminid, $userid,'$releasetime');";
	return db_query($_query);	
}
function update_userstatus_by_userid($userid, $userstatus)
{
	$_query = "update user_table set USERSTATUS=$userstatus where userid=$userid;";
	return db_query_without_result($_query);	
}

function delete_silenced_by_userid($userid)
{
	$_query = "delete from silenced_table where USERID=$userid;";
	return db_query_without_result($_query);
}
?>