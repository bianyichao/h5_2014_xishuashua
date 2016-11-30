<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>喜刷刷家装后台管理中心</title>
<link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/home/css/bootstrap.css">
<link href="/h5_2014_xishuashua/xishuashua/Public/home/css/jquery-ui.css" rel="stylesheet">
<link href="/h5_2014_xishuashua/xishuashua/Public/home/css/mystyle.css" rel="stylesheet">
<script src="/h5_2014_xishuashua/xishuashua/Public/home/js/jquery.js"></script>    
<script src="/h5_2014_xishuashua/xishuashua/Public/home/js/bootstrap.min.js"></script>
<style type="text/css">
  .sidebar{
    background-color: rgb(35,100,0);
  }
  .ui-accordion-header{
    background-color: #008800;
    border: white;
  }
  .ui-accordion-content{
    background-color: #009900;
    border: white;
  }
</style>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
     <img src="/h5_2014_xishuashua/xishuashua/Public/home/images/logo.png" >
    <span class="navbar-logo" > 喜刷刷家装后台管理中心</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：<?php echo ($_SESSION['admin']); ?></a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav> 

	<div class="row">
      <div class=" col-md-2 sidebar">
        <div id="accordion">
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>管理员账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
           <ul>
               <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/lists">管理员信息管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/publish_news">发布新闻管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/manage_news">管理新闻管理</a></li>                
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/add">添加管理员</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/password_update">修改管理员密码</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-file"></span>个人账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/user_list">个人用户信息管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/put_list">个人招标管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/news">个人文章管理</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-book"></span>企业账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/user_list">企业用户管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/input_list">企业投标管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/news">企业文章管理</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/user_update">修改企业信息</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>关键字管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/tag/tag">标签管理</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/tag/roomtype">户型管理</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/tag/prices">价格管理</a></li>
          </ul>
        </div>
      </div>

        
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="main.html">首页</a></li>
    	    <li><a href="#">个人帐户管理</a></li>
    	    <li class="active">修改个人帐户信息</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>个人帐户修改 <small>Personal Modify</small></h3>
    	    <div class="list-group ">
    	      <div class="list-group-item">
    	        <form role="form" action="" method="post" >
                <input type="hidden" name="p_id" value="<?php echo ($a["p_id"]); ?>">
    	          <div class="input-group"> <span class="input-group-addon">用<img src="/h5_2014_xishuashua/xishuashua/Public/home/images/em.png" alt="" width="6" height="20">户<img src="/h5_2014_xishuashua/xishuashua/Public/home/images/em.png" alt="" width="6" height="20">名：</span>
    	            <input type="text" class="form-control" placeholder="administrator" name="p_name" value="<?php echo ($a["p_name"]); ?>">
  	            </div>
                <div class="input-group"> <span class="input-group-addon">旧密码：</span>
                  <input type="text" class="form-control" placeholder=""  value="<?php echo ($a["p_pwd"]); ?>">
                </div>
                <div class="input-group"> <span class="input-group-addon">新密码：</span>
                  <input type="text" class="form-control" placeholder="" name="p_pwd">
                </div>
                <div class="input-group"> <span class="input-group-addon">确认新密码：</span>
                  <input type="text" class="form-control" placeholder="" name="repwd">
                </div>
    	          <div class="input-group"> <span class="input-group-addon">电子邮箱：</span>
    	            <input type="text" class="form-control" placeholder="" name="p_email" value="<?php echo ($a["p_email"]); ?>">
  	            </div>
                <div class="input-group"> <span class="input-group-addon">联系电话：</span>
                  <input type="text" class="form-control" placeholder="152*****237" name="p_tel" value="<?php echo ($a["p_tel"]); ?>">
                </div>
    	          <div class="input-group">
    	            <button type="submit" class="btn btn-primary "> &nbsp;&nbsp;保<img src="/h5_2014_xishuashua/xishuashua/Public/home/images/em.png" alt="" width="20" height="20">存&nbsp;&nbsp;</button>
  	            </div>
  	          </form>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
	</div>
        	
	




</div>
<script src="/h5_2014_xishuashua/xishuashua/Public/home/js/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>