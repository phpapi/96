<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='消息列表';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;消息列表&nbsp;&nbsp;(<a href='AddMsg/?enews=AddMsg'>发送消息</a>)";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }
</script>
<div class="right-box">
  <div class="hd20">
    <h3>我的消息</h3>
  </div>
  <dl class="gift-box" id="article_js_list">
    <dt> <span class="xiaoxi">状态</span> <span class="xiaoxi_title" align="center">标题</span> <span class="xiaoxi_name" align="center">发送者</span> <span class="xiaoxi_time" align="center">发送时间</span> <span class="xiaoxi_cao" align="center">操作</span> </dt>
<form name="listmsg" method="post" action="../doaction.php" onsubmit="return confirm('确认要删除?');">
            <?php
			while($r=$empire->fetch($sql))
			{
				$img="haveread";
				if(!$r[haveread])
				{$img="nohaveread";}
				//后台管理员
				if($r['isadmin'])
				{
					$from_username="<a title='后台管理员'><b>".$r[from_username]."</b></a>";
				}
				else
				{
					$from_username="<a href='../ShowInfo/?userid=".$r[from_userid]."' target='_blank'>".$r[from_username]."</a>";
				}
				//系统信息
				if($r['issys'])
				{
					$from_username="系统消息";
					$r[title]=$r[title];
				}
				
			?>
    <dd>
      <div class="xiaoxi2" align="center"><img src="../../data/images/<?=$img?>.gif" border=0 style="width: 25px; height: 20px; margin-top: 10px; margin-left: 17px;"></div>
      <div class="xiaoxi_title2" align="center"><a href="ViewMsg/?mid=<?=$r[mid]?>"> <?=stripSlashes($r[title])?></a></div>
      <div class="xiaoxi_name2" align="center"> <?=$from_username?> </div>
      <div class="xiaoxi_time3" align="center"> <?=$r[msgtime]?> </div>
      <div class="xiaoxi_cao4" align="center"> [<a href="../doaction.php?enews=DelMsg&mid=<?=$r[mid]?>" onclick="return confirm('确认要删除?');">删除</a>] </div>
    </dd>
            <?php
			}
			?>
  </dl>
</div>
</form>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>