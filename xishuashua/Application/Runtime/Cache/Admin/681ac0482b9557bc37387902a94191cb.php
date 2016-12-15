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
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/index/index-du">首页</a></li>
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


<!--content-->
<!--content 1-->

<div class="row con con-one">
    <div style="width:90%;margin-left: 5%;margin-bottom: 1em;margin-top: 1em;">
        <div class="col-md-4" style="height:40px; border-bottom: 1px dashed #3e8f3e;width: 35%"></div>
        <div class="col-md-4" style="width:30%;">
            <h1 class="contitle">
                · 装饰公司 · <span>Decoration Company</span> ·
            </h1>
        </div>
        <div class="col-md-4" style="height:40px; border-bottom: 1px dashed #3e8f3e;width: 35%"></div>
    </div>

    <div class="col-md-12 cm12">
        <div class="col-md-3">
            <div class="col-md-12">
                <a href=""><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/cm401.jpg" alt="cm401"/></a>
                <h2><a href="">简家家装装饰有限公司</a></h2>
                <p>联系人 xxx-xxx-xxxx 李小姐</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="col-md-12">
                <a href=""><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/cm401.jpg" alt="cm401"/></a>
                <h2><a href="">简家家装装饰有限公司</a></h2>
                <p>联系人 xxx-xxx-xxxx 李小姐</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="col-md-12">
                <a href=""><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/cm401.jpg" alt="cm401"/></a>
                <h2><a href="">简家家装装饰有限公司</a></h2>
                <p>联系人 xxx-xxx-xxxx 李小姐</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="col-md-12">
                <a href=""><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/cm401.jpg" alt="cm401"/></a>
                <h2><a href="">简家家装装饰有限公司</a></h2>
                <p>联系人 xxx-xxx-xxxx 李小姐</p>
            </div>
        </div>
    </div>
</div>
<!--content 2-->
<div class="con-one" style="padding-top:0%;padding-bottom:0%">
    <div style="width:90%;margin-left: 5%;margin-bottom: 2em;">
        <div class="col-md-4" style="height:40px; border-bottom: 1px dashed #3e8f3e;width: 35%"></div>
        <div class="col-md-4" style="width:30%;">
            <h1 class="contitle">
                · 新闻资讯 · <span>News Information</span> ·
            </h1>
        </div>
        <div class="col-md-4" style="height:40px; border-bottom: 1px dashed #3e8f3e;width: 35%"></div>
    </div>
</div>
<div class="row con con-two">
    <div class="col-md-6">
        <h1 class="contitle">&nbsp;&nbsp;&nbsp;
            家装招标 · <span>Home Tender </span></h1>
        <div class="col-md-12 cm12" style="padding-left:10%;padding-bottom:10%">
            <div class="uldiv">
                <div class="datepic">
                    <h3>03</h3>
                    <h4>15</h4>
                </div>
                <div class="lidiv">
                    <a href="">【简约欧式 100平米 100k】卓达青年之邦</a>
                    <p>项目地址：石家庄市 裕华区 裕华路 河北师大新校区内<br/>
                        联系人：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="uldiv">
                <div class="datepic">
                    <h3>04</h3>
                    <h4>17</h4>
                </div>
                <div class="lidiv">
                    <a href="">【复古欧式 200平米 500k】水榭花都花园洋房二期</a>
                    <p>项目地址：石家庄市 裕华区 裕华路 河北师大新校区内<br/>
                        联系人：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="uldiv">
                <div class="datepic">
                    <h3>05</h3>
                    <h4>19</h4>
                </div>
                <div class="lidiv">
                    <a href="">【简约现代 100平米 100k】水榭花都实验中学学区房</a>
                    <p>项目地址：石家庄市 裕华区 裕华路 河北师大新校区内<br/>
                        联系人：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="uldiv">
                <div class="datepic">
                    <h3>06</h3>
                    <h4>01</h4>
                </div>
                <div class="lidiv">
                    <a href="">【简约现代 100平米 200k】卓达老年公寓</a>
                    <p>项目地址：石家庄市 裕华区 裕华路 河北师大新校区内<br/>
                        联系人：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h1 class="contitle">
            论坛推送 · <span>Forum Push </span></h1>
        <div class="col-md-12 cm12">
            <div class="uldiv">
                <div class="datepic">
                    <h3>07</h3>
                    <h4>15</h4>
                </div>
                <div class="lidiv">
                    <a href="">【po进度】这是我家的装修进度，和大家分享~</a>
                    <p><span id="a">今天是装修的第一天，师傅们看起来很专业啊！我很有信心！</span><br/>
                        帖主：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="uldiv">
                <div class="datepic">
                    <h3>08</h3>
                    <h4>16</h4>
                </div>
                <div class="lidiv">
                    <a href="">【po进度】这是我家的装修进度，和大家分享~</a>
                    <p><span id="b">初次接触家装的朋友们想必有很多迷惑的地方吧，帖主在这里给大家一些小贴士</span><br/>
                        帖主：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="uldiv">
                <div class="datepic">
                    <h3>09</h3>
                    <h4>17</h4>
                </div>
                <div class="lidiv">
                    <a href="">【进来看看吧】装修小贴士</a>
                    <p><span id="c">初次接触家装的朋友们想必有很多迷惑的地方吧，帖主在这里给大家一些小贴士</span><br/>
                        帖主：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="uldiv">
                <div class="datepic">
                    <h3>10</h3>
                    <h4>15</h4>
                </div>
                <div class="lidiv">
                    <a href="">【求加精】专业律师讲解协议书细则</a>
                    <p><span id="d">这里是从事律师行业十多年的市里某律师所律师长，应邀来给大家讲解一下与家装公司</span><br/>
                        帖主：李小姐</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!--content 3-->
<div class="row con" style="padding-top:0%;padding-bottom:0%;">
    <div style="width:90%;margin-left: 5%;margin-bottom: 1em;">
        <div class="col-md-4" style="height:40px; border-bottom: 1px dashed #3e8f3e;width: 35%"></div>
        <div class="col-md-4" style="width:30%;">
            <h1 class="contitle">
                · 精品案例 · <span>Competitive Products</span> ·
            </h1>
        </div>
        <div class="col-md-4" style="height:40px; border-bottom: 1px dashed #3e8f3e;width: 35%"></div>
    </div>

    <div class="box">
        <div class="lest">
            <div class="box1">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/1.jpg" alt=""/></a>
            </div>
            <div class="box2">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/2.jpg" alt=""/></a>
            </div>
            <div class="box3">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/3.jpg" alt=""/></a>
            </div>
            <div class="box4">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/4.jpg" alt=""/></a>
            </div>
            <div class="box5">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/5.jpg" alt=""/></a>
            </div>
            <div class="box6">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/6.jpg" alt=""/></a>
            </div>
            <div class="box7">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/1.jpg" alt=""/></a>
            </div>
            <div class="box8">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/2.jpg" alt=""/></a>
            </div>
            <div class="box9">
                <a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/3.jpg" alt=""/></a>
            </div>
        </div>
    </div>
</div>



<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/lanrenzhijia.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery.min.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/bootstrap.min.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/scripts.js"></script>
</body>
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