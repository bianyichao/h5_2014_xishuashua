<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>喜刷刷后台管理</title>
    <link href="/h5_2014_xishuashua/xishuashua/Public/home/css/admin_login.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" id="user" size="40" class="admin_input_style"/>
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="pwd" value="" id="pwd" size="40" class="admin_input_style"/>
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary"/>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"> &copy; 2014 Powered by <a href="http://jscss.me" target="_blank">喜刷刷交流平台</a></p>
</div>
</body>
</html>