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
                           style="color:rgb(35,99,0);border-bottom:1px dashed rgb(35,99,0);"><?php echo ($_SESSION['p_name']); ?></a><span
                            class="bar-text">&nbsp;&nbsp;欢迎你</span>
                     </span>
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown">
                            个人中心
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu ac" role="menu" id="mymenu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="grzx.html">我的招标</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="grzx.html">我的预约</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="zxrj.html">我的论坛</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html">退出</a></li>
                        </ul>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>喜刷刷家装线上交流平台</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/center.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/hanziqiang.css"/>
    <link rel="stylesheet" href="css/xq_navbar.css"/>
    <link rel="stylesheet" href="css/xq.css"/>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>

<div class="containter">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="row">
            <div class="col-md-2 nobo">
                <a href="index.html"><img src="images/logo.png" style="height:50px; width:73%;padding-left: 1.6em "></a>
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
<!--content 1-->
<div class="container">
    <div style="padding-top:3.5em;">
        <h1 class="contitle">公司详情 · <span>Company Introduction</span></h1>
    </div>
    <div class="row con1">
        <div class="col-md-8">
            <div class="col-md-12">
                <h1>
                    简家家装装饰有限公司
                </h1>
                <ul class="message">
                    <li>负责人：李小姐</li>
                    <li>负责人电话：XXXXXXXXXX</li>
                    <li>公司邮箱：xxx-xxx-xxxx@163.com</li>
                    <li>公司地址：石家庄市 裕华区 裕华路 河北师大新校区内</li>
                    <li>
                        公司简介：简家家装装饰有限公司创建于2004年，至今已逾12年之久。从创建公司以来简家不懈努力，精益求精，致力于给所有选择简家的客户带来更高品质的生活。如今的简家，拥有独立专业设计团队和装修团队，以及稳定的供货渠道，值得您的选择！
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="head">
                <img src="images/cp_head.jpg" alt="cp_head"/>
                <button class="smbtn"><span class="glyphicon glyphicon-earphone"></span>立即预约</button>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div>
        <h1 class="contitle" style="padding-top:3.5em;">成功案例 · <span>Success Demo</span></h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="add">
                <ul class="acc1">
                <li>
                    <div class="row ad1">
                        <div class="col-md-10">
                            <h3>【简约欧式 100平米 100k】 卓达青年之邦</h3>
                    </div>
                        <div class="col-md-2 ">
                            <button type="button" class="btn btn-link btn-lg tubo">
                                <span class="glyphicon glyphicon-heart"></span> 11987
                            </button>
                        </div>
                    </div>
                </li>
                <li class="wen">
                    项目地址：石家庄市裕华区 裕华路 河北师范大学新校区内
                </li>
                <li class="wen">
                    联系人：李小姐
                </li>
                <li class="wen">
                    可联系时间：09:00-23:00
                </li>
                    <li class="wen">
                        <img src="images/roll01.jpg" alt="01" style="margin-right:10px;">
                        <img src="images/roll02.jpg" alt="02" style="margin-right:10px;">
                        <img src="images/roll03.jpg" alt="03" style="margin-right:10px;">
                    </li>
                <li>
                    <div class="row">
                        <div class="col-md-10">
                    </div>
                        <div class="col-md-2">
                            <button type="button" class="btn  btn-link annv">查看详情</button>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            <div class="add">
                <ul class="acc1">
                <li>
                    <div class="row ad1">
                        <div class="col-md-10">
                            <h3>【简约欧式 100平米 100k】 卓达青年之邦</h3>
                    </div>
                        <div class="col-md-2 ">
                            <button type="button" class="btn btn-link btn-lg tubo">
                                <span class="glyphicon glyphicon-heart"></span> 11987

                            </button>
                        </div>
                    </div>
                </li>
                <li class="wen">
                    项目地址：石家庄市裕华区 裕华路 河北师范大学新校区内
                </li>
                <li class="wen">
                    联系人：李小姐
                </li>
                <li class="wen">
                    可联系时间：09:00-23:00
                </li>
                    <li class="wen">
                        <img src="images/roll01.jpg" alt="01" style="margin-right:10px;margin-bottom:10px;">
                        <img src="images/roll02.jpg" alt="02" style="margin-right:10px;margin-bottom:10px;">
                        <img src="images/roll03.jpg" alt="03" style="margin-right:10px;margin-bottom:10px;">
                    </li>
                <li>
                    <div class="row">
                        <div class="col-md-10">
                    </div>
                        <div class="col-md-2">
                            <button type="button" class="btn  btn-link annv">查看详情</button>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
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
        <img src="images/ewm.gif" alt="erweima"/>
    </div>
</div>
<div class="row cori">
    <div class="col-md-12">
        <p>喜刷刷家装在线交流平台版权所有<br/>
            Copyright © 2008－2016 All Rights Reserved . 网站备案：冀ICP备xxxxxxxx</p>
    </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
<script src="js/xq_navbar.js"></script>
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