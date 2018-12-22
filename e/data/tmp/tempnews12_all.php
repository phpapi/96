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
<title><?=$grpagetitle?>_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/style3500.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
<script src="/96kaifa/libao/js/jq172.js"></script>
<script src="/96kaifa/libao/js/feedback.js"></script>
<script src="/96kaifa/libao/v4/base/siteNav/siteNav.js"></script>
<script src="/96kaifa/libao/v4/base/siteNav/favorites.js"></script>
<script src="/96kaifa/libao/base/js/base.js"></script>
</head>
<script type="text/javascript">
	showMobile("<?=$public_r['add_www_96kaifa_com_murl']?><?=$grtitleurl?>");
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
  <div class="position">当前位置：<?=$grurl?> > <?=$ecms_gr[title]?></div>
  <div class="container">
    <div class="w804">
      <div class="libao-panel">
        <div class="pinfo"> <img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" width="100" height="100">
          <div class="pcenter">
            <h1><?=$ecms_gr[title]?></h1>
<?php if($navinfor[kstime]=="0000-00-00" && $navinfor[jstime]=="0000-00-00"){ ?>
            <p>永久有效</p>
<?php }else{ ?>
<p>开始时间：<?=date('Y-m-d',strtotime($navinfor[kstime]))?></p>
<p>结束时间：<?=date('Y-m-d',strtotime($navinfor[jstime]))?></p>
<?php } ?>
            <div class="pbtn">
            	<script src="/e/libao.php?classid=8&id=<?=$ecms_gr[id]?>" charset="utf-8"></script>
<?php
if($navinfor[yxid]==''){}else{
$sql=$empire->query("SELECT * FROM www_96kaifa_com_ecms_game where id='$navinfor[yxid]' ORDER BY newstime desc limit 1");
while ($row=$empire->fetch($sql)) { 
$titleurl=$row[titleurl];
}
?>
            	<a href="<?=$titleurl?>" target="_blank" class="jryx playgame">进入游戏</a>
<?php } ?>
            </div>
          </div>
<?php if($navinfor[yiling]==0 || $navinfor[yiling]==''){ ?>
<div class="num-box"><span class="circle"><span style="height:0%;"><em>100%</em></span></span>剩余礼包</div>
<?php }else{ ?>

		  <?php $cpl=round(($navinfor[yiling]/$navinfor[zongshu]),2)*100; $ss=100-$cpl; ?>
          <div class="num-box"><span class="circle"><span style="height:<?=$cpl?>%;"><em><?=$ss?>%</em></span></span>剩余礼包</div>
		  
<?php } ?>
        </div>
        <div class="pdesc">
          <div class="phd">
            <h3>礼包说明</h3>
            <div class="share-div fr"> <em>分享到：</em>
              <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1502171435573"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
              <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
            </div>
          </div>
          <div class="pcon">
            <p><strong>礼包内容：</strong><?=$ecms_gr[lbnr]?></p>
            <p><strong>使用方法：</strong><?=$ecms_gr[syff]?></p>
          </div>
          <div class="beizhu">
            <div class="group fr"><em>礼包交流群：</em><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" target="_blank" class="qqun"></a></div>
            注：该礼包一个账号只能领取1次，请勿重复领取。 </div>
          <div class="prompt">
            <p class="title"><b>温馨提示：通过以下两种方式可免费领取所有礼包！</b></p>
            <div class="sm-code"> <span> <img src="/96kaifa/statics/home/images/weixin.jpg" width="120" height="120" alt=""> 微信扫描<br />
              关注官方公众号 </span> <span> <img src="/qr/api.php?url=<?=$public_r['add_www_96kaifa_com_murl']?><?=$grtitleurl?>&p=6.5&m=1" width="120" height="120" alt=""> 手机扫描<br />
              扫一扫手机访问 </span> </div>
          </div>
        </div>
      </div>
      <div class="h10"></div>
<?php
$sql=$empire->query("SELECT * FROM www_96kaifa_com_ecms_game where INSTR('".$navinfor[title]."',title)>0  ORDER BY newstime desc limit 1");
while ($row=$empire->fetch($sql)) { 
$title=$row[title];
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_libao where title like '%$title%' and id<>'$navinfor[id]'  ORDER BY newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <div class="rel-libao">
        <div class="hd20">
          <h3>相关礼包</h3>
          <a href="/search/libao.php?key=<?=$title?>" class="more">更多<i></i></a></div>
        <ul>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_libao where title like '%$title%' and id<>'$navinfor[id]' ORDER BY newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php $cpl=round(($bqr[yiling]/$bqr[zongshu]),2)*100; $ss=100-$cpl; ?>
          <li>
            <div class="libao-name"><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=$bqr['title']?></a></div>
            <div class="libao-num">剩余：<span class="progress"><span style="width: <?=$ss?>%;"></span></span><em><?=$ss?>%</em></div>
            <div class="libao-btn"><a href="<?=$bqsr[titleurl]?>" target="_blank" class="lqBtn">领取</a></div>
          </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_libao where title like '%$title%' and id<>'$navinfor[id]'  ORDER BY newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        </ul>
      </div>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where title like '%$title%'  ORDER BY newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <div class="rel-zixun">
        <div class="hd20">
          <h3>相关资讯</h3>
        </div>
        <ul class="relist clearfix">
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where title like '%$title%'  ORDER BY newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li>•<a href="<?=$bqsr[titleurl]?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where title like '%$title%'  ORDER BY newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        </ul>
      </div>
<?php
}
}
?>
      <div class="new-games">
        <div class="hd20">
          <h3>最新游戏</h3>
          <a href="/game/" class="more">更多<i></i></a></div>
        <ul class="new_game_list clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 7",6,24,0);
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
          <li> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span><?=$bqr['title']?></span></a>
            <p><?=$bfenlei?></p>
          </li>
<?php
}
}
?>
        </ul>
      </div>
    </div>
    <div class="w336">
      <div class="w-kftab">
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
            <li onmousemove="onSelect(this,'rank_con')" class="tab_2">网游</li>
            <li onmousemove="onSelect(this,'rank_con')" class="tab_1">小游戏</li>
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
<div class="div_pop gift_pop block" id="user_box" style="display: none;"><span class="pop_close user_close"></span>
  <p class="pop-tit">操作提示</p>
  <div class="gift-con"><span class="text">领取成功，请尽快使用，以免卡号失效！</span><span id="open_code"><div class="tips"><p id="card"></p></div></span><a href="javascript:void(0);" class="buttoncopy" id="buttoncopy">↑↑ 请复制 ↑↑</a> </div>
</div>
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