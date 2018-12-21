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
      <ul>
        <li><a href="/" class="nav-cur"><span class="menu-txt">首页</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/qipailei/"><span class="menu-txt">棋牌</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/puke/"><span class="menu-txt">扑克</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/majiang/"><span class="menu-txt">麻将</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/qilei/"><span class="menu-txt">棋类</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/qiyouchangshang/"><span class="menu-txt">棋游厂商</span><span class="menu-line"></span></a></li>
        <li><a class="" href="/zixun/"><span class="menu-txt">资讯</span><span class="menu-line"></span></a></li>
      </ul>
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
  <div class="position">当前位置：[!--newsnav--]</div>
  <div class="container">
    <div class="w804">
      <div class="list-zixun">
        <div class="hd20">
          <h3>游戏资讯</h3>
          <ul class="zixun_tab">
<?php if(1==$GLOBALS[navclassid]){$classon2="tab_2";}else{$classon2="tab_1";}?>
            <li class="<?=$classon2?>"><a href='/zixun/'>全部</a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=1 order by myorder asc limit 8",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php if($bqr[classid]==$GLOBALS[navclassid]){$classon="tab_2";}else{$classon="tab_1";}?>
            <li class="<?=$classon?>"><a href='<?=$bqsr[classurl]?>'><?=$bqr[classname]?></a></li>
<?php
}
}
?>
          </ul>
        </div>
        <div class="list-bd">
          <ul class="news-list">
[!--empirenews.listtemp--]
<!--list.var1-->
[!--empirenews.listtemp--]
          </ul>
          <div class="page"> [!--show.listpage--] </div>
        </div>
      </div>
    </div>
    <div class="w336">
      <div class="w-guanggao"><script src=/d/js/acmsd/thea2.js></script></div>
      <div class="w-news mt15">
        <div class="hd20">
          <h3>热门活动</h3>
          <!--<a href="javascript:void(0);" class="refresh" id="w_refresh">换一批<i></i></a>--></div>
        <div class="wbody">
          <div class="wlist">

            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news where classid=4 order by newstime desc limit 5",6,24,0);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_puke order by newstime desc limit 2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[fenlei]==1){$bfenlei="斗地主";}
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_majiang order by newstime desc limit 2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
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
?>
            <li> <em class="num num<?=$bqno+2?>"><?=$bqno+2?></em>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_qipai order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
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
?>
            <li> <em class="num num<?=$bqno+4?>"><?=$bqno+4?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
                <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                <p><span><a href="/list-<?=$bqr['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$bqr['onclick']?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php
}
}
?>

          </ol>
        </div>
      </div>
      <div class="w-texts mt15">
        <div class="hd20">
          <h3>推荐阅读</h3>
        </div>
        <ul class="text-list">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_news where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 10",6,24,0);
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
    <div class="clear"></div>
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
</body>
</html>