<?php 
$id=$_GET["id"];
$ip=$_SERVER["REMOTE_ADDR"];
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 
$query = ("select * from www_96kaifa_com_ecms_libao where id='$id'") //执行SQL语句 
or die("SQL语句执行失败"); 
$query = $empire->query($query);


$data=array();
while ($tmp=mysqli_fetch_assoc($query)) {
	$data[]=$tmp;
}
$jstime=$data[0]['jstime'];

$time=date('Y-m-d h:i:s',time());
if($jstime<$time){echo "jieshu";}
?>