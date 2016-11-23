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
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/user_list">管理员信息管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/publish_news">发布新闻管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/manage_news">管理新闻管理</a></li>                
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/add">添加管理员</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/user_update">修改管理员信息</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/password_update">修改管理员密码</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/update_news">修改新闻信息</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-file"></span>个人账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/user_list">个人用户信息管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/put_list">个人招标管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/news">个人文章管理</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/user_update">修改个人信息</a></li>
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
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">管理员帐户管理</a></li>
    	    <li class="active">修改新闻信息</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>新闻信息修改 <small>News Modify</small></h3>
    	    <div class="list-group form">
          <form enctype="multipart/form-data" class="form-horizontal" role="form">
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">新闻标题</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">发布时间</label>
              <div class="col-sm-10"><input type="input" class="form-control" id="inputEmail3" placeholder="2014-12-22" ></div>
            </div>
           
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">发布人/作者</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" id="inputEmail3" placeholder="张明亮">
              </div>
            </div>
           
          
            <div class="list-group-item">
               <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
              <div class="col-sm-10">
                
                <textarea id="editor_id" name="content" style="width:90%;height:300px;">
&lt;strong&gt;HTML内容&lt;/strong&gt;
</textarea>
              </div>
            </div>
            <div class="list-group-item">
              <div class="col-sm-offset-2 col-sm-5">
              <div class="row">
              <div class=" col-sm-5">
                <button type="submit" class="btn btn-primary">添 加 新 闻</button>
              </div>
              <div class=" col-sm-5">
                <button type="submit" class="btn btn-warning">重 置 内 容</button>
              </div>
              </div>
              </div>
            </div>
          </form>
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