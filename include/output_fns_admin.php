<?php
function do_html_head_admin($pagename)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title><?php echo $pagename?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>
<?php
}

function do_html_topbar_admin($adminname)
{
?>
<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"> <span>后台管理</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $adminname;?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="#"  onclick="Logout();">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->

<?php	
}

function do_html_left_menu_admin()
{
?>
		<div class="container-fluid">
		<div class="row-fluid">
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a class="ajax-link" href="all_video.php"><i class="icon-font"></i><span class="hidden-tablet"> 视频列表</span></a></li>						 
						<li><a class="ajax-link" href="review.php"><i class="icon-home"></i><span class="hidden-tablet"> 待审核视频</span></a></li>
						<li><a class="ajax-link" href="all_comment.php"><i class="icon-font"></i><span class="hidden-tablet"> 评论列表</span></a></li>
						<li><a class="ajax-link" href="del_comment.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> 删除恶评</span></a></li>
						<li><a class="ajax-link" href="all_user.php"><i class="icon-font"></i><span class="hidden-tablet"> 用户列表</span></a></li>
						<li><a class="ajax-link" href="forbid.php"><i class="icon-edit"></i><span class="hidden-tablet"> 禁言用户</span></a></li>
						<li><a class="ajax-link" href="change_paw.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> 修改密码</span></a></li>

					 
						<li><a href="login.html" onclick="Logout();"><i class="icon-lock"></i><span class="hidden-tablet"> 登出</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			<script type="text/javascript">
				function Logout()
				{
					$.getJSON('operation.php?method=logout',[],function(data){
						;
					});
					//location.reload();
					window.location.href='login.html';				
				}
			</script>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
<?php
}

function do_html_footer_admin()
{
?>
				</div><!--/fluid-row-->
				
		<hr>
		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	

	<script type="text/javascript">
		function normalComment(commentid)
		{
			$.getJSON('operation.php?method=normalComment&commentid='+commentid,[],function(data){
				;
			});
			location.reload();
		}
		function abnormalComment(commentid)
		{
			
			$.getJSON('operation.php?method=abnormalComment&commentid='+commentid,[],function(data){
				alert("进入");;
			});
			//location.reload();
			location.reload();			
		}				
	</script>  
	<script type="text/javascript"> 
		function fill_table(){

		}

		function pass(videoid){
			$.getJSON('getReviewData.php?method=pass&videoid='+videoid,[],function(data){
				;
			});
			//fill_table();

			refresh();
		}
		
		function nopass(videoid){
			$.getJSON('getReviewData.php?method=nopass&videoid='+videoid,[],function(data){
				;
			});
			//fill_table();

			refresh();
		}
		function refresh(){

			location.reload();
		}


	</script>
</body>
</html>
<?php
}

function do_html_body_review_admin($adminname)
{
?>
<body>
	<?php do_html_topbar_admin($adminname);?>
		<div class="container-fluid">
		<div class="row-fluid">
				
			<?php do_html_left_menu_admin();?>

			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">主页</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">待审核视频</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> 待审核视频</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content" id="table-div">

						<?php do_html_review_table_admin();?>

					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			 
			
			 
		 
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>




	<?php do_html_footer_admin();?>	



<?php	
}

function do_html_review_table_admin()
{
	$info_array = select_video_by_status(0);
?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>待审核视频名称</th>
								  <th>申请时间</th>
								  <th>申请用户</th>
								  <th>视频类型</th>
								  <th>操作</th>
							  </tr>
						  </thead>   
						  <tbody id="table-body">
<?php 
	for($i=0; $i<$info_array['count']; $i++)
	{
?>
							<tr>
								<td><a href="../user/video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID'];?>"> <?php echo $info_array[$i]['VIDEONAME'];?></a></td>
								<td class="center"><?php echo $info_array[$i]['UPLOADTIME'];?></td>
								<td class="center"><?php echo $info_array[$i]['USERID'];?></td>
								<td class="center">
									<span class="label label-success"><?php echo $info_array[$i]['VIDEOTYPE']?></span>
								</td>
								<td class="center">
									<a name="agree" class="btn btn-success" href="#" onclick="pass(<?php echo $info_array[$i]['VIDEOID']?>);">
										<i class="icon-zoom-in icon-white"></i>  
										通过                                            
									</a>
									<a name="disagree" class="btn btn-info" href="#" onclick="nopass(<?php echo $info_array[$i]['VIDEOID']?>);">
										<i class="icon-edit icon-white"></i>  
										不通过                                            
									</a>
								
								</td>
							</tr>						 


<?php
	}
?>
						  </tbody>
					  </table>
<?php
}



function do_html_forbid_content_admin()
{
?>
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">主页</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">禁言用户</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> 禁言用户</h2>		
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php do_html_forbid_table_admin();?>
          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

					<!-- content ends -->
			</div><!--/#content.span10-->

<?php

}

function do_html_forbid_table_admin()
{
?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>用户名</th>
								  <th>禁言开始时间</th>
								    <th>释放时间</th>
								  <th>禁言管理员</th>								
								  <th>操作 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								 </th>
								 
							  </tr>
						  </thead>   
						  <tbody>
<?php 
	$info_array = select_silenced_user_in_silenced_table();
	
	$count = $info_array['count'];
	for ($i=0; $i<$count; $i++)
	{
		$silencedid = $info_array[$i]['SILENCEDID'];
		$userid = $info_array[$i]['USERID'];
		$adminid = $info_array[$i]['ADMINID'];
		$silencedtime = $info_array[$i]['SILENCEDTIME'];
		$releasetime = $info_array[$i]['RELEASETIME'];
?>
							<tr>
								<td><?php echo getUsernameByUserid($userid);?></td>
								<td class="center"><?php echo $silencedtime;?></td>
								<td class="center"><?php echo $releasetime;?></td>
								<td class="center">
									<?php echo getAdminnameByAdminid($adminid);?>
								</td>
								<td class="center">
								    
									<a name="delete" class="btn btn-danger" href="#" onclick="deleteSilenced(<?php echo $silencedid;?>)">
										<i class="icon-trash icon-white"></i> 
										删除
									</a>
									
								</td>
							</tr>
<?php 	}?>
						  </tbody>
					  </table>  
			<script type="text/javascript">
				function deleteSilenced(silencedid)
				{

					$.getJSON('operation.php?method=deleteSilenced&silencedid='+silencedid,[],function(data){

					});
					location.reload();			
				}
			</script>


<?php
}


function do_html_change_password_content_admin()
{
?>
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">主页</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">修改密码</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> 修改密码</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form action="./change_password_handle.php" class="form-horizontal" method="post">
						  <fieldset>
							 
						 <div class="control-group warning">
								<label class="control-label" for="inputWarning">原密码</label>
								<div class="controls">
								  <input name="old" type="password" id="oldPassword">
								  
								</div>
							  </div>
							  <div class="control-group error">
								<label class="control-label" for="inputError">新密码</label>
								<div class="controls">
								  <input name="new" type="password" id="newPassword">
								 
								</div>
							  </div>
							  <div class="control-group success">
								<label class="control-label" for="inputSuccess">确认密码</label>
								<div class="controls">
								  <input name="renew" type="password" id="renewPassword">
								</div>
							  </div>
							<div class="form-actions">
							  <button name="chg_submit" type="submit" class="btn btn-primary">提交</button>
							  <button name="chg_concel" type="reset" class="btn">取消</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


			 
		 
    
					<!-- content ends -->
			</div><!--/#content.span10-->
<?php
}

function do_html_delete_comment_content_admin()
{
?>
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">主页</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">删除恶意评论</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> 删除恶意评论</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php do_html_delete_comment_table_admin();?>         
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			 
			
			 
		 
    
					<!-- content ends -->
			</div><!--/#content.span10-->
<?php	
}

function do_html_delete_comment_table_admin()
{
?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>可能是恶意评论</th>
								  <th>评论用户</th>
								  <th>评论时间</th>
								   
								  <th>操作</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php 
	$info_array = select_bad_comment();
	$count = $info_array['count'];
	for($i=0; $i<$count; $i++ )
	{
		$commenttext = $info_array[$i]['COMMENTTEXT'];
		$userid = $info_array[$i]['USERID'];
		$commenttime = $info_array[$i]['COMMENTTIME'];
		$commentid = $info_array[$i]['COMMENTID'];

?>
							<tr>
								<td><?php echo $commenttext;?></td>
								<td class="center"><?php echo getUsernameByUserid($userid);?></td>
								<td class="center"><?php echo $commenttime;?></td>
								 
								<td class="center">
									<a name="agree" class="btn btn-success" href="#" onclick="normalComment(<?php echo $commentid;?>)">
										<i class="icon-zoom-in icon-white"></i>  
										通过                                            
									</a>								 
									<a name="delete" class="btn btn-danger" href="#" onclick="abnormalComment(<?php echo $commentid;?>)">
										<i class="icon-trash icon-white"></i> 
										删除
									</a>
								</td>
							</tr>
<?php } ?>
						  </tbody>
					  </table>

<?php 
}

function do_html_all_comment_content_admin()
{
?>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">主页</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">评论列表</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>评论列表</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
          				<?php do_html_all_comment_table_admin();?> 
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			 
			
			 
		 
    
					<!-- content ends -->
			</div><!--/#content.span10-->
<?php
}
function do_html_all_comment_table_admin()
{
?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>评论</th>
								  <th>用户</th>
								  <th>时间</th>
								  <th>操作</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php 
	$info_array = select_all_comment_by_commentstatus(1);
	$count = $info_array['count'];
	for($i=0; $i<$count; $i++ )
	{
		$commenttext = $info_array[$i]['COMMENTTEXT'];
		$userid = $info_array[$i]['USERID'];
		$commenttime = $info_array[$i]['COMMENTTIME'];
		$commentid = $info_array[$i]['COMMENTID'];
?>
						    <tr>
								<td><?php echo $commenttext;?></td>
								<td class="center"><?php echo getUsernameByUserid($userid);?></td>
								<td class="center"><?php echo $commenttime;?></td> 
								<td class="center">							 
									<a name="delete" class="btn btn-danger" href="#" onclick="abnormalComment(<?php echo $commentid;?>)">
										<i class="icon-trash icon-white"></i> 
										删除
									</a>
								</td>
							</tr>
<?php } ?>
						  </tbody>
					  </table> 
<?php
}

function do_html_all_video_content_admin()
{
?>
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">主页</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">视频列表</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> 视频列表</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
           				<?php do_html_all_video_table_admin();?>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			 
			
			 
		 
    
					<!-- content ends -->
			</div><!--/#content.span10-->
<?php
}
function do_html_all_video_table_admin()
{//bug
?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>视频名称</th>
								  <th>视频状态</th>
								  <th>上传者</th>
								  <th>上传时间</th>	   
								  <th>操作</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php 
	$info_array = select_video_by_videostatus_except(-2);
	$count = $info_array['count'];
	for($i=0; $i<$count; $i++ )
	{

?>
						    <tr>
								<td><a href="../user/video-detail-2.php?videoid=<?php echo $info_array[$i]['VIDEOID'];?>"> <?php echo $info_array[$i]['VIDEONAME'];?></a></td>
								<td class="center"><?php echo $info_array[$i]['VIDEOSTATUS'];?></td>
								<td class="center"><?php echo getUsernameByUserid($info_array[$i]['USERID']);?></td>
								<td class="center"><?php echo $info_array[$i]['UPLOADTIME']?></td>
								<td class="center">
								<a name="delete" class="btn btn-danger" href="#" onclick="nopass(<?php echo $info_array[$i]['VIDEOID']?>);">
							    <i class="icon-trash icon-white"></i> 
										删除
									</a>
								</td>
							</tr>
<?php } ?>
						  </tbody>
					  </table> 
<?php
}

function do_html_all_user_content_admin()
{
?>
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">主页</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">用户列表</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> 用户列表</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
           				<?php do_html_all_user_table_admin();?>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			 
			
			 
		 
    
					<!-- content ends -->
			</div><!--/#content.span10-->

<?php
}
function do_html_all_user_table_admin()
{
?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>用户ID</th>
								  <th>用户名</th>
								  <th>用户状态</th>	   
								  <th>禁言操作</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php
	$info_array = select_all_user();
	$count = $info_array['count'];
	for ($i=0; $i<$count; $i++)
	{
		$userid = $info_array[$i]['USERID'];
		$username = $info_array[$i]['USERNAME'];
		$userstatus = $info_array[$i]['USERSTATUS'];

?>
							<tr>
								<td><?php echo $userid;?></td>
								<td class="center"><?php echo $username;?></td>
								<td class="center"><?php echo $userstatus;?></td>
								<td class="center">
								<a name="sil_1" class="btn btn-danger" href="#" onclick="silenceUser(<?php echo $userid;?>,1)">
							    <i class="icon-trash icon-white"></i> 
										禁言1天
									</a>
								<a name="sil_7" class="btn btn-danger" href="#" onclick="silenceUser(<?php echo $userid;?>,2)">
							    <i class="icon-trash icon-white"></i> 
										禁言7天
									</a>
								<a name="sil_30" class="btn btn-danger" href="#" onclick="silenceUser(<?php echo $userid;?>,3)">
							    <i class="icon-trash icon-white"></i> 
										禁言30天
									</a>
								<a name="sil_f" class="btn btn-danger" href="#" onclick="silenceUser(<?php echo $userid;?>,4)">
							    <i class="icon-trash icon-white"></i> 
										永久禁言
									</a>
								<a name="release" class="btn btn-success" href="#"  onclick="releaseUser(<?php echo $userid;?>,4)">
										<i class="icon-zoom-in icon-white"></i>  
										解除禁言                                            
									</a>
								</td>
							</tr>
<?php 	}?>
<script type="text/javascript">
	function silenceUser(userid, timetype){
		$.get("operation.php?method=silenceUser&userid="+userid+"&timetype="+timetype , [], function(data){
			if(data!="")
				alert(data);
		}
			
			);
		location.reload();
	}

	function releaseUser(userid){
		$.get("operation.php?method=releaseUser&userid="+userid, [], function(data){
			if(data!="")
				alert(data);
		}
			
			);
		location.reload();
	}
</script>
							
						  </tbody>
					  </table> 
<?php
}


?>