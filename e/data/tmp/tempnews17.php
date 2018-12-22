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
<title><?=$ecms_gr[ftitle]?>_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>"/>
<meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>"/>
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/style3500.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
</head>
<script type="text/javascript">
	showMobile("<?=$public_r['add_www_96kaifa_com_murl']?><?=$grtitleurl?>");
</script>
<style>
.dowl-min ul {
	width: 600px;
	height: 60px;
	display: block;
	float: left;
}

.dowl-min ul li {
	display: block;
	float: left;
	width: 160px;
	height: 30px;
	line-height: 30px;
	margin-right: 20px;
	overflow: hidden;
	font-size: 14px;
	color: #808080;
}

.dowl-min .bq {
	width: 660px;
	height: 30px;
	line-height: 30px;
	float: left;
	overflow: hidden;
	font-size: 14px;
	color: #808080;
	margin: 10px 0 0;
}

.dowl-min .bq span {
	float: left;
	display: block
}

.dowl-min .lkbq {
	float: left;
	height: 24px;
	width: 600px;
}

.dowl-min .bq .lkbq a {
	display: block;
	float: left;
	height: 20px;
	background: #edeff5;
	color: #525252;
	font-size: 12px;
	text-align: center;
	line-height: 20px;
	border-radius: 11px;
}
.pfoot{
	 margin-top: 20px;
 }
.game-panel .pfoot{height: 42px;margin-top: 72px;overflow: hidden;}

.game-jianjie .share-div{
     margin-top: -24px;
 }
h2{
    font-size: 18px
}
.w-kftab ul{ margin-top: 15px; }
.w-kftab ul li{ padding:13px 0; line-height: 29px; border-top: 1px dashed #e4e4e4; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
.w-kftab ul li .flei{ color: #999; margin-right: 7px; }
.w-kftab ul li a:hover{ text-decoration: underline; }

</style>
<body>
<div class="cover"></div>
<div class="topbox">
  <div class="boxin clearfix">
    <div class="topl fl"> <span class="home"><a href="/">游戏首页</a></span>
      <ul>
        <li>|<a href="http://www.96kaifa.com" target="_blank">手机版</a></li>
        <li>|<a href="#" target="_blank">客户端下载</a></li>
        <li>|<a href="javascript:;" class="wx_show">关注微信</a>
          <div class="wx_hide"> <i class="angle"></i> <img src="/96kaifa/statics/home/images/wx_code.jpg" width="103" height="103"> <span>关注微信公众号</span> </div>
        </li>
        <li>|<a href="#" target="_blank">开放平台</a></li>
      </ul>
    </div>
    <div class="topr fr">
        <div class="login_ok">
        
        <script>
            document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
            $(function(){
            var dqurl = window.location.href;
            $('#dquurl').val(dqurl);
            })
            </script>
        
        </div>
        <a href="javascript:;" onclick="AddFavorite();">收藏本站</a> </div>
</div>
<div class="header">
  <div class="header-top">
    <div class="in">
      <div class="logo fl"><a href="/"><img src="/96kaifa/statics/home/images/logo.png" alt="棋游之家"></a></div>
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
      <ul id="navi>
        <li><a href="/"><span class="menu-txt">首页</span><span class="menu-line"></span></a></li>
        <li><a  href="/qipailei/"><span class="menu-txt">棋牌</span><span class="menu-line"></span></a></li>
        <li><a  href="/puke/"><span class="menu-txt">扑克</span><span class="menu-line"></span></a></li>
        <li><a href="/majiang/"><span class="menu-txt">麻将</span><span class="menu-line"></span></a></li>
        <li><a  href="/qilei/"><span class="menu-txt">棋类</span><span class="menu-line"></span></a></li>
        <li><a  href="/qiyouchangshang/"><span class="menu-txt">棋游厂商</span><span class="menu-line"></span></a></li>
        <li><a  href="/zixun/"><span class="menu-txt">资讯</span><span class="menu-line"></span></a></li>
      </ul>
      <script type="text/javascript" language="javascript">
   
    $("#navi li a").each(function(){ 
    if($(this)[0].href==String(window.location)){ 
      $(this).addClass("nav-cur").siblings().removeClass("nav-cur"); 
    } 
  });   
        </script>
      <div class="grzx">
	  	<script> document.write('<script src="./e/dh.php?t='+Math.random()+'"><'+'/script>'); </script>
	  </div>
    </div>
  </div>
</div>
<div class="my_pop">
    <div class="login_pop" id="login_pop" style="display: none;"> <span class="pop_close"></span>
    <p class="pop-tit">账号登录</p>
    <form action="/e/member/doaction.php" method="post" onsubmit="return userLogin()" id="form_login1" class="form-login">
    <input type="hidden" name="ecmsfrom" value="http://3500.96demo.com/" id="dquurl">
    <input type="hidden" name="enews" value="login">
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
    <a class="get-yzm"><img src="/e/ShowKey/?v=reg" name="regKeyImg" id="regKeyImg" onclick="regKeyImg.src='/e/ShowKey/?v=reg&amp;t='+Math.random()" width="130px" height="44px" title="看不清楚,点击刷新"></a> </div>
    </div>
    <div class="modal-footer">
    <p class="outer"> <input type="submit" name="Submit" class="orange_btn" id="btnRegister" value="立即注册"> </p>
    <p class="other">已有账号? <a href="javascript:;" id="user_login">请登录</a></p>
    </div>
    </form>
    </div>
    
    </div>
<div class="main">
  <div class="position">当前位置：<?=$grurl?> > <?=$ecms_gr[title]?></div>
  <div class="game-panel clearfix">
    <div class="pleft"> <img class="pic" src="<?=$public_r['add_www_96kaifa_com_url']?><?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" width="100" height="100" alt="<?=$ecms_gr[title]?>">
      <div class="game_zan"><a href="JavaScript:makeRequest('/e/public/digg?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');"> <span class="zan ding"></span><em id="diggnum"><script src=/e/public/ViewClick?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script></em> </a></div>
    </div>
    <div class="pcenter">
      <div class="htitle">
        <h1><?=$ecms_gr[title]?></h1>
      </div>

      <p class="pinfo"><script src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1"></script>人在玩</p>
      <p class="pinfo"><?=$ecms_gr[yijuhua]?></p>

<div class="dowl-min fl">
        <ul>
            <li>版本：<?=$ecms_gr[banben]?></li>
            <li>适用机型：<?=$ecms_gr[jixing]?></li>
            <li>平台： <?=$ecms_gr[pingtai]?></li>
            <li>语言：<?=$ecms_gr[language]?></li>
            <li>大小：<?=$ecms_gr[daxiao]?></li>
            <li>更新时间：<?=$ecms_gr[updatetime]?></li>
        </ul>
                            </div>

      <div class="pfoot">
        <div class="pbtn">
		 <script src="/e/game.php?classid=6&id=<?=$ecms_gr[id]?>" charset="utf-8"></script>
		 <a href="<?=$public_r['add_www_96kaifa_com_weiduan']?>" class="wdxz posited">微端下载</a> </div>
        <p class="tips">( 温馨提示：在电脑上玩，建议使用火狐/谷歌等浏览器；手机上玩，直接扫描右侧二维码进入游戏 )</p>
      </div>
    </div>
    <div class="pcode"><img src="/qr/api.php?url=<?=$public_r['add_www_96kaifa_com_murl']?><?=$grtitleurl?>&p=4.5&m=4"><span>手机扫描 马上玩</span></div>
  </div>
  <div class="game-container">
    <div class="w804">
      <div class="game-jianjie">
          <h2><?=$ecms_gr[title]?>软件介绍</h2>

          <div class="share-div fr "> <em>分享到：</em> 
            <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
          <div class="figure"></div>
 </div>
 <div class="game_The">
<?=$ecms_gr[jieshao]?>
 
 </div>
<div class="The_game">
<h2><?=$ecms_gr[title]?>软件特色</h2>
 <?=$ecms_gr[tese]?>
</div>
<div class="gameplay">
  <h2><?=$ecms_gr[title]?>软件测评</h2>
 <?=$ecms_gr[ceping]?>
</div>
 </div>
        
        



<?php $numz=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_news where title like '%$navinfor[title]%'"); if($num1==0){$ddds1="block";}else{$ddds1="none";} 
if($numz==0){}else{
?>
		<div class="rel-zixun">
		  <div class="hd20">
			<h3>游戏资讯</h3>
			<ul class="zixun_tab">
			  <li onmousemove="onSelect(this,'zixun_con')" class="tab_2">全部</li>
			  <li onmousemove="onSelect(this,'zixun_con')" class="tab_1">新闻</li>
			  <li onmousemove="onSelect(this,'zixun_con')" class="tab_1">攻略</li>
			  <li onmousemove="onSelect(this,'zixun_con')" class="tab_1">活动</li>
			  <li onmousemove="onSelect(this,'zixun_con')" class="tab_1">公告</li>
			</ul>
		  </div>
		  <div class="bd con_0_list" id="zixun_con_0">
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where title like '%$navinfor[title]%'  ORDER BY newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			  <li><span class="time fr"><?=date('m-d',$bqr[newstime])?></span><a href="<?=$bqsr[classurl]?>" target="_blank" class="flei">[<?=$bqsr[classname]?>]</a><a href="<?=$bqsr[titleurl]?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
			</ul>
<?php $num1=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_news where title like '%$navinfor[title]%'"); if($num1==0){$ddds1="block";}else{$ddds1="none";} ?>
			<div class="load-more" style="display: <?=$ddds1?>;"><a href="javascript:;">没相关数据</a></div>
		  </div>
		  <div class="bd con_94_list" id="zixun_con_1" style="display: none;">
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where classid=2 and title like '%$navinfor[title]%'  ORDER BY newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			  <li><span class="time fr"><?=date('m-d',$bqr[newstime])?></span><a href="<?=$bqsr[classurl]?>" target="_blank" class="flei">[<?=$bqsr[classname]?>]</a><a href="<?=$bqsr[titleurl]?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
			</ul>
<?php $num2=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_news where classid=2 and title like '%$navinfor[title]%'"); if($num2==0){$ddds2="block";}else{$ddds2="none";} ?>
			<div class="load-more" style="display: <?=$ddds2?>;"><a href="javascript:;">没相关数据</a></div>
		  </div>
		  <div class="bd con_96_list" id="zixun_con_2" style="display: none;">
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where classid=3 and title like '%$navinfor[title]%'  ORDER BY newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			  <li><span class="time fr"><?=date('m-d',$bqr[newstime])?></span><a href="<?=$bqsr[classurl]?>" target="_blank" class="flei">[<?=$bqsr[classname]?>]</a><a href="<?=$bqsr[titleurl]?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
			</ul>
<?php $num3=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_news where classid=3 and title like '%$navinfor[title]%'"); if($num3==0){$ddds3="block";}else{$ddds3="none";} ?>
			<div class="load-more" style="display: <?=$ddds3?>;"><a href="javascript:;">没相关数据</a></div>
		  </div>
		  <div class="bd con_97_list" id="zixun_con_3" style="display: none;">
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where classid=4 and title like '%$navinfor[title]%'  ORDER BY newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			  <li><span class="time fr"><?=date('m-d',$bqr[newstime])?></span><a href="<?=$bqsr[classurl]?>" target="_blank" class="flei">[<?=$bqsr[classname]?>]</a><a href="<?=$bqsr[titleurl]?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
			</ul>
<?php $num4=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_news where classid=4 and title like '%$navinfor[title]%'"); if($num4==0){$ddds4="block";}else{$ddds4="none";} ?>
			<div class="load-more" style="display: <?=$ddds4?>;"><a href="javascript:;">没相关数据</a></div>
		  </div>
		  <div class="bd con_97_list" id="zixun_con_4" style="display: none;">
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("SELECT * FROM www_96kaifa_com_ecms_news where classid=5 and title like '%$navinfor[title]%'  ORDER BY newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			  <li><span class="time fr"><?=date('m-d',$bqr[newstime])?></span><a href="<?=$bqsr[classurl]?>" target="_blank" class="flei">[<?=$bqsr[classname]?>]</a><a href="<?=$bqsr[titleurl]?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
			</ul>
<?php $num5=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_news where classid=5 and title like '%$navinfor[title]%'"); if($num5==0){$ddds5="block";}else{$ddds5="none";} ?>
			<div class="load-more" style="display: <?=$ddds5?>;"><a href="javascript:;">没相关数据</a></div>
		  </div>
		</div>
<?php } ?>
      <div class="new-games">
        <div class="hd20">
          <h3>最新游戏</h3>
          <a href="/game/" class="more">更多<i></i></a></div>
        <ul class="new_game_list clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by newstime desc limit 7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[classid]==10){
if($bqr[fenlei]==1){$fenlei="斗地主";}
else if($bqr[fenlei]==2){$bfenlei="跑胡子";}
else if($bqr[fenlei]==3){$bfenlei="21点";}
else if($bqr[fenlei]==4){$bfenlei="保皇";}
else if($bqr[fenlei]==5){$bfenlei="打滚子";}
else if($bqr[fenlei]==6){$bfenlei="干瞪眼";}
else if($bqr[fenlei]==7){$bfenlei="打大A";}
else if($bqr[fenlei]==8){$bfenlei="四冲";}
else if($bqr[fenlei]==9){$bfenlei="三代";}
else if($bqr[fenlei]==10){$bfenlei="5十K";}
else if($bqr[fenlei]==11){$bfenlei="三打一";}
else if($bqr[fenlei]==12){$bfenlei="挖坑";}
else if($bqr[fenlei]==13){$bfenlei="拱猪";}
else if($bqr[fenlei]==14){$bfenlei="红五";}
else if($bqr[fenlei]==15){$bfenlei="黑尖";}
else if($bqr[fenlei]==16){$bfenlei="攉龙";}
else if($bqr[fenlei]==17){$bfenlei="大怪路子";}
else if($bqr[fenlei]==18){$bfenlei="掼蛋";}
else if($bqr[fenlei]==19){$bfenlei="包分";}
else if($bqr[fenlei]==20){$bfenlei="拖拉机";}
else if($bqr[fenlei]==21){$bfenlei="接龙";}
else if($bqr[fenlei]==22){$bfenlei="跑得快";}
else if($bqr[fenlei]==23){$bfenlei="锄大地";}
else if($bqr[fenlei]==24){$bfenlei="梭哈";}
else if($bqr[fenlei]==25){$bfenlei="德州扑克";}
else if($bqr[fenlei]==26){$bfenlei="炸金花";}
else if($bqr[fenlei]==27){$bfenlei="够级";}
else if($bqr[fenlei]==28){$bfenlei="纸牌";}
else if($bqr[fenlei]==29){$bfenlei="牌九";}
else if($bqr[fenlei]==30){$bfenlei="十三张";}
else if($bqr[fenlei]==31){$bfenlei="刨幺";}
else if($bqr[fenlei]==32){$bfenlei="升级";}
else if($bqr[fenlei]==33){$bfenlei="三公";}
else if($bqr[fenlei]==34){$bfenlei="尖子顶";}
else if($bqr[fenlei]==35){$bfenlei="花牌";}
else if($bqr[fenlei]==36){$bfenlei="红十";}
else if($bqr[fenlei]==37){$bfenlei="斗牛";}
else if($bqr[fenlei]==38){$bfenlei="捕鱼";}
else if($bqr[fenlei]==39){$bfenlei="桥牌";}
else if($bqr[fenlei]==40){$bfenlei="长牌";}
else if($bqr[fenlei]==41){$bfenlei="歪胡子";}
else if($bqr[fenlei]==42){$bfenlei="大字牌";}
else if($bqr[fenlei]==43){$bfenlei="大贰";}
}else if($bqr[classid]==11){
if($bqr[fenlei]==1){$bfenlei="二人麻将";}
else if($bqr[fenlei]==2){$bfenlei="三人麻将";}
else if($bqr[fenlei]==3){$bfenlei="四人麻将";}
else if($bqr[fenlei]==4){$bfenlei="日本麻将";}
else if($bqr[fenlei]==5){$bfenlei="贵阳麻将";}
else if($bqr[fenlei]==6){$bfenlei="台湾麻将";}
else if($bqr[fenlei]==7){$bfenlei="上海麻将";}
else if($bqr[fenlei]==8){$bfenlei="四川麻将";}
else if($bqr[fenlei]==9){$bfenlei="北京麻将";}
else if($bqr[fenlei]==10){$bfenlei="广东麻将";}
else if($bqr[fenlei]==11){$bfenlei="陕西麻将";}
else if($bqr[fenlei]==12){$bfenlei="南昌麻将";}
else if($bqr[fenlei]==13){$bfenlei="长沙麻将";}
else if($bqr[fenlei]==14){$bfenlei="长春麻将";}
else if($bqr[fenlei]==15){$bfenlei="武汉麻将";}
else if($bqr[fenlei]==16){$bfenlei="山东麻将";}
else if($bqr[fenlei]==17){$bfenlei="宁波麻将";}
else if($bqr[fenlei]==18){$bfenlei="合肥麻将";}
else if($bqr[fenlei]==19){$bfenlei="河北麻将";}
else if($bqr[fenlei]==20){$bfenlei="天津麻将";}
else if($bqr[fenlei]==21){$bfenlei="太原麻将";}
else if($bqr[fenlei]==22){$bfenlei="福州麻将";}
else if($bqr[fenlei]==23){$bfenlei="杭州麻将";}
else if($bqr[fenlei]==24){$bfenlei="南京麻将";}
else if($bqr[fenlei]==25){$bfenlei="大连麻将";}
else if($bqr[fenlei]==26){$bfenlei="芜湖麻将";}
else if($bqr[fenlei]==27){$bfenlei="淮安麻将";}
else if($bqr[fenlei]==28){$bfenlei="南宁麻将";}
else if($bqr[fenlei]==29){$bfenlei="沈阳麻将";}
else if($bqr[fenlei]==30){$bfenlei="西安麻将";}
else if($bqr[fenlei]==31){$bfenlei="红中麻将";}
else if($bqr[fenlei]==32){$bfenlei="麻将接龙";}

}else if($bqr[classid]==12){
if($bqr[fenlei]==1){$bfenlei="五子棋";}
else if($bqr[fenlei]==2){$bfenlei="象棋";}
else if($bqr[fenlei]==3){$bfenlei="围棋";}
else if($bqr[fenlei]==4){$bfenlei="飞行棋";}
else if($bqr[fenlei]==5){$bfenlei="中国暗棋";}
else if($bqr[fenlei]==6){$bfenlei="跳棋";}
else if($bqr[fenlei]==7){$bfenlei="井字棋";}
else if($bqr[fenlei]==8){$bfenlei="军棋";}
else if($bqr[fenlei]==9){$bfenlei="斗兽棋";}
else if($bqr[fenlei]==10){$bfenlei="将棋";}
else if($bqr[fenlei]==11){$bfenlei="四子棋";}
else if($bqr[fenlei]==12){$bfenlei="大富翁";}
else if($bqr[fenlei]==13){$bfenlei="国际象棋";}
}
?>
          <li> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span><?=$bqr['title']?></span></a>
            <p><?=$bfenlei?></p>
          </li>
<?php
}
}
?>
        </ul>
      </div>
      <div class="h_comment" id="comment_box" data="comment-163-1">
        <div class="hd20">
          <h3>用户评论</h3>
          <span class="num">（已有<b id="total"><a href="#SOHUCS" id="changyan_count_unit"></a></b>条评论）</span></div>
		  <script type="text/javascript" src="https://assets.changyan.sohu.com/upload/plugins/plugins.count.js"> </script>
        <div>
          <!--PC版-->
<div id="SOHUCS" ></div>
<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
window.changyan.api.config({
appid: 'cyrbiKxmG',
conf: 'prod_8e11cfb50c20f2a0b31d59926e9e42c7'
});
</script>
        </div>
      </div>
    </div>
    
 <div class="w336">
      <div class="w-kftab">
        <div class="hd20">
          <h3>游戏攻略</h3>
          <a href="/zixun/gonglue/" class="more">更多<i></i></a></div>
           <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news where classid=3 order by newstime desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr[classurl]?>" target="_blank" class="flei">[<?=$bqsr[classname]?>]</a><a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
    </ul>
        </div>


      <div class="w-news mt15">
        <div class="hd20">
          <h3>热门活动</h3>
          <a href="javascript:void(0);" class="refresh" id="w_refresh">换一批<i></i></a></div>
        <div class="wbody">
          <div class="wlist">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news where fmimg<>'' order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <dl>
              <dt><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['fmimg']?>" alt="<?=$bqr['title']?>"></a></dt>
              <dd class="title"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></dd>
              <dd class="desc"><?=$bqr['title']?></dd>
            </dl>
<?php
}
}
?>
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
              <li>•<a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
            </ul>
          </div>
          <div class="wlist">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news where fmimg<>'' order by newstime desc limit 1,1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <dl>
              <dt><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['fmimg']?>" alt="<?=$bqr['title']?>"></a></dt>
              <dd class="title"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></dd>
              <dd class="desc"><?=$bqr['title']?></dd>
            </dl>
<?php
}
}
?>
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news order by newstime desc limit 4,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
              <li>•<a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a></li>
<?php
}
}
?>
            </ul>
          </div>
        </div>
      </div>
      <div class="w-rank mt15">
        <div class="hd20">
          <h3>游戏排行</h3>
          
        </div>
        <div class="bd">
          <ol id="rank_con_0">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[classid]==10){
if($bqr[fenlei]==1){$fenlei="斗地主";}
else if($bqr[fenlei]==2){$bfenlei="跑胡子";}
else if($bqr[fenlei]==3){$bfenlei="21点";}
else if($bqr[fenlei]==4){$bfenlei="保皇";}
else if($bqr[fenlei]==5){$bfenlei="打滚子";}
else if($bqr[fenlei]==6){$bfenlei="干瞪眼";}
else if($bqr[fenlei]==7){$bfenlei="打大A";}
else if($bqr[fenlei]==8){$bfenlei="四冲";}
else if($bqr[fenlei]==9){$bfenlei="三代";}
else if($bqr[fenlei]==10){$bfenlei="5十K";}
else if($bqr[fenlei]==11){$bfenlei="三打一";}
else if($bqr[fenlei]==12){$bfenlei="挖坑";}
else if($bqr[fenlei]==13){$bfenlei="拱猪";}
else if($bqr[fenlei]==14){$bfenlei="红五";}
else if($bqr[fenlei]==15){$bfenlei="黑尖";}
else if($bqr[fenlei]==16){$bfenlei="攉龙";}
else if($bqr[fenlei]==17){$bfenlei="大怪路子";}
else if($bqr[fenlei]==18){$bfenlei="掼蛋";}
else if($bqr[fenlei]==19){$bfenlei="包分";}
else if($bqr[fenlei]==20){$bfenlei="拖拉机";}
else if($bqr[fenlei]==21){$bfenlei="接龙";}
else if($bqr[fenlei]==22){$bfenlei="跑得快";}
else if($bqr[fenlei]==23){$bfenlei="锄大地";}
else if($bqr[fenlei]==24){$bfenlei="梭哈";}
else if($bqr[fenlei]==25){$bfenlei="德州扑克";}
else if($bqr[fenlei]==26){$bfenlei="炸金花";}
else if($bqr[fenlei]==27){$bfenlei="够级";}
else if($bqr[fenlei]==28){$bfenlei="纸牌";}
else if($bqr[fenlei]==29){$bfenlei="牌九";}
else if($bqr[fenlei]==30){$bfenlei="十三张";}
else if($bqr[fenlei]==31){$bfenlei="刨幺";}
else if($bqr[fenlei]==32){$bfenlei="升级";}
else if($bqr[fenlei]==33){$bfenlei="三公";}
else if($bqr[fenlei]==34){$bfenlei="尖子顶";}
else if($bqr[fenlei]==35){$bfenlei="花牌";}
else if($bqr[fenlei]==36){$bfenlei="红十";}
else if($bqr[fenlei]==37){$bfenlei="斗牛";}
else if($bqr[fenlei]==38){$bfenlei="捕鱼";}
else if($bqr[fenlei]==39){$bfenlei="桥牌";}
else if($bqr[fenlei]==40){$bfenlei="长牌";}
else if($bqr[fenlei]==41){$bfenlei="歪胡子";}
else if($bqr[fenlei]==42){$bfenlei="大字牌";}
else if($bqr[fenlei]==43){$bfenlei="大贰";}
}else if($bqr[classid]==11){
if($bqr[fenlei]==1){$bfenlei="二人麻将";}
else if($bqr[fenlei]==2){$bfenlei="三人麻将";}
else if($bqr[fenlei]==3){$bfenlei="四人麻将";}
else if($bqr[fenlei]==4){$bfenlei="日本麻将";}
else if($bqr[fenlei]==5){$bfenlei="贵阳麻将";}
else if($bqr[fenlei]==6){$bfenlei="台湾麻将";}
else if($bqr[fenlei]==7){$bfenlei="上海麻将";}
else if($bqr[fenlei]==8){$bfenlei="四川麻将";}
else if($bqr[fenlei]==9){$bfenlei="北京麻将";}
else if($bqr[fenlei]==10){$bfenlei="广东麻将";}
else if($bqr[fenlei]==11){$bfenlei="陕西麻将";}
else if($bqr[fenlei]==12){$bfenlei="南昌麻将";}
else if($bqr[fenlei]==13){$bfenlei="长沙麻将";}
else if($bqr[fenlei]==14){$bfenlei="长春麻将";}
else if($bqr[fenlei]==15){$bfenlei="武汉麻将";}
else if($bqr[fenlei]==16){$bfenlei="山东麻将";}
else if($bqr[fenlei]==17){$bfenlei="宁波麻将";}
else if($bqr[fenlei]==18){$bfenlei="合肥麻将";}
else if($bqr[fenlei]==19){$bfenlei="河北麻将";}
else if($bqr[fenlei]==20){$bfenlei="天津麻将";}
else if($bqr[fenlei]==21){$bfenlei="太原麻将";}
else if($bqr[fenlei]==22){$bfenlei="福州麻将";}
else if($bqr[fenlei]==23){$bfenlei="杭州麻将";}
else if($bqr[fenlei]==24){$bfenlei="南京麻将";}
else if($bqr[fenlei]==25){$bfenlei="大连麻将";}
else if($bqr[fenlei]==26){$bfenlei="芜湖麻将";}
else if($bqr[fenlei]==27){$bfenlei="淮安麻将";}
else if($bqr[fenlei]==28){$bfenlei="南宁麻将";}
else if($bqr[fenlei]==29){$bfenlei="沈阳麻将";}
else if($bqr[fenlei]==30){$bfenlei="西安麻将";}
else if($bqr[fenlei]==31){$bfenlei="红中麻将";}
else if($bqr[fenlei]==32){$bfenlei="麻将接龙";}

}else if($bqr[classid]==12){
if($bqr[fenlei]==1){$bfenlei="五子棋";}
else if($bqr[fenlei]==2){$bfenlei="象棋";}
else if($bqr[fenlei]==3){$bfenlei="围棋";}
else if($bqr[fenlei]==4){$bfenlei="飞行棋";}
else if($bqr[fenlei]==5){$bfenlei="中国暗棋";}
else if($bqr[fenlei]==6){$bfenlei="跳棋";}
else if($bqr[fenlei]==7){$bfenlei="井字棋";}
else if($bqr[fenlei]==8){$bfenlei="军棋";}
else if($bqr[fenlei]==9){$bfenlei="斗兽棋";}
else if($bqr[fenlei]==10){$bfenlei="将棋";}
else if($bqr[fenlei]==11){$bfenlei="四子棋";}
else if($bqr[fenlei]==12){$bfenlei="大富翁";}
else if($bqr[fenlei]==13){$bfenlei="国际象棋";}
}
?>
            <li> <em class="num num<?=$bqno?>"><?=$bqno?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from `www_96kaifa_com_ecms_puke` union select * from `www_96kaifa_com_ecms_majiang` union select * from `www_96kaifa_com_ecms_qipai` order by onclick desc limit 3,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[classid]==10){
if($bqr[fenlei]==1){$fenlei="斗地主";}
else if($bqr[fenlei]==2){$bfenlei="跑胡子";}
else if($bqr[fenlei]==3){$bfenlei="21点";}
else if($bqr[fenlei]==4){$bfenlei="保皇";}
else if($bqr[fenlei]==5){$bfenlei="打滚子";}
else if($bqr[fenlei]==6){$bfenlei="干瞪眼";}
else if($bqr[fenlei]==7){$bfenlei="打大A";}
else if($bqr[fenlei]==8){$bfenlei="四冲";}
else if($bqr[fenlei]==9){$bfenlei="三代";}
else if($bqr[fenlei]==10){$bfenlei="5十K";}
else if($bqr[fenlei]==11){$bfenlei="三打一";}
else if($bqr[fenlei]==12){$bfenlei="挖坑";}
else if($bqr[fenlei]==13){$bfenlei="拱猪";}
else if($bqr[fenlei]==14){$bfenlei="红五";}
else if($bqr[fenlei]==15){$bfenlei="黑尖";}
else if($bqr[fenlei]==16){$bfenlei="攉龙";}
else if($bqr[fenlei]==17){$bfenlei="大怪路子";}
else if($bqr[fenlei]==18){$bfenlei="掼蛋";}
else if($bqr[fenlei]==19){$bfenlei="包分";}
else if($bqr[fenlei]==20){$bfenlei="拖拉机";}
else if($bqr[fenlei]==21){$bfenlei="接龙";}
else if($bqr[fenlei]==22){$bfenlei="跑得快";}
else if($bqr[fenlei]==23){$bfenlei="锄大地";}
else if($bqr[fenlei]==24){$bfenlei="梭哈";}
else if($bqr[fenlei]==25){$bfenlei="德州扑克";}
else if($bqr[fenlei]==26){$bfenlei="炸金花";}
else if($bqr[fenlei]==27){$bfenlei="够级";}
else if($bqr[fenlei]==28){$bfenlei="纸牌";}
else if($bqr[fenlei]==29){$bfenlei="牌九";}
else if($bqr[fenlei]==30){$bfenlei="十三张";}
else if($bqr[fenlei]==31){$bfenlei="刨幺";}
else if($bqr[fenlei]==32){$bfenlei="升级";}
else if($bqr[fenlei]==33){$bfenlei="三公";}
else if($bqr[fenlei]==34){$bfenlei="尖子顶";}
else if($bqr[fenlei]==35){$bfenlei="花牌";}
else if($bqr[fenlei]==36){$bfenlei="红十";}
else if($bqr[fenlei]==37){$bfenlei="斗牛";}
else if($bqr[fenlei]==38){$bfenlei="捕鱼";}
else if($bqr[fenlei]==39){$bfenlei="桥牌";}
else if($bqr[fenlei]==40){$bfenlei="长牌";}
else if($bqr[fenlei]==41){$bfenlei="歪胡子";}
else if($bqr[fenlei]==42){$bfenlei="大字牌";}
else if($bqr[fenlei]==43){$bfenlei="大贰";}
}else if($bqr[classid]==11){
if($bqr[fenlei]==1){$bfenlei="二人麻将";}
else if($bqr[fenlei]==2){$bfenlei="三人麻将";}
else if($bqr[fenlei]==3){$bfenlei="四人麻将";}
else if($bqr[fenlei]==4){$bfenlei="日本麻将";}
else if($bqr[fenlei]==5){$bfenlei="贵阳麻将";}
else if($bqr[fenlei]==6){$bfenlei="台湾麻将";}
else if($bqr[fenlei]==7){$bfenlei="上海麻将";}
else if($bqr[fenlei]==8){$bfenlei="四川麻将";}
else if($bqr[fenlei]==9){$bfenlei="北京麻将";}
else if($bqr[fenlei]==10){$bfenlei="广东麻将";}
else if($bqr[fenlei]==11){$bfenlei="陕西麻将";}
else if($bqr[fenlei]==12){$bfenlei="南昌麻将";}
else if($bqr[fenlei]==13){$bfenlei="长沙麻将";}
else if($bqr[fenlei]==14){$bfenlei="长春麻将";}
else if($bqr[fenlei]==15){$bfenlei="武汉麻将";}
else if($bqr[fenlei]==16){$bfenlei="山东麻将";}
else if($bqr[fenlei]==17){$bfenlei="宁波麻将";}
else if($bqr[fenlei]==18){$bfenlei="合肥麻将";}
else if($bqr[fenlei]==19){$bfenlei="河北麻将";}
else if($bqr[fenlei]==20){$bfenlei="天津麻将";}
else if($bqr[fenlei]==21){$bfenlei="太原麻将";}
else if($bqr[fenlei]==22){$bfenlei="福州麻将";}
else if($bqr[fenlei]==23){$bfenlei="杭州麻将";}
else if($bqr[fenlei]==24){$bfenlei="南京麻将";}
else if($bqr[fenlei]==25){$bfenlei="大连麻将";}
else if($bqr[fenlei]==26){$bfenlei="芜湖麻将";}
else if($bqr[fenlei]==27){$bfenlei="淮安麻将";}
else if($bqr[fenlei]==28){$bfenlei="南宁麻将";}
else if($bqr[fenlei]==29){$bfenlei="沈阳麻将";}
else if($bqr[fenlei]==30){$bfenlei="西安麻将";}
else if($bqr[fenlei]==31){$bfenlei="红中麻将";}
else if($bqr[fenlei]==32){$bfenlei="麻将接龙";}

}else if($bqr[classid]==12){
if($bqr[fenlei]==1){$bfenlei="五子棋";}
else if($bqr[fenlei]==2){$bfenlei="象棋";}
else if($bqr[fenlei]==3){$bfenlei="围棋";}
else if($bqr[fenlei]==4){$bfenlei="飞行棋";}
else if($bqr[fenlei]==5){$bfenlei="中国暗棋";}
else if($bqr[fenlei]==6){$bfenlei="跳棋";}
else if($bqr[fenlei]==7){$bfenlei="井字棋";}
else if($bqr[fenlei]==8){$bfenlei="军棋";}
else if($bqr[fenlei]==9){$bfenlei="斗兽棋";}
else if($bqr[fenlei]==10){$bfenlei="将棋";}
else if($bqr[fenlei]==11){$bfenlei="四子棋";}
else if($bqr[fenlei]==12){$bfenlei="大富翁";}
else if($bqr[fenlei]==13){$bfenlei="国际象棋";}
}
?>
            <li> <em class="num num"><?=$bqno+3?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php
}
}
?>
          </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery.uploadify.min.js"></script>
<div id="footer">
  <div class="about_me"> <a href="/aboutus.html" target="_blank">关于我们</a> | <a href="/contact.html" target="_blank">联系方式</a> | <a href="/sitemap.html" target="_blank">网站地图</a> | <a href="/explain.html" target="_blank">用户协议</a> </div>
  <div class="safety"> <a><i class="icon_safe1"></i>中国互联网举报中心</a> <a><i class="icon_safe2"></i>网络违法举报中心</a> <a><i class="icon_safe3"></i>垃圾信息举报中心</a> <a><i class="icon_safe4"></i>闽公网安备35020302001953号</a> </div>
  <p class="tips_text">©2017-2018 &nbsp; <?=$public_r['add_www_96kaifa_com_name']?> &nbsp; <?=$public_r['add_www_96kaifa_com_url2']?> <em>礼包交流群：</em><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" target="_blank" class="qqun"></a></p>
  <p class="tips_text">备案号：<?=$public_r['add_www_96kaifa_com_ba']?> &nbsp; <?=$public_r['add_www_96kaifa_com_tongji']?> 技术支持：<a href="https://www.96kaifa.com" target="_blank">96KaiFa源码</a></p>
</div>
<div id="backtop">返回顶部</div>
<script src="/e/data/js/ajax.js"></script>
<script type="text/javascript" src="/96kaifa/statics/home/js/member.js"></script>
<script type="text/javascript">
	var member = new Member();
</script>
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
<script type="text/javascript" src="/96kaifa/statics/home/js/screenshots.js"></script>
<script type="text/javascript" src="/96kaifa/statics/home/js/loading.js"></script>
<script type="text/javascript">
	member.loadMore('gameNews');
</script>
</body>
</html>