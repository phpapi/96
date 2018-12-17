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
<div class="pack">
  <p class="a1">用户名：<span><?=$user[username]?></span></p>
  <p class="a2">注册时间：<span><?=$registertime?></span></p>
  <p class="a3">用户ID：<span><?=$user[userid]?></span></p>
  <p class="a4">新消息：<span><?=$havemsg?></span></p>
</div>
<div class="played-games mt20">
  <div class="hd20">
    <h3>热门游戏</h3>
    <a href="/game/" class="more">更多<i></i></a></div>
  <ul class="gameList clearfix">
<?php 
$query = ("select * from www_96kaifa_com_ecms_game where isgood=1 order by newstime desc limit 8") //执行SQL语句 
or die("SQL语句执行失败"); 

$query = $empire->query($query); 

while($rs = mysqli_fetch_assoc($query)){

$src  = $rs[id];

$xwtitle=$rs['title'];
$xwtitleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$smalltext=$rs['smalltext'];
$newstime=$rs['newstime'];
?>			
    <li> <a href="<?=$xwtitleurl?>" target="_blank" title="<?=$xwtitle?>"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"><span><?=$xwtitle?></span></a> <a href="<?=$xwtitleurl?>" target="_blank" class="wanBtn playgame">开始玩</a> </li>
<?php } ?> 
  </ul>
</div>
<div class="remen-libao mt20">
  <div class="hd20">
    <h3>热门礼包</h3>
    <a href="/libao/" class="more">更多<i></i></a></div>
  <div class="bd clearfix">
<?php 
$query = ("select * from www_96kaifa_com_ecms_libao order by newstime desc limit 5") //执行SQL语句 
or die("SQL语句执行失败"); 
$query = $empire->query($query); 
while($rss = mysqli_fetch_assoc($query)){
$src  = $rss[id];

$xwtitle=$rss['title'];
$xwtitleurl=$rss['titleurl'];
$xwtitlepic=$rss['titlepic'];
$smalltext=$rss['smalltext'];
$newstime=$rss['newstime'];
?>	
<?php $cpl=intval(($rss[yiling]/$rss[zongshu])*100,2); $ss=100-$cpl; ?>
    <dl>
      <dt><a href="<?=$xwtitleurl?>" target="_blank" title="<?=$xwtitle?>"><img src="<?=$xwtitlepic?>">
        <p><?=$xwtitle?></p>
        </a></dt>
      <dd class="shengyu">剩余<?=$ss?>%</dd>
      <dd class="lingqu"><a href="<?=$xwtitleurl?>" target="_blank" class="lqBtn">领取</a></dd>
    </dl>
<?php } ?> 
  </div>
</div>
<div class="right-box">
  <div class="hd20">
    <h3>我的礼包</h3>
	<a href="/e/member/libao/" class="more">更多<i></i></a>
  </div>
  <dl class="gift-box">
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
  <div class="load-more" page="2" pagesize="10" style="display: none;"><a href="javascript:;">已到底，没有更多数据</a></div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>