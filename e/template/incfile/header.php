<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------

//会员界面附件地址前缀
$memberskinurl=$public_r['newsurl'].'skin/member/images/';

//LOGO图片地址
$logoimgurl=$memberskinurl.'logo.jpg';

//加减号图片地址
$addimgurl=$memberskinurl.'add.gif';
$noaddimgurl=$memberskinurl.'noadd.gif';

//上下横线背景色
$bgcolor_line='#4FB4DE';

//其它色调可修改CSS部分

//--------------- 界面参数 ---------------


//识别并显示当前菜单
function EcmsShowThisMemberMenu(){
	global $memberskinurl,$noaddimgurl;
	$selffile=eReturnSelfPage(0);
	if(stristr($selffile,'/member/msg'))
	{
		$menuname='menumsg';
	}
	elseif(stristr($selffile,'e/DoInfo'))
	{
		$menuname='menuinfo';
	}
	elseif(stristr($selffile,'/member/mspace'))
	{
		$menuname='menuspace';
	}
	elseif(stristr($selffile,'e/ShopSys'))
	{
		$menuname='menushop';
	}
	elseif(stristr($selffile,'e/payapi')||stristr($selffile,'/member/buygroup')||stristr($selffile,'/member/card')||stristr($selffile,'/member/buybak')||stristr($selffile,'/member/downbak'))
	{
		$menuname='menupay';
	}
	else
	{
		$menuname='menumember';
	}
	echo'<script>turnit(do'.$menuname.',"'.$menuname.'img");</script>';
	?>
	<script>
	do<?=$menuname?>.style.display="";
	document.images.<?=$menuname?>img.src="<?=$noaddimgurl?>";
	</script>
	<?php
}

//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';
//会员组名称
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}

//模型
$tgetmid=(int)$_GET['mid'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=$thispagetitle?>_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/member.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
<SCRIPT lanuage="JScript">
function DisplayImg(ss,imgname,phome)
{
	if(imgname=="menumemberimg")
	{
		img=todisplay(domenumember,phome);
		document.images.menumemberimg.src=img;
	}
	else if(imgname=="menumsgimg")
	{
		img=todisplay(domenumsg,phome);
		document.images.menumsgimg.src=img;
	}
	else if(imgname=="menuinfoimg")
	{
		img=todisplay(domenuinfo,phome);
		document.images.menuinfoimg.src=img;
	}
	else if(imgname=="menuspaceimg")
	{
		img=todisplay(domenuspace,phome);
		document.images.menuspaceimg.src=img;
	}
	else if(imgname=="menupayimg")
	{
		img=todisplay(domenupay,phome);
		document.images.menupayimg.src=img;
	}
	else if(imgname=="menushopimg")
	{
		img=todisplay(domenushop,phome);
		document.images.menushopimg.src=img;
	}
	else
	{
	}
	DisplayAllMenu(imgname);
}
function todisplay(ss,phome)
{
	if(ss.style.display=="") 
	{
  		ss.style.display="none";
		theimg="<?=$addimgurl?>";
	}
	else
	{
  		ss.style.display="";
		theimg="<?=$noaddimgurl?>";
	}
	return theimg;
}
function turnit(ss,img)
{
	DisplayImg(ss,img,0);
}
function DisplayAllMenu(imgname)
{
	if(imgname!='menumemberimg'&&domenumember.style.display=="")
	{
		domenumember.style.display="none";
		document.images.menumemberimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menumsgimg'&&domenumsg.style.display=="")
	{
		domenumsg.style.display="none";
		document.images.menumsgimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menuinfoimg'&&domenuinfo.style.display=="")
	{
		domenuinfo.style.display="none";
		document.images.menuinfoimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menuspaceimg'&&domenuspace.style.display=="")
	{
		domenuspace.style.display="none";

		document.images.menuspaceimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menupayimg'&&domenupay.style.display=="")
	{
		domenupay.style.display="none";
		document.images.menupayimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menushopimg'&&domenushop.style.display=="")
	{
		domenushop.style.display="none";
		document.images.menushopimg.src="<?=$addimgurl?>";
	}
}
</SCRIPT>
</head>
<script type="text/javascript">
	showMobile("http://m.3500.com/userinfo/ucenter.html");
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
      <div class="login_ok" id="login_ok"> <script> document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>'); </script> </div>
      <a href="javascript:;" onclick="AddFavorite();">收藏本站</a> </div>
  </div>
</div>
<div class="header">
  <div class="header-top">
    <div class="in">
      <div class="logo fl"><a href="/"><img src="/96kaifa/statics/home/images/logo.png" alt="<?=$public_r['add_www_96kaifa_com_name']?>"></a></div>
      <div class="uhead fl"><span>用户中心</span></div>
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
</div>
<?php 
$myuserid=(int)getcvar('mluserid');
$tsql2=$empire->query("select userpic from www_96kaifa_com_enewsmemberadd where userid=$myuserid");
while($tr=$empire->fetch($tsql2)){$ccc=$tr['userpic'];}
?>
<div class="ucenter">
  <div class="w220">
    <div class="uinfo">
      <div class="head"><i></i><img src="<?=$ccc?$ccc:'/e/data/images/nouserpic.gif'?>"></div>
      <p class="name"><?=$tmgetusername?></p>
      <span>UID : <?=$user[userid]?></span> </div>
    <div class="leftmenu" id="leftmenu">
      <div class="mtitle now"> <a href="/e/member/cp/"><i class="iconfont icon1">&#xe603;</i>首页</a> </div>
      <div class="mtitle"> <a href="/e/member/EditInfo/"><i class="iconfont icon2">&#xe854;</i>账户资料</a></div>
	  <div class="mtitle "><a href="/e/member/game/"><i class="iconfont icon3"></i>热门游戏</a></div>
      <div class="mtitle "><a href="/e/member/libao/"><i class="iconfont icon4">&#xe6c7;</i>我的礼包</a></div>
      <div class="mtitle "><a href="/e/member/msg/"><i class="iconfont icon6">&#xe632;</i>我的消息</a></div>
      <div class="mtitle "><a href="/e/member/EditInfo/EditSafeInfo.php"><i class="iconfont icon7">&#xe66f;</i>账号安全</a></div>
      <div class="mtitle "><a href="/e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');"><i class="iconfont icon8">&#xe61f;</i>退出登录</a></div>
    </div>
  </div>
  <div class="w980">