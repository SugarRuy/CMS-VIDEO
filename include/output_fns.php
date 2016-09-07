<?php

function do_html_title($title)
{
	?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="img/favicon.png">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="index_files/font-awesome.min.css">
		<link rel="stylesheet" href="style/icon.css">
		<link rel="stylesheet" href="style/loader.css">
		<link rel="stylesheet" href="style/idangerous.swiper.css">
		<link rel="stylesheet" href="style/stylesheet.css">
		<!--[if lt IE 10]>
			<link rel="stylesheet" type="text/css" href="style/ie-9.css" />
		<![endif]-->		
		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	</head>
	<body>

	<!-- THE LOADER -->

	<div class="be-loader">
	    	<div class="spinner">
				<div class="spinner-container container1">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
				</div>
			  	<div class="spinner-container container2">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
			  	</div>
			  	<div class="spinner-container container3">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
  				</div>
			</div>
	    </div>
	<?php
}

function do_html_nologin_header()
{
?>

	<!-- THE HEADER -->
	<header>
		<div class="container-fluid custom-container">
			<div class="row no_row row-header">
				<div class="brand-be">
					<a href="index.php"><img src="img/logo.png" alt="logo" class="be_logo">
					</a>
				</div>
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li class="active-header"><a href="index.php">主页</a> 
							 
						</li>
						 
						<li><a href="#">分类</a><i class="fa fa-angle-down"></i>
							<ul>
								<li><a href="more.php?videotype=1">电影	</a></li>
								<li><a href="more.php?videotype=2">时事			</a></li>
								<li><a href="more.php?videotype=3">体育	</a></li>
								<li><a href="more.php?videotype=4"> 综艺		</a></li>
								<li><a href="more.php?videotype=5">动漫		</a></li>
								<li><a href="more.php?videotype=6">旅游		</a></li>
								<li><a href="more.php?videotype=7">音乐		</a></li>
							</ul>
						</li>
						 
					</ul>
				</div>
				<div class="login-header-block">
					<div class="login_block">

				<a class="be-register btn color-3 size-1 hover-6" style="margin:5px;"><i class="fa fa-lock"></i>sign up now</a>
						<a class="btn-login btn color-1 size-2 hover-2" href="#"><i class="fa fa-user"></i>
						Log in</a>
					</div>	
				</div>
			</div>
		</div>
	</header>

	<div class="be-fixed-filter"></div>
	
	<div class="large-popup login">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-button"></i>
							<h5 class="large-popup-title">Log in</h5>
						</div>
						<form action="./login.php" class="popup-input-search" method="post">
						<div class="col-md-6">
							<input name="username" class="input-signtype" type="text" required placeholder="Username">
						</div>
						<div class="col-md-6">
							<input name="password" class="input-signtype" type="password" required placeholder="Password">
						</div>
						<div class="col-xs-6">
							<div class="be-checkbox">
							<label class="check-box">
								    <input name="stay_sign" class="checkbox-input" type="checkbox" value=""> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									Stay signed in
								</span>
							</div>
							
							<a href="video-detail-2.php" class="link-large-popup">Forgot password?</a>
						</div>
						<div class="col-xs-6 for-signin">
							<input name="l_submit" type="submit" class="be-popup-sign-button" value="SIGN IN">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="large-popup register">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-button"></i>
							<h5 class="large-popup-title">注册</h5>
						</div>
						<form action="./register.php" class="popup-input-search" method="post">
						<div class="col-md-6">
							<input name="r_name" class="input-signtype" type="text" required placeholder="用户名">
						</div>
						
						<div class="col-md-6">
							<input name="r_password" class="input-signtype" type="text" required placeholder="密码">
						</div>
						<div class="col-md-6">
							<input name="r_re_password" class="input-signtype" type="text" required placeholder="重复密码">
						</div>				 
						<div class="col-md-6 for-signin">
							<input name="r_submit" type="submit" class="be-popup-sign-button" value="SIGN IN">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
}

function do_html_login_header($username)
{//输出用户登录以后的头
?>
	<header>
		<div class="container-fluid custom-container">
			<div class="row no_row row-header">
				<div class="brand-be">
					<a href="index.php"><img src="img/logo.png" alt="logo" class="be_logo">
					</a>
				</div>
				<div class="login-header-block">
					<div class="login_block">																	

						<div class="col-xs-12 col-sm-4" style="float: right;padding-left: 0px">
						<a href="upload.php" class="btn color-1 size-1 hover-1"><i class="fa fa-hand-o-up"></i>我要上传</a>
							 
						</div>
						<div class="be-drop-down login-user-down">

							<img height="50" width="50" class="login-user" src="<?php echo getImageLinkByUserid(getUseridByUsername($username));?>" alt="">
							<span class="be-dropdown-content">Hi, <span><?php do_html_username();?></span></span>
							<ul class="drop-down-list">
								<li><a href="author-login.php " onclick="window.location.href='author-login.php'">个人中心</a></li>
								<li><a href="#" onclick="Logout()">登出</a></li>
								 
							</ul>
						</div>																		
					</div>	
				</div>
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="index.php">主页</a> 
							 
						</li>
					 
						<li><a href="#">分类</a><i class="fa fa-angle-down"></i>
							<ul>
								<li><a href="more.php?videotype=1">电影	</a></li>
								<li><a href="more.php?videotype=2">时事			</a></li>
								<li><a href="more.php?videotype=3">体育	</a></li>
								<li><a href="more.php?videotype=4"> 综艺		</a></li>
								<li><a href="more.php?videotype=5">动漫		</a></li>
								<li><a href="more.php?videotype=6">旅游		</a></li>
								<li><a href="more.php?videotype=7">音乐		</a></li>
							</ul>
						</li>
					 
					</ul>
				</div>
			</div>
		</div>
	</header>
	<script type="text/javascript">
		function Logout(){
			$.getJSON('ajaxFunction.php?method=logout',[],function(data){
				;
			});
			location.reload();
		}
	</script>	
<?php
}

function do_html_content_block_index()
{
	?>
	<!-- MAIN CONTENT -->
	<div id="content-block">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form action="./search.php" class="input-search" method="GET">
						<input name="keyword" type="text" required placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input name="search_submit" type="submit" value="">
					</form>				
				</div>			
			 	
			 
			</div>
		</div>		
		<div class="container-fluid custom-container">
			<div class="row">
				
				<div class="col-md-2 left-feild">
					<div class="be-vidget hidden-xs hidden-sm affix" id="scrollspy">
						<h3 class="letf-menu-article">
							<br />Navigation
						</h3>
						<div class="creative_filds_block">
							<div class="ul">
								<a onclick="javascript:document.getElementById('film').scrollIntoView()">电影	</a>
								<a onclick="javascript:document.getElementById('event').scrollIntoView()">时事			</a>
								<a onclick="javascript:document.getElementById('sport').scrollIntoView()">体育	</a>
								<a onclick="javascript:document.getElementById('show').scrollIntoView()"> 综艺		</a>
								<a onclick="javascript:document.getElementById('comic').scrollIntoView()">动漫		</a>
								<a onclick="javascript:document.getElementById('trip').scrollIntoView()">旅游		</a>
								<a onclick="javascript:document.getElementById('music').scrollIntoView()">音乐		</a>
							</div>
						</div>
					</div>
	 
					 
				</div>				
	<?php
		do_html_col_md_10();
	?>

					</div>

			</div>
		</div>
	</div>
<?php
}
?>
<?php


function do_html_col_md_10()
{//显示所有种类的记录,具体显示与do_html_custom_colomn_5($videotype);
?>
				<div class="col-md-10">

					<div class="s_keywords" id ="film">
					<div class="be-large-post-align"><div class="info-block-right"><a href="more.php?videotype=1"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">more>></h3></a></div><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">电影</h3>
					</div>
					</div>
					<div class="row _post-container_">
					<?php do_html_custom_colomn_5(1);?>
					</div>

					<div class="s_keywords" id="event">
					<div class="be-large-post-align"><div class="info-block-right"><a href="more.php?videotype=2"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">more>></h3></a></div><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">时事</h3></div>
					</div>
					<div class="row _post-container_">
					<?php do_html_custom_colomn_5(2);?>	
					</div>

					<div class="s_keywords"  id="sport"  >
					<div class="be-large-post-align"><div class="info-block-right"><a href="more.php?videotype=3"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">more>></h3></a></div> <h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">体育</h3></div>
					</div>
					<div class="row _post-container_">
						<?php do_html_custom_colomn_5(3);?>	
					</div>

					<div class="s_keywords" id="show">
					<div class="be-large-post-align"><div class="info-block-right"><a href="more.php?videotype=4"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">more>></h3></a></div><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">综艺</h3></div>
					</div>
					<div class="row _post-container_">
						<?php do_html_custom_colomn_5(4);?>	
					</div>


					<div class="s_keywords" id="comic">
					<div class="be-large-post-align"><div class="info-block-right"><a href="more.php?videotype=5"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">more>></h3></a></div><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">动漫</h3></div>
					</div>
					<div class="row _post-container_">
						<?php do_html_custom_colomn_5(5);?>	
					</div>

					<div class="s_keywords" id="trip">
					<div class="be-large-post-align"><div class="info-block-right"><a href="more.php?videotype=6"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">more>></h3></a></div><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">旅游</h3></div>
					</div>
					<div class="row _post-container_">
						<?php do_html_custom_colomn_5(6);?>	
					</div>

					<div class="s_keywords" id="music">
					<div class="be-large-post-align"><div class="info-block-right"><a href="more.php?videotype=7"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">more>></h3></a></div><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; ">音乐</h3></div>
					</div>
					<div class="row _post-container_">
						<?php do_html_custom_colomn_5(7);?>
					</div>
<?php	
}

function do_html_custom_colomn_5($videotype, $maxshow=10, $keyword='')
{//显示每个种类的记录
 //查库实现
	//include('../include/db_fns.php');
	if($keyword == '')
		$info_array = select_video_by_type($videotype, 1); // 1为已审核视频
	elseif($videotype == 0)
	{
		$info_array = select_video_by_keyword($keyword, 1);
	}
	$count_video = $info_array['count']; 
	$count_show = $count_video <= $maxshow ? $count_video:$maxshow; // The videos' number it will show 
	for($i=0; $i<$count_show; $i++)
	{
		$videoid = $info_array[$i]['VIDEOID'];
		$iamgelink = $info_array[$i]['IMAGELINK'];
		$videotext = $info_array[$i]['VIDEOTEXT'];
		$title = $info_array[$i]['VIDEONAME'];
		$userid = $info_array[$i]['USERID'];
		$uploadtime = $info_array[$i]['UPLOADTIME'];
		$videoid = $info_array[$i]['VIDEOID'];
		$playtimes = $info_array[$i]['PLAYTIMES'];
		//js_alert(print_r($info_array));*/

?>
						<div class="custom-column-5">
							<div class="be-post">
								<a href="video-detail-2.php?videoid=<?php echo $videoid;?>" class="be-img-block">
								<img src="<?php echo $iamgelink;?>" alt="omg">
								</a>
								<a href="video-detail-2.php?videoid=<?php echo $videoid;?>" class="be-post-title"><?php echo $title;?></a>

								<span>
									<a href="video-detail-2.php?videoid=<?php echo $videoid;?>" class="be-post-tag"><?php echo $videotext;?></a>, 
								 
								</span>
								<div class="author-post">
									<img src="<?php echo getImageLinkByUserid($userid); ?>" alt="" class="ava-author">
									<span>by <a href="#"><?php echo getUsernameByUserid($userid);?></a></span></br>
									<span style="margin-left: 30px;"><?php echo $uploadtime;?></span>
								</div>
								<div class="info-block">
									<span>浏览量: <?php echo $playtimes;?></span>
								</div>
							</div>
						</div>
<?php
	}
}

function do_html_footer()
{
?>
	<footer>
		<div class="footer_slider">
			 
        </div>	
		<div class="footer-main">
			<div class="container-fluid custom-container">l
				<div class="row">	
					<div class="col-md-3 col-xl-4">
						<div class="footer-block">
							 
							 
						 
						</div>
					</div>
		 			
					 
				 
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container-fluid custom-container">
				<div class="col-md-12 footer-end clearfix">
					 
					<div class="right">
						<a class="btn color-7 size-2 hover-9">About Us</a>
						<a class="btn color-7 size-2 hover-9">Help</a>
						<a class="btn color-7 size-2 hover-9">Privacy Policy</a>
					</div>
				</div>			
			</div>
		</div>		
	</footer>
	<div class="be-fixed-filter"></div>


	<!-- SCRIPT	-->
	<script src="ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="script/bootstrap.min.js"></script>		
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>	
	<script src="script/jquery.viewportchecker.min.js"></script>	
	<script src="script/global.js"></script>	
	</body>

<script type="text/javascript">
//图片上传浏览  IE是用了滤镜
function previewImage(file)
{
    var MAXWIDTH=260;
    var MAXHEIGHT=180;
    var div=document.getElementById('preview');
    
    if(file.files&&file.files[0]){
        div.innerHTML="<img id=imghead>";
        var img=document.getElementById('imghead');
        img.onload=function(){
            var rect=clacImgZoomParam(MAXWIDTH,MAXHEIGHT,img.offsetWidth,img.offsetHeight);
            img.width=rect.width;
            img.heigth=rect.heigth;
            img.style.marginTop=rect.top+'px';
            
            }
            var reader=new FileReader();
            reader.onload=function(evt){
                img.src=evt.target.result;
                }
                reader.readAsDataURL(file.files[0]);
        }
    else{
        //兼容IE
        var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=")';
        file.select();
        var src=document.selection.createRange().text;
        div.innerHTML='<img id=imghead>';
        var img=document.getElementById('imghead');
        img.filters.item('DXImage.Microsoft.AlphaImageLoader').src=src;
        var rect=clacImgZoomParam(MAXWIDTH,MAXHEIGTH,img.offsetWidth,img.offsetHeight);
        status=('rect:'+rect.top+','+'rect.left'+','+'rect.width'+','+'rect.heigth');
        div.innerHTML="<div id=divhead style'width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
        }
    }
    function clacImgZoomParam(maxWidth,maxHeight,width,height){
        var param={
            top:0,left:0,width:width,height:height};
            if(width>maxWidth||height>maxHeight){
                rateWidth=width/maxWidth;
                rateHeight=height/maxHeight;
                if(rateWidth>rateHeight){
                    param.width=maxWidth;
                    param.height=Math.round(height/rateWidth);}
                    else{
                        param.width=Math.round(width/rateHeight);
                        param.height=maxHeight;}
                }
                param.left=Math.round((maxWidth-param.width)/2);
                        param.top=Math.round((maxHeight-param.height)/2);
                        return param;
                    
        }
</script>
</html>	
<?php
}

function do_html_username()
{
	@session_start();
	if(isset($_SESSION['username'])){
    	$username =	$_SESSION['username'];
	}else{
		//go_to_no_login_page();
	}
	echo $username;
}

function do_html_content_block_upload()
{
?>
    <div id="content-block">
        <div class="container be-detail-container">
            <div class="row">
                <div class="col-xs-12 col-md-3 left-feild">
                    <div class="be-vidget back-block">
                        <a class="btn full color-1 size-1 hover-1" href="author-login.php"><i class="fa fa-chevron-left"></i>返回个人中心</a>
                    </div>
                </div>
                <form action="./upload_handle.php" class="popup-input-search" method="post" enctype="multipart/form-data">
					<div class="col-xs-12 col-md-9 _editor-content_">
						<div class="affix-block" id="basic-information">
							<div class="be-large-post">
								<div class="info-block style-2">
									<div class="be-large-post-align">
										<h3 class="info-block-label">
											上传视频</h3>
									</div>
								</div>

								<div class="be-large-post-align">
									<div class="be-change-ava">
										<div class="form-label">
											选择视频</div>
										<input type="file" name="video" class="btn color-4 size-2 hover-7"></input>
									</div>
								</div>
								<div class="be-large-post-align">
									<div class="be-change-ava">
										<div class="form-label">
											选择封面</div>
										<input type="file" name="picture" class="btn color-4 size-2 hover-7"></input>
									</div>
								</div>
								<div class="be-large-post-align">
									<div class="row">
										<div class="input-col col-xs-12 col-sm-6">
											<div class="form-group fg_icon focus-2">
												<div class="form-label">
													标题</div>
												<input class="form-input" name="title" type="text">
											</div>
										</div>
										<div class="input-col col-xs-12">
											<div class="form-group focus-2">
												<div class="form-label">
													简介</div>
												<input class="form-input" name="introduction" type="text">
											</div>
										</div>
										<div class="input-col col-xs-12">
											<div class="form-group focus-2">
												<div class="form-label">
													标签</div>
												<input class="form-input" name="label" type="text" placeholder="">
											</div>
										</div>
										<div class="input-col col-xs-12 col-sm-6">
											<div class="form-label">
												类别</div>
											<select name="type" class="be-custom-select">
												<option value="1">电影</option>
												<option value="2">时事</option>
												<option value="3">体育</option>
												<option value="4">综艺</option>
												<option value="5">动漫</option>
												<option value="6">旅游</option>
												<option value="7">音乐</option>
											</select>
										</div>
										<div class="input-col col-xs-12 col-sm-6">
											<div class="form-label">
												是否原创</div>
											<select name="original" class="be-custom-select">
												<option value="1">原创</option>
												<option value="0">非原创</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xs-6 for-signin">
									<input type="submit" name="up_submit" class="be-popup-sign-button" value="确认上传">
								</div>
							</div>
						</div>
					</div>
				</form>
            </div>
		</div>
	</div>

<?php
}


function do_html_content_block_personal($userid)
{
	$user_info_array = select_user_by_userid($userid);
	$count_all = $user_info_array['count'];
?>
	<div id="content-block">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-4 left-feild">
					<div class="be-user-block style-3">
						<div class="be-user-detail">
							<a class="be-ava-user style-2" href="#">
								<img height="100" width="100" src="<?php echo getImageLinkByUserid($userid);?>" alt=""> 
							</a>
							
							 
							<p class="be-use-name"><?php echo getUsernameByUserid($userid);?></p>
							<div class="be-user-social">							
								<a class="btn color-1 size-2 hover-1" href="author-edit.php"><i class="fa fa-pencil"></i>编辑</a>
							</div>
					 
							
							 
						</div>
					 
					</div>
					<div class="be-desc-block">
						<div class="be-desc-author">
							<div class="be-desc-label">About Me</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								<?php echo $user_info_array[0]['USERTEXT']? $user_info_array[0]['USERTEXT']:'该用户没有简介'; ?>
							</div>
						</div>					
					</div>	
					<a class="btn full color-1 size-1 hover-1" href="author-edit.php"><i class="fa fa-plus"></i>添加简介</a>	
				</div>	
				<div class="col-xs-12 col-md-8">
                    <div class="tab-wrapper style-1">
                        <div class="tab-nav-wrapper">
                            <div  class="nav-tab  clearfix">
                                <div class="nav-tab-item active">
                                    <span>所有视频</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>已审核</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>未审核</span>
                                </div> 
                                  <div class="nav-tab-item ">
                                    <span>回收站</span>
                                </div>                                                         
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active"> 
								<div class="be-large-post-align" style="margin:0px;">						
								<div class="table-responsive">
								<table class="table table-sotring tablesorter">
									<thead>
									  <tr>
									    <th class="col-xs-4">视频名称</th>
									    <th class="col-xs-1 text-center">
									    	分类
									    </th>
									    <th class="col-xs-1 text-center">
									    	标签
									    </th>
									    <th class="col-xs-1 text-center">
									    	审核状态
									    </th>
									    <th class="col-xs-5">操作</th>
									  </tr>
									</thead>
									<tbody>
										<?php 
											$info_array = select_video_by_userid($userid, "and VIDEOSTATUS>=0");
											$videotype_array = array('未分类','电影','时事','体育','综艺','动漫','旅游','音乐');
											for($i=0; $i<$info_array['count']; $i++)
											{	
										?>
									  <tr>
									    <td class="col-xs-4">
									    	<div class="t_project clearfix">
									    		<a href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><img class="t_project-img" src="<?php echo  $info_array[$i]['IMAGELINK'];?>" alt=""></a>
									    		<div class="t_project-desc">
									    			<a class="t_project-title" href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><?php echo $info_array[$i]['VIDEONAME'];?></a>
									    			<div class="t_project-date"><i class="fa fa-clock-o"></i> <?php echo $info_array[$i]['UPLOADTIME'];?></div>
									    		</div>
									    	</div>
									    </td>
									    <td class="text-center"><strong><?php echo $videotype_array[$info_array[$i]['VIDEOTYPE']];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOLABEL'];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOSTATUS']==1 ? '是':'否';?></strong></td>
									    <td>
									 
									    	<a class="t_project_icon" href="#"><img src="img/delete.png" alt="" onclick="deleteVideo(<?php echo $info_array[$i]['VIDEOID']; ?>)"></a>
									    	 
									    </td>
									  </tr>
										<?php
											}
										?>
									</tbody>
								</table>
								</div>
								</br>


							<div class="col-sm-3" style="float: right;">	
							<div class="swiper-arrow-left type-1 be-out" ></div>
				             <div class="swiper-arrow-right type-1 be-out"></div></div>
							</div>
						</div>			
                            </div>
                            <div class="tab-info">
									<div class="be-large-post-align" style="margin:0px;">						
								<div class="table-responsive">
								<table class="table table-sotring tablesorter">
									<thead>
									  <tr>
									    <th class="col-xs-4">视频名称</th>
									    <th class="col-xs-1 text-center">
									    	分类
									    </th>
									    <th class="col-xs-1 text-center">
									    	标签
									    </th>
									    <th class="col-xs-1 text-center">
									    	审核状态
									    </th>
									    <th class="col-xs-5">操作</th>
									  </tr>
									</thead>
									<tbody>
										<?php 
											$info_array = select_video_by_userid($userid,1);
											$videotype_array = array('未分类','电影','时事','体育','综艺','动漫','旅游','音乐');
											for($i=0; $i<$info_array['count']; $i++)
											{	
										?>
									  <tr>
									    <td class="col-xs-4">
									    	<div class="t_project clearfix">
									    		<a href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><img class="t_project-img" src="<?php echo  $info_array[$i]['IMAGELINK'];?>" alt=""></a>
									    		<div class="t_project-desc">
									    			<a class="t_project-title" href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><?php echo $info_array[$i]['VIDEONAME'];?></a>
									    			<div class="t_project-date"><i class="fa fa-clock-o"></i> <?php echo $info_array[$i]['UPLOADTIME'];?></div>
									    		</div>
									    	</div>
									    </td>
									    <td class="text-center"><strong><?php echo $videotype_array[$info_array[$i]['VIDEOTYPE']];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOLABEL'];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOSTATUS']==1 ? '是':'否';?></strong></td>
									    <td>
									 
									    	<a class="t_project_icon" href="#"><img src="img/delete.png" alt=""  onclick="deleteVideo(<?php echo $info_array[$i]['VIDEOID']; ?>)"></a>
									    	 
									    </td>
									  </tr>
										<?php
											}
										?>
									</tbody>
								</table>
								</div>	
								 	</br>
							<div class="col-sm-3" style="float: right;">	
							<div class="swiper-arrow-left type-1 be-out" ></div>
				             <div class="swiper-arrow-right type-1 be-out"></div></div>
							</div>
                            </div>
                            <div class="tab-info">
								 	<div class="be-large-post-align" style="margin:0px;">						
								<div class="table-responsive">
								<table class="table table-sotring tablesorter">
									<thead>
									  <tr>
									    <th class="col-xs-4">视频名称</th>
									    <th class="col-xs-1 text-center">
									    	分类
									    </th>
									    <th class="col-xs-1 text-center">
									    	标签
									    </th>
									    <th class="col-xs-1 text-center
									    	是否通过审核
									    </th>
									    <th class="col-xs-5">操作</th>
									  </tr>
									</thead>
									<tbody>								
										<?php $info_array = select_video_by_userid($userid,0);
											//$videotype_array = array('未分类','电影','时事','体育','综艺','动漫','旅游','音乐');
											for($i=0; $i<$info_array['count']; $i++)
											{	
										?>
									  <tr>
									    <td class="col-xs-4">
									    	<div class="t_project clearfix">
									    		<a href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><img class="t_project-img" src="<?php echo  $info_array[$i]['IMAGELINK'];?>" alt=""></a>
									    		<div class="t_project-desc">
									    			<a class="t_project-title" href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><?php echo $info_array[$i]['VIDEONAME'];?></a>
									    			<div class="t_project-date"><i class="fa fa-clock-o"></i> <?php echo $info_array[$i]['UPLOADTIME'];?></div>
									    		</div>
									    	</div>
									    </td>
									    <td class="text-center"><strong><?php echo $videotype_array[$info_array[$i]['VIDEOTYPE']];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOLABEL'];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOSTATUS']==1 ? '是':'否';?></strong></td>
									    <td>
									 
									    	<a class="t_project_icon" href="#"><img src="img/delete.png" alt="" onclick="deleteVideo(<?php echo $info_array[$i]['VIDEOID']; ?>)"></a>
									    	 
									    </td>
									  </tr>
										<?php
											}
										?>							
									</tbody>
								</table>
								</div>
								 </br>
							<div class="col-sm-3" style="float: right;">	
							<div class="swiper-arrow-left type-1 be-out" ></div>
				             <div class="swiper-arrow-right type-1 be-out"></div></div>
							</div>                                                             
                            </div>
                             <div class="tab-info">
								 	<div class="be-large-post-align" style="margin:0px;">						
								<div class="table-responsive">
								<table class="table table-sotring tablesorter">
									<thead>
									  <tr>
									    <th class="col-xs-4">视频名称</th>
									    <th class="col-xs-1 text-center">
									    	分类
									    </th>
									    <th class="col-xs-1 text-center">
									    	标签
									    </th>
									    <th class="col-xs-1 text-center">
									    	是否通过审核
									    </th>
									    <th class="col-xs-5">操作</th>
									  </tr>
									</thead>
									<tbody>
										<?php 
											$info_array = select_video_by_userid($userid,-1);
											$videotype_array = array('未分类','电影','时事','体育','综艺','动漫','旅游','音乐');
											for($i=0; $i<$info_array['count']; $i++)
											{	
										?>
									  <tr>
									    <td class="col-xs-4">
									    	<div class="t_project clearfix">
									    		<a href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><img class="t_project-img" src="<?php echo  $info_array[$i]['IMAGELINK'];?>" alt=""></a>
									    		<div class="t_project-desc">
									    			<a class="t_project-title" href="video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID']; ?>"><?php echo $info_array[$i]['VIDEONAME'];?></a>
									    			<div class="t_project-date"><i class="fa fa-clock-o"></i> <?php echo $info_array[$i]['UPLOADTIME'];?></div>
									    		</div>
									    	</div>
									    </td>
									    <td class="text-center"><strong><?php echo $videotype_array[$info_array[$i]['VIDEOTYPE']];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOLABEL'];?></strong></td>
									    <td class="text-center"><strong><?php echo $info_array[$i]['VIDEOSTATUS']==1 ? '是':'否';?></strong></td>
									    <td>
									 
									    	<a class="t_project_icon" href=""><img src="img/delete.png" alt="" onclick="deleteVideoThoroughly(<?php echo $info_array[$i]['VIDEOID']; ?>)"></a>
									    	<a class="t_project_icon" href=""><img src="img/recovery.png" alt="" onclick="recoveryVideo(<?php echo $info_array[$i]['VIDEOID']; ?>)"></a>
									    </td>
									  </tr>
										<?php
											}
										?>									
									</tbody>
								</table>
								</div>
								 </br>
							<div class="col-sm-3" style="float: right;">	
							<div class="swiper-arrow-left type-1 be-out" ></div>
				             <div class="swiper-arrow-right type-1 be-out"></div></div>
							</div>                                                             
                            </div>                      
                        </div>
                    </div> 				
				</div>				
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function deleteVideo(videoid){
			$.get('ajaxFunction.php?method=deleteVideo&videoid='+videoid,[],function(data){
				if(data!='')
					alert(data);
			});
			location.reload();
		}
		function deleteVideoThoroughly(videoid){
			if(confirm("确认要彻底删除?"))
			{
				$.get('ajaxFunction.php?method=deleteVideoThoroughly&videoid='+videoid,[],function(data){
					if(data!='')
						alert(data);
				});
				location.reload();			
			}
		}
		function recoveryVideo(videoid){
			$.get('ajaxFunction.php?method=recoveryVideo&videoid='+videoid,[],function(data){
				if(data!='')
					alert(data);
			});
			location.reload();			
		}

	</script>

<?php

}

function do_html_content_block_personal_edit()
{
	$userid = $_SESSION['userid'];
	$info_array = select_user_by_userid($userid);
	$imagelink = $info_array[0]['IMAGELINK'];
	$birthday = $info_array[0]['BIRTHDAY'];
	$sex = $info_array[0]['SEX'];
	$introduction = $info_array[0]['USERTEXT'];
?>
    <div id="content-block">
        <div class="container be-detail-container">
            <div class="row">
                <div class="col-xs-12 col-md-3 left-feild">
                    <div class="be-vidget back-block">
                        <a class="btn full color-1 size-1 hover-1" href="author-login.php"><i class="fa fa-chevron-left">
                        </i>返回个人中心</a>
                    </div>
                    <div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
                        <h3 class="letf-menu-article">
                            Choose Category
                        </h3>
                        <div class="creative_filds_block">
                            <ul class="ul nav">
                                <li><a onclick="javascript:document.getElementById('ifo').scrollIntoView()">基本信息</a></li>
                                <li><a onclick="javascript:document.getElementById('paw').scrollIntoView()">修改密码</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 _editor-content_">
                    <div class="affix-block" id="ifo">
                        <div class="be-large-post">
                            <div class="info-block style-2">
                                <div class="be-large-post-align">
                                    <h3 class="info-block-label">
                                        基本信息</h3>
                                </div>
                            </div>
                            <form action="./edit_handle.php" class="popup-input-search" method="post" enctype="multipart/form-data">
                            <div class="be-large-post-align">
                                <div class="be-change-ava">
                                    <a class="be-ava-user style-2" id="preview" href="#">
                                        <img height="100" width="100" id="imghead" src="<?php echo getImageLinkByUserid($_SESSION['userid']);?>" alt="">
                                    </a>
                                    <div class="form-label">
                                    	<br /><br />
                                        更改头像</div>
                                    <input type="file" name="picture" class="btn color-4 size-2 hover-7" onchange="previewImage(this)" ></input>
                                </div>
                            </div>
                            <div class="be-large-post-align">
                                <div class="row">
                                    <div class="input-col col-xs-12 col-sm-6">
                                        <div class="form-label">
                                            出生日期</div>
                                            
                                        <div class="be-custom-select">
											<input type="date" name="birthday" class="form-input" value="<?php echo $birthday;?>"/>
                                        </div>                                            
                                    </div>
                                    <div class="input-col col-xs-12">
                                        <div class="form-label">
                                            性别</div>
                                        <div class="be-custom-select-block">
                                            <select name="sex" class="be-custom-select">
                                                <option value="" disabled selected>性别 </option>
                                                <option value="male">男</option>
                                                <option value="female">女</option>
                                            </select>
                                        </div>
                                    </div>
									 <div class="input-col col-xs-12">
                                <div class="form-group focus-2">
                                    <div class="form-label">
                                        简介</div>
                                    <textarea name="introduction" class="form-input" placeholder="<?php echo $introduction; ;?>" ></textarea>
                                </div>
                            </div>
                                    <div class="col-xs-6 for-signin">
                                        <input type="submit" name="infor_submit" class="be-popup-sign-button" value="提交修改信息">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
    <div class="affix-block" id="paw">
        <div class="be-large-post">
            <div class="info-block style-2">
                <div class="be-large-post-align">
                    <h3 class="info-block-label">
                        修改密码</h3>
                </div>
            </div>
            <form action="./change_password_handle_user.php" class="popup-input-search" method="post">
            <div class="be-large-post-align">
                <div class="row">
                    <div class="input-col col-xs-12 col-sm-4">
                        <div class="form-group focus-2">
                            <div class="form-label">
                                旧密码</div>
                            <input name="old" class="form-input" type="password" required="" placeholder="">
                        </div>
                    </div>
                    <div class="input-col col-xs-12 col-sm-4">
                        <div class="form-group focus-2">
                            <div class="form-label">
                                新密码</div>
                            <input name="new" class="form-input" type="password" required="" placeholder="">
                        </div>
                    </div>
                    <div class="input-col col-xs-12 col-sm-4">
                        <div class="form-group focus-2">
                            <div class="form-label">
                                确认密码</div>
                            <input name="renew" class="form-input" type="password" required="" placeholder="">
                        </div>
                    </div>
                    <div class="col-xs-6 for-signin">
                        <input type="submit" name="psw_submit" class="be-popup-sign-button" value="提交新的密码">
                    </div>
            </form>
        </div>
    </div>
    </div> </div> </div> </div> </div> </div>

<?php
}

function do_html_content_block_video_detail($videoid)
{
	$info_array = select_video_by_videoid($videoid);
	$count = $info_array['count'];
	$videolink = $info_array[0]['VIDEOLINK'];
	$videotype_name = pathinfo($videolink, PATHINFO_EXTENSION);
	$playtimes = $info_array[0]['PLAYTIMES'];
?>
  <div id="content-block">
    <div class="container be-detail-container">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div class="blog-wrapper blog-list">
            <div class="blog-post be-large-post">
              <div class="info-block clearfix">
                <div class="be-large-post-align">
                <span>浏览量: <?php echo $playtimes;?></span> 
                <span class="be-text-tags">
                <a href="#" class="be-post-tag"><?php echo $info_array[0]['VIDEOLABEL'];?></a></span></div>
              </div>
              <div class="be-large-post-align">
                <h3 class="be-post-title"><?php echo $info_array[0]['VIDEONAME'];?></h3>
                <div class="post-date">
                  <span class="be-text-tags clearfix"><?php echo $info_array[0]['UPLOADTIME'];?></span>
                </div>
                <div class="author-post">
                  <span class="be-text-tags clearfix">
                  <img src="img/a1.png" alt="" class="ava-author" /> 
                  <span>by 
                  <a href="#"><?php echo getUsernameByUserid($info_array[0]['USERID']);?></a></span></span>
                </div>
                <div class="clear"></div>
              </div>
              <div class="post-preview be-large-post-slider">
                <!--                                                            <img class="img-fullblog" src="img/blog_img_1.jpg" alt="">-->
                <div style="width: 850px; height: 540px;">
                  <script type="text/javascript"
                  src="../videoplayer/player/sewise.player.min.js?server=vod&amp;type=<?php echo $videotype_name;?>&amp;videourl=http://xiao-pc/cms/upload/<?php echo $videolink;?>&amp;sourceid=&amp;autostart=true&amp;starttime=0&amp;lang=en_US&amp;logo=http://onvod.sewise.com/libs/swfplayer/skin/images/logo.png&amp;title=VodVideo&amp;buffer=5&amp;skin=vodWhite">
</script>
                </div>
              </div>
            </div>
            <h3 class="letf-menu-article">相关视频</h3>
            <?php 
            	do_html_detail_relative($videoid);
            ?>

        <?php 
        	do_html_detail_comment($videoid);
        	do_html_detail_hot();
        ?>
              </div>
            </div>
<?php	
}

function do_html_detail_relative($videoid)
{	
?>
    <div class="row"><!--three times-->
<?php 
    //
    $topnum = 3; // 显示多少最多播放的个视频
	$info_array = select_most_play_video($topnum);
	for($i=0; $i<$info_array['count']; $i++)
	{
		$videoid = $info_array[$i]['VIDEOID'];
		$videoname = $info_array[$i]['VIDEONAME'];
		$imagelink = $info_array[$i]['IMAGELINK'];
		$videotext = $info_array[$i]['VIDEOTEXT'];
		$updatetime = $info_array[$i]['UPLOADTIME'];
?>
              <div class="col-xs-12 col-sm-4">
                <div class="be-post style-2">
                <div class="be-post-date"><?php echo $updatetime;?></div>
                <a href="video-detail-2.php?videoid=<?php echo $videoid;?>" class="be-post-title"><?php echo $videoname;?></a>
                <a href="video-detail-2.php?videoid=<?php echo $videoid;?>" class="be-img-block">
                  <img  src="<?php  echo $imagelink;?>" alt="omg" />
                </a> 
                <span><?php  echo $videotext;?></span></div>
              </div>
            
<?php
	}
	?>
	</div>
	<?php
}

function do_html_detail_comment($videoid)
{	
?>
            <div class="be-comment-block">

<?php
	$info_array = select_comment_by_videoid($videoid);
?>
              <h1 class="comments-title">评论(<?php echo $info_array['count'];?>)</h1>
<?php

	for($i=0; $i<$info_array['count']; $i++)
	{
		$commenttext = $info_array[$i]['COMMENTTEXT'];
		$commenttime = $info_array[$i]['COMMENTTIME'];
		$userid = $info_array[$i]['USERID'];
		$imagelink = isset($info_array[$i]['IMAGELINK'])? $info_array[$i]['IMAGELINK'] : "img/c1.png";

?>
              <div class="be-comment"><!-- N times-->
                <div class="be-img-comment">
                  <a href="user-detail.php">
                    <img src="img/c1.png" alt="" class="be-ava-comment" />
                  </a>             
                </div>
                <div class="be-comment-content">
                <span class="be-comment-name">
                  <a href="#"><?php echo getUsernameByUserid($userid); ?></a>
                </span> 
                <span class="be-comment-time"><?php echo $commenttime; ?></span>
                <p class="be-comment-text"><?php echo $commenttext; ?></p></div>
              </div>



<?php
	}
	?>
              <form class="form-block">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <textarea class="form-input" required="" placeholder="Your text" id="comment-content"></textarea>
                    </div>
                  </div>
                  <a class="btn color-1 size-2 hover-1 pull-right" onclick="comment();">submit</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <script type="text/javascript">
        	function comment(){
        		//未登陆, 提示登录
        		//var 
        		//重填一次评论
					$.post('comment_handle.php', {"comment":$("#comment-content").val(), "videoid": <?php echo $videoid;?>}, function(data){
						alert(data);
						location.reload();
					});
        			
        	}
        </script>
	<?php
}

function do_html_detail_hot()
{
?>
        <div class="col-xs-12 col-sm-3">
			<form action="./search.php" class="input-search" method="GET">
				<input name="keyword" type="text" required placeholder="Enter keyword">
					<i class="fa fa-search"></i>
					<input name="search_submit" type="submit" value="">
			</form>			
          <div class="be-vidget">
            <h3 class="letf-menu-article"><br />Navigation</h3>
            <div class="creative_filds_block">
              <div class="ul">
                <ul>
					<li><a href="more.php?videotype=1">电影	</a></li>
					<li><a href="more.php?videotype=2">时事			</a></li>
					<li><a href="more.php?videotype=3">体育	</a></li>
					<li><a href="more.php?videotype=4"> 综艺		</a></li>
					<li><a href="more.php?videotype=5">动漫		</a></li>
					<li><a href="more.php?videotype=6">旅游		</a></li>
					<li><a href="more.php?videotype=7">音乐		</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="be-vidget">
            <h3 class="letf-menu-article">热门视频</h3>
            <?php 
            	$info_array = select_most_play_video(3);
            	for($i=0; $i<$info_array['count']; $i++)
            	{
            		$videoid = $info_array[$i]['VIDEOID'];
            		$videoname = $info_array[$i]['VIDEONAME'];
            		$imagelink = $info_array[$i]['IMAGELINK'];
            		$videotext = $info_array[$i]['VIDEOTEXT'];
            ?>
        	<div class="be-post style-2">
				<a href="video-detail-2.php?videoid=<?php echo $videoid;?>" class="be-post-title"><?php echo $videoname;?></a>     	
				<a href="video-detail-2.php?videoid=<?php echo $videoid;?>" class="be-img-block">
					<img src="<?php  echo $imagelink;?>" alt="omg">
				</a>
				<span>
					<?php  echo $videotext;?>
				</span>
			</div>



<?php
	}
?>
          </div>
        </div>	

<?php
}



function do_html_content_block_more($videotype)
{
	$videotype_array = array('未分类','电影','时事','体育','综艺','动漫','旅游','音乐');
	$maxshow = 99999999;//最多显示多少视频
?>
	<div id="content-block">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form action="./search.php" class="input-search" method="GET">
						<input name="keyword" type="text" required placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input name="search_submit" type="submit" value="">
					</form>				
				</div>			
			 	
			 
			</div>
		</div>		
		<div class="container-fluid custom-container">
			<div class="row">
				
				<div class="col-md-2 left-feild">
					<div class="be-vidget">
						<h3 class="letf-menu-article">
						<br />Navigation
						</h3>
						<div class="creative_filds_block">
							<div class="ul">
								<li><a href="#"  onclick="window.location.href='more.php?videotype=1'">电影	</a></li>
								<li><a href="#"  onclick="window.location.href='more.php?videotype=2'">时事			</a></li>
								<li><a href="#"  onclick="window.location.href='more.php?videotype=3'">体育	</a></li>
								<li><a href="#"  onclick="window.location.href='more.php?videotype=4'"> 综艺		</a></li>
								<li><a href="#"  onclick="window.location.href='more.php?videotype=5'">动漫		</a></li>
								<li><a href="#"  onclick="window.location.href='more.php?videotype=6'">旅游		</a></li>
								<li><a href="#"  onclick="window.location.href='more.php?videotype=7'">音乐		</a></li>

							</div>
						</div>
					</div>
	 
				</div>	 
				<div class="col-md-10">
				<div class="s_keywords" id ="film">
					<div class="be-large-post-align"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; "><?php echo $videotype_array[$videotype];?></h3>
							
					</div>
					</div>
					<div class="row _post-container_">
						<?php do_html_custom_colomn_5($videotype, $maxshow);?>
					</div>
					
				</div>
 				<div class="col-sm-3" style="float: right;">	<div class="swiper-arrow-left type-1 be-out" ></div>
				             <div class="swiper-arrow-right type-1 be-out"></div></div>
			</div>

		</div>
<?php
}


function do_html_content_block_search($keyword)
{
	$maxshow = 99999999;//最多显示多少视频
?>
	<div id="content-block">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form action="./search.php" class="input-search" method="GET">
						<input name="keyword" type="text" required placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input name="search_submit" type="submit" value="">
					</form>				
				</div>			
			 	
			 
			</div>
		</div>		
		<div class="container-fluid custom-container">
			<div class="row">
				
				<div class="col-md-2 left-feild">
					<div class="be-vidget">
						<h3 class="letf-menu-article">
						<br />Navigation
						</h3>
						<div class="creative_filds_block">
							<div class="ul">
								<li><a href="more.php?videotype=1">电影	</a></li>
								<li><a href="more.php?videotype=2">时事			</a></li>
								<li><a href="more.php?videotype=3">体育	</a></li>
								<li><a href="more.php?videotype=4"> 综艺		</a></li>
								<li><a href="more.php?videotype=5">动漫		</a></li>
								<li><a href="more.php?videotype=6">旅游		</a></li>
								<li><a href="more.php?videotype=7">音乐		</a></li>

							</div>
						</div>
					</div>
	 
				</div>	 
				<div class="col-md-10">
				<div class="s_keywords" id ="film">
					<div class="be-large-post-align"><h3 class="info-block-label" style="font-family:Microsoft YaHei !important; "><?php echo "搜索关键词:$keyword";?></h3>
							
					</div>
					</div>
					<div class="row _post-container_">
						<?php do_html_custom_colomn_5(0, $maxshow, $keyword);?>
					</div>
					
				</div>
 				<div class="col-sm-3" style="float: right;">	<div class="swiper-arrow-left type-1 be-out" ></div>
				             <div class="swiper-arrow-right type-1 be-out"></div></div>
			</div>

		</div>
<?php	
}
?>