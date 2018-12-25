<?php 
$word=$_GET["key"];
$word=strFilter($word);
function strFilter($str){
    $str = str_replace('`', '', $str);
    $str = str_replace('·', '', $str);
    $str = str_replace('~', '', $str);
    $str = str_replace('!', '', $str);
    $str = str_replace('！', '', $str);
    $str = str_replace('@', '', $str);
    $str = str_replace('#', '', $str);
    $str = str_replace('$', '', $str);
    $str = str_replace('￥', '', $str);
    $str = str_replace('%', '', $str);
    $str = str_replace('^', '', $str);
    $str = str_replace('……', '', $str);
    $str = str_replace('&', '', $str);
    $str = str_replace('*', '', $str);
    $str = str_replace('(', '', $str);
    $str = str_replace(')', '', $str);
    $str = str_replace('（', '', $str);
    $str = str_replace('）', '', $str);
    $str = str_replace('-', '', $str);
    $str = str_replace('_', '', $str);
    $str = str_replace('——', '', $str);
    $str = str_replace('+', '', $str);
    $str = str_replace('=', '', $str);
    $str = str_replace('|', '', $str);
    $str = str_replace('\\', '', $str);
    $str = str_replace('[', '', $str);
    $str = str_replace(']', '', $str);
    $str = str_replace('【', '', $str);
    $str = str_replace('】', '', $str);
    $str = str_replace('{', '', $str);
    $str = str_replace('}', '', $str);
    $str = str_replace(';', '', $str);
    $str = str_replace('；', '', $str);
    $str = str_replace(':', '', $str);
    $str = str_replace('：', '', $str);
    $str = str_replace('\'', '', $str);
    $str = str_replace('"', '', $str);
    $str = str_replace('“', '', $str);
    $str = str_replace('”', '', $str);
    $str = str_replace(',', '', $str);
    $str = str_replace('，', '', $str);
    $str = str_replace('<', '', $str);
    $str = str_replace('>', '', $str);
    $str = str_replace('《', '', $str);
    $str = str_replace('》', '', $str);
    $str = str_replace('.', '', $str);
    $str = str_replace('。', '', $str);
    $str = str_replace('/', '', $str);
    $str = str_replace('、', '', $str);
    $str = str_replace('?', '', $str);
    $str = str_replace('？', '', $str);
    return trim($str);
}
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 
$www_96kaifa_com_header=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_shead' limit 1");
$www_96kaifa_com_footer=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_sfoot' limit 1");

$num = 0;
if ($word != ''){
    $num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_news where title like '%$word%'");
}

?>
<!doctype html>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=$word?> 搜索结果_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/style3500.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
</head>
<body>
<div class="cover"></div>
<?=stripslashes($www_96kaifa_com_header[0])?>
<div class="main">
  <div class="position">当前位置：<a href="/">首页</a> > 搜索 "<em class="red"><?=$word?></em>" 相关内容<?=$num?>个</div>
  <div class="container">
    <div class="result">
      <div class="result-tab">
        <ul>
          <li class="tab_1"><a href="/search/game.php?key=<?=$word?>">扑克</a><i></i></li>
          <li class="tab_1"><a href="/search/majiang.php?key=<?=$word?>">麻将</a><i></i></li>
          <li class="tab_1"><a href="/search/qipai.php?key=<?=$word?>">棋牌</a><i></i></li>
          <li class="tab_2"><a href="/search/zixun.php?key=<?=$word?>">资讯<i></i></li>
        </ul>
      </div>
      <div class="result-box">
        <ul class="news-list">
<?php if($word==''){?>
<!--无关键词开始-->
<div class="result-box">
  <div class="default">亲，没有找到您搜的相关内容，试试搜索其他的<br>
    或者看看大家都在玩的游戏</div>
</div>
<!--无关键词结束-->
<?php }else{
$Page_size=10; 
$result=$empire->query("select * from www_96kaifa_com_ecms_news where title like '%$word%'");
$count = mysqli_num_rows($result); 

$page_count = ceil($count/$Page_size); 
$init=1; 
$page_len=5; 
$max_p=$page_count; 
$pages=$page_count; 
//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 
$offset=$Page_size*($page-1); 
$sql=$empire->query("select * from www_96kaifa_com_ecms_news where title like '%$word%' order by newstime desc limit $offset,$Page_size");

while ($row=$empire->fetch($sql)) { 

?> 
		<li>
		  <div class="items clearfix"> <a class="pic" href="<?php echo $row['titleurl']?>" target="_blank"><img src="<?php echo $row['titlepic']?>" alt=""></a>
			<div class="con">
			  <p class="title"><a href="<?php echo $row['titleurl']?>" target="_blank"><?php echo $row['title']?></a></p>
			  <p class="other"><span class="time"><?php echo date('Y-m-d',$row[newstime])?></span></p>
			  <p class="desc"><?php echo $row['smalltext']?></p>
			</div>
		  </div>
		</li>
<?php 
} 
if($count==0){
	
?>
<!--无搜索结果开始-->
<div class="result-box">
  <div class="default">亲，没有找到您搜的相关内容，试试搜索其他的<br>
    或者看看大家都在玩的游戏</div>
</div>
<!--无搜索结果结束-->
<?php
}else{
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key='<div class="page">'; 
$key.="<span class=\"a1 disabled\">共 ".$page_count." 页</span> "; //第几页,共几页 
if($page!=1){ 
//$key.="<a href=\"/search/zixun.php?key=".$word."&page=1"."\" class=\"a1\">首页</a> "; //首页 
$key.="<a href=\"/search/zixun.php?key=".$word."&page=".($page-1)."\" class=\"a1\">上一页</a>"; //上一页 
}else { 
$key.="";//首页 
$key.=""; //上一页 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
if($page_count==1){}else{$key.=' <span>'.$i.'</span>'; }
} else { 
$key.=" <a href=\"/search/zixun.php?key=".$word."&page=".$i."\" class=\"a1\">".$i."</a>"; 
} 
} 
if($page!=$pages){ 


$key.=" <a href=\"/search/zixun.php?key=".$word."&page=".($page+1)."\" class=\"a1\">下一页</a> ";//下一页 
//$key.=" <a href=\"/search/zixun.php?key=".$word."&page=".$pages."\" class=\"a1\">尾页</a>"; //尾页 
}else { 
$key.=" ";//下一页 
$key.=""; //尾页 
} 
$key.='</div>'; 
}} 
?>
        </ul>
         <?php if($page_count==0){}else{ echo $key; } ?>
      </div>
    </div>
      <div class="w336">
          <div class="w-rank">
              <div class="hd20">
                  <h3>游戏排行</h3>
              </div>
              <div class="bd">
                  <ol id="rank_con_0">
                      <?php
                      $query = $empire->query("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by onclick desc limit 3");
                      $no=1;
                      while($rs = $empire->fetch($query)){
                          $xwtitle=$rs['title'];
                          $titleurl=$rs['titleurl'];
                          $xwtitlepic=$rs['titlepic'];
                          $onclick=$rs['onclick'];

                          if($rs[classid]==10){
                              if($rs[fenlei]==1){$bfenlei="斗地主";}
                              else if($rs[fenlei]==2){$bfenlei="跑胡子";}
                              else if($rs[fenlei]==3){$bfenlei="21点";}
                              else if($rs[fenlei]==4){$bfenlei="保皇";}
                              else if($rs[fenlei]==5){$bfenlei="打滚子";}
                              else if($rs[fenlei]==6){$bfenlei="干瞪眼";}
                              else if($rs[fenlei]==7){$bfenlei="打大A";}
                              else if($rs[fenlei]==8){$bfenlei="四冲";}
                              else if($rs[fenlei]==9){$bfenlei="三代";}
                              else if($rs[fenlei]==10){$bfenlei="5十K";}
                              else if($rs[fenlei]==11){$bfenlei="三打一";}
                              else if($rs[fenlei]==12){$bfenlei="挖坑";}
                              else if($rs[fenlei]==13){$bfenlei="拱猪";}
                              else if($rs[fenlei]==14){$bfenlei="红五";}
                              else if($rs[fenlei]==15){$bfenlei="黑尖";}
                              else if($rs[fenlei]==16){$bfenlei="攉龙";}
                              else if($rs[fenlei]==17){$bfenlei="大怪路子";}
                              else if($rs[fenlei]==18){$bfenlei="掼蛋";}
                              else if($rs[fenlei]==19){$bfenlei="包分";}
                              else if($rs[fenlei]==20){$bfenlei="拖拉机";}
                              else if($rs[fenlei]==21){$bfenlei="接龙";}
                              else if($rs[fenlei]==22){$bfenlei="跑得快";}
                              else if($rs[fenlei]==23){$bfenlei="锄大地";}
                              else if($rs[fenlei]==24){$bfenlei="梭哈";}
                              else if($rs[fenlei]==25){$bfenlei="德州扑克";}
                              else if($rs[fenlei]==26){$bfenlei="炸金花";}
                              else if($rs[fenlei]==27){$bfenlei="够级";}
                              else if($rs[fenlei]==28){$bfenlei="纸牌";}
                              else if($rs[fenlei]==29){$bfenlei="牌九";}
                              else if($rs[fenlei]==30){$bfenlei="十三张";}
                              else if($rs[fenlei]==31){$bfenlei="刨幺";}
                              else if($rs[fenlei]==32){$bfenlei="升级";}
                              else if($rs[fenlei]==33){$bfenlei="三公";}
                              else if($rs[fenlei]==34){$bfenlei="尖子顶";}
                              else if($rs[fenlei]==35){$bfenlei="花牌";}
                              else if($rs[fenlei]==36){$bfenlei="红十";}
                              else if($rs[fenlei]==37){$bfenlei="斗牛";}
                              else if($rs[fenlei]==38){$bfenlei="捕鱼";}
                              else if($rs[fenlei]==39){$bfenlei="桥牌";}
                              else if($rs[fenlei]==40){$bfenlei="长牌";}
                              else if($rs[fenlei]==41){$bfenlei="歪胡子";}
                              else if($rs[fenlei]==42){$bfenlei="大字牌";}
                              else if($rs[fenlei]==43){$bfenlei="大贰";}
                          }else if($rs[classid]==11){
                              if($rs[fenlei]==1){$bfenlei="二人麻将";}
                              else if($rs[fenlei]==2){$bfenlei="三人麻将";}
                              else if($rs[fenlei]==3){$bfenlei="四人麻将";}
                              else if($rs[fenlei]==4){$bfenlei="日本麻将";}
                              else if($rs[fenlei]==5){$bfenlei="贵阳麻将";}
                              else if($rs[fenlei]==6){$bfenlei="台湾麻将";}
                              else if($rs[fenlei]==7){$bfenlei="上海麻将";}
                              else if($rs[fenlei]==8){$bfenlei="四川麻将";}
                              else if($rs[fenlei]==9){$bfenlei="北京麻将";}
                              else if($rs[fenlei]==10){$bfenlei="广东麻将";}
                              else if($rs[fenlei]==11){$bfenlei="陕西麻将";}
                              else if($rs[fenlei]==12){$bfenlei="南昌麻将";}
                              else if($rs[fenlei]==13){$bfenlei="长沙麻将";}
                              else if($rs[fenlei]==14){$bfenlei="长春麻将";}
                              else if($rs[fenlei]==15){$bfenlei="武汉麻将";}
                              else if($rs[fenlei]==16){$bfenlei="山东麻将";}
                              else if($rs[fenlei]==17){$bfenlei="宁波麻将";}
                              else if($rs[fenlei]==18){$bfenlei="合肥麻将";}
                              else if($rs[fenlei]==19){$bfenlei="河北麻将";}
                              else if($rs[fenlei]==20){$bfenlei="天津麻将";}
                              else if($rs[fenlei]==21){$bfenlei="太原麻将";}
                              else if($rs[fenlei]==22){$bfenlei="福州麻将";}
                              else if($rs[fenlei]==23){$bfenlei="杭州麻将";}
                              else if($rs[fenlei]==24){$bfenlei="南京麻将";}
                              else if($rs[fenlei]==25){$bfenlei="大连麻将";}
                              else if($rs[fenlei]==26){$bfenlei="芜湖麻将";}
                              else if($rs[fenlei]==27){$bfenlei="淮安麻将";}
                              else if($rs[fenlei]==28){$bfenlei="南宁麻将";}
                              else if($rs[fenlei]==29){$bfenlei="沈阳麻将";}
                              else if($rs[fenlei]==30){$bfenlei="西安麻将";}
                              else if($rs[fenlei]==31){$bfenlei="红中麻将";}
                              else if($rs[fenlei]==32){$bfenlei="麻将接龙";}

                          }else if($rs[classid]==12) {
                              if ($rs[fenlei] == 1) {
                                  $bfenlei = "五子棋";
                              } else if ($rs[fenlei] == 2) {
                                  $bfenlei = "象棋";
                              } else if ($rs[fenlei] == 3) {
                                  $bfenlei = "围棋";
                              } else if ($rs[fenlei] == 4) {
                                  $bfenlei = "飞行棋";
                              } else if ($rs[fenlei] == 5) {
                                  $bfenlei = "中国暗棋";
                              } else if ($rs[fenlei] == 6) {
                                  $bfenlei = "跳棋";
                              } else if ($rs[fenlei] == 7) {
                                  $bfenlei = "井字棋";
                              } else if ($rs[fenlei] == 8) {
                                  $bfenlei = "军棋";
                              } else if ($rs[fenlei] == 9) {
                                  $bfenlei = "斗兽棋";
                              } else if ($rs[fenlei] == 10) {
                                  $bfenlei = "将棋";
                              } else if ($rs[fenlei] == 11) {
                                  $bfenlei = "四子棋";
                              } else if ($rs[fenlei] == 12) {
                                  $bfenlei = "大富翁";
                              } else if ($rs[fenlei] == 13) {
                                  $bfenlei = "国际象棋";
                              }
                          }
                          ?>
                          <li> <em class="num num<?=$no?>"><?=$no?></em>
                              <div class="box1">
                                  <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                                  <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                                  <p><span><?=$bfenlei?></span><span><?=$onclick?>人在玩</span></p>
                              </div>
                              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
                          </li>
                          <?php $no++;} ?>
                      <?php
                      $query = $empire->query("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by onclick desc limit 3,2");
                      $no=4;
                      while($rs = $empire->fetch($query)){
                          $xwtitle=$rs['title'];
                          $titleurl=$rs['titleurl'];
                          $xwtitlepic=$rs['titlepic'];
                          $onclick=$rs['onclick'];

                          if($rs[classid]==10){
                              if($rs[fenlei]==1){$bfenlei="斗地主";}
                              else if($rs[fenlei]==2){$bfenlei="跑胡子";}
                              else if($rs[fenlei]==3){$bfenlei="21点";}
                              else if($rs[fenlei]==4){$bfenlei="保皇";}
                              else if($rs[fenlei]==5){$bfenlei="打滚子";}
                              else if($rs[fenlei]==6){$bfenlei="干瞪眼";}
                              else if($rs[fenlei]==7){$bfenlei="打大A";}
                              else if($rs[fenlei]==8){$bfenlei="四冲";}
                              else if($rs[fenlei]==9){$bfenlei="三代";}
                              else if($rs[fenlei]==10){$bfenlei="5十K";}
                              else if($rs[fenlei]==11){$bfenlei="三打一";}
                              else if($rs[fenlei]==12){$bfenlei="挖坑";}
                              else if($rs[fenlei]==13){$bfenlei="拱猪";}
                              else if($rs[fenlei]==14){$bfenlei="红五";}
                              else if($rs[fenlei]==15){$bfenlei="黑尖";}
                              else if($rs[fenlei]==16){$bfenlei="攉龙";}
                              else if($rs[fenlei]==17){$bfenlei="大怪路子";}
                              else if($rs[fenlei]==18){$bfenlei="掼蛋";}
                              else if($rs[fenlei]==19){$bfenlei="包分";}
                              else if($rs[fenlei]==20){$bfenlei="拖拉机";}
                              else if($rs[fenlei]==21){$bfenlei="接龙";}
                              else if($rs[fenlei]==22){$bfenlei="跑得快";}
                              else if($rs[fenlei]==23){$bfenlei="锄大地";}
                              else if($rs[fenlei]==24){$bfenlei="梭哈";}
                              else if($rs[fenlei]==25){$bfenlei="德州扑克";}
                              else if($rs[fenlei]==26){$bfenlei="炸金花";}
                              else if($rs[fenlei]==27){$bfenlei="够级";}
                              else if($rs[fenlei]==28){$bfenlei="纸牌";}
                              else if($rs[fenlei]==29){$bfenlei="牌九";}
                              else if($rs[fenlei]==30){$bfenlei="十三张";}
                              else if($rs[fenlei]==31){$bfenlei="刨幺";}
                              else if($rs[fenlei]==32){$bfenlei="升级";}
                              else if($rs[fenlei]==33){$bfenlei="三公";}
                              else if($rs[fenlei]==34){$bfenlei="尖子顶";}
                              else if($rs[fenlei]==35){$bfenlei="花牌";}
                              else if($rs[fenlei]==36){$bfenlei="红十";}
                              else if($rs[fenlei]==37){$bfenlei="斗牛";}
                              else if($rs[fenlei]==38){$bfenlei="捕鱼";}
                              else if($rs[fenlei]==39){$bfenlei="桥牌";}
                              else if($rs[fenlei]==40){$bfenlei="长牌";}
                              else if($rs[fenlei]==41){$bfenlei="歪胡子";}
                              else if($rs[fenlei]==42){$bfenlei="大字牌";}
                              else if($rs[fenlei]==43){$bfenlei="大贰";}
                          }else if($rs[classid]==11){
                              if($rs[fenlei]==1){$bfenlei="二人麻将";}
                              else if($rs[fenlei]==2){$bfenlei="三人麻将";}
                              else if($rs[fenlei]==3){$bfenlei="四人麻将";}
                              else if($rs[fenlei]==4){$bfenlei="日本麻将";}
                              else if($rs[fenlei]==5){$bfenlei="贵阳麻将";}
                              else if($rs[fenlei]==6){$bfenlei="台湾麻将";}
                              else if($rs[fenlei]==7){$bfenlei="上海麻将";}
                              else if($rs[fenlei]==8){$bfenlei="四川麻将";}
                              else if($rs[fenlei]==9){$bfenlei="北京麻将";}
                              else if($rs[fenlei]==10){$bfenlei="广东麻将";}
                              else if($rs[fenlei]==11){$bfenlei="陕西麻将";}
                              else if($rs[fenlei]==12){$bfenlei="南昌麻将";}
                              else if($rs[fenlei]==13){$bfenlei="长沙麻将";}
                              else if($rs[fenlei]==14){$bfenlei="长春麻将";}
                              else if($rs[fenlei]==15){$bfenlei="武汉麻将";}
                              else if($rs[fenlei]==16){$bfenlei="山东麻将";}
                              else if($rs[fenlei]==17){$bfenlei="宁波麻将";}
                              else if($rs[fenlei]==18){$bfenlei="合肥麻将";}
                              else if($rs[fenlei]==19){$bfenlei="河北麻将";}
                              else if($rs[fenlei]==20){$bfenlei="天津麻将";}
                              else if($rs[fenlei]==21){$bfenlei="太原麻将";}
                              else if($rs[fenlei]==22){$bfenlei="福州麻将";}
                              else if($rs[fenlei]==23){$bfenlei="杭州麻将";}
                              else if($rs[fenlei]==24){$bfenlei="南京麻将";}
                              else if($rs[fenlei]==25){$bfenlei="大连麻将";}
                              else if($rs[fenlei]==26){$bfenlei="芜湖麻将";}
                              else if($rs[fenlei]==27){$bfenlei="淮安麻将";}
                              else if($rs[fenlei]==28){$bfenlei="南宁麻将";}
                              else if($rs[fenlei]==29){$bfenlei="沈阳麻将";}
                              else if($rs[fenlei]==30){$bfenlei="西安麻将";}
                              else if($rs[fenlei]==31){$bfenlei="红中麻将";}
                              else if($rs[fenlei]==32){$bfenlei="麻将接龙";}

                          }else if($rs[classid]==12) {
                              if ($rs[fenlei] == 1) {
                                  $bfenlei = "五子棋";
                              } else if ($rs[fenlei] == 2) {
                                  $bfenlei = "象棋";
                              } else if ($rs[fenlei] == 3) {
                                  $bfenlei = "围棋";
                              } else if ($rs[fenlei] == 4) {
                                  $bfenlei = "飞行棋";
                              } else if ($rs[fenlei] == 5) {
                                  $bfenlei = "中国暗棋";
                              } else if ($rs[fenlei] == 6) {
                                  $bfenlei = "跳棋";
                              } else if ($rs[fenlei] == 7) {
                                  $bfenlei = "井字棋";
                              } else if ($rs[fenlei] == 8) {
                                  $bfenlei = "军棋";
                              } else if ($rs[fenlei] == 9) {
                                  $bfenlei = "斗兽棋";
                              } else if ($rs[fenlei] == 10) {
                                  $bfenlei = "将棋";
                              } else if ($rs[fenlei] == 11) {
                                  $bfenlei = "四子棋";
                              } else if ($rs[fenlei] == 12) {
                                  $bfenlei = "大富翁";
                              } else if ($rs[fenlei] == 13) {
                                  $bfenlei = "国际象棋";
                              }
                          }
                          ?>
                          <li> <em class="num"><?=$no?></em>
                              <div class="box1">
                                  <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                                  <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                                  <p><span><?=$bfenlei?></span><span><?=$onclick?>人在玩</span></p>
                              </div>
                              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
                          </li>
                          <?php $no++;} ?>
                  </ol>
                  <ol id="rank_con_1" style="display: none;">

              </div>
          </div>
      <div class="w-texts mt15">
        <div class="hd20">
          <h3>最新资讯</h3>
        </div>
        <ul class="text-list">
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_news order by newstime desc limit 10");
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
?>
          <li>•<a href="<?=$titleurl?>" target="_blank" class="title"><?=$xwtitle?></a></li>
<?php } ?> 
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?=stripslashes($www_96kaifa_com_footer[0])?>
<div id="backtop">返回顶部</div>
<script type="text/javascript" src="/96kaifa/statics/home/js/member.js"></script>
<script src="https://static.geetest.com/static/tools/gt.js"></script>
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