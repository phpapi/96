<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='查看消息';
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../msg/>消息列表</a>&nbsp;>&nbsp;查看消息";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="right-box">
  <div class="hd20">
    <h3>查看消息</h3>
  </div>
  <dl class="gift-box">
	<div class="member-infos">
	  <h3 class="operate-title mt20"><?=stripSlashes($r[title])?></h3>
	  <div class="operate-items mt20">
		<p>发送者：<?=$r[from_username]?> &nbsp;&nbsp;&nbsp;&nbsp;时间：<?=$r[msgtime]?></p>
	  </div>
	  <div class="infos">
		<div class="infos-item j-infos-item" style="font-size:16px;">
		  <?=nl2br(stripSlashes($r[msgtext]))?>
		</div>
			<div style="float:right;margin-top:25px;margin-bottom:25px;margin-right:20px;">[<a href="#ecms" onclick="javascript:history.go(-1);"><strong>返回</strong></a>]
			</div>
	  </div>
	</div>
  </dl>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>