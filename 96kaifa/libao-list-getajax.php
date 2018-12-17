<?php  /*96KaiFa原创源码，官网：www.96kaifa.com*/
$ye=strFilter($_GET["next"]);
$ktime=strFilter($_GET["ktime"]);
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


?>
<?php 


$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_kaifu  where left(kfsj,10)>'$ktime' order by kfsj desc limit");

$yema= $ye*20;
$query = ("select * from www_96kaifa_com_ecms_kaifu  where left(kfsj,10)>'$ktime' order by kfsj desc limit $yema,20") //执行SQL语句 
or die("SQL语句执行失败2"); 
$i=1;
$query = $empire->query($query);  
while($rs = mysqli_fetch_assoc($query)){
$src  = $rs[yxid];



$xwtitle=$rs['title'];
$smalltext=$rs['smalltext'];
$kfsj=$rs['kfsj'];
$fuwuqi=$rs['fuwuqi'];
$tuurl=$public_r[add_www_96kaifa_com_url];

if($i%2==0){$bia=""; $bia2="</li>";}else{$bia="<li>"; $bia2="";}

$tsqlqq=$empire->query("select * from www_96kaifa_com_ecms_game where id='$src'");
while($trssss=$empire->fetch($tsqlqq)){$fenlei=$trssss['fenlei']; $xwtitlepic=$trssss['titlepic'];$xwtitleurl=$trssss['titleurl'];
}


if($fenlei==1){$bfenlei="卡牌游戏";}
else if($fenlei==2){$bfenlei="角色扮演";}
else if($fenlei==3){$bfenlei="模拟经营";}
else if($fenlei==4){$bfenlei="射击游戏";}
else if($fenlei==5){$bfenlei="动作游戏";}
else if($fenlei==6){$bfenlei="战争策略";}
else if($fenlei==7){$bfenlei="棋牌游戏";}
else if($fenlei==8){$bfenlei="休闲游戏";}
?>
<?=$bia?>
          <div class="tbody">
            <div class="td yxmc"> <a href="<?=$xwtitleurl?>" target="_blank" class="pic_lnk"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a>
              <p class="tit_lnk"><a href="<?=$xwtitleurl?>" target="_blank"><?=$xwtitle?></a> </p>
              <p class="type_detail"><a href="/list-<?=$fenlei?>-0-0-0.html" target="_blank"><?=$bfenlei?></a></p>
            </div>
			<div class="td time"><span><?=date('m-d H:s',strtotime($kfsj))?></span></div>
            <div class="td server"><?=$fuwuqi?></div>
            <div class="td yxxz"><a href="<?=$xwtitleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
          </div>
<?=$bia2?>
<?php $i++; } ?>














