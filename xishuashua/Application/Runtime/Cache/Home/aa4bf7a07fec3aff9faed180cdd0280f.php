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
        <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：<?php echo ($_SESSION['admin']); ?></a>
        </li>
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
              <li ><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/personal/user_update">修改个人信息</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-book"></span>企业账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
            <ul>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/user_list">企业用户管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/input_list">企业投标管理</a></li>
              <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/news">企业文章管理</a></li>
                <li><a href="/h5_2014_xishuashua/xishuashua/index.php/Home/company/case">装修案例管理</a></li>
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
          <li><a href="#">招/投标</a></li>
          <li class="active">招标管理</li>
        </ol>
        <div class="table-responsive ">
          <h3>招标管理列表 <small>Personal Put List</small></h3>
           <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
            <tr>
              <th width="3%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
              <th width="6%">CID</th>
              <th width="6%">商家ID</th>
              <th width="20%">说明</th>
              <th width="10%">成交价格</th>
              <th width="15%">户型</th>
              <th width="10%">点赞数</th>
              <th width="15%">标签</th>
              <th width="15%">操作</th>
            </tr>
            <tr>
              <td><input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox"></label></td>
              <td>p01</td>
              <td>z01</td>
              <td>c01</td>
              <td>18888元</td>
              <td>美自然之家</td>
              <td>4008208820</td>
              <td>保证完成任务</td>
             
              <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
            </tr>
             <tr>
              <td><input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox"></label></td>
              <td>p01</td>
              <td>z01</td>
              <td>c01</td>
              <td>18888元</td>
              <td>美自然之家</td>
              <td>4008208820</td>
              <td>保证完成任务</td>
              
              <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
            </tr>
          </table>
        </div>
        <div class="input-group pull-left form">
          <button type="submit" class="btn btn-danger "> 删 除</button>
        </div>
        <ul class="pagination pull-right" >
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
  </div>
          
  
</div>
<script src="js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>



</div>
<script src="/h5_2014_xishuashua/xishuashua/Public/home/js/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>