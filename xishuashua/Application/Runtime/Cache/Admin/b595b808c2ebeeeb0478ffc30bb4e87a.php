<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title>喜刷刷家装线上交流平台</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index-byc.css" />
	<link rel="stylesheet" type="text/css" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/lanrenzhijia.css">
	<link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq_navbar.css"/>
	<link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq.css"/>
	<link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style1.css" />
	<link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index1.css" />
	<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery-2.1.4.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/text.js"></script>
	<script type="text/javascript" src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery-1.10.1.min.js" ></script>
	<script type="text/javascript" src="/h5_2014_xishuashua/xishuashua/Public/admin/js/index.js" ></script>
    <!--[if IE 6]>
    <script type="text/javascript">
        var blankImg = new Image();
        blankImg.src = "images/15/95b471b54f3c8f5a8fc813e905a7a85b6004.png";
    </script>
    <![endif]-->
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
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/index/index">首页</a></li>
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/company/zsgs">装饰公司</a></li>
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/tender/jzzp">家装招标</a></li>
                        <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/diary/zxrj">装修日记</a></li>
                    </ul>

                </div>
            </div>
				<div class="col-md-3 nobo">
					<div class="navright1">
						<a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/login/dl" class="dl">登录</a>&nbsp;&nbsp;
						<a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/login/regist" class="regist">注册</a>
					</div>
				</div>
			</div>	
		</nav>
	</div>
        <div class="Aflash">
            <ul class="picUL">
                <li class="picLI" id="j-focusPic">
                    <div class="picbox j-slider" style="left: -22310px;">
                          <?php if(is_array($p)): $i = 0; $__LIST__ = $p;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dd): $mod = ($i % 2 );++$i;?><span class="j-item">
                                <a href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($dd["anp_picture"]); ?>" class="loading"></a>
                          </span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
            </ul>
            <div class="infobtn" id="j-focusBtns">
                <div class="smalpic j-container">
                    

                    <div class="smallbox j-slider" style="left: 0px;">
                          <?php if(is_array($p)): $i = 0; $__LIST__ = $p;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ttt): $mod = ($i % 2 );++$i;?><a class="j-item" href="#"> <img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ttt["anp_picture"]); ?>"> <b></b></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
               
                </div>
            </div>
        </div>
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
		   <?php if(is_array($c)): $i = 0; $__LIST__ = $c;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><div class="col-md-3">
				<div class="col-md-12">
					<a href=""><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($c["b_picture"]); ?>" alt="cm401"/></a>
					<h2><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/company/zsgs_xq/b_id/<?php echo ($c["b_id"]); ?>"><?php echo ($c["b_name"]); ?></a></h2>
					<p>联系人  <?php echo ($c["b_tel"]); ?>  <?php echo ($c["b_person"]); ?></p>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
<!--content 2-->
<div class="con-one" style="padding-top:0%;padding-bottom:0%">
    <div style="width:90%;margin-left: 5%;margin-bottom: 1em;">
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
                <?php if(is_array($pp)): $i = 0; $__LIST__ = $pp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="uldiv">
			    	<div class="datepic">
			    		<h3><?php echo (substr($a["pu_inputtime"],8,2)); ?></h3>
			    		<h4><?php echo (substr($a["pu_inputtime"],5,2)); ?></h4>
			    	</div>
			    	<div class="lidiv">
			    		<a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/personal/jzzp_xq/pu_id/<?php echo ($a["pu_id"]); ?> ">【<?php echo ($a["pu_style"]); ?>  <?php echo ($a["pu_roomtype"]); ?>  <?php echo ($a["pu_exprices"]); ?>】<?php echo ($a["pu_remark"]); ?></a>
			    		<p>项目地址：<?php echo ($a["pu_adress"]); ?><br/>
			    		联系人：<?php echo ($a["p_name"]); ?></p>
			    	</div>
			    	<div class="clear"></div>
			    </div><?php endforeach; endif; else: echo "" ;endif; ?>
			    
			</div>
		</div>

		<div class="col-md-6">
		   <h1 class="contitle">
			论坛推送 · <span>Forum Push </span></h1>
            <div class="col-md-12 cm12" style="padding-left:0%">
               <?php if(is_array($pe)): $i = 0; $__LIST__ = $pe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pee): $mod = ($i % 2 );++$i;?><div class="uldiv">
			    	<div class="datepic">
			    		<h3><?php echo (substr($pee["pn_inputtime"],8,2)); ?></h3>
			    		<h4><?php echo (substr($pee["pn_inputtime"],5,2)); ?></h4>
			    	</div>
			    	<div class="lidiv">
			    		<a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/diary/zxrj_xq.html/pn_id/<?php echo ($pee["pn_id"]); ?>" ><?php echo ($pee["pn_title"]); ?></a>
			    		<p ><span id="a"><?php echo (substr($pee["pn_content"],0,79)); ?>......</span><br/>
			    		帖主：<?php echo ($pee["pn_author"]); ?></p>
			    	</div>
			    	<div class="clear"></div>
			    </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[0]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box2">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[1]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box3">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[2]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box4">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[3]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box5">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[4]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box6">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[5]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box7">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[6]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box8">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[7]["cp_picture"]); ?>" alt="" /></a>
			</div>
			<div class="box9">
				<a href="#"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/<?php echo ($ca[8]["cp_picture"]); ?>" alt="" /></a>
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
		<img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ewm.gif" alt="erweima"/>
		</div>
		
	</div>
	<div class="row cori">
		<div class="col-md-12">
		    <p >喜刷刷家装在线交流平台版权所有<br/>
		    Copyright © 2008－2016 All Rights Reserved .     网站备案：冀ICP备</p>
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
		$(function(){
			$("#bar1").xq_navbar({"type":"underline","liwidth":"auto","bgcolor":"rgb(240,242,220)","hcolor":"rgb(1,175,99)"});
		});
	</script>
</html>