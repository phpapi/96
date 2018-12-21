<?php 
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 
$www_96kaifa_com_header=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_header' limit 1");
$www_96kaifa_com_footer=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_footer' limit 1");

$id=$_GET["id"];
$querys = ("select * from www_96kaifa_com_ecms_danji where id='$id'") //执行SQL语句 
or die("SQL语句执行失败"); 

$result = $empire->query($querys);  
$data=array();
while ($tmp=mysqli_fetch_assoc($result)) {
	$data[]=$tmp;
}
$title=$data[0]['title'];
$titleurl=$data[0]['titleurl'];
$h5url=$data[0]['yxurl'];
$titlepic=$data[0]['titlepic'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="full-screen" content="yes">
<meta name="x5-fullscreen" content="true">
<meta name="360-fullscreen" content="true">
<title><?=$title?></title>
<link href="/96kaifa/statics/home/H5/css/game.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/H5/js/jquery-1.8.3.min.js"></script>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="<?=$title?>">
<link href="<?=$titlepic?>" rel="apple-touch-icon-precomposed">
</head>
<script type="text/javascript">
	showMobile("<?=$public_r['add_www_96kaifa_com_murl']?><?=$titleurl?>");
</script>
<body>
<div class="main">
  <div class="youxi" style="height:100%; position:absolute; top:0; width:100%; overflow-y :hidden;">
    <iframe id="iframe" src="<?=$h5url?>" scrolling="no" width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0" frameborder="0"> 您的浏览器不支持嵌入式框架，或者当前配置为不显示嵌入式框架。 </iframe>
  </div>
  <div class="draggable">
    <div class="drag_ball"> <span class="ball_bg"></span> <span class="ball_logo"></span> </div>
    <div class="ball_tip tip_popout" id="tip_popout">
      <p class="kwd" id="kwd"><span class="kwd-text" id="kwd-text"></span></p>
      <p class="copy"><span>手动输入</span><span id="method">使用方法</span></p>
      <div class="method-con" id="method-con" style="display:none;"></div>
    </div>
  </div>
  <div class="gamemask"></div>
  <div class="gamesite">
    <div class="sitewrap">
      <header> <a href="http://www.3500.com/" class="left_back" style="font-size: 14px;color: white;">< 首页</a> <img class="logo" src="/96kaifa/statics/home/H5/images/logo.png"> <a href="javascript:;" id="wdown" class="weiduan posited" data="15">下载App</a> </header>
      <div class="userbar clearfix"> <a class="qiehuan" href="http://www.3500.com/userinfo/logout.html">切换账号</a> <img class="head" src="/96kaifa/statics/wap/images/user6.png">
        <div class="user-content">
          <p class="name">35游戏195086</p>
          <p>UID：195086</p>
        </div>
      </div>
      <div class="divline"></div>
      <div class="sitebody">
        <div class="body-nav">
          <ul>
            <li class="now" id="switch1" onclick="setTab('switch',1,4)">小游戏</li>
            <li class="" id="switch2" onclick="setTab('switch',2,4)"><i class="hong"></i>客服</li>
          </ul>
        </div>
        <div class="body-con" id="body-con">
          <div id="con_switch_1">
            <div class="game-title-sg">新游推荐</div>
            <ul class="xingame-list">
			
			
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_danji order by newstime limit 2");
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$yijuhua=$rs['yijuhua'];
$xwtitlepic=$rs['titlepic'];
?>
              <li> <a class="game-tit" href="<?=$titleurl?>"> <img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>">
                <h3 class="name"><?=$xwtitle?></h3>
                <p class="txt"><?=$yijuhua?></p>
                </a> <a class="play-btn" href="<?=$titleurl?>" style="color: #fff;background-color: #48a51b">开始玩</a> </li>
<?php } ?>
            </ul>
            <div class="game-title-sg">热门游戏</div>
            <ul class="game-list">
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_danji order by onclick limit 8");
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$yijuhua=$rs['yijuhua'];
$xwtitlepic=$rs['titlepic'];
?>
              <li> <a class="game-tit" href="<?=$titleurl?>"> <img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>">
                <h3 class="name"><?=$xwtitle?></h3>
                <p class="txt"><?=$yijuhua?></p>
                </a> <a class="play-btn" href="<?=$titleurl?>" style="color: #fff;background-color: #48a51b">开始玩</a> </li>
<?php } ?>
            </ul>
            <div class="more"><a href="/">查看更多</a></div>
          </div>
          <div id="con_switch_2" style="display:none;">
            <div class="game-code">
              <h4>关注微信，可免费领取所有礼包</h4>
              <h3>微信公众号：<strong><?=$public_r['add_www_96kaifa_com_wx']?></strong></h3>
              <div> <img src="/96kaifa/statics/home/H5/images/qrcode.jpg" class="wxqrcode"> </div>
              <p>扫描或长按识别二维码关注</p>
              <ul>
                <li> <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$public_r['add_www_96kaifa_com_qq']?>&site=qq&menu=yes">
                  <label>联系客服</label>
                  <span><?=$public_r['add_www_96kaifa_com_qq']?><em>></em></span> </a> </li>
                <li> <a href="<?=$public_r['add_www_96kaifa_com_qun']?>">
                  <label>礼包交流群</label>
                  <span>666967738<em>></em></span> </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sitedgudin">
      <div class="sitedrawer"><i></i>关闭</div>
      <div class="sitedrefresh"><i></i>刷新</div>
    </div>
    <div class="popupBox" id="popup">
      <div class="popdiv" id="payment">
        <h3>支付中心</h3>
        <div class="close"><i class="icon-close" id="close"></i></div>
        <div class="paytable clearfix">
          <p><span class="paylabel">商品名称</span><span class="paycon" id="paycon"></span></p>
          <p><span class="paylabel">支付金额</span><span class="paycon paynum" id="paynum"></span></p>
        </div>
        <div class="divline"></div>
        <form>
          <p class="paytype-tit">支付方式</p>
          <div class="paytype" id="paytype"> </div>
          <p class="div-btn" id="paybtn"></p>
        </form>
      </div>
      <div class="popdiv" id="payment_result">
        <h3><span>支付结果</span></h3>
        <div class="pay-result" id="pay_result"></div>
      </div>
      <div class="popdiv" id="trybox">
        <h3>操作提示</h3>
        <div class="close"><i class="icon-close" id="tryclose"></i></div>
        <div class="info" style="color: #ff0000;">您当前账号密码为系统随机生成，可拥有一次修改机会，建议重新修改，以便记住账号！</div>
        <form>
          <p class="div-input">
            <label>账号</label>
            <input type="text" name="username" id="username" class="input-text" value="">
          </p>
          <p class="div-input">
            <label>密码</label>
            <input type="text" name="password" id="password" class="input-pass" value="">
          </p>
          <p class="div-btn">
            <input type="button" class="btnblue" id="confirm_mod" value="确认修改">
          </p>
        </form>
      </div>
      <div class="popdiv" id="game35payqrcode" style="width: 300px;top: 25%;"></div>
      <div class="popdiv quitdiv" id="quit">
        <div class="close" id="quitclose"><i class="icon-close"></i></div>
        <ul id="quitul">
        </ul>
        <div class="game-code" id="game-code">
          <p>长按或者搜索<b>3500游戏</b>关注，方便下次继续玩</p>
          <div> <img src="/96kaifa/statics/home/H5/images/qrcode.jpg"> </div>
        </div>
        <div class="quit-footer">
          <p class="quitp"><a class="quitbtn" href="http://www.3500.com/"><span class="left"></span><span class="right"></span>离开游戏</a></p>
          <label for="backnotip">
          <input id="backnotip" type="checkbox">
          今日不再提示</label>
        </div>
      </div>
      <div class="popdiv quitdiv" id="game35share" style="max-width: 260px;top: 25.5%;"></div>
    </div>
  </div>
  <div class="gameshouji">
    <p>扫二维码 在手机上玩</p>
    <img src="/qr/api.php?url=<?=$public_r['add_www_96kaifa_com_murl']?><?=$titleurl?>&p=6&m=2" class="wxqrcode">
    <div class="shouji_hs"><span>加群领礼包：</span><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" class="join_qq"></a></div>
  </div>
</div>
<div style="display:none;"><?=$public_r['add_www_96kaifa_com_tongji']?></div>
</body>
<script type="text/javascript" src="/96kaifa/statics/home/H5/js/qrcode.js"></script>
<script type="text/javascript" src="/96kaifa/statics/home/H5/js/mtouch.js"></script>
<script type="text/javascript" src="/96kaifa/statics/home/H5/js/draggabilly.pkgd.min.js"></script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript" src="/96kaifa/statics/home/H5/js/game35pay.js"></script>
<script type="text/javascript">
	$(function(){
		$('.draggable').draggabilly({ containment: true });
	});
	var ui = '';

	setIframe();
	function setIframe(){
		var iframe = document.getElementById("iframe");
		iframe.frameBorder = "no";
		iframe.marginwidth="0px";
		iframe.marginheight="0px" ;
		iframe.scrolling = "no";
		iframe.border="0px"
		iframe.style.position = "absolute";
		iframe.style.left = "0px";
		iframe.style.top = "0px";
		iframe.style.width = "100%";
		iframe.style.height = document.documentElement.clientHeight+"px";
	}

	$(window).resize(function() {
		setIframe();
	});

	$(".opencode").live('click',function(){
		var id = $(this).attr('id');
		ui.showOpenCode(id);
	});

	function shareOKCallback(random){
		if(random) ui.postMessageFrame({action: "share:ok"});
	}

	$(".posited").live('click',function(){
		var id = $(this).attr('data');
		$.getJSON('/api/count.html',{contentid:id,'siteid':6},function(){});
	});
	$(".sitedrefresh").click(function(){
		window.location.reload();
	});
</script>
</html>
