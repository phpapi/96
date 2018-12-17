<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=$value=ReturnClassAddField(0,'seotitle')?>_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/style3500.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
</head>
<script type="text/javascript">
	showMobile("<?=$public_r['add_www_96kaifa_com_murl']?><?=sys_ReturnBqClassUrl($class_r[$GLOBALS[navclassid]]);?>");
</script>
<body>
<div class="cover"></div>
<div class="topbox">
  <div class="boxin clearfix">
    <div class="topl fl"> <span class="home"><a href="/">游戏首页</a></span>
      <ul>
        <li>|<a href="<?=$public_r['add_www_96kaifa_com_murl']?>" target="_blank">手机版</a></li>
        <li>|<a href="#" target="_blank">客户端下载</a></li>
        <li>|<a href="javascript:;" class="wx_show">关注微信</a>
          <div class="wx_hide"> <i class="angle"></i> <img src="/96kaifa/statics/home/images/wx_code.jpg" width="103" height="103"> <span>关注微信公众号</span> </div>
        </li>
        <li>|<a href="#" target="_blank">开放平台</a></li>
      </ul>
    </div>
    <div class="topr fr">
      <div class="login_ok">
	<!-- 登录 -->
	<script>
	document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
	$(function(){
	var dqurl = window.location.href;
	$('#dquurl').val(dqurl);
	})
	</script>
	<!-- 登录 end-->
	  </div>
      <a href="javascript:;" onClick="AddFavorite();">收藏本站</a> </div>
  </div>
</div>
<div class="header">
  <div class="header-top">
    <div class="in">
      <div class="logo fl"><a href="/"><img src="/96kaifa/statics/home/images/logo.png" alt="<?=$public_r['add_www_96kaifa_com_name']?>"></a></div>
      <div class="search fr">
        <form action="/search/game.php" method="get" target="_blank" name="searchTop">
          <div class="search_box tr">
            <input type="text" id="bdcsMain" name="key" class="sech_keyword" placeholder="请输入游戏名称">
            <input type="submit" value="搜索" class="sech_btn">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="nav">
    <div class="in">
      <ul>
<?php if($GLOBALS[navclassid]=='' || $GLOBALS[navclassid]==null){$shou="nav-cur";}else{$shou="";} ?>
        <li><a href="/" class="<?=$shou?>"><span class="menu-txt">首页</span><span class="menu-line"></span></a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=0 order by myorder asc limit 8",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php if($bqr[classid]==$GLOBALS[navclassid] || $bqr[classid]==$class_r[$GLOBALS[navclassid]][bclassid]){$classon="nav-cur";}else{$classon="";}?>
        <li><a class="<?=$classon?>" href="<?=$bqsr[classurl]?>"><span class="menu-txt"><?=$bqr[classname]?></span><span class="menu-line"></span></a></li>
<?php
}
}
?>
      </ul>
      <div class="grzx">
	  	<script> document.write('<script src="/e/member/login/dh.php?t='+Math.random()+'"><'+'/script>'); </script>
	  </div>
    </div>
  </div>
</div>
<div class="my_pop">
<!--弹出登录框开始-->
  <div class="login_pop" id="login_pop" style="display: none;"> <span class="pop_close"></span>
    <p class="pop-tit">账号登录</p>
    <form action="/e/member/doaction.php" method="post" onSubmit="return userLogin()" id="form_login1" class="form-login">
      <input type=hidden name=ecmsfrom value="" id="dquurl">
      <input type=hidden name=enews value=login>
      <input name="tobind" type="hidden" id="tobind" value="0">
      <div class="modal-body">
        <div class="error_font">*错误提示</div>
        <div class="outer tr"> <i class="user"></i>
          <input type="text" name="username" class="input-txt " id="login_username" placeholder="输入用户名">
        </div>
        <div class="outer tr"> <i class="pwd"></i>
          <input type="password" name="password" class="input-txt " id="login_password" placeholder="输入登录密码">
        </div>
        <div class="outer">
          <div class="captcha" id="logcaptcha"></div>
        </div>
      </div>
      <div class="modal-footer" style="margin-bottom:40px;">
        <p class="outer"> <input class="login_btn" type="submit" name="submit" value="登录"> <a href="javascript:;" class="register_btn" id="register_btn2">注册</a> </p>
      </div>
    </form>
  </div>
<!--弹出登录框结束-->
<!--弹出注册框开始-->
<div class="register_pop" style="display: none;"> <span class="pop_close"></span>
  <p class="pop-tit">会员注册</p>
  <form name="userinfoform" method="post" enctype="multipart/form-data" action="/e/member/doaction.php" class="form-register">
	<input type="hidden" name="enews" value="register">
    <div class="modal-body">
      <div class="error_font">*错误提示</div>
      <div class="outer tr"> <i class="user"></i>
        <input type="text" name="username" class="input-txt " id="reg_phone" placeholder="输入用户名">
      </div>
      <div class="outer tr"> <i class="pwd"></i>
        <input type="password" name="password" class="input-txt " id="reg_password" placeholder="设置密码(6-16位字母或数字)">
      </div>
      <div class="outer tr"> <i class="pwd"></i>
        <input type="password" name="repassword" class="input-txt " id="reg_password" placeholder="重复输入密码">
      </div>
      <div class="outer tr"> <i class="user"></i>
        <input type="text" name="email" class="input-txt " id="fullname" placeholder="邮箱">
      </div>
      <div class="outer">
        <input type="text" name="key" class="input-txt " id="reg_sjyzm" placeholder="输入验证码">
        <a class="get-yzm"><img src="/e/ShowKey/?v=reg" name="regKeyImg" id="regKeyImg" onclick="regKeyImg.src='/e/ShowKey/?v=reg&t='+Math.random()" width="130px" height="44px" title="看不清楚,点击刷新"></a> </div>
    </div>
    <div class="modal-footer">
      <p class="outer"> <input type='submit' name='Submit' class="orange_btn" id="btnRegister" value="立即注册"> </p>
      <p class="other">已有账号? <a href="javascript:;" id="user_login">请登录</a></p>
    </div>
  </form>
</div>
<!--弹出注册框结束-->
</div>
<div class="main">
  <div class="position">当前位置：<a href="/">首页</a> > 开服表</div>
  <div class="kaifu" id="today-kai">
    <div class="hd20">
      <h3>今日开服</h3>
      <span class="time">(<b><?=date("m月d日")?></b>)</span></div>
    <div class="kf-bd">
      <ul class="kf-list clearfix">
<?php $ktime=date('Y-m-d'); ?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu  where kfsj like '%$ktime%' order by kfsj asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php if($bqno%2==0){$bia=""; $bia2="</li>";}else{$bia="<li>"; $bia2="";} ?>
		<?=$bia?>
<?php 
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id=$bqr[yxid]");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['title'];
$bbb=$ttr['titleurl'];
$ccc=$ttr['titlepic'];
$ddd=$ttr['fenlei'];

if($ddd==1){$bfenlei="卡牌游戏";}
else if($ddd==2){$bfenlei="角色扮演";}
else if($ddd==3){$bfenlei="模拟经营";}
else if($ddd==4){$bfenlei="射击游戏";}
else if($ddd==5){$bfenlei="动作游戏";}
else if($ddd==6){$bfenlei="战争策略";}
else if($ddd==7){$bfenlei="棋牌游戏";}
else if($ddd==8){$bfenlei="休闲游戏";}
?>
          <div class="tbody">
            <div class="td yxmc"> <a href="<?=$bbb?>" target="_blank" class="pic_lnk"><img src="<?=$ccc?>" alt="<?=$aaa?>"></a>
              <p class="tit_lnk"><a href="<?=$bbb?>" target="_blank"><?=$aaa?></a> </p>
              <p class="type_detail"><a href="/list-<?=$ddd?>-0-0-0.html" target="_blank"><?=$bfenlei?></a></p>
            </div>
            <div class="td time"><span class="red"><?=date('H:s',strtotime($bqr[kfsj]))?></span></div>
            <div class="td server"><?=$bqr['fuwuqi']?></div>
            <div class="td yxxz"><a href="<?=$bbb?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
          </div>
<?php } ?>
		 <?=$bia2?>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="kaifu" id="will-kai">
    <div class="hd20">
      <h3>即将开服</h3>
    </div>
    <div class="kf-bd">
      <ul class="kf-list clearfix" id="article_js_list">
<?php $ktime=date('Y-m-d'); ?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu  where left(kfsj,10)>'$ktime' order by kfsj asc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php if($bqno%2==0){$bia=""; $bia2="</li>";}else{$bia="<li>"; $bia2="";} ?>
		<?=$bia?>
<?php 
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id=$bqr[yxid]");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['title'];
$bbb=$ttr['titleurl'];
$ccc=$ttr['titlepic'];
$ddd=$ttr['fenlei'];

if($ddd==1){$bfenlei="卡牌游戏";}
else if($ddd==2){$bfenlei="角色扮演";}
else if($ddd==3){$bfenlei="模拟经营";}
else if($ddd==4){$bfenlei="射击游戏";}
else if($ddd==5){$bfenlei="动作游戏";}
else if($ddd==6){$bfenlei="战争策略";}
else if($ddd==7){$bfenlei="棋牌游戏";}
else if($ddd==8){$bfenlei="休闲游戏";}
?>
          <div class="tbody">
            <div class="td yxmc"> <a href="<?=$bbb?>" target="_blank" class="pic_lnk"><img src="<?=$ccc?>" alt="<?=$aaa?>"></a>
              <p class="tit_lnk"><a href="<?=$bbb?>" target="_blank"><?=$aaa?></a> </p>
              <p class="type_detail"><a href="/list-<?=$ddd?>-0-0-0.html" target="_blank"><?=$bfenlei?></a></p>
            </div>
			<div class="td time"><span><?=date('m-d H:s',strtotime($bqr[kfsj]))?></span></div>
            <div class="td server"><?=$bqr['fuwuqi']?></div>
            <div class="td yxxz"><a href="<?=$bbb?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
          </div>
<?php } ?>
		 <?=$bia2?>
<?php
}
}
?>
      </ul>
      <div class="load-more"><a href="javascript:;" id="loadmore">点击加载更多</a></div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="about_me"> <a href="/aboutus.html" target="_blank">关于我们</a> | <a href="/contact.html" target="_blank">联系方式</a> | <a href="/sitemap.html" target="_blank">网站地图</a> | <a href="/explain.html" target="_blank">用户协议</a> </div>
  <div class="safety"> <a><i class="icon_safe1"></i>中国互联网举报中心</a> <a><i class="icon_safe2"></i>网络违法举报中心</a> <a><i class="icon_safe3"></i>垃圾信息举报中心</a> <a><i class="icon_safe4"></i>闽公网安备35020302001953号</a> </div>
  <p class="tips_text">©2017-2018 &nbsp; <?=$public_r['add_www_96kaifa_com_name']?> &nbsp; <?=$public_r['add_www_96kaifa_com_url2']?> <em>礼包交流群：</em><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" target="_blank" class="qqun"></a></p>
  <p class="tips_text">备案号：<?=$public_r['add_www_96kaifa_com_ba']?> &nbsp; <?=$public_r['add_www_96kaifa_com_tongji']?> 技术支持：<a href="https://www.96kaifa.com" target="_blank">96KaiFa源码</a></p>
</div>
<div id="backtop">返回顶部</div>
<script type="text/javascript" src="/96kaifa/statics/home/js/member.js"></script>
<script type="text/javascript" src="/96kaifa/statics/home/js/global.js"></script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<?php
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_kaifu  where left(kfsj,10)>'$ktime'");
$zongshu= $num - 20;
$www_96kaifa_com_zongye = ceil($zongshu/20);
?>
<script language="javascript" type="text/javascript">
var is_have_con = "Y";
$(function(){
    var pagenum = 1; //设置当前页数
	var www_96kaifa_com_zongpage = <?=$www_96kaifa_com_zongye?>;
	var currentclass = <?=$ktime?>;
    $('#loadmore').on('click',function(){
		if(is_have_con=="Y"){
			$.ajax({
				url : '/96kaifa/libao-list-getajax.php',
				type:'get',
				data:{"next":pagenum,'ktime':currentclass},
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
						$("#loadmore").html('已全部加载完毕');
						is_have_con = "N";
						return false;
					}
				}
			});
		}
    });
});
</script>
</body>
</html>