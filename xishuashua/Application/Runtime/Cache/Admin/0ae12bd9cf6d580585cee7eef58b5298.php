<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>装修日记</title>
    
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/hanziqiang.css" />
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/tiezi.css" />
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq_navbar.css"/>
    <link rel="stylesheet" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/xq.css"/>
    <link rel="stylesheet" type="text/css" href="/h5_2014_xishuashua/xishuashua/Public/admin/css/lanrenzhijia.css">

    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery-2.1.4.min.js"></script>
	  <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/bootstrap.min.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/scripts.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/text.js"></script>
    <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery1.8.2.min.js" type="text/javascript"></script>
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
            <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/company/zsgs.html">装饰公司</a></li>
            <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/tender/jzzp.html">家装招标</a></li>
            <li class="xq_navli"><a href="/h5_2014_xishuashua/xishuashua/index.php/Admin/diary/zxrj.html">装修日记</a></li>
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
              <!-- <==========================================================> -->
              <!-- 轮播图开始区域 -->
              <!-- <div id="bannar"> -->
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
    <div class="container">
      <div >
       <h1 class="contitle">家装日记 · <span>Decoration Company</span></h1>
      </div>
      <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="tabbable"> <!-- Only required for left/right tabs -->
      <ul class="nav nav-tabs">
        <li class="biaoti active"><a href="#tab1" data-toggle="tab">个人日记</a></li>
        <li class="biaoti"><a href="#tab2" data-toggle="tab">企业日记</a></li>
        <li class="biaoti"><a href="#tab3" data-toggle="tab">家装小贴士</a></li>
        <li class="biaoti"><a href="#tab4" data-toggle="tab"> 敬请期待</a></li>
      </ul>    
      <div class="tab-content">
      <div class="tab-pane active" id="tab1">
        <!-- gerenriji-->
          <?php if(is_array($pe)): $i = 0; $__LIST__ = $pe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pee): $mod = ($i % 2 );++$i;?><div class="add" >
              <ul  class="acc1">
                <li>
                  <div class="row ad1">
                    <div class="col-md-10">
                    <a href="zxrj_xq.html"><h3><?php echo ($pee["pn_title"]); ?></h3></a>
                    </div>
                    <div class="col-md-2 ">
                    <button type="button" class="btn btn-link btn-lg tubo">
                        <span class="glyphicon glyphicon-thumbs-up"></span> <?php echo ($pee["pn_view"]); ?>
                     </button>
                    </div>
                  </div>
                </li>
                <li class="wen">
                  <p id="a" class="wen_text"><?php echo (substr($pee["pn_content"],0,143)); ?>......</p>
                </li>
                <li class="wen">
                  <p class="tz_text_name">&nbsp;帖主：<a href="grzx.html" class="vistor"><?php echo ($pee["pn_author"]); ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发帖时间：<?php echo ($pee["pn_inputtime"]); ?></p>
                 </li>
              </ul>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="zx1">
            <nav>
              <ul class="pagination pagination-lg gs7">
                <!-- <?php echo ($pages1); ?> -->
                <li><a href="#">首页</a></li>
                <li class="gs8"><a href="#" >1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">尾页</a></li>
              </ul>

              
            </nav>
            </div>
          </div>
        <div class="tab-pane" id="tab2">
        <!-- gerenriji-->
        <?php if(is_array($b)): $i = 0; $__LIST__ = $b;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bn): $mod = ($i % 2 );++$i;?><div class="add" >
                <ul  class="acc1">
                  <li>
                    <div class="row ad1">
                      <div class="col-md-10">
                      <a href="#"><h3><?php echo ($bn["bn_title"]); ?></h3></a>
                      </div>
                      <div class="col-md-2 ">
                      <button type="button" class="btn btn-link btn-lg tubo">
                          <span class="glyphicon glyphicon-thumbs-up"></span> <?php echo ($bn["bn_view"]); ?>
                       </button>
                      </div>
                    </div>
                  </li>
                  <li class="wen">
                    <p class="wen_text"><?php echo (substr($bn["bn_content"],0,120)); ?>......</p>
                  </li>
                  <li class="wen">
                    <p class="tz_text_name">&nbsp;帖主：<a href="qyzx.html" class="vistor"><?php echo ($bn["bn_author"]); ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发帖时间：<?php echo ($bn["bn_inputtime"]); ?></p>
                   </li>
                </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
              
        <div class="zx1">
            <nav>
              <ul class="pagination pagination-lg gs7">
                <li><a href="#">首页</a></li>
                <li class="gs8"><a href="#" >1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">尾页</a></li>
              </ul>
            </nav>
            </div>
        </div>
        <div class="tab-pane" id="tab3">
        <!-- gerenriji-->
        <?php if(is_array($n)): $i = 0; $__LIST__ = $n;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ne): $mod = ($i % 2 );++$i;?><div class="add" >
                <ul  class="acc1">
                  <li>
                    <div class="row ad1">
                      <div class="col-md-10">
                      <a href="#"><h3><?php echo ($ne["title"]); ?></h3></a>
                      </div>
                      <div class="col-md-2 ">
                      <button type="button" class="btn btn-link btn-lg tubo">
                          <span class="glyphicon glyphicon-thumbs-up"></span><?php echo ($ne["view"]); ?>
                       </button>
                      </div>
                    </div>
                  </li>
                  <li class="wen">
                    <p class="wen_text"><?php echo (substr($ne["content"],0,100)); ?>......</p>
                  </li>
                  <li class="wen">
                    <p class="tz_text_name">&nbsp;帖主：<a href="#" class="vistor">管理员</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发帖时间：<?php echo ($ne["inputtime"]); ?></p>
                   </li>
                </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <div class="zx1">
            <nav>
              <ul class="pagination pagination-lg gs7">
                <li><a href="#">首页</a></li>
                <li class="gs8"><a href="#" >1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">尾页</a></li>
              </ul>
            </nav>
            </div>

        </div>
        <script type="text/javascript">
                function msgbox(n){
                  document.getElementById('inputbox').style.display=n?'block':'none'; 
                  document.getElementById("text-reply").focus();    /* 点击按钮打开/关闭 对话框 */
                }
                
              </script>
              <div class="tiezi_1 content" id="inputbox">
              <div class="tiezi_reply">
                <p>发布新帖：</p>
                <form>
                <div class="push-head">
                  标题：<input type="text" name="title" id="text-reply" class="push-title">
                </div>
                <div class="push-text">
                  <div style="float:left;">内容：</div>
                  <textarea class="push-content"></textarea>
                </div>  
                </form>
                <button type="button" class="btn1 btn-lg" onclick="msgbox(0)">发表</button>
              </div>
              </div>
        <div class="tab-pane" id="tab4">

          <!--content 1-->

        </div>
        </div>
        </div>
        </div>
        </div>
        
        <div class="col-md-1 push-right">
          <ul class="push-aside">
            <li class="push-aside-bar">
              <a href="#sub" onclick="msgbox(1)">
                <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/push.png" title="发布帖子">
              </a>
            </li>
            <li class="push-aside-bar">
              <div class="demo">
                <a href="javascript:void(0)" class="share"><img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/share.png" title="分享帖子"></a>
            </li>
            <li class="push-aside-bar">
              <a href="#">
                <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/update.png" title="刷新帖子">
              </a>
            </li>
            <li class="push-aside-bar">
              <a href="#">
                <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/back.png" title="回到顶部">
              </a>
            </li>
          </ul>
        </div>
        <script src="http://www.jq22.com/jquery/1.7.2/jquery.min.js"></script>
        <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/share2.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/h5_2014_xishuashua/xishuashua/Public/admin/js/share2.js"></script>
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
            <p>喜刷刷家装在线交流平台版权所有<br/>
            Copyright © 2008－2016  All Rights Reserved .     网站备案：冀ICP备xxxxxxxx</p>
        </div>
      </div>
    </div>
           </div>  
      </div>
       
  </body>
  <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/lanrenzhijia.js"></script>
  <script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/xq_navbar.js"></script>
  <script>
    $(function(){
      $("#bar1").xq_navbar({"type":"underline","liwidth":"auto","bgcolor":"rgb(240,242,220)","hcolor":"rgb(1,175,99)"});
    });
  </script>
</html>