<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>喜刷刷家装后台管理中心</title>
<link rel="stylesheet" href="/xishuashua/Public/home/css/bootstrap.css">
<link href="/xishuashua/Public/home/css/jquery-ui.css" rel="stylesheet">
<link href="/xishuashua/Public/home/css/mystyle.css" rel="stylesheet">
<script src="/xishuashua/Public/home/js/jquery.js"></script>    
<script src="/xishuashua/Public/home/js/bootstrap.min.js"></script>
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
     <img src="/xishuashua/Public/home/images/logo.png" >
    <span class="navbar-logo" > 喜刷刷家装后台管理中心</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav> 

	<div class="row">
      <div class=" col-md-2 sidebar">
        <div id="accordion">
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>管理员账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
           <ul>
              <li ><a href="/xishuashua/index.php/Home/admin/user_list">管理员信息管理</a></li>
              <li><a href="/xishuashua/index.php/Home/admin/publish_news">发布新闻管理</a></li>
              <li><a href="/xishuashua/index.php/Home/admin/manage_news">管理新闻管理</a></li>                
              <li ><a href="/xishuashua/index.php/Home/admin/add">添加管理员</a></li>
              <li ><a href="/xishuashua/index.php/Home/admin/user_update">修改管理员信息</a></li>
              <li ><a href="/xishuashua/index.php/Home/admin/password_update">修改管理员密码</a></li>
              <li ><a href="/xishuashua/index.php/Home/admin/update_news">修改新闻信息</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-file"></span>个人账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li ><a href="/xishuashua/index.php/Home/admin/user_list">个人用户信息管理</a></li>
              <li><a href="/xishuashua/index.php/Home/admin/put_list">个人招标管理</a></li>
              <li><a href="/xishuashua/index.php/Home/admin/news">个人文章管理</a></li>
              <li ><a href="/xishuashua/index.php/Home/admin/user_update">修改个人信息</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-book"></span>企业账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li><a href="company_user_list.html">企业用户管理</a></li> 
              <li><a href="company_input_list.html">企业投标管理</a></li>
              <li><a href="company_news.html">企业文章管理</a></li>
              <li ><a href="company_user_update.html">修改企业信息</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>关键字管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li ><a href="tag.html">标签管理</a></li>
              <li ><a href="roomtype.html">户型管理</a></li>
              <li ><a href="prices.html">价格管理</a></li>
          </ul>
        </div>
      </div>

        
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">管理员账户管理</a></li>
    	    <li class="active">添加管理员</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>添加管理员 <small>Administrator Add</small></h3>
    	    <div class="list-group ">
    	      <div class="list-group-item">
    	        <form role="form" >
    	          <div class="input-group"> <span class="input-group-addon">用<img src="/xishuashua/Public/home/images/em.png" alt="" width="6" height="20">户<img src="/xishuashua/Public/home/images/em.png" alt="" width="6" height="20">名：</span>
    	            <input type="text" class="form-control" placeholder="" >
  	            </div>
                <div class="input-group"> <span class="input-group-addon">设置密码：</span>
    	            <input type="text" class="form-control" placeholder="123456" >
  	            </div>
                <div class="input-group"> <span class="input-group-addon">确认密码：</span>
    	            <input type="text" class="form-control" placeholder="123456" >
  	            </div>
                <div class="input-group"> <span class="input-group-addon">电子邮箱：</span>
                  <input type="text" class="form-control" placeholder="">
                </div>
    	          <div class="input-group">
    	            <button type="submit" class="btn btn-success "> &nbsp;&nbsp;添<img src="/xishuashua/Public/home/images/em.png" alt="" width="20" height="20">加&nbsp;&nbsp;</button>
  	            </div>
  	          </form>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
	</div>
        	
	



</div>
<script src="/xishuashua/Public/home/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>