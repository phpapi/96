<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<!-- 游戏全屏 -->
<meta name="full-screen" content="yes">
<meta name="x5-fullscreen" content="true">
<meta name="360-fullscreen" content="true">
<title>[!--pagetitle--] - <?=$public_r['add_www_96kaifa_com_name']?></title>
<link href="/96kaifa/statics/wap_v1/H5/css/game.css" type="text/css" rel="stylesheet">
<link href="" sizes="60x60" rel="apple-touch-icon-precomposed">
</head>
<body>
<div class="main" style="background:url(/96kaifa/statics/wap_v1/H5/images/login_bg.jpg) no-repeat center top; background-size:cover;max-width: 640px">
  <div id="mask" class="mask"></div>
  <div class="popupBox" id="popup">
    <div class="popdiv" id="login" style="position: fixed; top: 25%;">
      <h3>账号注册</h3>
      <form class="form_input" name="userinfoform" method="post" enctype="multipart/form-data" action="/e/member/doaction.php">
      <input type="hidden" name="enews" value="register">
        <div><span style="font-size: 12px;">用&nbsp;户&nbsp;名：</span>
		<p class="div-input" style=" width: 65%;float: right; margin-top: 22px;">
         <input type="text" name="username" class="input-text username" placeholder="输入用户名">
        </p></div>
        <div><span style="font-size: 12px;">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</span>
		<p class="div-input" style=" width: 65%;float: right; margin-top: 22px;">
         <input type="password" name="password" class="input-text username" placeholder="输入密码">
        </p></div>
        <div><span style="font-size: 12px;">重复密码：</span>
		<p class="div-input" style=" width: 65%;float: right; margin-top: 22px;">
         <input type="password" name="repassword" class="input-text username" placeholder="重复输入密码">
        </p></div>
        <div><span style="font-size: 12px;">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</span>
		<p class="div-input" style=" width: 65%;float: right; margin-top: 22px;">
         <input type="text" name="email" class="input-text username" placeholder="输入邮箱">
        </p></div>
        <div><span style="font-size: 12px;">验&nbsp;证&nbsp;码：</span>
		<p class="div-input" style=" width: 35%;float: right; margin-top: 22px;">
         <input type="text" name="key" class="input-text username" id="reg_sjyzm" placeholder="输入验证码">
        </p>
		<img src="/e/ShowKey/?v=reg" name="regKeyImg" id="regKeyImg" onclick="regKeyImg.src='/e/ShowKey/?v=reg&amp;t='+Math.random()" title="看不清楚,点击刷新">
		</div>
        <p class="div-btn">
          <input type="submit" name="Submit" class="btnblue" value="立即注册">
        </p>
        <p class="div-other">已拥有账号？<a href="/login.html">立即登录</a></p>
      </form>
    </div>
  </div>
</div>
</body>
</html>