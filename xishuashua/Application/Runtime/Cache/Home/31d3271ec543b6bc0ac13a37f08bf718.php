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
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>关键字管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/tag/tags">标签管理</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/tag/roomtype">户型管理</a></li>
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/tag/prices">价格管理</a></li>
          </ul>
        </div>
      </div>

        
      <div class="col-md-10 col-md-offset-2 ">
        <ol class="breadcrumb">
          <li><a href="main.html">首页</a></li>
          <li><a href="#">管理员帐户管理</a></li>
          <li class="active">管理新闻管理</li>
        </ol>
        <div class="table-responsive ">
          <h3>新闻列表 <small>News List</small></h3>
           <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
            <tr>
              <th width="4%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
              <th width="10%">ID</th>
              <th width="15%">新闻标题</th>
              <th width="10%">发布者/作者</th>            
              <th width="10%">发布时间</th>
              <th width="10%">点击量</th>
              <th width="21%">内容</th>
              <th width="17%">操作</th>
            </tr>
             <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
                  <td><input type="checkbox" name="checkbox" id="checkbox">
                    <label for="checkbox"></label></td>
                  <td><?php echo ($d["n_id"]); ?></td>
                  <td><?php echo ($d["title"]); ?></td>
                  <td><?php echo ($d["author"]); ?></td>           
                  <td><?php echo ($d["inputtime"]); ?></td>
                  <td><?php echo ($d["view"]); ?></td>
                  <td><?php echo ($d["content"]); ?></td>
                  <td><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/update_news/n_id/<?php echo ($d["n_id"]); ?>">修改</a><a href="#"></a>
                      <a href="/h5_2014_xishuashua/xishuashua/index.php/Home/admin/news_delete/n_id/<?php echo ($d["n_id"]); ?>">删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
        </div>
        <div class="input-group pull-left form">
          <a href="publish_news.html" class="btn btn-primary">添 加</a>&nbsp;
          <button type="submit" class="btn btn-danger "> 删 除</button>
        </div>
        <ul class="pagination pull-right" >
           <?php echo ($pages); ?>
        </ul>
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