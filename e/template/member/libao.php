<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员中心';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="right-box">
  <div class="hd20">
    <h3>我的礼包</h3>
  </div>
  <dl class="gift-box" id="article_js_list">
    <dt> <span class="gname">礼包名称</span> <span class="card">复制卡号</span> <span class="time">有效期</span> </dt>
<?php
$query = ("select * from www_96kaifa_com_ecms_libaoip where uid='$user[userid]' order by id desc limit 4") //执行SQL语句 
or die("SQL语句执行失败");
$query = $empire->query($query);  
while($hao = mysqli_fetch_assoc($query)){
$haoid  = $hao[haoid];




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
        <textarea id="biao<?=$src?>"><?=$hao[hao]?></textarea>
        <input type="button" onClick="copyUrl(<?=$src?>)" value="复制">
      </div>
      <div class="time">
<?php if($rs[kstime]=="0000-00-00" && $rs[jstime]=="0000-00-00"){ ?>
永久有效
<?php }else{ ?>
<?=date('Y-m-d',strtotime($rs[kstime]))?> 至 <?=date('Y-m-d',strtotime($rs[jstime]))?>
<?php } ?></div>
    </dd>
<?php } ?> 
  </dl>
  <div class="load-more"><a href="javascript:;" id="loadmore">点击查看更多</a></div>
</div>
<?php
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_libaoip where uid='$user[userid]'");
$zongshu= $num - 4;
$www_96kaifa_com_zongye = ceil($zongshu/4);
?>
<script language="javascript" type="text/javascript">
var is_have_con = "Y";
$(function(){
    var pagenum = 1; //设置当前页数
	var www_96kaifa_com_zongpage = <?=$www_96kaifa_com_zongye?>;
	var currentclass = <?=$user[userid]?>;
    $('#loadmore').on('click',function(){
		if(is_have_con=="Y"){
			$.ajax({
				url : '/96kaifa/libao-member-getajax.php',
				type:'get',
				data:{"next":pagenum,'uid':currentclass},
				dataType : 'html',
				beforeSend:function(){
					var str = '玩命加载中...';
					$('#div_content').css('height','auto');
					$("#loadmore").html(str);
				},
				success : function(data){
					if(www_96kaifa_com_zongpage>=pagenum){
						$("#article_js_list").append(data);
						$("#loadmore").html('点击查看更多');
						pagenum++;
					}else{
						$("#loadmore").html('已到底，没有更多数据');
						is_have_con = "N";
						return false;
					}
				}
			});
		}
    });
});
</script>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>