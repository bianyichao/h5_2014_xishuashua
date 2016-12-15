<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>招标详细</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/mine.css" rel="stylesheet">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq_navbar.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq.css"/>
      <!--引用百度地图API-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7RBSS4pns3hYoS36LvEGhBG97wVEQlsM"></script>
  </head>
  <body>

    <div class="containter">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="row">
        <div class="col-md-2 nobo">
          <a href="index.html"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/logo.png" style="height:50px; width:73%;padding-left: 1.6em "></a>
        </div>
        <div class="col-md-7 nobo">
        <div class="xq_bag" id="bar1">
          <ul class="xq_navbar">
            <li class="xq_navli"><a href="index.html">首页</a></li>
            <li class="xq_navli"><a href="zsgs.html">装饰公司</a></li>
            <li class="xq_navli"><a href="jzzp.html">家装招标</a></li>
            <li class="xq_navli"><a href="zxrj.html">装修日记</a></li>
          </ul>
          
        </div>
        </div>
        <div class="col-md-3 nobo">
          <div class="navright1">
            <a href="dl.html" class="dl">登录</a>&nbsp;&nbsp;
            <a href="regist.html" class="regist">注册</a>
          </div>
        </div>
      </div>  
    </nav>
  </div>

<!--content-->  
<div class="container">
    <div class="row" id="row-two">
        <div class="col-md-8"> 
            <div class="text">
                <h2>【<?php echo ($a["pu_style"]); ?> <?php echo ($a["pu_roomtype"]); ?> <?php echo ($a["pu_exprices"]); ?>】</h2>
                <table class="table">
                    <tr><td>项目地址：<?php echo ($a["pu_adress"]); ?></td></tr>
                    <tr><td>期望风格：<?php echo ($a["pu_style"]); ?></td></tr>
                    <tr><td>平米数：<?php echo ($a["pu_pingmi"]); ?>平米</td></tr>
                    <tr><td>联系电话：<?php echo ($ad["p_tel"]); ?></td></tr>
                    <tr><td>业主期望：<?php echo ($a["pu_remark"]); ?></td>
                    </tr>
                </table>
                <div class="button">
                    <p>业主：<?php echo ($a["p_name"]); ?></p>
                    <p>期望价格：<?php echo ($a["pu_exprices"]); ?></p>
                    <form action="/h5_2014_xishuashua/xishuashua/index.php/Admin/personal/zt" method="post">
                    <input type="hidden" name="pu_id" value="<?php echo ($a["pu_id"]); ?>">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span>立即预约</button>
                    </form>
                </div>
            </div>               
        </div>
        <div class="col-md-4">
            <!--百度地图容器-->
            <div id="allmap"></div>
        </div>
    </div>
    </div>

<!--footer-->
    <div class="row footer">
        <div class="col-md-10">
        <ul>
            <li class="titli">相关链接</li>
            <li><a href="">河北省建材局</a></li>
            <li><a href="">河北省土木局</a></li>
            <li><a href="">东易日盛家装装饰有限公司</a></li>
            <li><a href="">乐豪家装装饰有限公司</a></li>
            <li><a href="">简家家装装饰有限公司</a></li>
        </ul>
        <ul>
            <li class="titli">网站统计</li>
            <li>总访问量：1200045 人次</li>
            <li>今日访问：20178 人次</li>
            <li>注册人数：3759 人次</li>
            <li>注册公司数：170 所</li>
            <li>新增用户：235 人次</li>
        </ul>
        <ul>
            <li class="titli">联系我们</li>
            <li>联系电话：xxx-xxx-xxxx</li>
            <li>邮编：xxxxxx</li>
            <li>电子邮箱：xxxx@xx.com</li>
            <li>公司地址：石家庄市 裕华区 裕华路 河北师大新校区内</li>
        </ul>
        </div>
        <div class="col-md-2">
        <p>扫码下载喜刷刷APP</p>
        <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ewm.gif" alt="erweima"/>
        </div>
    </div>
    <div class="row cori">
        <div class="col-md-12">
            <p>喜刷刷家装在线交流平台版权所有<br/>
            Copyright © 2008－2016  All Rights Reserved .     网站备案：冀ICP备xxxxxxxx</p>
        </div>
    </div>
</div>

    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/bootstrap.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/scripts.js"></script>
  </body>
  <script type="text/javascript">
      // 百度地图API功能
      var map = new BMap.Map("allmap");    // 创建Map实例
      map.centerAndZoom(new BMap.Point(<?php echo ($a["jingdu"]); ?>,<?php echo ($a["weidu"]); ?>), 15);  // 初始化地图,设置中心点坐标和地图级别
      map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
      map.setCurrentCity("石家庄");          // 设置地图显示的城市 此项是必须设置的
      map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
  </script>
  <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/xq_navbar.js"></script>
  <script>
    $(function(){
      $("#bar1").xq_navbar({"type":"underline","liwidth":"auto","bgcolor":"rgb(240,242,220)","hcolor":"rgb(1,175,99)"});
    });
  </script>
</html>