<?php
require("class/connect.php");   
include("class/db_sql.php");   
include("config/config.php");   
include("data/dbcache/class.php");   
$link=db_connect();   
$empire=new mysqlquery();   
$classid=intval($_GET['classid']);   
$id=intval($_GET['id']);   
$muserid=(int)getcvar('mluserid');//用户id   
$musername=RepPostVar(getcvar('mlusername'));//用户名   
$mgroupid=(int)getcvar('mlgroupid');//会员组id   
if($classid&&$id&&$class_r[$classid][tbname]&&$muserid)   
{   
	$r=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where id='$id' and classid='$classid' limit 1");   
	
	$down="<a href=\"/play/".$r[id].".html\" class=\"jryx playgame\">进入游戏</a>";
	
	if($r[id])   
	{ 
 //登录显示
?>  
document.write('<?=$down?>');   
<?php   
   }   
}   
else
{ 
$down2="<a href=\"javascript:;\" class=\"jryx playgame\">进入游戏</a>";
 //未登录显示
?>   
document.write('<?=$down2?>');   
<?php   
}   
db_close();   
$empire=null;   
?>