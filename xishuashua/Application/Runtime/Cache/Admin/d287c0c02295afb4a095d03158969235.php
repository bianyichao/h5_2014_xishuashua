<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>喜刷刷家装线上交流平台</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index-byc.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq_navbar.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style1.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index1.css"/>
    <link rel="stylesheet" type="text/css" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/lanrenzhijia.css">

    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery-2.1.4.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/text.js"></script>
    <script type="text/javascript" src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/h5_2014_xishuashua/xishuashua/Public/admin/js/index.js"></script>
</head>
<body>
<div class="containter">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="row">
            <div class="col-md-2 nobo">
                <a href="index.html"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/logo.png"
                                          style="height:50px;padding-left: 1.6em "></a>
            </div>
            <div class="col-md-7 nobo">
                <div class="xq_bag" id="bar1">
                    <ul class="xq_navbar">
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/index/index_du">首页</a></li>
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/company/zsgs">装饰公司</a></li>
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/tender/jzzp">家装招标</a></li>
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/diary/zxrj">装修日记</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-3 nobo" style="height:50px;">
                <div id="greennav2">

                    <div class="dropdown" id="dropdown">
					<span id="nav-name">
					    <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ershao.jpg" class="img-circle" style="width:2.5em;">&nbsp;&nbsp;&nbsp;

					    <a href="grzx.html"
                           style="color:rgb(35,99,0);border-bottom:1px dashed rgb(35,99,0);"><?php echo ($_SESSION['name']); ?></a><span
                            class="bar-text">&nbsp;&nbsp;欢迎你</span>
                     </span>

                       <?php if($_SESSION['tag'] == 1 ): ?><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown">
                            <a>个人中心</a>
                            <!-- <span class="caret"></span> -->
                        </button>
                     <?php else: ?>  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown">
                            <a>个人中心</a>
                            <!-- <span class="caret"></span> -->
                        </button><?php endif; ?>
                       <!--  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown">
                            <a>个人中心</a>
                            <!-- <span class="caret"></span> -->
                        </button> -->
                       <!--  <ul class="dropdown-menu ac" role="menu" id="mymenu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="grzx.html">我的招标</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="grzx.html">我的预约</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="zxrj.html">我的论坛</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html">退出</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="Aflash">
    <ul class="picUL">
        <li class="picLI" id="j-focusPic">
            <div class="picbox j-slider" style="left: -22310px;">
       <span class="j-item">
       <a href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg2.jpg"></a>
       </span>
                <span class="j-item">
       <a href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/banner_4.jpg" data-src="/h5_2014_xishuashua/xishuashua/Public/admin/images/banner_4.jpg"
                         class="loading"></a>
        </span>
                <span class="j-item">
      <a href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg1.jpg" data-src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg1.jpg"
                        class="loading"></a>
      </span>
                <span class="j-item">
      <a href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg3.jpg" data-src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg3.jpg"
                        class="loading"></a></span>
                <span class="j-item"><a href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg4.jpg"
                                                       data-src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg4.jpg"
                                                       class="loading"></a></span>
            </div>
        </li>
    </ul>
    <div class="infobtn" id="j-focusBtns">
        <div class="smalpic j-container">
            <div class="smallbox j-slider" style="left: 0px;">
                <a class="j-item" href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg2.jpg"> <b></b></a>
                <a class="j-item" href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/banner_4.jpg"> <b></b></a>
                <a class="j-item" href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg1.jpg"> <b></b></a>
                <a class="j-item" href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg3.jpg"> <b></b></a>
                <a class="j-item" href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/bg4.jpg"> <b></b></a>

            </div>
        </div>
    </div>
</div>
</div>
<!--content-->
<!--content 1-->


<html>
<head>
    <title>装饰公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/hanziqiang.css"/>
    <link rel="stylesheet" type="text/css" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/zsgs.css">
    <link rel="stylesheet" type="text/css" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/lanrenzhijia.css">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq_navbar.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq.css"/>

    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery-2.1.4.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/bootstrap.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/scripts.js"></script>
</head>
<body>

<!-- 内容部分 -->
<div class="container">

    <div>
        <h1 class="contitle">装饰公司 · <span>Decoration Company</span></h1>
    </div>
    <div>
        <!-- 筛选按钮 -->
        <div class="row zx10">
            <div class="col-md-8 zx1">
                <div class="btn-group">
                    <button type="button" class="btn btn-default">按时间排序 <span
                            class="glyphicon glyphicon-arrow-down"></span></button>
                    <button type="button" class="btn btn-default">按好评排序<span
                            class="glyphicon glyphicon-arrow-down"></span></button>
                    <button type="button" class="btn btn-default">按工程量排序<span
                            class="glyphicon glyphicon-arrow-down"></span></button>
                    <button type="button" class="btn btn-default">按信誉排序<span
                            class="glyphicon glyphicon-arrow-down"></span></button>
            </div>
            </div>
            <div class="col-md-4 zx11">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="龙发装饰">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
                    </button>
                </form>
            </div>
        </div>
        <!-- 装饰公司内容 -->

        <div class="row ">
            <?php if(is_array($company)): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="col-md-3 zx2">
                <div class="zx3">
                    <img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($d["b_picture"]); ?>" width="100%">
                    <ul class="zx6">
                        <li>
                            <div class="zx4">
                                <h3><?php echo ($d["b_name"]); ?></h3>
                            </div>
                        </li>
                        <li class="zx5">

                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/she.png" title="设计方案"> <?php echo ($d["b_sum"]); ?>套
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/gong.png" title="做工数量"> <?php echo ($d["b_person"]); ?>套
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ping.png" title="评价次数"> <?php echo ($d["b_credit"]); ?> 分
                        </li>
                        <li id="zx8">
                            <span class="glyphicon glyphicon-map-marker"
                                  style="color:rgb(35,100,0);display:inline"></span>
                            <p style="color:gray;display:inline">&nbsp;&nbsp;<?php echo ($d["b_address"]); ?></p>
                        </li>
                        <li>
                            <div id="zx9">
                                <div class="col-md-7" id="zx8">
                                    <span class="glyphicon glyphicon-user"
                                          style="color:rgb(35,100,0);display:inline"></span>
                                    <p style="color:gray;display:inline">&nbsp;<?php echo ($d["b_ename"]); ?></p>
                                </div>
                                <div class="col-md-5" style="text-align:right">
                                    <button type="button" class="btn  btn-link annv"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/company/zsgs_xq.html">查看详情</a>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

        </div>

        <div id="clear">

        </div>


        <!-- fuor -->
        <div class="zx1">
            <nav>
                <ul class="pagination pagination-lg gs7">
                    <li><a href="#">首页</a></li>
                    <li class="gs8"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">尾页</a></li>
                </ul>
            </nav>
        </div>
        <!-- 只是一个div -->
    </div>


</div>
</body>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/lanrenzhijia.js"></script>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/xq_navbar.js"></script>
<script>
    $(function () {
        $("#bar1").xq_navbar({
            "type": "underline",
            "liwidth": "auto",
            "bgcolor": "rgb(240,242,220)",
            "hcolor": "rgb(1,175,99)"
        });
    });
</script>
</html>

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
            Copyright © 2008－2016 All Rights Reserved . 网站备案：冀ICP备</p>
    </div>

</div>
</div>
</div>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin//h5_2014_xishuashua/xishuashua/Public/admin/js/lanrenzhijia.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin//h5_2014_xishuashua/xishuashua/Public/admin/js/jquery.min.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin//h5_2014_xishuashua/xishuashua/Public/admin/js/bootstrap.min.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin//h5_2014_xishuashua/xishuashua/Public/admin/js/scripts.js"></script>
</body>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin//h5_2014_xishuashua/xishuashua/Public/admin/js/xq_navbar.js"></script>
<script>
    $(function () {
        $("#bar1").xq_navbar({
            "type": "underline",
            "liwidth": "auto",
            "bgcolor": "rgb(240,242,220)",
            "hcolor": "rgb(1,175,99)"
        });
    });
</script>
</html>