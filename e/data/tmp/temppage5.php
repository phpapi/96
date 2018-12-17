<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="screen-orientation" content="portrait">
<meta name="full-screen" content="yes">
<meta name="x5-orientation" content="portrait">
<meta name="x5-fullscreen" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-app-status-bar-style" content="black">
<title>[!--pagetitle--] - <?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name='keywords' content='[!--pagekeywords--]' />
<meta name='description' content='[!--pagedescription--]' />
<link href="/96kaifa/statics/wap_v1/css/new_style.css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/swiper-3.3.1.min.js"></script>
</head>
<body>
<header class="header yt_top"> <a href="javascript:history.go(-1)" class="back"></a>
  <div class="htit">
    <p>游戏分类</p>
  </div>
  <div class="hright"> <a href="/search.html" class="search-zoom"></a> <a href="javascript:;" class="macte" onClick="wap35.openPublicMp();">关注下载</a> </div>
</header>
<div class="main">
  <div class="gamefl mtop">
    <div class="hd"> <a href="/list-1-0-0-0.html">
      <h3>卡牌游戏</h3>
      <span class="more">更多></span><span class="line"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where fenlei=1 order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          </a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="gamefl mtop">
    <div class="hd"> <a href="/list-2-0-0-0.html">
      <h3>角色扮演</h3>
      <span class="more">更多></span><span class="line"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where fenlei=2 order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          </a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="gamefl mtop">
    <div class="hd"> <a href="/list-3-0-0-0.html">
      <h3>模拟经营</h3>
      <span class="more">更多></span><span class="line"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where fenlei=3 order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          </a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="gamefl mtop">
    <div class="hd"> <a href="/list-5-0-0-0.html">
      <h3>动作游戏</h3>
      <span class="more">更多></span><span class="line"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where fenlei=5 order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          </a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="gamefl mtop">
    <div class="hd"> <a href="/list-6-0-0-0.html">
      <h3>战争策略</h3>
      <span class="more">更多></span><span class="line"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where fenlei=6 order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          </a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="gamefl mtop">
    <div class="hd"> <a href="/list-8-0-0-0.html">
      <h3>休闲游戏</h3>
      <span class="more">更多></span><span class="line"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where fenlei=8 order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          </a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="miniGame mtop">
    <dl>
      <dt>
        <p><a href="/danji/"><img src="/96kaifa/statics/wap_v1/images/xyx_icon.png" alt=""><span>小游戏 ></span></a></p>
      </dt>
      <dd>
        <p> <a href="/list-1-0-0-1.html">益智</a><a href="/list-2-0-0-1.html">动作</a><a href="/list-3-0-0-1.html">射击</a><a href="/list-4-0-0-1.html">休闲</a><a href="/list-5-0-0-1.html">敏捷</a><a href="/list-6-0-0-1.html">棋牌</a><a href="/list-7-0-0-1.html">经营</a><a href="/list-8-0-0-1.html">体育</a><a href="/list-9-0-0-1.html">策略</a><a href="/list-10-0-0-1.html">冒险</a><a href="/list-11-0-0-1.html">装扮</a> </p>
      </dd>
    </dl>
  </div>
</div>
<div class="footMb"></div>
<div id="footer">
  <div class="about_me"> <a href="/aboutus.html" target="_blank">关于我们</a> | <a href="/contact.html" target="_blank">联系方式</a> | <a href="/sitemap.html" target="_blank">网站地图</a> | <a href="/explain.html" target="_blank">用户协议</a> </div>
  <div class="safety"> <a><i class="icon_safe1"></i>中国互联网举报中心</a> <a><i class="icon_safe2"></i>网络违法举报中心</a> <a><i class="icon_safe3"></i>垃圾信息举报中心</a> <a><i class="icon_safe4"></i>闽公网安备35020302001953号</a> </div>
  <p class="tips_text">©2017-2018 &nbsp; <?=$public_r['add_www_96kaifa_com_name']?> &nbsp; <?=$public_r['add_www_96kaifa_com_url2']?> <em>礼包交流群：</em><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" target="_blank" class="qqun"></a></p>
  <p class="tips_text">备案号：<?=$public_r['add_www_96kaifa_com_ba']?> &nbsp; <?=$public_r['add_www_96kaifa_com_tongji']?> 技术支持：<a href="https://www.96kaifa.com" target="_blank">96KaiFa源码</a></p>
</div>
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/new_style.js"></script>
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/wp35.js"></script>
<script type="text/javascript">
	var wap35 = new Wap35();
</script>
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