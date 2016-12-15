<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>业主注册</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/style.css" rel="stylesheet">
    <!--index page css text-->
    <link href="/h5_2014_xishuashua/xishuashua/Public/admin/css/regist.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">

    <!--header-->
    <div class="row">
        <div class="col-md-12 nobo">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/logo.gif" alt="logo"/>
                </div>

                <div class="collapse navbar-collapse" id="greennav">

                    <div class="navright1">
                        欢迎光临喜刷刷家装
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!--content-->
    <!--content 1-->
    <div class="row con">
        <a href="#" class="chosed">业主注册</a>
        <a href="regist_cp.html">家装公司注册</a>
        <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <form action="doregist" method="post">
                   <input type="hidden" name="p_tag" value="1">
                    <ul class="specialul">
                        <li>
                            <p>用户名</p>
                            <input type="text" name="p_name" placeholder="可以使用字母、数字、下划线"/>
                            <!--输入框内信息判断无误后，使用JS方法显示该图片-->
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ok.jpg" alt="ok"/>
                        </li>
                        <li>
                            <p>密码</p>
                            <input type="password" name="p_pwd" placeholder="不少于六位(字母、数字)"/>
                            <!--输入框内信息判断无误后，使用JS方法显示该图片-->
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ok.jpg" alt="ok"/>
                        </li>
                        <li>
                            <p>确认密码</p>
                            <input type="password" name="confirm—password" placeholder="与上面输入的密码相同"/>
                            <!--输入框内信息判断无误后，使用JS方法显示该图片-->
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ok.jpg" alt="ok"/>
                        </li>
                        <li class="line"></li>
                        <li>
                            <p>昵称</p>
                            <input type="text" name="p_nickname" placeholder="可以使用字母、数字、下划线"/>
                            <!--输入框内信息判断无误后，使用JS方法显示该图片-->
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ok.jpg" alt="ok"/>
                        </li>
                        <li>
                            <p>邮箱</p>
                            <input type="email" name="p_email" placeholder="请填写真实邮箱"/>
                            <!--输入框内信息判断无误后，使用JS方法显示该图片-->
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ok.jpg" alt="ok"/>
                        </li>
                        <li>
                            <p>手机号码</p>
                            <p>+86<a href="">切换地区</a></p>
                            <input class="phone" type="text" name="p_tel" placeholder=""/>
                            <!--输入框内信息判断无误后，使用JS方法显示该图片-->
                            <img src="/h5_2014_xishuashua/xishuashua/Public/admin/images/ok.jpg" alt="ok"/>
                        </li>
                        <li class="already">
                            <input type="checkbox" name="checkbox" placeholder=""/>我已经阅读并同意<a
                                href="">《xxxxx互联网注册用户协议》</a>
                        </li>
                        <li>
                            <input type="submit" tabindex="3" value="个人注册" class="btn btn-success"/>
                        </li>
                        <li class="goto">
                            <a href="dl.html">已有账号，直接登录&gt;&gt;</a>
                        </li>
                    </ul>
                </form>
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
                Copyright © 2008－2016 All Rights Reserved . 网站备案：冀ICP备xxxxxxxx</p>
        </div>
    </div>
</div>

<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/jquery.min.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/bootstrap.min.js"></script>
<script src="/h5_2014_xishuashua/xishuashua/Public/admin/js/scripts.js"></script>
</body>
</html>