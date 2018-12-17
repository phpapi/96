<?php  /*96KaiFa原创源码，官网：www.96kaifa.com*/
$ye=strFilter($_GET["next"]);
$uid=strFilter($_GET["uid"]);
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

$yema= $ye*4;
$query = ("select * from www_96kaifa_com_ecms_libaoip where uid=$uid order by id desc limit $yema,4") //执行SQL语句 
or die("SQL语句执行失败2"); 

$i=1;
$query = $empire->query($query);  

while($rss = mysqli_fetch_assoc($query)){
$haoid  = $rss[haoid];

$query1 = ("select * from www_96kaifa_com_ecms_libao where id='$haoid'") //执行SQL语句 
or die("SQL语句执行失败"); 
$query1 = $empire->query($query1);  
$rs=mysqli_fetch_assoc($query1); 

$src  = $rs[id];

$xwtitle=$rs['title'];
$xwtitleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$smalltext=$rs['smalltext'];
$newstime=$rs['newstime'];
?>
    <dd>
      <div class="gname"><a href="<?=$xwtitleurl?>" target="_blank"><img src="<?=$xwtitlepic?>"><?=$xwtitle?></a></div>
      <div class="card">
        <textarea id="biao<?=$src?>"><?=$rss[hao]?></textarea>
        <input type="button" onClick="copyUrl(<?=$src?>)" value="复制">
      </div>
      <div class="time">
<?php if($rs[kstime]=="0000-00-00" && $rs[jstime]=="0000-00-00"){ ?>
永久有效
<?php }else{ ?>
<?=date('Y-m-d',strtotime($rs[kstime]))?> 至 <?=date('Y-m-d',strtotime($rs[jstime]))?>
<?php } ?></div>
    </dd>

<?php $i++; } ?>














