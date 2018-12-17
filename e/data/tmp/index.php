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
<title>仿3500游戏源码-96KaiFa原创源码（www.96kaifa.com）</title>
<meta name="keywords" content="仿3500游戏源码,3500游戏源码" />
<meta name="description" content="仿3500游戏源码-在线玩H5游戏为用户提供海量手机上不用下载就可以玩的手机页游、免费H5小游戏在线玩。好玩的H5游戏，就在3500游戏平台。" />
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/style3500.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/newadd.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/96kaifa/statics/home/js/newadd.js"></script>
</head>
<script type="text/javascript">
	showMobile("<?=$public_r['add_www_96kaifa_com_murl']?>");
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
<div class="top_game htop_game">
  <div class="gamesMenu">
    <a href="http://news.52pk.com/zt/2017pd/" target="_blank" style="display:none;width:380px;height:57px;position:absolute; right:0; top:-11px;"><img src="http://www.52pk.com/style/1512files/images/pd2017-2.png"></a>
    <dl>
        
        <dd class="nowshow"> <img src="/96kaifa/statics/home/images/2.jpg" alt=""> <span>热门推荐</span> </dd>
        <dd class=""> <img src="/96kaifa/statics/home/images/3.jpg" alt=""> <span>手机游戏</span> </dd>
        <dd class=""> <img src="/96kaifa/statics/home/images/4.jpg" alt=""> <span>网络游戏</span> </dd>
        <dd class=""> <img src="/96kaifa/statics/home/images/5.jpg" alt=""> <span>网页游戏</span> </dd>
        <dd class=""> <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=3459690979,957173466&fm=26&gp=0.jpg" alt=""> <span>棋盘游戏</span> </dd>
        <dd class=""> <img src="https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=2697131486,2435653672&fm=27&gp=0.jpg" alt=""> <span>麻将游戏</span> </dd>
        <dd class=""> <img src="https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=576761244,3143239532&fm=26&gp=0.jpg" alt=""> <span>象棋游戏</span> </dd>
        <dd style="color:#ff9600; font-weight:bold;" class=""><img src="/96kaifa/statics/home/images/6.jpg" alt=""> <span>软件下载</span> </dd>
    </dl>
    <ul class="cc" style="display: block;">
        <li>
            <cite>网游</cite>
            <p>
               <a href="http://wzry.52pk.com/" target="_blank">王者荣耀</a><a href="http://www.youxibao.com/cfm/" target="_blank">穿越火线：荒岛特训</a><a href="http://xin.52pk.com/sy_ku/zmq/" target="_blank">镇魔曲手游</a><a href="http://www.youxibao.com/ku/jl/" target="_blank">街篮</a><a href="http://www.52pk.com/games/mhhy/" target="_blank">梦幻花园</a><a href="http://xin.52pk.com/sy_ku/jzhsmyjsy/" target="x_blank">九州海上牧云记</a><a href="http://www.youxibao.com/ku/fgo/" target="_blank">FateGo</a><a href="http://xin.52pk.com/sy_ku/ws3sy/" target="_blank">神武3手游</a><a href="http://xin.52pk.com/sy_ku/wjsy/" target="_blank">无尽神域</a><a href="http://www.youxibao.com/ku/lzgsy/" target="_blank">龙之谷手游</a><a href="http://www.52pk.com/games/yys/" target="_blank">阴阳师手游</a><a href="http://xin.52pk.com/sy_ku/hyrz/" target="_blank">火影忍者</a><a href="http://xin.52pk.com/sy_ku/dhxy/" target="_blank">大话西游手游</a><a href="http://xin.52pk.com/sy_ku/wdsjsjb/" target="_blank">我的世界手机版</a><a href="http://xin.52pk.com/sy_ku/lscs/" target="_blank">炉石传说</a><a href="http://xin.52pk.com/sy_ku/qqdzz/" target="_blank">球球大作战</a><a href="http://xin.52pk.com/sy_ku/jx3/" target="_blank">剑网3：指尖江湖</a><a href="http://xin.52pk.com/sy_ku/mxsy/" target="_blank">梦想世界手游</a><a href="http://xin.52pk.com/sy_ku/kxxxl/" target="_blank">开心消消乐</a><a href="http://xin.52pk.com/sy_ku/cytus2/" target="_blank">音乐世界Cytus II</a><a href="http://xin.52pk.com/sy_ku/zjz2spr/" target="_blank">终结者2：审判日</a><a href="http://xin.52pk.com/sy_ku/zt2/" target="_blank">征途2手游</a><a href="http://xin.52pk.com/sy_ku/xyjlwys/" target="_blank">轩辕剑龙舞云山</a><a href="http://xin.52pk.com/sy_ku/ysyy/" target="_blank">云裳羽衣</a><a href="http://xin.52pk.com/sy_ku/zxsy/" target="_blank">诛仙手游</a><a href="http://xin.52pk.com/sy_ku/gydj/" target="_blank">光影对决</a><a href="http://xin.52pk.com/sy_ku/cjmlakp/" target="_blank">超级马里奥酷跑</a><a href="http://xin.52pk.com/sy_ku/zgjqxs/" target="_blank">中国惊奇先生</a> 

            </p>
        </li>
        <li>
            <cite class="shouyou">手游</cite>
            <p>
                <a href="http://cf.52pk.com/cfm/" target="_blank">穿越火线：荒岛特训</a><a href="http://wzry.52pk.com/" target="_blank" style=" color:#f8656c;" class="hong">王者荣耀</a><a href="http://xin.52pk.com/sy_ku/jdqscjzc/" target="_blank">绝地求生：刺激战场</a><a href="http://xin.52pk.com/sy_ku/dwrg/index.shtml" target="_blank">第五人格</a><a href="http://xin.52pk.com/sy_ku/jxsj2sy/" target="_blank">剑侠世界2</a><a href="http://xin.52pk.com/sy_ku/zyhx/" target="_blank">自由幻想</a><a href="http://xin.52pk.com/sy_ku/ysyy/" target="_blank">云裳羽衣</a><a href="http://www.youxibao.com/ku/fgo/" target="_blank">FateGo</a><a href="http://xin.52pk.com/sy_ku/frxy/" target="_blank">非人学院</a><a href="http://xin.52pk.com/sy_ku/dpcqddzl/" target="_blank">斗破苍穹</a><a href="http://xin.52pk.com/sy_ku/skzqsy/" target="_blank">实况足球</a> 
            </p>
        </li>
        <li>
            <cite class="webyou">页游</cite>
            <p>
                <a href="http://web.52pk.com/yhmy/" target="_blank">魔域永恒</a><a href="http://web.52pk.com/jsxw/" target="_blank">绝世仙王</a><a href="http://web.52pk.com/lsqy/" target="_blank" class="huang">龙神契约</a><a href="http://web.52pk.com/hyrz/" target="_blank">火影忍者ol</a><a href="http://web.52pk.com/cqby/" target="_blank">传奇霸业</a><a href="http://web.52pk.com/taiji2/" target="_blank">太极崛起</a><a href="http://web.52pk.com/bsw/" target="_blank">剑灵洪门崛起</a><a href="http://web.52pk.com/dtszj/" target="_blank" style=" color:#f8656c;" class="hong">大天使之剑</a><a href="http://web.52pk.com/xzcq/" target="_blank">小志传奇</a><a href="http://web.52pk.com/hlw/" target="_blank">葫芦娃</a><a href="http://web.52pk.com/lycq/" target="_blank">蓝月传奇</a><a href="http://web.52pk.com/sdyxz/" target="_blank">新射雕英雄传</a>
            </p>
        </li>
    </ul>
    <ul class="column-sort cc" style="display: none;">
        <li>
            <a href="http://wzry.52pk.com/" target="_blank">王者荣耀</a><a href="http://www.youxibao.com/cfm/" target="_blank">穿越火线：荒岛特训</a><a href="http://xin.52pk.com/sy_ku/zmq/" target="_blank">镇魔曲手游</a><a href="http://www.youxibao.com/ku/jl/" target="_blank">街篮</a><a href="http://www.52pk.com/games/mhhy/" target="_blank">梦幻花园</a><a href="http://xin.52pk.com/sy_ku/jzhsmyjsy/" target="x_blank">九州海上牧云记</a><a href="http://www.youxibao.com/ku/fgo/" target="_blank">FateGo</a><a href="http://xin.52pk.com/sy_ku/ws3sy/" target="_blank">神武3手游</a><a href="http://xin.52pk.com/sy_ku/wjsy/" target="_blank">无尽神域</a><a href="http://www.youxibao.com/ku/lzgsy/" target="_blank">龙之谷手游</a><a href="http://www.52pk.com/games/yys/" target="_blank">阴阳师手游</a><a href="http://xin.52pk.com/sy_ku/hyrz/" target="_blank">火影忍者</a><a href="http://xin.52pk.com/sy_ku/dhxy/" target="_blank">大话西游手游</a><a href="http://xin.52pk.com/sy_ku/wdsjsjb/" target="_blank">我的世界手机版</a><a href="http://xin.52pk.com/sy_ku/lscs/" target="_blank">炉石传说</a><a href="http://xin.52pk.com/sy_ku/qqdzz/" target="_blank">球球大作战</a><a href="http://xin.52pk.com/sy_ku/jx3/" target="_blank">剑网3：指尖江湖</a><a href="http://xin.52pk.com/sy_ku/mxsy/" target="_blank">梦想世界手游</a><a href="http://xin.52pk.com/sy_ku/kxxxl/" target="_blank">开心消消乐</a><a href="http://xin.52pk.com/sy_ku/cytus2/" target="_blank">音乐世界Cytus II</a><a href="http://xin.52pk.com/sy_ku/zjz2spr/" target="_blank">终结者2：审判日</a><a href="http://xin.52pk.com/sy_ku/zt2/" target="_blank">征途2手游</a><a href="http://xin.52pk.com/sy_ku/xyjlwys/" target="_blank">轩辕剑龙舞云山</a><a href="http://xin.52pk.com/sy_ku/ysyy/" target="_blank">云裳羽衣</a><a href="http://xin.52pk.com/sy_ku/zxsy/" target="_blank">诛仙手游</a><a href="http://xin.52pk.com/sy_ku/gydj/" target="_blank">光影对决</a><a href="http://xin.52pk.com/sy_ku/cjmlakp/" target="_blank">超级马里奥酷跑</a><a href="http://xin.52pk.com/sy_ku/zgjqxs/" target="_blank">中国惊奇先生</a><a href="http://xin.52pk.com/sy_ku/jdqscjzc/" target="_blank">绝地求生：刺激战场</a><a href="http://xin.52pk.com/sy_ku/qjmujx/" target="_blank">奇迹MU：觉醒</a><a href="http://xin.52pk.com/sy_ku/jdqsqjcj/" target="_blank">绝地求生：全军出击</a><a href="http://xin.52pk.com/sy_ku/skygy/" target="_blank">Sky光遇</a><a href="http://xin.52pk.com/sy_ku/fknsg2/" target="_blank">放开那三国2</a><a href="http://xin.52pk.com/sy_ku/cqbysy/" target="_blank">传奇霸业手游</a><a href="http://xin.52pk.com/sy_ku/shumen/" target="_blank">蜀门手游</a><a href="http://xin.52pk.com/sy_ku/tksjsjz/" target="_blank">坦克世界闪击战</a><a href="http://xin.52pk.com/sy_ku/xyzhxz/" target="_blank">圣斗士星矢-小宇宙幻想传</a><a href="http://xin.52pk.com/sy_ku/jnbg2/" target="_blank">纪念碑谷2</a><a href="http://xin.52pk.com/sy_ku/frxy/" target="_blank">非人学园</a><a href="http://xin.52pk.com/sy_ku/blhx/" target="_blank">碧蓝航线</a><a href="http://xin.52pk.com/sy_ku/wd/" target="_blank">问道手游</a><a href="http://xin.52pk.com/sy_ku/mfjsml/" target="_blank">魔法禁书目录</a><a href="http://xin.52pk.com/sy_ku/xmct/" target="_blank">星盟冲突</a><a href="http://xin.52pk.com/sy_ku/bsymg/" target="_blank">不思议迷宫</a><a href="http://xin.52pk.com/sy_ku/qqfc/" target="_blank">QQ飞车手游</a><a href="http://xin.52pk.com/sy_ku/fjlrs/" target="_blank">饭局狼人杀</a><a href="http://xin.52pk.com/sy_ku/hhwjz/" target="_blank">航海王激战</a><a href="http://xin.52pk.com/sy_ku/xmxy/" target="_blank">星梦学院</a><a href="http://xin.52pk.com/sy_ku/snkfq/" target="_blank">少女咖啡枪</a><a href="http://xin.52pk.com/sy_ku/fknsg/" target="_blank">放开那三国</a><a href="http://xin.52pk.com/sy_ku/cqsjsy/" target="_blank">传奇世界手游</a><a href="http://xin.52pk.com/sy_ku/xjcsshyhda/" target="_blank">仙境传说RO：守护永恒的爱</a><a href="http://xin.52pk.com/sy_ku/mfsnxy/" target="_blank">魔法少女小圆</a><a href="http://xin.52pk.com/sy_ku/jyzj/" target="_blank">九阴</a>
        </li>
    </ul>
    <ul class="column-sort cc" style="display: none;">
        <li>
            <a href="http://ow.52pk.com/" target="_blank">守望先锋</a><a href="http://lscs.52pk.com/" target="_blank">炉石传说</a><a href="http://wow.52pk.com/" target="_blank">魔兽世界</a><a href="http://hots.52pk.com/" target="_blank">风暴英雄</a><a href="http://jx3.52pk.com/" target="_blank">剑网3</a><a href="http://bns.52pk.com/" target="_blank">剑灵</a><a href="http://dnf.52pk.com/" target="_blank">DNF</a><a href="http://wuxia.52pk.com/" target="_blank">天涯明月刀</a><a href="http://cf.52pk.com/" target="_blank" style="color:#f8656c;" class="hong">穿越火线</a><a href="http://mxd2.52pk.com/" target="_blank">冒险岛2</a><a href="http://gw2.52pk.com/" target="_blank">激战2</a><a href="http://nz.52pk.com/" target="_blank">逆战</a><a href="http://codol.52pk.com/" target="_blank">使命召唤ol</a><a href="http://csgo.52pk.com/" target="_blank">CSGO</a><a href="http://gjol.52pk.com/" target="_blank">古剑奇谭ol</a><a href="http://daihao0.52pk.com/" target="_blank">灵山奇缘</a><a href="http://xin.52pk.com/game/index_11036.shtml" target="_blank">宝藏世界</a><a href="http://xin.52pk.com/game/index_11006.shtml" target="_blank">虚幻争霸</a><a href="http://xin.52pk.com/game/index_11012.shtml" target="_blank" class="huang">逆水寒</a><a href="http://xin.52pk.com/game/index_10944.shtml" target="_blank">我的世界</a><a href="http://xin.52pk.com/game/index_11040.shtml" target="_blank">火箭联盟</a><a href="http://xin.52pk.com/game/index_10924.shtml" target="_blank">龙魂时刻</a><a href="http://tianyu.52pk.com/" target="_blank">天谕</a><a href="http://shenwu.52pk.com/" target="_blank">神武2</a><a href="http://poe.52pk.com/" target="_blank">流放之路</a><a href="http://xin.52pk.com/game/index_10288.shtml" target="_blank">救世之树</a><a href="http://xin.52pk.com/game/index_10956.shtml" target="_blank">枪火游侠</a><a href="http://xin.52pk.com/game/index_10788.shtml" target="_blank">战意</a><a href="http://black.52pk.com/" target="_blank">黑色沙漠</a><a href="http://xin.52pk.com/game/index_10818.shtml" target="_blank">失落的方舟</a><a href="http://xin.52pk.com/game/index_16063.shtml" target="_blank">蛮荒搜神记</a><a href="http://tfol.52pk.com/" target="_blank">变形金刚</a><a href="http://nfsol.52pk.com/" target="_blank">极品飞车ol</a><a href="http://tksj.52pk.com/" target="_blank">坦克世界</a><a href="http://xin.52pk.com/game/index_10890.shtml" target="_blank">勇者斗恶龙X</a><a href="http://zjsj.52pk.com/" target="_blank">战舰世界</a><a href="http://cqyh.52pk.com/" target="_blank">传奇永恒</a><a href="http://xin.52pk.com/game/index_10824.shtml" target="_blank">天衍录</a><a href="http://xin.52pk.com/game/index_10996.shtml" target="_blank">自由禁区</a><a href="http://xin.52pk.com/game/index_3434.shtml" target="_blank">黑暗与光明</a><a href="http://xin.52pk.com/game/index_11042.shtml" target="_blank">百变球球</a><a href="http://xin.52pk.com/game/index_11197.shtml" target="_blank">神武3</a><a href="http://xin.52pk.com/game/index_11207.shtml" target="_blank">传送门骑士</a><a href="http://xin.52pk.com/game/index_2506.shtml" target="_blank">镇魔曲</a><a href="http://xin.52pk.com/game/index_5302.shtml" target="_blank">最终幻想14</a><a href="http://fifaol.52pk.com/" target="_blank">FIFA online3</a><a href="http://xin.52pk.com/game/index_11002.shtml" target="_blank">幻想全明星</a><a href="http://xin.52pk.com/game/index_5176.shtml" target="_blank">新倩女幽魂</a><a href="http://xin.52pk.com/game/index_11010.shtml" target="_blank">方舟生存进化</a><a href="http://dota2.52pk.com/" target="_blank">DOTA2</a><a href="http://xxsj2.52pk.com/" target="_blank">仙侠世界2</a><a href="http://ywz.52pk.com/" target="_blank">影武者</a><a href="http://pubg.52pk.com/" target="_blank" style="color:#f8656c;">绝地求生</a><a href="http://xin.52pk.com/game/index_11083.shtml" target="_blank">九阴真经2</a><a href="http://xin.52pk.com/game/index_11220.shtml" target="_blank">无限法则</a><a href="http://xin.52pk.com/game/index_10918.shtml" target="_blank">永恒都市3</a><a href="http://lol.52pk.com/" target="_blank" style="color:#f8656c;">英雄联盟</a><a href="http://omd.52pk.com/" target="_blank">兽人必须死</a><a href="http://qj.52pk.com/" target="_blank">枪界</a><a href="http://xin.52pk.com/game/index_11138.shtml" target="_blank">阿佩尔物语</a><a href="http://xin.52pk.com/game/index_11108.shtml" target="_blank">巫师之昆特牌</a><a href="http://xin.52pk.com/game/index_11086.shtml" target="_blank">泰亚史诗</a><a href="http://xin.52pk.com/game/index_11085.shtml" target="_blank">天之禁2</a><a href="http://xin.52pk.com/game/index_11014.shtml" target="_blank">秘境对决</a><a href="http://xin.52pk.com/game/index_10966.shtml" target="_blank">装甲战争</a><a href="http://xin.52pk.com/game/index_10838.shtml" target="_blank">封印者</a><a href="http://mh.52pk.com/" target="_blank">洛奇英雄传</a><a href="http://xin.52pk.com/game/index_14471.shtml" target="_blank">天下3</a><a href="http://xin.52pk.com/game/index_10268.shtml" target="_blank">虎豹骑</a><a href="http://xin.52pk.com/game/index_10844.shtml" target="_blank">第十域：英雄起源</a><a href="http://xin.52pk.com/game/index_4212.shtml" target="_blank">反恐精英OL</a><a href="http://xin.52pk.com/game/index_4468.shtml" target="_blank">龙之谷2</a><a href="http://nba2kol.52pk.com/" target="_blank">NBA2K Online</a>
        </li>
    </ul>
    <ul class="column-sort cc" style="display: none;">
        <li>
            <a href="http://wzry.52pk.com/" target="_blank">王者荣耀</a><a href="http://www.youxibao.com/cfm/" target="_blank">穿越火线：荒岛特训</a><a href="http://xin.52pk.com/sy_ku/zmq/" target="_blank">镇魔曲手游</a><a href="http://www.youxibao.com/ku/jl/" target="_blank">街篮</a><a href="http://www.52pk.com/games/mhhy/" target="_blank">梦幻花园</a><a href="http://xin.52pk.com/sy_ku/jzhsmyjsy/" target="x_blank">九州海上牧云记</a><a href="http://www.youxibao.com/ku/fgo/" target="_blank">FateGo</a><a href="http://xin.52pk.com/sy_ku/ws3sy/" target="_blank">神武3手游</a><a href="http://xin.52pk.com/sy_ku/wjsy/" target="_blank">无尽神域</a><a href="http://www.youxibao.com/ku/lzgsy/" target="_blank">龙之谷手游</a><a href="http://www.52pk.com/games/yys/" target="_blank">阴阳师手游</a><a href="http://xin.52pk.com/sy_ku/hyrz/" target="_blank">火影忍者</a><a href="http://xin.52pk.com/sy_ku/dhxy/" target="_blank">大话西游手游</a><a href="http://xin.52pk.com/sy_ku/wdsjsjb/" target="_blank">我的世界手机版</a><a href="http://xin.52pk.com/sy_ku/lscs/" target="_blank">炉石传说</a><a href="http://xin.52pk.com/sy_ku/qqdzz/" target="_blank">球球大作战</a><a href="http://xin.52pk.com/sy_ku/jx3/" target="_blank">剑网3：指尖江湖</a><a href="http://xin.52pk.com/sy_ku/mxsy/" target="_blank">梦想世界手游</a><a href="http://xin.52pk.com/sy_ku/kxxxl/" target="_blank">开心消消乐</a><a href="http://xin.52pk.com/sy_ku/cytus2/" target="_blank">音乐世界Cytus II</a><a href="http://xin.52pk.com/sy_ku/zjz2spr/" target="_blank">终结者2：审判日</a><a href="http://xin.52pk.com/sy_ku/zt2/" target="_blank">征途2手游</a><a href="http://xin.52pk.com/sy_ku/xyjlwys/" target="_blank">轩辕剑龙舞云山</a><a href="http://xin.52pk.com/sy_ku/ysyy/" target="_blank">云裳羽衣</a><a href="http://xin.52pk.com/sy_ku/zxsy/" target="_blank">诛仙手游</a><a href="http://xin.52pk.com/sy_ku/gydj/" target="_blank">光影对决</a><a href="http://xin.52pk.com/sy_ku/cjmlakp/" target="_blank">超级马里奥酷跑</a><a href="http://xin.52pk.com/sy_ku/zgjqxs/" target="_blank">中国惊奇先生</a> 
<li><a href="http://web.52pk.com/nh/" title="怒魂" target="_blank">怒魂</a><a target="_blank" href="http://web.52pk.com/qm/" title="求魔">求魔</a><a target="_blank" href="http://web.52pk.com/sha/" title="刺沙">刺沙</a><a target="_blank" href="http://web.52pk.com/xyj/" title="轩辕剑">轩辕剑</a><a target="_blank" href="http://web.52pk.com/hlw/" title="葫芦娃">葫芦娃</a><a target="_blank" href="http://web.52pk.com/jyjx/" title="九阴绝学">九阴绝学</a><a target="_blank" href="http://web.52pk.com/zzxy/" title="主宰西游">主宰西游</a><a target="_blank" href="http://web.52pk.com/bzzr/" title="霸者之刃">霸者之刃</a><a target="_blank" href="http://web.52pk.com/zlcq/" title="斩龙传奇">斩龙传奇</a><a target="_blank" href="http://web.52pk.com/cqss/" title="传奇盛世">传奇盛世</a><a href="http://web.52pk.com/cycs2/" title="赤月传说2" target="_blank">赤月传说2</a><a href="http://web.52pk.com/hyrz/" title="火影忍者ol" target="_blank">火影忍者ol</a><a target="_blank" href="http://web.52pk.com/cqz/" title="特工皇妃楚乔传">特工皇妃楚乔传</a><a target="_blank" href="http://web.52pk.com/dhhsd5/" title="大航海时代5">大航海时代5</a></li>

<li><a target="_blank" href="http://web.52pk.com/tj/" title="天局">天局</a>|<a target="_blank" href="http://web.52pk.com/qh/" title="枪魂">枪魂</a>|<a target="_blank" href="http://web.52pk.com/js/" title="将神">将神</a>|<a target="_blank" href="http://web.52pk.com/lyb/" title="琅琊榜">琅琊榜</a>|<a target="_blank" href="http://web.52pk.com/touch/" title="Touch">Touch</a>|<a target="_blank" href="http://web.52pk.com/lkwg/" title="洛克王国">洛克王国</a>|<a target="_blank" href="http://web.52pk.com/zshh/" title="诸神黄昏">诸神黄昏</a>|<a target="_blank" href="http://web.52pk.com/wssb/" title="无上神兵">无上神兵</a>|<a target="_blank" href="http://web.52pk.com/tqsg/" title="铁骑三国">铁骑三国</a>|<a target="_blank" href="http://web.52pk.com/fbdl/" title="风暴大陆">风暴大陆</a>|<a target="_blank" href="http://web.52pk.com/gdlr2/" title="格斗猎人2">格斗猎人2</a>|<a target="_blank" href="http://web.52pk.com/lycq/" title="蓝月传奇">蓝月传奇</a>|<a target="_blank" href="http://web.52pk.com/wszzl/" title="武神赵子龙">武神赵子龙</a>|<a target="_blank" href="http://web.52pk.com/xm/" title="信喵之野望">信喵之野望</a>|<a target="_blank" href="http://web.52pk.com/blswz/" title="部落守卫战">部落守卫战</a> |<a target="_blank" href="http://web.52pk.com/abd/" title="奥比岛">奥比岛</a></li>


        
    </ul>
    <ul class="column-sort cc" style="display: none;">
        <li>
            <a href="http://www.52pk.com/soft/201803/95185.shtml" target="_blank">有道词典</a><a href="http://www.52pk.com/soft/201803/95720.shtml" target="_blank" class="h_games">WPS2018</a><a href="http://www.52pk.com/soft/201803/95140.shtml" target="_blank" class="h_games">360安全卫士</a><a href="http://www.52pk.com/soft/201803/95230.shtml" target="_blank">腾讯qq2018</a><a href="http://www.52pk.com/soft/201803/95142.shtml" target="_blank">百度网盘</a><a href="http://www.52pk.com/soft/201803/95131.shtml" target="_blank">腾讯企点</a><a href="http://www.52pk.com/soft/201803/95206.shtml" target="_blank">暴风影音</a><a href="http://www.52pk.com/soft/201803/95732.shtml" target="_blank" class="h_games">谷歌浏览器</a><a href="http://www.52pk.com/soft/201803/95190.shtml" target="_blank">wifi共享大师</a><a href="http://www.52pk.com/soft/201803/95200.shtml" target="_blank" class="h_games">winrar免费版</a><a href="http://www.52pk.com/soft/201803/95719.shtml" target="_blank">风行视频</a><a href="http://www.52pk.com/soft/201803/95174.shtml" target="_blank">苹果恢复大师</a><a href="http://www.52pk.com/soft/201803/95462.shtml" target="_blank">火绒安全</a><a href="http://www.52pk.com/soft/201803/95233.shtml" target="_blank">酷狗音乐</a><a href="http://down.52pk.com/xiazai/131.shtml" target="_blank" class="h_games">虚拟光驱下载</a><a href="http://www.52pk.com/soft/201803/95743.shtml" target="_blank">网易加速器</a><a href="http://www.52pk.com/soft/201803/95660.shtml" target="_blank">网易云音乐</a><a href="http://www.52pk.com/soft/201803/95473.shtml" target="_blank">驱动精灵万能网卡版</a><a href="http://www.52pk.com/soft/201803/95766.shtml" target="_blank">猎豹浏览器</a><a href="http://www.52pk.com/soft/201803/95164.shtml" target="_blank">格式工厂</a><a href="http://www.52pk.com/soft/201803/95163.shtml" target="_blank" class="h_games">腾讯桌面工具</a><a href="http://www.52pk.com/soft/201803/95147.shtml" target="_blank">爱思苹果助手</a><a href="http://www.52pk.com/soft/201803/95195.shtml" target="_blank" class="h_games">全民k歌</a><a href="http://www.52pk.com/soft/201803/95773.shtml" target="_blank">搜狗浏览器</a><a href="http://www.52pk.com/soft/201803/95170.shtml" target="_blank">影音先锋播放器</a><a href="http://www.52pk.com/soft/201803/95265.shtml" target="_blank">斗鱼直播平台</a><a href="http://www.52pk.com/soft/201803/95134.shtml" target="_blank">安卓模拟器</a><a href="http://www.52pk.com/soft/201803/95665.shtml" target="_blank">360快剪辑</a><a href="http://www.52pk.com/soft/201803/95191.shtml" target="_blank">高清视频录制软件</a><a href="http://www.52pk.com/soft/201803/95172.shtml" target="_blank">psd文件修复软件</a><a href="http://www.52pk.com/soft/201705/71705.shtml" target="_blank">天意装机软件工具箱</a><a href="http://www.52pk.com/soft/201803/95797.shtml" target="_blank">暴风影音v5.74官方版</a><a href="http://www.52pk.com/soft/201803/95788.shtml" target="_blank">微信电脑版</a><a href="http://www.52pk.com/soft/201803/95785.shtml" target="_blank">foxmail邮箱</a><a href="http://www.52pk.com/soft/201803/95138.shtml" target="_blank">小皮助手模拟器</a><a href="http://www.52pk.com/soft/201803/95137.shtml" target="_blank">金山卫士2018版</a><a href="http://www.52pk.com/soft/201803/95133.shtml" target="_blank">光影魔术手2018版</a><a href="http://www.52pk.com/soft/201803/95176.shtml" target="_blank">熊猫加速器</a><a href="http://www.52pk.com/soft/201803/95150.shtml" target="_blank">火萤视频桌面</a><a href="http://www.52pk.com/soft/201803/95208.shtml" target="_blank">光盘数据恢复工具</a><a href="http://www.52pk.com/soft/201803/95204.shtml" target="_blank">虚拟光驱绿色版DAEMON</a><a href="http://down.52pk.com/xiazai/821.shtml" target="_blank">360安全卫士下载</a>
        </li>
    </ul>
   
    <ul class="column-sort cc" style="display: none;">
        <li>
            <a href="http://ow.52pk.com/" target="_blank">守望先锋</a><a href="http://lscs.52pk.com/" target="_blank">炉石传说</a><a href="http://wow.52pk.com/" target="_blank">魔兽世界</a><a href="http://hots.52pk.com/" target="_blank">风暴英雄</a><a href="http://jx3.52pk.com/" target="_blank">剑网3</a><a href="http://bns.52pk.com/" target="_blank">剑灵</a><a href="http://dnf.52pk.com/" target="_blank">DNF</a><a href="http://wuxia.52pk.com/" target="_blank">天涯明月刀</a><a href="http://cf.52pk.com/" target="_blank" style="color:#f8656c;" class="hong">穿越火线</a><a href="http://mxd2.52pk.com/" target="_blank">冒险岛2</a><a href="http://gw2.52pk.com/" target="_blank">激战2</a><a href="http://nz.52pk.com/" target="_blank">逆战</a><a href="http://codol.52pk.com/" target="_blank">使命召唤ol</a><a href="http://csgo.52pk.com/" target="_blank">CSGO</a><a href="http://gjol.52pk.com/" target="_blank">古剑奇谭ol</a><a href="http://daihao0.52pk.com/" target="_blank">灵山奇缘</a><a href="http://xin.52pk.com/game/index_11036.shtml" target="_blank">宝藏世界</a><a href="http://xin.52pk.com/game/index_11006.shtml" target="_blank">虚幻争霸</a><a href="http://xin.52pk.com/game/index_11012.shtml" target="_blank" class="huang">逆水寒</a><a href="http://xin.52pk.com/game/index_10944.shtml" target="_blank">我的世界</a><a href="http://xin.52pk.com/game/index_11040.shtml" target="_blank">火箭联盟</a><a href="http://xin.52pk.com/game/index_10924.shtml" target="_blank">龙魂时刻</a><a href="http://tianyu.52pk.com/" target="_blank">天谕</a><a href="http://shenwu.52pk.com/" target="_blank">神武2</a><a href="http://poe.52pk.com/" target="_blank">流放之路</a><a href="http://xin.52pk.com/game/index_10288.shtml" target="_blank">救世之树</a><a href="http://xin.52pk.com/game/index_10956.shtml" target="_blank">枪火游侠</a><a href="http://xin.52pk.com/game/index_10788.shtml" target="_blank">战意</a><a href="http://black.52pk.com/" target="_blank">黑色沙漠</a><a href="http://xin.52pk.com/game/index_10818.shtml" target="_blank">失落的方舟</a><a href="http://xin.52pk.com/game/index_16063.shtml" target="_blank">蛮荒搜神记</a><a href="http://tfol.52pk.com/" target="_blank">变形金刚</a><a href="http://nfsol.52pk.com/" target="_blank">极品飞车ol</a><a href="http://tksj.52pk.com/" target="_blank">坦克世界</a><a href="http://xin.52pk.com/game/index_10890.shtml" target="_blank">勇者斗恶龙X</a><a href="http://zjsj.52pk.com/" target="_blank">战舰世界</a><a href="http://cqyh.52pk.com/" target="_blank">传奇永恒</a><a href="http://xin.52pk.com/game/index_10824.shtml" target="_blank">天衍录</a><a href="http://xin.52pk.com/game/index_10996.shtml" target="_blank">自由禁区</a><a href="http://xin.52pk.com/game/index_3434.shtml" target="_blank">黑暗与光明</a><a href="http://xin.52pk.com/game/index_11042.shtml" target="_blank">百变球球</a><a href="http://xin.52pk.com/game/index_11197.shtml" target="_blank">神武3</a><a href="http://xin.52pk.com/game/index_11207.shtml" target="_blank">传送门骑士</a><a href="http://xin.52pk.com/game/index_2506.shtml" target="_blank">镇魔曲</a><a href="http://xin.52pk.com/game/index_5302.shtml" target="_blank">最终幻想14</a><a href="http://fifaol.52pk.com/" target="_blank">FIFA online3</a><a href="http://xin.52pk.com/game/index_11002.shtml" target="_blank">幻想全明星</a><a href="http://xin.52pk.com/game/index_5176.shtml" target="_blank">新倩女幽魂</a><a href="http://xin.52pk.com/game/index_11010.shtml" target="_blank">方舟生存进化</a><a href="http://dota2.52pk.com/" target="_blank">DOTA2</a><a href="http://xxsj2.52pk.com/" target="_blank">仙侠世界2</a><a href="http://ywz.52pk.com/" target="_blank">影武者</a><a href="http://pubg.52pk.com/" target="_blank" style="color:#f8656c;">绝地求生</a><a href="http://xin.52pk.com/game/index_11083.shtml" target="_blank">九阴真经2</a><a href="http://xin.52pk.com/game/index_11220.shtml" target="_blank">无限法则</a><a href="http://xin.52pk.com/game/index_10918.shtml" target="_blank">永恒都市3</a><a href="http://lol.52pk.com/" target="_blank" style="color:#f8656c;">英雄联盟</a><a href="http://omd.52pk.com/" target="_blank">兽人必须死</a><a href="http://qj.52pk.com/" target="_blank">枪界</a><a href="http://xin.52pk.com/game/index_11138.shtml" target="_blank">阿佩尔物语</a><a href="http://xin.52pk.com/game/index_11108.shtml" target="_blank">巫师之昆特牌</a><a href="http://xin.52pk.com/game/index_11086.shtml" target="_blank">泰亚史诗</a><a href="http://xin.52pk.com/game/index_11085.shtml" target="_blank">天之禁2</a><a href="http://xin.52pk.com/game/index_11014.shtml" target="_blank">秘境对决</a><a href="http://xin.52pk.com/game/index_10966.shtml" target="_blank">装甲战争</a><a href="http://xin.52pk.com/game/index_10838.shtml" target="_blank">封印者</a><a href="http://mh.52pk.com/" target="_blank">洛奇英雄传</a><a href="http://xin.52pk.com/game/index_14471.shtml" target="_blank">天下3</a><a href="http://xin.52pk.com/game/index_10268.shtml" target="_blank">虎豹骑</a><a href="http://xin.52pk.com/game/index_10844.shtml" target="_blank">第十域：英雄起源</a><a href="http://xin.52pk.com/game/index_4212.shtml" target="_blank">反恐精英OL</a><a href="http://xin.52pk.com/game/index_4468.shtml" target="_blank">龙之谷2</a><a href="http://nba2kol.52pk.com/" target="_blank">NBA2K Online</a>
        </li>
    </ul>
    <ul class="column-sort cc" style="display: none;">
        <li>
            <a href="http://www.52pk.com/soft/201803/95185.shtml" target="_blank">有道词典</a><a href="http://www.52pk.com/soft/201803/95720.shtml" target="_blank" class="h_games">WPS2018</a><a href="http://www.52pk.com/soft/201803/95140.shtml" target="_blank" class="h_games">360安全卫士</a><a href="http://www.52pk.com/soft/201803/95230.shtml" target="_blank">腾讯qq2018</a><a href="http://www.52pk.com/soft/201803/95142.shtml" target="_blank">百度网盘</a><a href="http://www.52pk.com/soft/201803/95131.shtml" target="_blank">腾讯企点</a><a href="http://www.52pk.com/soft/201803/95206.shtml" target="_blank">暴风影音</a><a href="http://www.52pk.com/soft/201803/95732.shtml" target="_blank" class="h_games">谷歌浏览器</a><a href="http://www.52pk.com/soft/201803/95190.shtml" target="_blank">wifi共享大师</a><a href="http://www.52pk.com/soft/201803/95200.shtml" target="_blank" class="h_games">winrar免费版</a><a href="http://www.52pk.com/soft/201803/95719.shtml" target="_blank">风行视频</a><a href="http://www.52pk.com/soft/201803/95174.shtml" target="_blank">苹果恢复大师</a><a href="http://www.52pk.com/soft/201803/95462.shtml" target="_blank">火绒安全</a><a href="http://www.52pk.com/soft/201803/95233.shtml" target="_blank">酷狗音乐</a><a href="http://down.52pk.com/xiazai/131.shtml" target="_blank" class="h_games">虚拟光驱下载</a><a href="http://www.52pk.com/soft/201803/95743.shtml" target="_blank">网易加速器</a><a href="http://www.52pk.com/soft/201803/95660.shtml" target="_blank">网易云音乐</a><a href="http://www.52pk.com/soft/201803/95473.shtml" target="_blank">驱动精灵万能网卡版</a><a href="http://www.52pk.com/soft/201803/95766.shtml" target="_blank">猎豹浏览器</a><a href="http://www.52pk.com/soft/201803/95164.shtml" target="_blank">格式工厂</a><a href="http://www.52pk.com/soft/201803/95163.shtml" target="_blank" class="h_games">腾讯桌面工具</a><a href="http://www.52pk.com/soft/201803/95147.shtml" target="_blank">爱思苹果助手</a><a href="http://www.52pk.com/soft/201803/95195.shtml" target="_blank" class="h_games">全民k歌</a><a href="http://www.52pk.com/soft/201803/95773.shtml" target="_blank">搜狗浏览器</a><a href="http://www.52pk.com/soft/201803/95170.shtml" target="_blank">影音先锋播放器</a><a href="http://www.52pk.com/soft/201803/95265.shtml" target="_blank">斗鱼直播平台</a><a href="http://www.52pk.com/soft/201803/95134.shtml" target="_blank">安卓模拟器</a><a href="http://www.52pk.com/soft/201803/95665.shtml" target="_blank">360快剪辑</a><a href="http://www.52pk.com/soft/201803/95191.shtml" target="_blank">高清视频录制软件</a><a href="http://www.52pk.com/soft/201803/95172.shtml" target="_blank">psd文件修复软件</a><a href="http://www.52pk.com/soft/201705/71705.shtml" target="_blank">天意装机软件工具箱</a><a href="http://www.52pk.com/soft/201803/95797.shtml" target="_blank">暴风影音v5.74官方版</a><a href="http://www.52pk.com/soft/201803/95788.shtml" target="_blank">微信电脑版</a><a href="http://www.52pk.com/soft/201803/95785.shtml" target="_blank">foxmail邮箱</a><a href="http://www.52pk.com/soft/201803/95138.shtml" target="_blank">小皮助手模拟器</a><a href="http://www.52pk.com/soft/201803/95137.shtml" target="_blank">金山卫士2018版</a><a href="http://www.52pk.com/soft/201803/95133.shtml" target="_blank">光影魔术手2018版</a><a href="http://www.52pk.com/soft/201803/95176.shtml" target="_blank">熊猫加速器</a><a href="http://www.52pk.com/soft/201803/95150.shtml" target="_blank">火萤视频桌面</a><a href="http://www.52pk.com/soft/201803/95208.shtml" target="_blank">光盘数据恢复工具</a><a href="http://www.52pk.com/soft/201803/95204.shtml" target="_blank">虚拟光驱绿色版DAEMON</a><a href="http://down.52pk.com/xiazai/821.shtml" target="_blank">360安全卫士下载</a>
        </li>
    </ul>
    <ul class="column-sort cc" style="display: none;">
        <li>
            <a href="http://wzry.52pk.com/" target="_blank">王者荣耀</a><a href="http://www.youxibao.com/cfm/" target="_blank">穿越火线：荒岛特训</a><a href="http://xin.52pk.com/sy_ku/zmq/" target="_blank">镇魔曲手游</a><a href="http://www.youxibao.com/ku/jl/" target="_blank">街篮</a><a href="http://www.52pk.com/games/mhhy/" target="_blank">梦幻花园</a><a href="http://xin.52pk.com/sy_ku/jzhsmyjsy/" target="x_blank">九州海上牧云记</a><a href="http://www.youxibao.com/ku/fgo/" target="_blank">FateGo</a><a href="http://xin.52pk.com/sy_ku/ws3sy/" target="_blank">神武3手游</a><a href="http://xin.52pk.com/sy_ku/wjsy/" target="_blank">无尽神域</a><a href="http://www.youxibao.com/ku/lzgsy/" target="_blank">龙之谷手游</a><a href="http://www.52pk.com/games/yys/" target="_blank">阴阳师手游</a><a href="http://xin.52pk.com/sy_ku/hyrz/" target="_blank">火影忍者</a><a href="http://xin.52pk.com/sy_ku/dhxy/" target="_blank">大话西游手游</a><a href="http://xin.52pk.com/sy_ku/wdsjsjb/" target="_blank">我的世界手机版</a><a href="http://xin.52pk.com/sy_ku/lscs/" target="_blank">炉石传说</a><a href="http://xin.52pk.com/sy_ku/qqdzz/" target="_blank">球球大作战</a><a href="http://xin.52pk.com/sy_ku/jx3/" target="_blank">剑网3：指尖江湖</a><a href="http://xin.52pk.com/sy_ku/mxsy/" target="_blank">梦想世界手游</a><a href="http://xin.52pk.com/sy_ku/kxxxl/" target="_blank">开心消消乐</a><a href="http://xin.52pk.com/sy_ku/cytus2/" target="_blank">音乐世界Cytus II</a><a href="http://xin.52pk.com/sy_ku/zjz2spr/" target="_blank">终结者2：审判日</a><a href="http://xin.52pk.com/sy_ku/zt2/" target="_blank">征途2手游</a><a href="http://xin.52pk.com/sy_ku/xyjlwys/" target="_blank">轩辕剑龙舞云山</a><a href="http://xin.52pk.com/sy_ku/ysyy/" target="_blank">云裳羽衣</a><a href="http://xin.52pk.com/sy_ku/zxsy/" target="_blank">诛仙手游</a><a href="http://xin.52pk.com/sy_ku/gydj/" target="_blank">光影对决</a><a href="http://xin.52pk.com/sy_ku/cjmlakp/" target="_blank">超级马里奥酷跑</a><a href="http://xin.52pk.com/sy_ku/zgjqxs/" target="_blank">中国惊奇先生</a><a href="http://xin.52pk.com/sy_ku/jdqscjzc/" target="_blank">绝地求生：刺激战场</a><a href="http://xin.52pk.com/sy_ku/qjmujx/" target="_blank">奇迹MU：觉醒</a><a href="http://xin.52pk.com/sy_ku/jdqsqjcj/" target="_blank">绝地求生：全军出击</a><a href="http://xin.52pk.com/sy_ku/skygy/" target="_blank">Sky光遇</a><a href="http://xin.52pk.com/sy_ku/fknsg2/" target="_blank">放开那三国2</a><a href="http://xin.52pk.com/sy_ku/cqbysy/" target="_blank">传奇霸业手游</a><a href="http://xin.52pk.com/sy_ku/shumen/" target="_blank">蜀门手游</a><a href="http://xin.52pk.com/sy_ku/tksjsjz/" target="_blank">坦克世界闪击战</a><a href="http://xin.52pk.com/sy_ku/xyzhxz/" target="_blank">圣斗士星矢-小宇宙幻想传</a><a href="http://xin.52pk.com/sy_ku/jnbg2/" target="_blank">纪念碑谷2</a><a href="http://xin.52pk.com/sy_ku/frxy/" target="_blank">非人学园</a><a href="http://xin.52pk.com/sy_ku/blhx/" target="_blank">碧蓝航线</a><a href="http://xin.52pk.com/sy_ku/wd/" target="_blank">问道手游</a><a href="http://xin.52pk.com/sy_ku/mfjsml/" target="_blank">魔法禁书目录</a><a href="http://xin.52pk.com/sy_ku/xmct/" target="_blank">星盟冲突</a><a href="http://xin.52pk.com/sy_ku/bsymg/" target="_blank">不思议迷宫</a><a href="http://xin.52pk.com/sy_ku/qqfc/" target="_blank">QQ飞车手游</a><a href="http://xin.52pk.com/sy_ku/fjlrs/" target="_blank">饭局狼人杀</a><a href="http://xin.52pk.com/sy_ku/hhwjz/" target="_blank">航海王激战</a><a href="http://xin.52pk.com/sy_ku/xmxy/" target="_blank">星梦学院</a><a href="http://xin.52pk.com/sy_ku/snkfq/" target="_blank">少女咖啡枪</a><a href="http://xin.52pk.com/sy_ku/fknsg/" target="_blank">放开那三国</a><a href="http://xin.52pk.com/sy_ku/cqsjsy/" target="_blank">传奇世界手游</a><a href="http://xin.52pk.com/sy_ku/xjcsshyhda/" target="_blank">仙境传说RO：守护永恒的爱</a><a href="http://xin.52pk.com/sy_ku/mfsnxy/" target="_blank">魔法少女小圆</a><a href="http://xin.52pk.com/sy_ku/jyzj/" target="_blank">九阴</a>
        </li>
    </ul>
 
</div>
    <!-- js -->
    <script>
    
 function qiehuan(qhan,qhshow,qhon){
 $(qhan).click(function(){
     $(qhan).removeClass(qhon);
     $(this).addClass(qhon);
     var i = $(this).index(qhan);
     $(qhshow).eq(i).show().siblings(qhshow).hide();
 });
}
qiehuan(".gamesMenu dd",".gamesMenu ul","nowshow");
qiehuan(".newsBtn a",".NewsContent","cur");


function exchange(qhan,qhshow,qhon){
 $(qhan).hover(function(){
   $(qhan).removeClass(qhon);
   $(this).addClass(qhon);
   var i = $(this).index(qhan);
   $(qhshow).eq(i).show().siblings(qhshow).hide();
 });
}
exchange(".yuleSortBtn dd",".yuleHji","cur");
    </script>


 <!-- 结束 -->

</div>
<div class="slider" id="banner-slide">
  <div class="scrollable">
    <ul class="items clearfix">
      <li class="item">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where firsttitle=1 and fmimg<>'' order by newstime desc limit 2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<a href="<?=$bqsr['titleurl']?>" target="_blank" class="posited"><img src="<?=$bqr['fmimg']?>" alt="<?=$bqr['title']?>"></a> 
<?php
}
}
?>
	  </li>
	  <li class="item">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where firsttitle=1 and fmimg<>'' order by newstime desc limit 2,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<a href="<?=$bqsr['titleurl']?>" target="_blank" class="posited"><img src="<?=$bqr['fmimg']?>" alt="<?=$bqr['title']?>"></a> 
<?php
}
}
?>
	  </li>
    </ul>
  </div>
  <div class="prev prev-next"></div>
  <div class="next prev-next"></div>
</div>
<div class="module">
  <div class="mogame fl">
    <div class="hd">
      <h3>新游上线</h3>
      <a href="/game/" class="more">更多<i></i></a></div>
    <ul class="game-list clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 6",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
      <li>
        <div class="img"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
        <div class="con"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
          <p><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank"><?=$bfenlei?></a><span>|</span><?=$bqr['onclick']?>人在玩</p>
          <p><?=$bqr['yijuhua']?></p>
        </div>
        <div class="wan-btn"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
      </li>
<?php
}
}
?>
    </ul>
  </div>
  <div class="game-news fr">
    <div class="hd">
      <h3>游戏资讯</h3>
      <a href="/zixun/" class="more">更多<i></i></a></div>
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
      <dd class="title"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="red"><?=$bqr['title']?></a></dd>
      <dd class="desc"><?=$bqr[smalltext]?></dd>
    </dl>
<?php
}
}
?>
    <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news order by newstime desc limit 5",6,24,0);
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
  <div class="clear"></div>
</div>
<div class="game_libao">
  <div class="hd">
    <h3>最新礼包</h3>
    <a href="/libao/" class="more">更多<i></i></a></div>
  <div class="libao-con">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_libao order by newstime desc limit 6",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php $cpl=round(($bqr[yiling]/$bqr[zongshu]),2)*100; $ss=100-$cpl; ?>
    <dl>
      <dt><a href="<?=$bqsr[classurl]?>" target="_blank" title="<?=$bqr['title']?>"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <p><?=$bqr['title']?></p>
        </a></dt>
      <dd class="shengyu">剩余<?=$ss?>%</dd>
      <dd class="lingqu"><a href="<?=$bqsr[classurl]?>" target="_blank" class="lqBtn">领取</a></dd>
    </dl>
<?php
}
}
?>
  </div>
</div>
<div class="module">
  <div class="mogame">
    <div class="hd">
      <h3>精品网游</h3>
      <a href="/game/" class="more">更多<i></i></a></div>
    <ul class="game-list clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where isgood=2 order by newstime desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
      <li>
        <div class="img"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
        <div class="con"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
          <p><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank"><?=$bfenlei?></a><span>|</span><?=$bqr['onclick']?>人在玩</p>
          <p><?=$bqr['yijuhua']?></p>
        </div>
        <div class="wan-btn"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
      </li>
<?php
}
}
?>
    </ul>
  </div>
  <div class="kftab fr">
    <div class="hd">
      <h3>开服信息</h3>
      <a href="/kaifu/" class="more">更多<i></i></a></div>
    <div class="tab_con">
      <p class="p_th"> <span class="time">时间</span> <span class="name">游戏名称</span> <span class="server">服务器名</span> </p>
      <ul class="clearfix">  
<?php $ktime=date('Y-m-d'); ?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu where kfsj like '%$ktime%' order by kfsj desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php 
if($bqr[yxid]=='' || $bqr[yxid]==null){$bqr[yxid]=0;}
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id='$bqr[yxid]'");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['titleurl'];
}
?>
        <li> <span class="time nowtime">今日 <?=date('H:s',strtotime($bqr[kfsj]))?></span> <span class="name"><a href="<?=$aaa?>" target="_blank"><?=$bqr['title']?></a></span> <span class="server"><?=$bqr['fuwuqi']?></span> </li>
<?php
}
}
?>
<?php 
$num50=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_kaifu where kfsj like '%$ktime%' order by kfsj desc limit 10");
$num40=10-$num50;
if($num40<0){$num40=0;}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu where left(kfsj,10)>'$ktime' order by kfsj asc limit $num40",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php 
if($bqr[yxid]=='' || $bqr[yxid]==null){$bqr[yxid]=0;}
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id='$bqr[yxid]'");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['titleurl'];
}
?>
        <li> <span class="time"><?=date('m-d',strtotime($bqr[kfsj]))?> <?=date('H:s',strtotime($bqr[kfsj]))?></span> <span class="name"><a href="<?=$aaa?>" target="_blank"><?=$bqr['title']?></a></span> <span class="server"><?=$bqr['fuwuqi']?></span> </li>
<?php
}
}
?>
<?php 
$num60=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_kaifu where left(kfsj,10)>'$ktime' order by kfsj asc limit $num40");



$num30=7-$num50-$num60;
if($num30<0){$num30=0;}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_kaifu where left(kfsj,10)<'$ktime' order by kfsj desc limit $num30",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php 
if($bqr[yxid]=='' || $bqr[yxid]==null){$bqr[yxid]=0;}
$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id='$bqr[yxid]'");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['titleurl'];}
?>
        <li> <span class="time"><?=date('m-d',strtotime($bqr[kfsj]))?> <?=date('H:s',strtotime($bqr[kfsj]))?></span> <span class="name"><a href="<?=$aaa?>" target="_blank"><?=$bqr['title']?></a></span> <span class="server"><?=$bqr['fuwuqi']?></span> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
</div>
<div class="h5game">
  <div class="hd">
    <h3>H5小游戏</h3>
    <a href="/danji/" class="more">更多<i></i></a></div>
  <ul class="game-list clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by newstime desc limit 9",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$fenlei="益智";}
else if($bqr[fenlei]==2){$fenlei="动作";}
else if($bqr[fenlei]==3){$fenlei="射击";}
else if($bqr[fenlei]==4){$fenlei="休闲";}
else if($bqr[fenlei]==5){$fenlei="敏捷";}
else if($bqr[fenlei]==6){$fenlei="棋牌";}
else if($bqr[fenlei]==7){$fenlei="经营";}
else if($bqr[fenlei]==8){$fenlei="体育";}
else if($bqr[fenlei]==9){$fenlei="策略";}
else if($bqr[fenlei]==10){$fenlei="冒险";}
else if($bqr[fenlei]==11){$fenlei="装扮";}
?>
    <li>
      <div class="img"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
      <div class="con"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
        <p><a href="/list-<?=$bqr['fenlei']?>-0-0-1.html" target="_blank"><?=$fenlei?></a><span>|</span><?=$bqr['onclick']?>人在玩</p>
        <p><?=$bqr['yijuhua']?></p>
      </div>
      <div class="wan-btn"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn">开始玩</a></div>
    </li>
<?php
}
}
?>
  </ul>
</div>
<div class="game_rank">
<div class="hd">
  <h3>游戏排行榜</h3>
</div>
<div class="bd clearfix">
<div class="rank-box xy-rank">
  <h4><i></i><b>新游</b>排行榜</h4>
  <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li class="top"> <em class="num num1">1</em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 1,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li> <em class="num num<?=$bqno+1?>"><?=$bqno+1?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li> <em class="num"><?=$bqno+3?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
  </ul>
</div>
<div class="rank-box wy-rank">
<h4><i></i><b>网游</b>排行榜</h4>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by onclick desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li class="top"> <em class="num num1">1</em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by onclick desc limit 1,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li> <em class="num num<?=$bqno+1?>"><?=$bqno+1?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by onclick desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li> <em class="num"><?=$bqno+3?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
</div>
<div class="rank-box xyx-rank">
  <h4><i></i><b>小游戏</b>排行榜</h4>
  <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$fenlei="益智";}
else if($bqr[fenlei]==2){$fenlei="动作";}
else if($bqr[fenlei]==3){$fenlei="射击";}
else if($bqr[fenlei]==4){$fenlei="休闲";}
else if($bqr[fenlei]==5){$fenlei="敏捷";}
else if($bqr[fenlei]==6){$fenlei="棋牌";}
else if($bqr[fenlei]==7){$fenlei="经营";}
else if($bqr[fenlei]==8){$fenlei="体育";}
else if($bqr[fenlei]==9){$fenlei="策略";}
else if($bqr[fenlei]==10){$fenlei="冒险";}
else if($bqr[fenlei]==11){$fenlei="装扮";}
?>
<li class="top"> <em class="num num1">1</em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$fenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 1,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$fenlei="益智";}
else if($bqr[fenlei]==2){$fenlei="动作";}
else if($bqr[fenlei]==3){$fenlei="射击";}
else if($bqr[fenlei]==4){$fenlei="休闲";}
else if($bqr[fenlei]==5){$fenlei="敏捷";}
else if($bqr[fenlei]==6){$fenlei="棋牌";}
else if($bqr[fenlei]==7){$fenlei="经营";}
else if($bqr[fenlei]==8){$fenlei="体育";}
else if($bqr[fenlei]==9){$fenlei="策略";}
else if($bqr[fenlei]==10){$fenlei="冒险";}
else if($bqr[fenlei]==11){$fenlei="装扮";}
?>
<li> <em class="num num<?=$bqno+1?>"><?=$bqno+1?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$fenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$fenlei="益智";}
else if($bqr[fenlei]==2){$fenlei="动作";}
else if($bqr[fenlei]==3){$fenlei="射击";}
else if($bqr[fenlei]==4){$fenlei="休闲";}
else if($bqr[fenlei]==5){$fenlei="敏捷";}
else if($bqr[fenlei]==6){$fenlei="棋牌";}
else if($bqr[fenlei]==7){$fenlei="经营";}
else if($bqr[fenlei]==8){$fenlei="体育";}
else if($bqr[fenlei]==9){$fenlei="策略";}
else if($bqr[fenlei]==10){$fenlei="冒险";}
else if($bqr[fenlei]==11){$fenlei="装扮";}
?>
<li> <em class="num"><?=$bqno+3?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$fenlei?></p>
  </div>
</li>
<?php
}
}
?>
  </ul>
</div>
<div class="rank-box tj-rank">
  <h4><i></i><b>推荐</b>排行榜</h4>
  <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li class="top"> <em class="num num1">1</em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 1,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li> <em class="num num<?=$bqno+1?>"><?=$bqno+1?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="卡牌游戏";}
else if($bqr[fenlei]==2){$bfenlei="角色扮演";}
else if($bqr[fenlei]==3){$bfenlei="模拟经营";}
else if($bqr[fenlei]==4){$bfenlei="射击游戏";}
else if($bqr[fenlei]==5){$bfenlei="动作游戏";}
else if($bqr[fenlei]==6){$bfenlei="战争策略";}
else if($bqr[fenlei]==7){$bfenlei="棋牌游戏";}
else if($bqr[fenlei]==8){$bfenlei="休闲游戏";}
?>
<li> <em class="num"><?=$bqno+3?></em>
  <div class="box1">
    <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
    <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
    <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
  </div>
  <div class="box2">
    <p class="tit"><?=$bqr['title']?></p>
    <p class="flei"><?=$bfenlei?></p>
  </div>
</li>
<?php
}
}
?>
  </ul>
</div>
</div>
</div>
<div class="flinks">
  <div class="hd">
    <h3>友情链接</h3>
    <span class="hezuo fr">友情合作：<a href="javascript:;" target="_blank"><?=$public_r['add_www_96kaifa_com_qq']?></a></span></div>
  <div class="fbox"> 
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and classid=1 order by lid',100,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
	 <a target="_blank" href="<?=$bqr[lurl]?>"><?=$bqr[lname]?></a> 
<?php
}
}
?>
   </div>
</div>
</div>
<script type="text/javascript" src="/96kaifa/statics/home/js/idx_script.js"></script>
<div id="footer">
  <div class="about_me"> <a href="/aboutus.html" target="_blank">关于我们</a> | <a href="/contact.html" target="_blank">联系方式</a> | <a href="/sitemap.html" target="_blank">网站地图</a> | <a href="/explain.html" target="_blank">用户协议</a> </div>
  <div class="safety"> <a><i class="icon_safe1"></i>中国互联网举报中心</a> <a><i class="icon_safe2"></i>网络违法举报中心</a> <a><i class="icon_safe3"></i>垃圾信息举报中心</a> <a><i class="icon_safe4"></i>闽公网安备35020302001953号</a> </div>
  <p class="tips_text">©2017-2018 &nbsp; <?=$public_r['add_www_96kaifa_com_name']?> &nbsp; <?=$public_r['add_www_96kaifa_com_url2']?> <em>礼包交流群：</em><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" target="_blank" class="qqun"></a></p>
  <p class="tips_text">备案号：<?=$public_r['add_www_96kaifa_com_ba']?> &nbsp; <?=$public_r['add_www_96kaifa_com_tongji']?> 技术支持：<a href="https://www.96kaifa.com" target="_blank">96KaiFa源码</a></p>
</div>
<div id="backtop">返回顶部</div>
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
<div id="floatCode">
  <div class="code1"><img src="/96kaifa/statics/home/images/wx_code.jpg" alt=""><span>微信扫描 马上玩</span></div>
  <div class="code2"><img src="/qr/api.php?url=<?=$public_r['add_www_96kaifa_com_murl']?>&p=7&m=1" alt=""><span>手机扫描访问</span></div>
</div>
</body>
</html>