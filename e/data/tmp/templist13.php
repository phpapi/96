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
        <li>|<a href="<?=$public_r['add_www_96kaifa_com_murl']?>" target="_blank">手机版</a></li>
        <li>|<a href="#" target="_blank">客户端下载</a></li>
        <li>|<a href="javascript:;" class="wx_show">关注微信</a>
          <div class="wx_hide"> <i class="angle"></i> <img src="/96kaifa/statics/home/images/wx_code.jpg" width="103" height="103"> <span>关注微信公众号</span> </div>
        </li>
        <li>|<a href="#" target="_blank">开放平台</a></li>
      </ul>
    </div>
    <div class="topr fr">
      <div class="login_ok">
	<!-- 登录 -->
	<script>
	document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
	$(function(){
	var dqurl = window.location.href;
	$('#dquurl').val(dqurl);
	})
	</script>
	<!-- 登录 end-->
	  </div>
      <a href="javascript:;" onClick="AddFavorite();">收藏本站</a> </div>
  </div>
</div>
<div class="header">
  <div class="header-top">
    <div class="in">
      <div class="logo fl"><a href="/"><img src="/96kaifa/statics/home/images/logo.png" alt="<?=$public_r['add_www_96kaifa_com_name']?>"></a></div>
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
      <ul>
<?php if($GLOBALS[navclassid]=='' || $GLOBALS[navclassid]==null){$shou="nav-cur";}else{$shou="";} ?>
        <li><a href="/" class="<?=$shou?>"><span class="menu-txt">首页</span><span class="menu-line"></span></a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=0 order by myorder asc limit 8",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php if($bqr[classid]==$GLOBALS[navclassid] || $bqr[classid]==$class_r[$GLOBALS[navclassid]][bclassid]){$classon="nav-cur";}else{$classon="";}?>
        <li><a class="<?=$classon?>" href="<?=$bqsr[classurl]?>"><span class="menu-txt"><?=$bqr[classname]?></span><span class="menu-line"></span></a></li>
<?php
}
}
?>
      </ul>
      <div class="grzx">
	  	<script> document.write('<script src="/e/member/login/dh.php?t='+Math.random()+'"><'+'/script>'); </script>
	  </div>
    </div>
  </div>
</div>
<div class="my_pop">
<!--弹出登录框开始-->
  <div class="login_pop" id="login_pop" style="display: none;"> <span class="pop_close"></span>
    <p class="pop-tit">账号登录</p>
    <form action="/e/member/doaction.php" method="post" onSubmit="return userLogin()" id="form_login1" class="form-login">
      <input type=hidden name=ecmsfrom value="" id="dquurl">
      <input type=hidden name=enews value=login>
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
<!--弹出登录框结束-->
<!--弹出注册框开始-->
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
        <a class="get-yzm"><img src="/e/ShowKey/?v=reg" name="regKeyImg" id="regKeyImg" onclick="regKeyImg.src='/e/ShowKey/?v=reg&t='+Math.random()" width="130px" height="44px" title="看不清楚,点击刷新"></a> </div>
    </div>
    <div class="modal-footer">
      <p class="outer"> <input type='submit' name='Submit' class="orange_btn" id="btnRegister" value="立即注册"> </p>
      <p class="other">已有账号? <a href="javascript:;" id="user_login">请登录</a></p>
    </div>
  </form>
</div>
<!--弹出注册框结束-->
</div>
<div class="main">
  <div class="position">当前位置：<a href="/">首页</a> > 游戏礼包</div>
  <div class="container">
    <div class="w804">
      <div class="hot-libao">
        <div class="hd20">
          <h3>热门礼包</h3>
          <a href="javascript:void(0);" class="refresh" id="refresh"><i></i></a></div>
        <div class="wbody">
          <div class="wlist">
            <ul class="libao-list clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_libao where isgood=1 order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[kstime]=="0000-00-00" && $bqr[jstime]=="0000-00-00"){ $bian='<p>永久有效</p>';}else{ $bian='<p>有效期：'.date("Y-m-d",strtotime($bqr[kstime])).' 至 '.date("Y-m-d",strtotime($bqr[jstime])).'</p>';} 
$cpl=intval(round(($bqr[yiling]/$bqr[zongshu])*100,2)); $ss=100-$cpl;
?>
              <li>
                <div class="img"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <div class="con"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
                  <p class="pro-num"><span class="progress"><span style="width: <?=$ss?>%;"></span></span><em><?=$ss?>%</em></p>
                  <?=$bian?>
                </div>
                <div class="lq-btn"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="lqBtn">领取</a></div>
              </li>
<?php
}
}
?>
            </ul>
          </div>
          <div class="wlist">
            <ul class="libao-list clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_libao where isgood=1 order by newstime desc limit 4,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[kstime]=="0000-00-00" && $bqr[jstime]=="0000-00-00"){ $bian='<p>永久有效</p>';}else{ $bian='<p>有效期：'.date("Y-m-d",strtotime($bqr[kstime])).' 至 '.date("Y-m-d",strtotime($bqr[jstime])).'</p>';} 
$cpl=round(($bqr[yiling]/$bqr[zongshu]),2)*100; $ss=100-$cpl;
?>
              <li>
                <div class="img"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <div class="con"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
                  <p class="pro-num"><span class="progress"><span style="width: <?=$ss?>%;"></span></span><em><?=$ss?>%</em></p>
                  <?=$bian?>
                </div>
                <div class="lq-btn"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="lqBtn">领取</a></div>
              </li>
<?php
}
}
?>
            </ul>
          </div>
        </div>
      </div>
      <div class="new-libao mt20">
        <div class="hd20">
          <h3>最新礼包</h3>
        </div>
        <ul class="libao-list clearfix">
[!--empirenews.listtemp--]
<!--list.var1-->
[!--empirenews.listtemp--]
        </ul>
        <div class="page"> [!--show.listpage--] </div>
      </div>
    </div>
    <div class="w336">
      <div class="w-guanggao"><script src=/d/js/acmsd/thea2.js></script></div>
      <div class="w-kftab mt15">
        <div class="hd20">
          <h3>开服信息</h3>
          <a href="/kaifu/" class="more">更多<i></i></a></div>
        <div class="tab_con">
          <p class="p_th"> <span class="time">时间</span> <span class="name">游戏名称</span> <span class="server">服务器名</span> </p>
          <ul class="clearfix">
<?php $ktime=date('Y-m-d'); ?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu where kfsj like '%$ktime%' order by kfsj desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php 
if($bqr[yxid]=='' || $bqr[yxid]==null){$bqr[yxid]=0;}
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id='$bqr[yxid]'");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['titleurl'];
}
?>
            <li> <span class="time nowtime">今日</span> <span class="name"><a href="<?=$aaa?>" target="_blank"><?=$bqr['title']?></a></span> <span class="server"><?=$bqr['fuwuqi']?></span> </li>
<?php
}
}
?>
<?php 
$num50=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_kaifu where kfsj like '%$ktime%' order by kfsj desc limit 10");
$num40=10-$num50;
if($num40<0){$num40=0;}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu where left(kfsj,10)>'$ktime' order by kfsj asc limit $num40",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php 
if($bqr[yxid]=='' || $bqr[yxid]==null){$bqr[yxid]=0;}
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id='$bqr[yxid]'");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['titleurl'];
}
?>
            <li> <span class="time"><?=date('m-d',strtotime($bqr[kfsj]))?></span> <span class="name"><a href="<?=$aaa?>" target="_blank"><?=$bqr['title']?></a></span> <span class="server"><?=$bqr['fuwuqi']?></span> </li>
<?php
}
}
?>
<?php 
$num60=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_kaifu where left(kfsj,10)>'$ktime' order by kfsj asc limit $num40");
$num30=10-$num50-$num60;
if($num30<0){$num30=0;}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu where left(kfsj,10)<'$ktime' order by kfsj desc limit $num30",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php 
if($bqr[yxid]=='' || $bqr[yxid]==null){$bqr[yxid]=0;}
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id='$bqr[yxid]'");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['titleurl'];}
?>
            <li> <span class="time"><?=date('m-d',strtotime($bqr[kfsj]))?></span> <span class="name"><a href="<?=$aaa?>" target="_blank"><?=$bqr['title']?></a></span> <span class="server"><?=$bqr['fuwuqi']?></span> </li>
<?php
}
}
?>
          </ul>
        </div>
      </div>
      <div class="w-rank mt15">
        <div class="hd20">
          <h3>游戏排行</h3>
          <ul class="rank_tab">
            <li onMouseMove="onSelect(this,'rank_con')" class="tab_2">网游</li>
            <li onMouseMove="onSelect(this,'rank_con')" class="tab_1">小游戏</li>
          </ul>
        </div>
        <div class="bd">
          <ol id="rank_con_0">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
            <li> <em class="num num<?=$bqno?>"><?=$bqno?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 3,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
            <li> <em class="num num"><?=$bqno+3?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php
}
}
?>
          </ol>
          <ol id="rank_con_1" style="display: none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$fenlei="益智";}
else if($bqr[fenlei]==2){$fenlei="动作";}
else if($bqr[fenlei]==3){$fenlei="射击";}
else if($bqr[fenlei]==4){$fenlei="休闲";}
else if($bqr[fenlei]==5){$fenlei="敏捷";}
else if($bqr[fenlei]==6){$fenlei="棋牌";}
else if($bqr[fenlei]==7){$fenlei="经营";}
else if($bqr[fenlei]==8){$fenlei="体育";}
else if($bqr[fenlei]==9){$fenlei="策略";}
else if($bqr[fenlei]==10){$fenlei="冒险";}
else if($bqr[fenlei]==11){$fenlei="装扮";}
?>
            <li> <em class="num num<?=$bqno?>"><?=$bqno?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by newstime desc limit 3,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$fenlei="益智";}
else if($bqr[fenlei]==2){$fenlei="动作";}
else if($bqr[fenlei]==3){$fenlei="射击";}
else if($bqr[fenlei]==4){$fenlei="休闲";}
else if($bqr[fenlei]==5){$fenlei="敏捷";}
else if($bqr[fenlei]==6){$fenlei="棋牌";}
else if($bqr[fenlei]==7){$fenlei="经营";}
else if($bqr[fenlei]==8){$fenlei="体育";}
else if($bqr[fenlei]==9){$fenlei="策略";}
else if($bqr[fenlei]==10){$fenlei="冒险";}
else if($bqr[fenlei]==11){$fenlei="装扮";}
?>
            <li> <em class="num num"><?=$bqno+3?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php
}
}
?>
          </ol>
        </div>
      </div>
    </div>
    <div class="clear"></div>
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