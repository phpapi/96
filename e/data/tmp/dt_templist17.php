<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=$value=ReturnClassAddField(0,'seotitle')?>_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/style3500.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
</head>
<script type="text/javascript">
	showMobile("<?=$public_r['add_www_96kaifa_com_murl']?><?=sys_ReturnBqClassUrl($class_r[$GLOBALS[navclassid]]);?>");
</script>
<body>
<div class="cover"></div>
<div class="topbox">
  <div class="boxin clearfix">
    <div class="topl fl"> <span class="home"><a href="/">游戏首页</a></span>
      <ul>
        <li>|<a href="http://www.96kaifa.com" target="_blank">手机版</a></li>
        <li>|<a href="#" target="_blank">客户端下载</a></li>
        <li>|<a href="javascript:;" class="wx_show">关注微信</a>
          <div class="wx_hide"> <i class="angle"></i> <img src="/96kaifa/statics/home/images/wx_code.jpg" width="103" height="103"> <span>关注微信公众号</span> </div>
        </li>
        <li>|<a href="#" target="_blank">开放平台</a></li>
      </ul>
    </div>
    <div class="topr fr">
        <div class="login_ok">
        
        <script>
            document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
            $(function(){
            var dqurl = window.location.href;
            $('#dquurl').val(dqurl);
            })
            </script>
        
        </div>
        <a href="javascript:;" onclick="AddFavorite();">收藏本站</a> </div>
</div>
<div class="header">
  <div class="header-top">
    <div class="in">
      <div class="logo fl"><a href="/"><img src="/96kaifa/statics/home/images/logo.png" alt="棋游之家"></a></div>
      <div class="search fr">
       
        <form action="/search/game.php" method="get" target="_blank" name="searchTop">
          <div class="search_box tr">
            <input type="text" id="bdcsMain" name="key" class="sech_keyword" placeholder="请输入游戏名称">
            <input type="submit" value="搜索" class="sech_btn">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="nav">
    <div class="in">
      <ul id="navi">
        <li><a href="/"><span class="menu-txt">首页</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/qipailei/"><span class="menu-txt">棋牌</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/puke/"><span class="menu-txt">扑克</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/majiang/"><span class="menu-txt">麻将</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/qilei/"><span class="menu-txt">棋类</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/qiyouchangshang/"><span class="menu-txt">棋游厂商</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/zixun/"><span class="menu-txt">资讯</span><span class="menu-line"></span></a></li>
      </ul>
   <script type="text/javascript" language="javascript">
     
    $("#navi li a").each(function(){ 
    if($(this)[0].href==String(window.location)){ 
      $(this).addClass("nav-cur").siblings().removeClass("nav-cur"); 
    } 
  });   
        </script>
      <div class="grzx">
	  	<script> document.write('<script src="./e/dh.php?t='+Math.random()+'"><'+'/script>'); </script>
	  </div>
    </div>
  </div>
</div>
<div class="my_pop">
    <div class="login_pop" id="login_pop" style="display: none;"> <span class="pop_close"></span>
    <p class="pop-tit">账号登录</p>
    <form action="/e/member/doaction.php" method="post" onsubmit="return userLogin()" id="form_login1" class="form-login">
    <input type="hidden" name="ecmsfrom" value="http://3500.96demo.com/" id="dquurl">
    <input type="hidden" name="enews" value="login">
    <input name="tobind" type="hidden" id="tobind" value="0">
    <div class="modal-body">
    <div class="error_font">*错误提示</div>
     <div class="outer tr"> <i class="user"></i>
    <input type="text" name="username" class="input-txt " id="login_username" placeholder="输入用户名">
    </div>
    <div class="outer tr"> <i class="pwd"></i>
    <input type="password" name="password" class="input-txt " id="login_password" placeholder="输入登录密码">
    </div>
    <div class="outer">
    <div class="captcha" id="logcaptcha"></div>
    </div>
    </div>
    <div class="modal-footer" style="margin-bottom:40px;">
    <p class="outer"> <input class="login_btn" type="submit" name="submit" value="登录"> <a href="javascript:;" class="register_btn" id="register_btn2">注册</a> </p>
    </div>
    </form>
    </div>
    
    
    <div class="register_pop" style="display: none;"> <span class="pop_close"></span>
    <p class="pop-tit">会员注册</p>
    <form name="userinfoform" method="post" enctype="multipart/form-data" action="/e/member/doaction.php" class="form-register">
    <input type="hidden" name="enews" value="register">
    <div class="modal-body">
    <div class="error_font">*错误提示</div>
    <div class="outer tr"> <i class="user"></i>
    <input type="text" name="username" class="input-txt " id="reg_phone" placeholder="输入用户名">
    </div>
    <div class="outer tr"> <i class="pwd"></i>
    <input type="password" name="password" class="input-txt " id="reg_password" placeholder="设置密码(6-16位字母或数字)">
    </div>
    <div class="outer tr"> <i class="pwd"></i>
    <input type="password" name="repassword" class="input-txt " id="reg_password" placeholder="重复输入密码">
    </div>
    <div class="outer tr"> <i class="user"></i>
    <input type="text" name="email" class="input-txt " id="fullname" placeholder="邮箱">
    </div>
    <div class="outer">
    <input type="text" name="key" class="input-txt " id="reg_sjyzm" placeholder="输入验证码">
    <a class="get-yzm"><img src="/e/ShowKey/?v=reg" name="regKeyImg" id="regKeyImg" onclick="regKeyImg.src='/e/ShowKey/?v=reg&amp;t='+Math.random()" width="130px" height="44px" title="看不清楚,点击刷新"></a> </div>
    </div>
    <div class="modal-footer">
    <p class="outer"> <input type="submit" name="Submit" class="orange_btn" id="btnRegister" value="立即注册"> </p>
    <p class="other">已有账号? <a href="javascript:;" id="user_login">请登录</a></p>
    </div>
    </form>
    </div>
    
    </div>
<div class="main">
  <div class="position">当前位置：[!--newsnav--]</div>
  <div class="game-filter">
    <h3>游戏筛选</h3>
	<?=user_ShowFieldandChange(3)?>
    <dl class="clearfix m-list-paixu">
      <dt>排序>></dt>
      <dd><a href="/list-0-0-0-4.html" class="on">最新</a><a href="/list-0-1-0-0.html">最热</a></dd>
    </dl>
  </div>
  <div class="game-ku">
    <ul class="game-list clearfix">
[!--empirenews.listtemp--]
<!--list.var1-->
[!--empirenews.listtemp--]
    </ul>
    <div class="page"> [!--show.listpage--] </div>
  </div>
</div>
<div id="footer">
  <div class="about_me"> <a href="/aboutus.html" target="_blank">关于我们</a> | <a href="/contact.html" target="_blank">联系方式</a> | <a href="/sitemap.html" target="_blank">网站地图</a> | <a href="/explain.html" target="_blank">用户协议</a> </div>
  <div class="safety"> <a><i class="icon_safe1"></i>中国互联网举报中心</a> <a><i class="icon_safe2"></i>网络违法举报中心</a> <a><i class="icon_safe3"></i>垃圾信息举报中心</a> <a><i class="icon_safe4"></i>闽公网安备35020302001953号</a> </div>
  <p class="tips_text">©2017-2018 &nbsp; <?=$public_r['add_www_96kaifa_com_name']?> &nbsp; <?=$public_r['add_www_96kaifa_com_url2']?> <em>礼包交流群：</em><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" target="_blank" class="qqun"></a></p>
  <p class="tips_text">备案号：<?=$public_r['add_www_96kaifa_com_ba']?> &nbsp; <?=$public_r['add_www_96kaifa_com_tongji']?> 技术支持：<a href="https://www.96kaifa.com" target="_blank">96KaiFa源码</a></p>
</div>
<div id="backtop">返回顶部</div>
<script type="text/javascript" src="/96kaifa/statics/home/js/member.js"></script>
<script type="text/javascript">
	var member = new Member();
</script>
<script type="text/javascript" src="/96kaifa/statics/home/js/global.js"></script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
</body>
</html>