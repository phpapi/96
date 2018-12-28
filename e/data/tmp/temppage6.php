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
    </ul>
  </div>
  <div class="thex_bd" id="rank_con_0">
    <ul class="listwrap">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[classid]==10){
if($bqr[fenlei]==1){$bfenlei="斗地主";}
else if($bqr[fenlei]==2){$bfenlei="跑胡子";}
else if($bqr[fenlei]==3){$bfenlei="21点";}
else if($bqr[fenlei]==4){$bfenlei="保皇";}
else if($bqr[fenlei]==5){$bfenlei="打滚子";}
else if($bqr[fenlei]==6){$bfenlei="干瞪眼";}
else if($bqr[fenlei]==7){$bfenlei="打大A";}
else if($bqr[fenlei]==8){$bfenlei="四冲";}
else if($bqr[fenlei]==9){$bfenlei="三代";}
else if($bqr[fenlei]==10){$bfenlei="5十K";}
else if($bqr[fenlei]==11){$bfenlei="三打一";}
else if($bqr[fenlei]==12){$bfenlei="挖坑";}
else if($bqr[fenlei]==13){$bfenlei="拱猪";}
else if($bqr[fenlei]==14){$bfenlei="红五";}
else if($bqr[fenlei]==15){$bfenlei="黑尖";}
else if($bqr[fenlei]==16){$bfenlei="攉龙";}
else if($bqr[fenlei]==17){$bfenlei="大怪路子";}
else if($bqr[fenlei]==18){$bfenlei="掼蛋";}
else if($bqr[fenlei]==19){$bfenlei="包分";}
else if($bqr[fenlei]==20){$bfenlei="拖拉机";}
else if($bqr[fenlei]==21){$bfenlei="接龙";}
else if($bqr[fenlei]==22){$bfenlei="跑得快";}
else if($bqr[fenlei]==23){$bfenlei="锄大地";}
else if($bqr[fenlei]==24){$bfenlei="梭哈";}
else if($bqr[fenlei]==25){$bfenlei="德州扑克";}
else if($bqr[fenlei]==26){$bfenlei="炸金花";}
else if($bqr[fenlei]==27){$bfenlei="够级";}
else if($bqr[fenlei]==28){$bfenlei="纸牌";}
else if($bqr[fenlei]==29){$bfenlei="牌九";}
else if($bqr[fenlei]==30){$bfenlei="十三张";}
else if($bqr[fenlei]==31){$bfenlei="刨幺";}
else if($bqr[fenlei]==32){$bfenlei="升级";}
else if($bqr[fenlei]==33){$bfenlei="三公";}
else if($bqr[fenlei]==34){$bfenlei="尖子顶";}
else if($bqr[fenlei]==35){$bfenlei="花牌";}
else if($bqr[fenlei]==36){$bfenlei="红十";}
else if($bqr[fenlei]==37){$bfenlei="斗牛";}
else if($bqr[fenlei]==38){$bfenlei="捕鱼";}
else if($bqr[fenlei]==39){$bfenlei="桥牌";}
else if($bqr[fenlei]==40){$bfenlei="长牌";}
else if($bqr[fenlei]==41){$bfenlei="歪胡子";}
else if($bqr[fenlei]==42){$bfenlei="大字牌";}
else if($bqr[fenlei]==43){$bfenlei="大贰";}
}else if($bqr[classid]==11){
if($bqr[fenlei]==1){$bfenlei="二人麻将";}
else if($bqr[fenlei]==2){$bfenlei="三人麻将";}
else if($bqr[fenlei]==3){$bfenlei="四人麻将";}
else if($bqr[fenlei]==4){$bfenlei="日本麻将";}
else if($bqr[fenlei]==5){$bfenlei="贵阳麻将";}
else if($bqr[fenlei]==6){$bfenlei="台湾麻将";}
else if($bqr[fenlei]==7){$bfenlei="上海麻将";}
else if($bqr[fenlei]==8){$bfenlei="四川麻将";}
else if($bqr[fenlei]==9){$bfenlei="北京麻将";}
else if($bqr[fenlei]==10){$bfenlei="广东麻将";}
else if($bqr[fenlei]==11){$bfenlei="陕西麻将";}
else if($bqr[fenlei]==12){$bfenlei="南昌麻将";}
else if($bqr[fenlei]==13){$bfenlei="长沙麻将";}
else if($bqr[fenlei]==14){$bfenlei="长春麻将";}
else if($bqr[fenlei]==15){$bfenlei="武汉麻将";}
else if($bqr[fenlei]==16){$bfenlei="山东麻将";}
else if($bqr[fenlei]==17){$bfenlei="宁波麻将";}
else if($bqr[fenlei]==18){$bfenlei="合肥麻将";}
else if($bqr[fenlei]==19){$bfenlei="河北麻将";}
else if($bqr[fenlei]==20){$bfenlei="天津麻将";}
else if($bqr[fenlei]==21){$bfenlei="太原麻将";}
else if($bqr[fenlei]==22){$bfenlei="福州麻将";}
else if($bqr[fenlei]==23){$bfenlei="杭州麻将";}
else if($bqr[fenlei]==24){$bfenlei="南京麻将";}
else if($bqr[fenlei]==25){$bfenlei="大连麻将";}
else if($bqr[fenlei]==26){$bfenlei="芜湖麻将";}
else if($bqr[fenlei]==27){$bfenlei="淮安麻将";}
else if($bqr[fenlei]==28){$bfenlei="南宁麻将";}
else if($bqr[fenlei]==29){$bfenlei="沈阳麻将";}
else if($bqr[fenlei]==30){$bfenlei="西安麻将";}
else if($bqr[fenlei]==31){$bfenlei="红中麻将";}
else if($bqr[fenlei]==32){$bfenlei="麻将接龙";}

}else if($bqr[classid]==12){
if($bqr[fenlei]==1){$bfenlei="五子棋";}
else if($bqr[fenlei]==2){$bfenlei="象棋";}
else if($bqr[fenlei]==3){$bfenlei="围棋";}
else if($bqr[fenlei]==4){$bfenlei="飞行棋";}
else if($bqr[fenlei]==5){$bfenlei="中国暗棋";}
else if($bqr[fenlei]==6){$bfenlei="跳棋";}
else if($bqr[fenlei]==7){$bfenlei="井字棋";}
else if($bqr[fenlei]==8){$bfenlei="军棋";}
else if($bqr[fenlei]==9){$bfenlei="斗兽棋";}
else if($bqr[fenlei]==10){$bfenlei="将棋";}
else if($bqr[fenlei]==11){$bfenlei="四子棋";}
else if($bqr[fenlei]==12){$bfenlei="大富翁";}
else if($bqr[fenlei]==13){$bfenlei="国际象棋";}
}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num num<?=$bqno?>"><?=$bqno?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$bfenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by onclick desc limit 3,27",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[classid]==10){
if($bqr[fenlei]==1){$bfenlei="斗地主";}
else if($bqr[fenlei]==2){$bfenlei="跑胡子";}
else if($bqr[fenlei]==3){$bfenlei="21点";}
else if($bqr[fenlei]==4){$bfenlei="保皇";}
else if($bqr[fenlei]==5){$bfenlei="打滚子";}
else if($bqr[fenlei]==6){$bfenlei="干瞪眼";}
else if($bqr[fenlei]==7){$bfenlei="打大A";}
else if($bqr[fenlei]==8){$bfenlei="四冲";}
else if($bqr[fenlei]==9){$bfenlei="三代";}
else if($bqr[fenlei]==10){$bfenlei="5十K";}
else if($bqr[fenlei]==11){$bfenlei="三打一";}
else if($bqr[fenlei]==12){$bfenlei="挖坑";}
else if($bqr[fenlei]==13){$bfenlei="拱猪";}
else if($bqr[fenlei]==14){$bfenlei="红五";}
else if($bqr[fenlei]==15){$bfenlei="黑尖";}
else if($bqr[fenlei]==16){$bfenlei="攉龙";}
else if($bqr[fenlei]==17){$bfenlei="大怪路子";}
else if($bqr[fenlei]==18){$bfenlei="掼蛋";}
else if($bqr[fenlei]==19){$bfenlei="包分";}
else if($bqr[fenlei]==20){$bfenlei="拖拉机";}
else if($bqr[fenlei]==21){$bfenlei="接龙";}
else if($bqr[fenlei]==22){$bfenlei="跑得快";}
else if($bqr[fenlei]==23){$bfenlei="锄大地";}
else if($bqr[fenlei]==24){$bfenlei="梭哈";}
else if($bqr[fenlei]==25){$bfenlei="德州扑克";}
else if($bqr[fenlei]==26){$bfenlei="炸金花";}
else if($bqr[fenlei]==27){$bfenlei="够级";}
else if($bqr[fenlei]==28){$bfenlei="纸牌";}
else if($bqr[fenlei]==29){$bfenlei="牌九";}
else if($bqr[fenlei]==30){$bfenlei="十三张";}
else if($bqr[fenlei]==31){$bfenlei="刨幺";}
else if($bqr[fenlei]==32){$bfenlei="升级";}
else if($bqr[fenlei]==33){$bfenlei="三公";}
else if($bqr[fenlei]==34){$bfenlei="尖子顶";}
else if($bqr[fenlei]==35){$bfenlei="花牌";}
else if($bqr[fenlei]==36){$bfenlei="红十";}
else if($bqr[fenlei]==37){$bfenlei="斗牛";}
else if($bqr[fenlei]==38){$bfenlei="捕鱼";}
else if($bqr[fenlei]==39){$bfenlei="桥牌";}
else if($bqr[fenlei]==40){$bfenlei="长牌";}
else if($bqr[fenlei]==41){$bfenlei="歪胡子";}
else if($bqr[fenlei]==42){$bfenlei="大字牌";}
else if($bqr[fenlei]==43){$bfenlei="大贰";}
}else if($bqr[classid]==11){
if($bqr[fenlei]==1){$bfenlei="二人麻将";}
else if($bqr[fenlei]==2){$bfenlei="三人麻将";}
else if($bqr[fenlei]==3){$bfenlei="四人麻将";}
else if($bqr[fenlei]==4){$bfenlei="日本麻将";}
else if($bqr[fenlei]==5){$bfenlei="贵阳麻将";}
else if($bqr[fenlei]==6){$bfenlei="台湾麻将";}
else if($bqr[fenlei]==7){$bfenlei="上海麻将";}
else if($bqr[fenlei]==8){$bfenlei="四川麻将";}
else if($bqr[fenlei]==9){$bfenlei="北京麻将";}
else if($bqr[fenlei]==10){$bfenlei="广东麻将";}
else if($bqr[fenlei]==11){$bfenlei="陕西麻将";}
else if($bqr[fenlei]==12){$bfenlei="南昌麻将";}
else if($bqr[fenlei]==13){$bfenlei="长沙麻将";}
else if($bqr[fenlei]==14){$bfenlei="长春麻将";}
else if($bqr[fenlei]==15){$bfenlei="武汉麻将";}
else if($bqr[fenlei]==16){$bfenlei="山东麻将";}
else if($bqr[fenlei]==17){$bfenlei="宁波麻将";}
else if($bqr[fenlei]==18){$bfenlei="合肥麻将";}
else if($bqr[fenlei]==19){$bfenlei="河北麻将";}
else if($bqr[fenlei]==20){$bfenlei="天津麻将";}
else if($bqr[fenlei]==21){$bfenlei="太原麻将";}
else if($bqr[fenlei]==22){$bfenlei="福州麻将";}
else if($bqr[fenlei]==23){$bfenlei="杭州麻将";}
else if($bqr[fenlei]==24){$bfenlei="南京麻将";}
else if($bqr[fenlei]==25){$bfenlei="大连麻将";}
else if($bqr[fenlei]==26){$bfenlei="芜湖麻将";}
else if($bqr[fenlei]==27){$bfenlei="淮安麻将";}
else if($bqr[fenlei]==28){$bfenlei="南宁麻将";}
else if($bqr[fenlei]==29){$bfenlei="沈阳麻将";}
else if($bqr[fenlei]==30){$bfenlei="西安麻将";}
else if($bqr[fenlei]==31){$bfenlei="红中麻将";}
else if($bqr[fenlei]==32){$bfenlei="麻将接龙";}

}else if($bqr[classid]==12){
if($bqr[fenlei]==1){$bfenlei="五子棋";}
else if($bqr[fenlei]==2){$bfenlei="象棋";}
else if($bqr[fenlei]==3){$bfenlei="围棋";}
else if($bqr[fenlei]==4){$bfenlei="飞行棋";}
else if($bqr[fenlei]==5){$bfenlei="中国暗棋";}
else if($bqr[fenlei]==6){$bfenlei="跳棋";}
else if($bqr[fenlei]==7){$bfenlei="井字棋";}
else if($bqr[fenlei]==8){$bfenlei="军棋";}
else if($bqr[fenlei]==9){$bfenlei="斗兽棋";}
else if($bqr[fenlei]==10){$bfenlei="将棋";}
else if($bqr[fenlei]==11){$bfenlei="四子棋";}
else if($bqr[fenlei]==12){$bfenlei="大富翁";}
else if($bqr[fenlei]==13){$bfenlei="国际象棋";}
}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num"><?=$bqno+3?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$bfenlei?> | <?=$bqr['onclick']?>人在玩</p>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[classid]==10){
if($bqr[fenlei]==1){$bfenlei="斗地主";}
else if($bqr[fenlei]==2){$bfenlei="跑胡子";}
else if($bqr[fenlei]==3){$bfenlei="21点";}
else if($bqr[fenlei]==4){$bfenlei="保皇";}
else if($bqr[fenlei]==5){$bfenlei="打滚子";}
else if($bqr[fenlei]==6){$bfenlei="干瞪眼";}
else if($bqr[fenlei]==7){$bfenlei="打大A";}
else if($bqr[fenlei]==8){$bfenlei="四冲";}
else if($bqr[fenlei]==9){$bfenlei="三代";}
else if($bqr[fenlei]==10){$bfenlei="5十K";}
else if($bqr[fenlei]==11){$bfenlei="三打一";}
else if($bqr[fenlei]==12){$bfenlei="挖坑";}
else if($bqr[fenlei]==13){$bfenlei="拱猪";}
else if($bqr[fenlei]==14){$bfenlei="红五";}
else if($bqr[fenlei]==15){$bfenlei="黑尖";}
else if($bqr[fenlei]==16){$bfenlei="攉龙";}
else if($bqr[fenlei]==17){$bfenlei="大怪路子";}
else if($bqr[fenlei]==18){$bfenlei="掼蛋";}
else if($bqr[fenlei]==19){$bfenlei="包分";}
else if($bqr[fenlei]==20){$bfenlei="拖拉机";}
else if($bqr[fenlei]==21){$bfenlei="接龙";}
else if($bqr[fenlei]==22){$bfenlei="跑得快";}
else if($bqr[fenlei]==23){$bfenlei="锄大地";}
else if($bqr[fenlei]==24){$bfenlei="梭哈";}
else if($bqr[fenlei]==25){$bfenlei="德州扑克";}
else if($bqr[fenlei]==26){$bfenlei="炸金花";}
else if($bqr[fenlei]==27){$bfenlei="够级";}
else if($bqr[fenlei]==28){$bfenlei="纸牌";}
else if($bqr[fenlei]==29){$bfenlei="牌九";}
else if($bqr[fenlei]==30){$bfenlei="十三张";}
else if($bqr[fenlei]==31){$bfenlei="刨幺";}
else if($bqr[fenlei]==32){$bfenlei="升级";}
else if($bqr[fenlei]==33){$bfenlei="三公";}
else if($bqr[fenlei]==34){$bfenlei="尖子顶";}
else if($bqr[fenlei]==35){$bfenlei="花牌";}
else if($bqr[fenlei]==36){$bfenlei="红十";}
else if($bqr[fenlei]==37){$bfenlei="斗牛";}
else if($bqr[fenlei]==38){$bfenlei="捕鱼";}
else if($bqr[fenlei]==39){$bfenlei="桥牌";}
else if($bqr[fenlei]==40){$bfenlei="长牌";}
else if($bqr[fenlei]==41){$bfenlei="歪胡子";}
else if($bqr[fenlei]==42){$bfenlei="大字牌";}
else if($bqr[fenlei]==43){$bfenlei="大贰";}
}else if($bqr[classid]==11){
if($bqr[fenlei]==1){$bfenlei="二人麻将";}
else if($bqr[fenlei]==2){$bfenlei="三人麻将";}
else if($bqr[fenlei]==3){$bfenlei="四人麻将";}
else if($bqr[fenlei]==4){$bfenlei="日本麻将";}
else if($bqr[fenlei]==5){$bfenlei="贵阳麻将";}
else if($bqr[fenlei]==6){$bfenlei="台湾麻将";}
else if($bqr[fenlei]==7){$bfenlei="上海麻将";}
else if($bqr[fenlei]==8){$bfenlei="四川麻将";}
else if($bqr[fenlei]==9){$bfenlei="北京麻将";}
else if($bqr[fenlei]==10){$bfenlei="广东麻将";}
else if($bqr[fenlei]==11){$bfenlei="陕西麻将";}
else if($bqr[fenlei]==12){$bfenlei="南昌麻将";}
else if($bqr[fenlei]==13){$bfenlei="长沙麻将";}
else if($bqr[fenlei]==14){$bfenlei="长春麻将";}
else if($bqr[fenlei]==15){$bfenlei="武汉麻将";}
else if($bqr[fenlei]==16){$bfenlei="山东麻将";}
else if($bqr[fenlei]==17){$bfenlei="宁波麻将";}
else if($bqr[fenlei]==18){$bfenlei="合肥麻将";}
else if($bqr[fenlei]==19){$bfenlei="河北麻将";}
else if($bqr[fenlei]==20){$bfenlei="天津麻将";}
else if($bqr[fenlei]==21){$bfenlei="太原麻将";}
else if($bqr[fenlei]==22){$bfenlei="福州麻将";}
else if($bqr[fenlei]==23){$bfenlei="杭州麻将";}
else if($bqr[fenlei]==24){$bfenlei="南京麻将";}
else if($bqr[fenlei]==25){$bfenlei="大连麻将";}
else if($bqr[fenlei]==26){$bfenlei="芜湖麻将";}
else if($bqr[fenlei]==27){$bfenlei="淮安麻将";}
else if($bqr[fenlei]==28){$bfenlei="南宁麻将";}
else if($bqr[fenlei]==29){$bfenlei="沈阳麻将";}
else if($bqr[fenlei]==30){$bfenlei="西安麻将";}
else if($bqr[fenlei]==31){$bfenlei="红中麻将";}
else if($bqr[fenlei]==32){$bfenlei="麻将接龙";}

}else if($bqr[classid]==12){
if($bqr[fenlei]==1){$bfenlei="五子棋";}
else if($bqr[fenlei]==2){$bfenlei="象棋";}
else if($bqr[fenlei]==3){$bfenlei="围棋";}
else if($bqr[fenlei]==4){$bfenlei="飞行棋";}
else if($bqr[fenlei]==5){$bfenlei="中国暗棋";}
else if($bqr[fenlei]==6){$bfenlei="跳棋";}
else if($bqr[fenlei]==7){$bfenlei="井字棋";}
else if($bqr[fenlei]==8){$bfenlei="军棋";}
else if($bqr[fenlei]==9){$bfenlei="斗兽棋";}
else if($bqr[fenlei]==10){$bfenlei="将棋";}
else if($bqr[fenlei]==11){$bfenlei="四子棋";}
else if($bqr[fenlei]==12){$bfenlei="大富翁";}
else if($bqr[fenlei]==13){$bfenlei="国际象棋";}
}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num num<?=$bqno?>"><?=$bqno?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$bfenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by newstime desc limit 3,27",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[classid]==10){
if($bqr[fenlei]==1){$bfenlei="斗地主";}
else if($bqr[fenlei]==2){$bfenlei="跑胡子";}
else if($bqr[fenlei]==3){$bfenlei="21点";}
else if($bqr[fenlei]==4){$bfenlei="保皇";}
else if($bqr[fenlei]==5){$bfenlei="打滚子";}
else if($bqr[fenlei]==6){$bfenlei="干瞪眼";}
else if($bqr[fenlei]==7){$bfenlei="打大A";}
else if($bqr[fenlei]==8){$bfenlei="四冲";}
else if($bqr[fenlei]==9){$bfenlei="三代";}
else if($bqr[fenlei]==10){$bfenlei="5十K";}
else if($bqr[fenlei]==11){$bfenlei="三打一";}
else if($bqr[fenlei]==12){$bfenlei="挖坑";}
else if($bqr[fenlei]==13){$bfenlei="拱猪";}
else if($bqr[fenlei]==14){$bfenlei="红五";}
else if($bqr[fenlei]==15){$bfenlei="黑尖";}
else if($bqr[fenlei]==16){$bfenlei="攉龙";}
else if($bqr[fenlei]==17){$bfenlei="大怪路子";}
else if($bqr[fenlei]==18){$bfenlei="掼蛋";}
else if($bqr[fenlei]==19){$bfenlei="包分";}
else if($bqr[fenlei]==20){$bfenlei="拖拉机";}
else if($bqr[fenlei]==21){$bfenlei="接龙";}
else if($bqr[fenlei]==22){$bfenlei="跑得快";}
else if($bqr[fenlei]==23){$bfenlei="锄大地";}
else if($bqr[fenlei]==24){$bfenlei="梭哈";}
else if($bqr[fenlei]==25){$bfenlei="德州扑克";}
else if($bqr[fenlei]==26){$bfenlei="炸金花";}
else if($bqr[fenlei]==27){$bfenlei="够级";}
else if($bqr[fenlei]==28){$bfenlei="纸牌";}
else if($bqr[fenlei]==29){$bfenlei="牌九";}
else if($bqr[fenlei]==30){$bfenlei="十三张";}
else if($bqr[fenlei]==31){$bfenlei="刨幺";}
else if($bqr[fenlei]==32){$bfenlei="升级";}
else if($bqr[fenlei]==33){$bfenlei="三公";}
else if($bqr[fenlei]==34){$bfenlei="尖子顶";}
else if($bqr[fenlei]==35){$bfenlei="花牌";}
else if($bqr[fenlei]==36){$bfenlei="红十";}
else if($bqr[fenlei]==37){$bfenlei="斗牛";}
else if($bqr[fenlei]==38){$bfenlei="捕鱼";}
else if($bqr[fenlei]==39){$bfenlei="桥牌";}
else if($bqr[fenlei]==40){$bfenlei="长牌";}
else if($bqr[fenlei]==41){$bfenlei="歪胡子";}
else if($bqr[fenlei]==42){$bfenlei="大字牌";}
else if($bqr[fenlei]==43){$bfenlei="大贰";}
}else if($bqr[classid]==11){
if($bqr[fenlei]==1){$bfenlei="二人麻将";}
else if($bqr[fenlei]==2){$bfenlei="三人麻将";}
else if($bqr[fenlei]==3){$bfenlei="四人麻将";}
else if($bqr[fenlei]==4){$bfenlei="日本麻将";}
else if($bqr[fenlei]==5){$bfenlei="贵阳麻将";}
else if($bqr[fenlei]==6){$bfenlei="台湾麻将";}
else if($bqr[fenlei]==7){$bfenlei="上海麻将";}
else if($bqr[fenlei]==8){$bfenlei="四川麻将";}
else if($bqr[fenlei]==9){$bfenlei="北京麻将";}
else if($bqr[fenlei]==10){$bfenlei="广东麻将";}
else if($bqr[fenlei]==11){$bfenlei="陕西麻将";}
else if($bqr[fenlei]==12){$bfenlei="南昌麻将";}
else if($bqr[fenlei]==13){$bfenlei="长沙麻将";}
else if($bqr[fenlei]==14){$bfenlei="长春麻将";}
else if($bqr[fenlei]==15){$bfenlei="武汉麻将";}
else if($bqr[fenlei]==16){$bfenlei="山东麻将";}
else if($bqr[fenlei]==17){$bfenlei="宁波麻将";}
else if($bqr[fenlei]==18){$bfenlei="合肥麻将";}
else if($bqr[fenlei]==19){$bfenlei="河北麻将";}
else if($bqr[fenlei]==20){$bfenlei="天津麻将";}
else if($bqr[fenlei]==21){$bfenlei="太原麻将";}
else if($bqr[fenlei]==22){$bfenlei="福州麻将";}
else if($bqr[fenlei]==23){$bfenlei="杭州麻将";}
else if($bqr[fenlei]==24){$bfenlei="南京麻将";}
else if($bqr[fenlei]==25){$bfenlei="大连麻将";}
else if($bqr[fenlei]==26){$bfenlei="芜湖麻将";}
else if($bqr[fenlei]==27){$bfenlei="淮安麻将";}
else if($bqr[fenlei]==28){$bfenlei="南宁麻将";}
else if($bqr[fenlei]==29){$bfenlei="沈阳麻将";}
else if($bqr[fenlei]==30){$bfenlei="西安麻将";}
else if($bqr[fenlei]==31){$bfenlei="红中麻将";}
else if($bqr[fenlei]==32){$bfenlei="麻将接龙";}

}else if($bqr[classid]==12){
if($bqr[fenlei]==1){$bfenlei="五子棋";}
else if($bqr[fenlei]==2){$bfenlei="象棋";}
else if($bqr[fenlei]==3){$bfenlei="围棋";}
else if($bqr[fenlei]==4){$bfenlei="飞行棋";}
else if($bqr[fenlei]==5){$bfenlei="中国暗棋";}
else if($bqr[fenlei]==6){$bfenlei="跳棋";}
else if($bqr[fenlei]==7){$bfenlei="井字棋";}
else if($bqr[fenlei]==8){$bfenlei="军棋";}
else if($bqr[fenlei]==9){$bfenlei="斗兽棋";}
else if($bqr[fenlei]==10){$bfenlei="将棋";}
else if($bqr[fenlei]==11){$bfenlei="四子棋";}
else if($bqr[fenlei]==12){$bfenlei="大富翁";}
else if($bqr[fenlei]==13){$bfenlei="国际象棋";}
}
?>
      <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <em class="num"><?=$bqno+3?></em> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="title">
          <h4><?=$bqr['title']?></h4>
        </div>
        <p class="txt"><?=$bfenlei?> | <?=$bqr['onclick']?>人在玩</p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
    </ul>
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