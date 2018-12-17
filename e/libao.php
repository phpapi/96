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
	$downpath=$r[downpath];
	
$query = ("select * from www_96kaifa_com_ecms_libao where id='$id'") //执行SQL语句 
or die("SQL语句执行失败"); 

$query = $empire->query($query);
 
while ($tmp=mysqli_fetch_assoc($query)) {
	$data[]=$tmp;
}
$jstime=$data[0]['jstime'];

$time=date('Y-m-d h:i:s',time());
if($jstime<$time && $jstime !="0000-00-00"){

$down="<span class=\"js\">结束</span>";
	
}else{

$down="<a href=\"javascript:void(0);\" value=\"".$id."\" uid=\"".$muserid."\" class=\"lq\" id=\"linghao\">领取</a>";
	
}
	

	
	
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
$down2="<a href=\"javascript:;\" class=\"lq\" id=\"gamego\">领取</a>";
 //未登录显示
?>   
document.write('<?=$down2?>');   
<?php   
}   
db_close();   
$empire=null;   
?>