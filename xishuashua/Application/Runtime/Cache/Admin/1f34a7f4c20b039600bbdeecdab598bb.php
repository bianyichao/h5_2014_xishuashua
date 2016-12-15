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

<!DOCTYPE html>
<html>
<head>
    <title>家装招标</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index-byc.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/hanziqiang.css"/>
    <link rel="stylesheet" type="text/css" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/lanrenzhijia.css">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq_navbar.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq.css"/>

    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery-2.1.4.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/bootstrap.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/scripts.js"></script>


</head>
<body>


<!--content-->
<div class="container">
    <div class="gs5">
        <h1 class="contitle" style="padding-bottom:0%">&nbsp;&nbsp;
            家装招标<span> · Decoration Tender</span>
            <p></p>
    </div>


    <div class="row" style="margin-bottom:1%;border-bottom:2px solid rgb(35,100,0)">
        <div class="col-md-3">
        </div>
        <div class="col-md-2 zp1">
            <div class="row">
                <div class="col-md-6 zp3">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;招标情况:</p>
                </div>
                <div class="col-md-6 zp4">

                    <select name="space">
                        <option>竞标中</option>
                        <option>已中标</option>
                        <option>待投标</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-2 zp1">
            <div class="row">
                <div class="col-md-6 zp3">
                    <p>&nbsp;&nbsp;&nbsp;风格:</p>
                </div>
                <div class="col-md-6 zp4">
                    <select name="space">
                        <option>美式风格</option>
                        <option>简约风格</option>
                        <option>田园风格</option>
                        <option>后现代风格</option>
                        <option>中式风格</option>
                        <option>地中海风格</option>
                        <option>日式风格</option>
                        <option>古典风格</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-2 zp1">
            <div class="row">
                <div class="col-md-6 zp3">
                    <p>&nbsp;&nbsp;&nbsp;户型:</p>
                </div>
                <div class="col-md-6 zp4">
                    <select name="space">
                        <option>一室一厅</option>
                        <option>两室一厅</option>
                        <option>两室两厅</option>
                        <option>三室两厅</option>
                        <option>四室两厅</option>
                        <option>其他</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-2 zp1">
            <div class="row">
                <div class="col-md-6 zp3">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;预期价格:</p>
                </div>
                <div class="col-md-6 zp4">
                    <select name="space">
                        <option>20k</option>
                        <option>25k</option>
                        <option>30k</option>
                        <option>35k</option>
                        <option>40k</option>
                        <option>45k</option>
                        <option>50k</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn  btn-default zp2" style="height:30px;width:90%;margin-top:45%"><span
                    class="glyphicon glyphicon-search"></span></button>

        </div>

    </div>


    <div>
        <div class="row">


            <div class="col-md-3 zp6 ">
                <div class="widnow">
                    <form action="/h5_2014_xishuashua/xishuashua/index.php/Admin/tender/doAdd" method="post" id="d" name="tender">
                        <div class="wdo_sty">
                            <ul class="specialul">

                                <li>
                                    <p>风&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格:</p>
                                    <select name="pu_style">
                                        <option>美式风格</option>
                                        <option>简约风格</option>
                                        <option>田园风格</option>
                                        <option>后现代风格</option>
                                        <option>中式风格</option>
                                        <option>地中海风格</option>
                                        <option>日式风格</option>
                                        <option>古典风格</option>
                                    </select>
                                </li>

                                <li>
                                    <p>户&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型:</p>
                                    <select name="pu_roomtype">
                                        <option>一室一厅</option>
                                        <option>两室一厅</option>
                                        <option>两室两厅</option>
                                        <option>三室两厅</option>
                                        <option>四室两厅</option>
                                        <option>其他</option>
                                    </select>
                                </li>
                                <li>
                                    <p>期望价格:</p>
                                    <select name="pu_exprices">
                                        <option>20k</option>
                                        <option>25k</option>
                                        <option>30k</option>
                                        <option>35k</option>
                                        <option>40k</option>
                                        <option>45k</option>
                                        <option>50k</option>
                                    </select>
                                </li>
                                <li>
                                    <input type="hidden" name="p_name"
                                           value="<?php echo ($_SESSION['p_name']); ?>">
                                    <p>房产地址:</p>
                                    <input type="text" name="pu_address" placeholder="请填写房产所属房产公司、楼盘及期数"/>

                                </li>
                                <input type="hidden" name="pu_inputtime" value="" id="date">
                                <li>
                                    <input type="hidden" name="state"
                                           value="0">
                                    <p>联系电话:</p>
                                    <input type="text" name="pu_tel" placeholder="请填写手机号"/>

                                </li>
                                <li class="textarea_li">
                                    <p>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</p>
                                    <textarea name="pu_remark"></textarea>

                                </li>
                                <li>
                                    <div class="zp5">
                                        <button type="submit" class="btn btn-success">添加招标</button>
                                    </div>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>

            </div>

            <div class="col-md-9 zhaobiao-list">
                <?php if(is_array($tender)): $i = 0; $__LIST__ = $tender;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="add">
                    <div class="row ad1">
                        <div class="col-md-8">
                            <h3 style="color:rgb(35,100,0);">
                                &nbsp;&nbsp;&nbsp;
                                【<?php echo ($d["pu_remark"]); ?>】-<?php echo ($d["pu_exprices"]); ?> </h3>
                        </div>
                        <div class="col-md-4" style="text-align:right;padding-right:5%">
                            <span class="glyphicon glyphicon-fire" style="color:orange"></span>
                            <span class="glyphicon glyphicon-fire" style="color:orange"></span>
                            <span class="glyphicon glyphicon-fire" style="color:orange"></span>
                            <span class="glyphicon glyphicon-fire" style="color:orange"></span>
                            <p class="tag-right">竞标中</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul class="acc1">
                            <li>

                            </li>
                            <li class="wen">
                                <span class="glyphicon glyphicon-tag" style="color:rgb(35,100,0)"></span>
                                <p>预期价格：<?php echo ($d["pu_exprices"]); ?></p>
                            </li>
                            <li class="wen">
                                <span class="glyphicon glyphicon-user" style="color:rgb(35,100,0)"></span>
                                <p>联系人：<?php echo ($d["p_name"]); ?></p>

                            </li>
                            <li class="wen">
                                <span class="glyphicon glyphicon-time" style="color:rgb(35,100,0)"></span>
                                <p>发布时间：<?php echo ($d["pu_inputtime"]); ?></p>
                            </li>
                            <li class="wen">
                                <div class="row" style="text-align:left">
                                    &nbsp;&nbsp;
                                    <p style="color:gray;padding-top:20%"> &nbsp;已有<em class="people"> <?php echo ($d["pu_sum"]); ?> </em>公司看过
                                    </p>&nbsp;


                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul id="zhaobiao-tag">
                            <li>状态：新房子</li>
                            <li>户型：<?php echo ($d["pu_roomtype"]); ?></li>
                            <li>风格：<?php echo ($d["pu_style"]); ?></li>
                            <li>地址：<?php echo ($d["pu_address"]); ?></li>
                        </ul>

                    </div>
                    <div class="col-md-12" style="text-align:right;padding-bottom:2%;padding-right:5%">
                        <button type="button" class="btn  btn-link annv"><a href="jzzp-xq.html">立即投标</a></button>
                        <button type="button" class="btn  btn-link annv"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/personal/jzzp_xq/pu_id/<?php echo ($d["pu_id"]); ?>">查看详情</a></button>
                    </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>


                <!--结束-->
            </div>
            <div>
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

</div>


</div>
</div>
</body>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/lanrenzhijia.js"></script>
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

    var mydate=new Date();
    var date=document.getElementById("date");
    date.value=mydate.toLocaleDateString( );
    //alert(date.value);

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