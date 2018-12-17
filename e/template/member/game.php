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
    <h3>热门游戏</h3>
  </div>
  <div class="played-games">
    <ul class="gameList clearfix" id="article_js_list">
<?php

$query = ("select * from www_96kaifa_com_ecms_game order by id desc limit 32") //执行SQL语句 
or die("SQL语句执行失败"); 
$query = $empire->query($query); 
while($sr = mysqli_fetch_assoc($query)){
$xwtitle=$sr['title'];
$xwtitleurl=$sr['titleurl'];
$xwtitlepic=$sr['titlepic'];
$smalltext=$sr['smalltext'];
$newstime=$sr['newstime'];
?>		
      <li> <a href="<?=$xwtitleurl?>" target="_blank" title="<?=$xwtitle?>"><img src="<?=$xwtitlepic?>"><span><?=$xwtitle?></span></a> <a href="<?=$xwtitleurl?>" target="_blank" class="wanBtn playgame" >开始玩</a> </li>
<?php } ?> 
    </ul>
    <div class="load-more"><a href="javascript:;" id="loadmore">点击加载更多</a></div>
  </div>
</div>
<?php
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_game");
$zongshu= $num - 32;
$www_96kaifa_com_zongye = ceil($zongshu/32);
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
				url : '/96kaifa/game-member-getajax.php',
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