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
    <p>排行榜</p>
  </div>
  <div class="hright"> <a href="/search.html" class="search-zoom" onclick="wap35.search();"></a> <a href="javascript:;" class="macte" onclick="wap35.openPublicMp();">关注下载</a> </div>
</header>
<div class="rankbox">
  <div class="thex_hd">
    <ul>
      <li class="tab_2" onclick="onSelect(this,'rank_con')">人气榜</li>
      <li class="tab_1" onclick="onSelect(this,'rank_con')">新游榜</li>
      <li class="tab_1" onclick="onSelect(this,'rank_con')">小游戏榜</li>
    </ul>
  </div>
  <div class="thex_bd" id="rank_con_0">
    <ul class="listwrap">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr['fenlei']==1){$fenlei="卡牌游戏";}
else if($bqr['fenlei']==2){$fenlei="角色扮演";}
else if($bqr['fenlei']==3){$fenlei="模拟经营";}
else if($bqr['fenlei']==4){$fenlei="射击游戏";}
else if($bqr['fenlei']==5){$fenlei="动作游戏";}
else if($bqr['fenlei']==6){$fenlei="战争策略";}
else if($bqr['fenlei']==7){$fenlei="棋牌游戏";}
else if($bqr['fenlei']==8){$fenlei="休闲游戏";}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num num<?=$bqno?>"><?=$bqno?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$fenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 3,27",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr['fenlei']==1){$fenlei="卡牌游戏";}
else if($bqr['fenlei']==2){$fenlei="角色扮演";}
else if($bqr['fenlei']==3){$fenlei="模拟经营";}
else if($bqr['fenlei']==4){$fenlei="射击游戏";}
else if($bqr['fenlei']==5){$fenlei="动作游戏";}
else if($bqr['fenlei']==6){$fenlei="战争策略";}
else if($bqr['fenlei']==7){$fenlei="棋牌游戏";}
else if($bqr['fenlei']==8){$fenlei="休闲游戏";}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num"><?=$bqno+3?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$fenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
    </ul>
  </div>
  <div class="thex_bd" id="rank_con_1" style="display:none;">
    <ul class="listwrap">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr['fenlei']==1){$fenlei="卡牌游戏";}
else if($bqr['fenlei']==2){$fenlei="角色扮演";}
else if($bqr['fenlei']==3){$fenlei="模拟经营";}
else if($bqr['fenlei']==4){$fenlei="射击游戏";}
else if($bqr['fenlei']==5){$fenlei="动作游戏";}
else if($bqr['fenlei']==6){$fenlei="战争策略";}
else if($bqr['fenlei']==7){$fenlei="棋牌游戏";}
else if($bqr['fenlei']==8){$fenlei="休闲游戏";}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num num<?=$bqno?>"><?=$bqno?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$fenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by onclick desc limit 3,27",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr['fenlei']==1){$fenlei="卡牌游戏";}
else if($bqr['fenlei']==2){$fenlei="角色扮演";}
else if($bqr['fenlei']==3){$fenlei="模拟经营";}
else if($bqr['fenlei']==4){$fenlei="射击游戏";}
else if($bqr['fenlei']==5){$fenlei="动作游戏";}
else if($bqr['fenlei']==6){$fenlei="战争策略";}
else if($bqr['fenlei']==7){$fenlei="棋牌游戏";}
else if($bqr['fenlei']==8){$fenlei="休闲游戏";}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num"><?=$bqno+3?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$fenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
    </ul>
  </div>
  <div class="thex_bd" id="rank_con_2" style="display:none;">
    <ul class="listwrap">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr['fenlei']==1){$fenlei="益智";}
else if($bqr['fenlei']==2){$fenlei="动作";}
else if($bqr['fenlei']==3){$fenlei="射击";}
else if($bqr['fenlei']==4){$fenlei="休闲";}
else if($bqr['fenlei']==5){$fenlei="敏捷";}
else if($bqr['fenlei']==6){$fenlei="棋牌";}
else if($bqr['fenlei']==7){$fenlei="经营";}
else if($bqr['fenlei']==8){$fenlei="体育";}
else if($bqr['fenlei']==9){$fenlei="策略";}
else if($bqr['fenlei']==10){$fenlei="冒险";}
else if($bqr['fenlei']==11){$fenlei="装扮";}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num num<?=$bqno?>"><?=$bqno?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$fenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 3,27",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr['fenlei']==1){$fenlei="益智";}
else if($bqr['fenlei']==2){$fenlei="动作";}
else if($bqr['fenlei']==3){$fenlei="射击";}
else if($bqr['fenlei']==4){$fenlei="休闲";}
else if($bqr['fenlei']==5){$fenlei="敏捷";}
else if($bqr['fenlei']==6){$fenlei="棋牌";}
else if($bqr['fenlei']==7){$fenlei="经营";}
else if($bqr['fenlei']==8){$fenlei="体育";}
else if($bqr['fenlei']==9){$fenlei="策略";}
else if($bqr['fenlei']==10){$fenlei="冒险";}
else if($bqr['fenlei']==11){$fenlei="装扮";}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num"><?=$bqno+3?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$fenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
    </ul>
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