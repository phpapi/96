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
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_qipai  where title like '%$word%'");
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
          <li class="tab_1"><a href="/search/game.php?key=<?=$word?>">扑克<i></i></li>
          <li class="tab_1"><a href="/search/majiang.php?key=<?=$word?>">麻将</a><i></i></li>
          <li class="tab_2"><a href="/search/qipai.php?key=<?=$word?>">棋类</a><i></i></li>
          <li class="tab_1"><a href="/search/zixun.php?key=<?=$word?>">资讯</a><i></i></li>
        </ul>
      </div>
      <div class="result-box">
        <ul class="game-list clearfix">
<?php if($word==''){?>
<!--无关键词开始-->
<div class="result-box">
  <div class="default">亲，没有找到您搜的相关内容，试试搜索其他的<br>
    或者看看大家都在玩的游戏</div>
</div>
<!--无关键词结束-->
<?php }else{
$Page_size=20; 
$result=$empire->query("select * from www_96kaifa_com_ecms_qipai where title like '%$word%'");
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
$sql=$empire->query("select * from www_96kaifa_com_ecms_qipai where title like '%$word%' order by newstime desc limit $offset,$Page_size");

while ($row=$empire->fetch($sql)) {

if($row[fenlei]==1){$bfenlei="五子棋";}
else if($row[fenlei]==2){$bfenlei="象棋";}
else if($row[fenlei]==3){$bfenlei="围棋";}
else if($row[fenlei]==4){$bfenlei="飞行棋";}
else if($row[fenlei]==5){$bfenlei="中国暗棋";}
else if($row[fenlei]==6){$bfenlei="跳棋";}
else if($row[fenlei]==7){$bfenlei="井字棋";}
else if($row[fenlei]==8){$bfenlei="军棋";}
else if($row[fenlei]==9){$bfenlei="斗兽棋";}
else if($row[fenlei]==10){$bfenlei="将棋";}
else if($row[fenlei]==11){$bfenlei="四子棋";}
else if($row[fenlei]==12){$bfenlei="大富翁";}
else if($row[fenlei]==13){$bfenlei="国际象棋";}
?> 		
          <li>
            <div class="img"><a href="<?php echo $row['titleurl']?>" target="_blank"><img src="<?php echo $row['titlepic']?>" alt="<?php echo $row['title']?>"></a></div>
            <div class="con"> <a href="<?php echo $row['titleurl']?>" target="_blank" class="title"><?php echo $row['title']?></a>
              <p><a href="/list-<?php echo $row['fenlei']?>-0-0-0.html" target="_blank"><?=$fenlei?></a><span>|</span><?php echo $row['onclick']?>人在玩</p>
              <p><?php echo $row['yijuhua']?></p>
            </div>
            <div class="wan-btn"><a href="<?php echo $row['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
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
//$key.="<a href=\"/search/game.php?key=".$word."&page=1"."\" class=\"a1\">首页</a> "; //首页 
$key.="<a href=\"/search/qipai.php?key=".$word."&page=".($page-1)."\" class=\"a1\">上一页</a>"; //上一页
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
$key.=" <a href=\"/search/qipai.php?key=".$word."&page=".$i."\" class=\"a1\">".$i."</a>";
} 
} 
if($page!=$pages){ 


$key.=" <a href=\"/search/qipai.php?key=".$word."&page=".($page+1)."\" class=\"a1\">下一页</a> ";//下一页
//$key.=" <a href=\"/search/game.php?key=".$word."&page=".$pages."\" class=\"a1\">尾页</a>"; //尾页 
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
          <ul class="rank_tab">
            <li onmousemove="onSelect(this,'rank_con')" class="tab_2">网游</li>
            <li onmousemove="onSelect(this,'rank_con')" class="tab_1">小游戏</li>
          </ul>
        </div>
        <div class="bd">
          <ol id="rank_con_0">
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_game order by onclick desc limit 3");
$no=1;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$bfenlei="卡牌游戏";}
else if($rs[fenlei]==2){$bfenlei="角色扮演";}
else if($rs[fenlei]==3){$bfenlei="模拟经营";}
else if($rs[fenlei]==4){$bfenlei="射击游戏";}
else if($rs[fenlei]==5){$bfenlei="动作游戏";}
else if($rs[fenlei]==6){$bfenlei="战争策略";}
else if($rs[fenlei]==7){$bfenlei="棋牌游戏";}
else if($rs[fenlei]==8){$bfenlei="休闲游戏";}
?>
            <li> <em class="num num<?=$no?>"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_game order by onclick desc limit 3,2");
$no=4;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$bfenlei="卡牌游戏";}
else if($rs[fenlei]==2){$bfenlei="角色扮演";}
else if($rs[fenlei]==3){$bfenlei="模拟经营";}
else if($rs[fenlei]==4){$bfenlei="射击游戏";}
else if($rs[fenlei]==5){$bfenlei="动作游戏";}
else if($rs[fenlei]==6){$bfenlei="战争策略";}
else if($rs[fenlei]==7){$bfenlei="棋牌游戏";}
else if($rs[fenlei]==8){$bfenlei="休闲游戏";}
?>
            <li> <em class="num"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
          </ol>
          <ol id="rank_con_1" style="display: none;">
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 3");
$no=1;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$fenlei="益智";}
else if($rs[fenlei]==2){$fenlei="动作";}
else if($rs[fenlei]==3){$fenlei="射击";}
else if($rs[fenlei]==4){$fenlei="休闲";}
else if($rs[fenlei]==5){$fenlei="敏捷";}
else if($rs[fenlei]==6){$fenlei="棋牌";}
else if($rs[fenlei]==7){$fenlei="经营";}
else if($rs[fenlei]==8){$fenlei="体育";}
else if($rs[fenlei]==9){$fenlei="策略";}
else if($rs[fenlei]==10){$fenlei="冒险";}
else if($rs[fenlei]==11){$fenlei="装扮";}
?>
            <li> <em class="num num<?=$no?>"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 3,2");
$no=4;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$fenlei="益智";}
else if($rs[fenlei]==2){$fenlei="动作";}
else if($rs[fenlei]==3){$fenlei="射击";}
else if($rs[fenlei]==4){$fenlei="休闲";}
else if($rs[fenlei]==5){$fenlei="敏捷";}
else if($rs[fenlei]==6){$fenlei="棋牌";}
else if($rs[fenlei]==7){$fenlei="经营";}
else if($rs[fenlei]==8){$fenlei="体育";}
else if($rs[fenlei]==9){$fenlei="策略";}
else if($rs[fenlei]==10){$fenlei="冒险";}
else if($rs[fenlei]==11){$fenlei="装扮";}
?>
            <li> <em class="num"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
          </ol>
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