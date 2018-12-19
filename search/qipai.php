<?php 
$word=$_GET["key"];
$word=strFilter($word);
function strFilter($str){
    $str = str_replace('`', '', $str);
    $str = str_replace('·', '', $str);
    $str = str_replace('~', '', $str);
    $str = str_replace('!', '', $str);
    $str = str_replace('！', '', $str);
    $str = str_replace('@', '', $str);
    $str = str_replace('#', '', $str);
    $str = str_replace('$', '', $str);
    $str = str_replace('￥', '', $str);
    $str = str_replace('%', '', $str);
    $str = str_replace('^', '', $str);
    $str = str_replace('……', '', $str);
    $str = str_replace('&', '', $str);
    $str = str_replace('*', '', $str);
    $str = str_replace('(', '', $str);
    $str = str_replace(')', '', $str);
    $str = str_replace('（', '', $str);
    $str = str_replace('）', '', $str);
    $str = str_replace('-', '', $str);
    $str = str_replace('_', '', $str);
    $str = str_replace('——', '', $str);
    $str = str_replace('+', '', $str);
    $str = str_replace('=', '', $str);
    $str = str_replace('|', '', $str);
    $str = str_replace('\\', '', $str);
    $str = str_replace('[', '', $str);
    $str = str_replace(']', '', $str);
    $str = str_replace('【', '', $str);
    $str = str_replace('】', '', $str);
    $str = str_replace('{', '', $str);
    $str = str_replace('}', '', $str);
    $str = str_replace(';', '', $str);
    $str = str_replace('；', '', $str);
    $str = str_replace(':', '', $str);
    $str = str_replace('：', '', $str);
    $str = str_replace('\'', '', $str);
    $str = str_replace('"', '', $str);
    $str = str_replace('“', '', $str);
    $str = str_replace('”', '', $str);
    $str = str_replace(',', '', $str);
    $str = str_replace('，', '', $str);
    $str = str_replace('<', '', $str);
    $str = str_replace('>', '', $str);
    $str = str_replace('《', '', $str);
    $str = str_replace('》', '', $str);
    $str = str_replace('.', '', $str);
    $str = str_replace('。', '', $str);
    $str = str_replace('/', '', $str);
    $str = str_replace('、', '', $str);
    $str = str_replace('?', '', $str);
    $str = str_replace('？', '', $str);
    return trim($str);
}
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 
$www_96kaifa_com_header=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_shead' limit 1");
$www_96kaifa_com_footer=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_sfoot' limit 1");
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_qipai  where title like '%$word%'");
?>
<!doctype html>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=$word?> 搜索结果_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="/96kaifa/statics/home/css/base.css" type="text/css" rel="stylesheet">
<link href="/96kaifa/statics/home/css/style3500.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/home/js/jquery-1.8.2.min.js"></script>
</head>
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
                [e:loop={"select classid,classname from {$dbtbpre}enewsclass where bclassid=0 order by myorder asc limit 8",0,24,0}]
                <?php if($bqr[classid]==$GLOBALS[navclassid] || $bqr[classid]==$class_r[$GLOBALS[navclassid]][bclassid]){$classon="nav-cur";}else{$classon="";}?>
                <li><a class="<?=$classon?>" href="<?=$bqsr[classurl]?>"><span class="menu-txt"><?=$bqr[classname]?></span><span class="menu-line"></span></a></li>
                [/e:loop]
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
  <div class="position">当前位置：<a href="/">首页</a> > 搜索 "<em class="red"><?=$word?></em>" 相关内容<?=$num?>个</div>
  <div class="container">
    <div class="result">
      <div class="result-tab">
        <ul>
          <li class="tab_1"><a href="/search/game.php?key=<?=$word?>">扑克<i></i></li>
          <li class="tab_1"><a href="/search/majiang.php?key=<?=$word?>">麻将</a><i></i></li>
          <li class="tab_2"><a href="/search/qipai.php?key=<?=$word?>">棋类</a><i></i></li>
          <li class="tab_1"><a href="/search/zixun.php?key=<?=$word?>">资讯</a><i></i></li>
        </ul>
      </div>
      <div class="result-box">
        <ul class="game-list clearfix">
<?php if($word==''){?>
<!--无关键词开始-->
<div class="result-box">
  <div class="default">亲，没有找到您搜的相关内容，试试搜索其他的<br>
    或者看看大家都在玩的游戏</div>
</div>
<!--无关键词结束-->
<?php }else{
$Page_size=20; 
$result=$empire->query("select * from www_96kaifa_com_ecms_qipai where title like '%$word%'");
$count = mysqli_num_rows($result); 
$page_count = ceil($count/$Page_size); 
$init=1; 
$page_len=5; 
$max_p=$page_count; 
$pages=$page_count; 
//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 
$offset=$Page_size*($page-1); 
$sql=$empire->query("select * from www_96kaifa_com_ecms_qipai where title like '%$word%' order by newstime desc limit $offset,$Page_size");

while ($row=$empire->fetch($sql)) {

if($row[fenlei]==1){$fenlei="五子棋";}
else if($row[fenlei]==2){$fenlei="象棋";}
else if($row[fenlei]==3){$fenlei="围棋";}
else if($row[fenlei]==4){$fenlei="飞行棋";}
else if($row[fenlei]==5){$fenlei="中国暗棋";}
else if($row[fenlei]==6){$fenlei="跳棋";}
else if($row[fenlei]==7){$fenlei="井字棋";}
else if($row[fenlei]==8){$fenlei="军棋";}
else if($row[fenlei]==9){$fenlei="斗兽棋";}
else if($row[fenlei]==10){$fenlei="将棋";}
else if($row[fenlei]==11){$fenlei="四子棋";}
else if($row[fenlei]==12){$fenlei="大富翁";}
else if($row[fenlei]==13){$fenlei="国际象棋";}
?> 		
          <li>
            <div class="img"><a href="<?php echo $row['titleurl']?>" target="_blank"><img src="<?php echo $row['titlepic']?>" alt="<?php echo $row['title']?>"></a></div>
            <div class="con"> <a href="<?php echo $row['titleurl']?>" target="_blank" class="title"><?php echo $row['title']?></a>
              <p><a href="/list-<?php echo $row['fenlei']?>-0-0-0.html" target="_blank"><?=$fenlei?></a><span>|</span><?php echo $row['onclick']?>人在玩</p>
              <p><?php echo $row['yijuhua']?></p>
            </div>
            <div class="wan-btn"><a href="<?php echo $row['titleurl']?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
          </li>
<?php 
} 
if($count==0){
	
?>
<!--无搜索结果开始-->
<div class="result-box">
  <div class="default">亲，没有找到您搜的相关内容，试试搜索其他的<br>
    或者看看大家都在玩的游戏</div>
</div>
<!--无搜索结果结束-->
<?php
}else{
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key='<div class="page">'; 
$key.="<span class=\"a1 disabled\">共 ".$page_count." 页</span> "; //第几页,共几页 
if($page!=1){ 
//$key.="<a href=\"/search/game.php?key=".$word."&page=1"."\" class=\"a1\">首页</a> "; //首页 
$key.="<a href=\"/search/qipai.php?key=".$word."&page=".($page-1)."\" class=\"a1\">上一页</a>"; //上一页
}else { 
$key.="";//首页 
$key.=""; //上一页 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
if($page_count==1){}else{$key.=' <span>'.$i.'</span>'; }
} else { 
$key.=" <a href=\"/search/qipai.php?key=".$word."&page=".$i."\" class=\"a1\">".$i."</a>";
} 
} 
if($page!=$pages){ 


$key.=" <a href=\"/search/qipai.php?key=".$word."&page=".($page+1)."\" class=\"a1\">下一页</a> ";//下一页
//$key.=" <a href=\"/search/game.php?key=".$word."&page=".$pages."\" class=\"a1\">尾页</a>"; //尾页 
}else { 
$key.=" ";//下一页 
$key.=""; //尾页 
} 
$key.='</div>'; 
}} 
?>
        </ul>
         <?php if($page_count==0){}else{ echo $key; } ?>
      </div>
    </div>
    <div class="w336">
      <div class="w-rank">
        <div class="hd20">
          <h3>游戏排行</h3>
          <ul class="rank_tab">
            <li onmousemove="onSelect(this,'rank_con')" class="tab_2">网游</li>
            <li onmousemove="onSelect(this,'rank_con')" class="tab_1">小游戏</li>
          </ul>
        </div>
        <div class="bd">
          <ol id="rank_con_0">
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_game order by onclick desc limit 3");
$no=1;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$bfenlei="卡牌游戏";}
else if($rs[fenlei]==2){$bfenlei="角色扮演";}
else if($rs[fenlei]==3){$bfenlei="模拟经营";}
else if($rs[fenlei]==4){$bfenlei="射击游戏";}
else if($rs[fenlei]==5){$bfenlei="动作游戏";}
else if($rs[fenlei]==6){$bfenlei="战争策略";}
else if($rs[fenlei]==7){$bfenlei="棋牌游戏";}
else if($rs[fenlei]==8){$bfenlei="休闲游戏";}
?>
            <li> <em class="num num<?=$no?>"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_game order by onclick desc limit 3,2");
$no=4;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$bfenlei="卡牌游戏";}
else if($rs[fenlei]==2){$bfenlei="角色扮演";}
else if($rs[fenlei]==3){$bfenlei="模拟经营";}
else if($rs[fenlei]==4){$bfenlei="射击游戏";}
else if($rs[fenlei]==5){$bfenlei="动作游戏";}
else if($rs[fenlei]==6){$bfenlei="战争策略";}
else if($rs[fenlei]==7){$bfenlei="棋牌游戏";}
else if($rs[fenlei]==8){$bfenlei="休闲游戏";}
?>
            <li> <em class="num"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-0.html" target="_blank" class="flei"><?=$bfenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
          </ol>
          <ol id="rank_con_1" style="display: none;">
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 3");
$no=1;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$fenlei="益智";}
else if($rs[fenlei]==2){$fenlei="动作";}
else if($rs[fenlei]==3){$fenlei="射击";}
else if($rs[fenlei]==4){$fenlei="休闲";}
else if($rs[fenlei]==5){$fenlei="敏捷";}
else if($rs[fenlei]==6){$fenlei="棋牌";}
else if($rs[fenlei]==7){$fenlei="经营";}
else if($rs[fenlei]==8){$fenlei="体育";}
else if($rs[fenlei]==9){$fenlei="策略";}
else if($rs[fenlei]==10){$fenlei="冒险";}
else if($rs[fenlei]==11){$fenlei="装扮";}
?>
            <li> <em class="num num<?=$no?>"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_danji order by onclick desc limit 3,2");
$no=4;
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$onclick=$rs['onclick'];

if($rs[fenlei]==1){$fenlei="益智";}
else if($rs[fenlei]==2){$fenlei="动作";}
else if($rs[fenlei]==3){$fenlei="射击";}
else if($rs[fenlei]==4){$fenlei="休闲";}
else if($rs[fenlei]==5){$fenlei="敏捷";}
else if($rs[fenlei]==6){$fenlei="棋牌";}
else if($rs[fenlei]==7){$fenlei="经营";}
else if($rs[fenlei]==8){$fenlei="体育";}
else if($rs[fenlei]==9){$fenlei="策略";}
else if($rs[fenlei]==10){$fenlei="冒险";}
else if($rs[fenlei]==11){$fenlei="装扮";}
?>
            <li> <em class="num"><?=$no?></em>
              <div class="box1">
                <div class="pic"><a href="<?=$titleurl?>" target="_blank"><img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>"></a></div>
                <p class="tit"><a href="<?=$titleurl?>" target="_blank"><?=$xwtitle?></a></p>
                <p><span><a href="/list-<?=$rs['fenlei']?>-0-0-1.html" target="_blank" class="flei"><?=$fenlei?></a></span><span><?=$onclick?>人在玩</span></p>
              </div>
              <div class="ksw"><a href="<?=$titleurl?>" target="_blank" class="wanBtn playgame">开始玩</a></div>
            </li>
<?php $no++;} ?> 
          </ol>
        </div>
      </div>
      <div class="w-texts mt15">
        <div class="hd20">
          <h3>最新资讯</h3>
        </div>
        <ul class="text-list">
<?php 
$query = $empire->query("select * from www_96kaifa_com_ecms_news order by newstime desc limit 10");
while($rs = $empire->fetch($query)){
$xwtitle=$rs['title'];
$titleurl=$rs['titleurl'];
?>
          <li>•<a href="<?=$titleurl?>" target="_blank" class="title"><?=$xwtitle?></a></li>
<?php } ?> 
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?=stripslashes($www_96kaifa_com_footer[0])?>
<div id="backtop">返回顶部</div>
<script type="text/javascript" src="/96kaifa/statics/home/js/member.js"></script>
<script src="https://static.geetest.com/static/tools/gt.js"></script>
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