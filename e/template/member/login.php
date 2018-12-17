<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员登录';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;会员登录";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="right-box">
  <div class="hd20">
    <h3>账号登录</h3>
  </div>
  <div class="rmodal">
    <div class="body">
  <form name="form1" method="post" action="../doaction.php">
    <input type=hidden name=ecmsfrom value="<?=ehtmlspecialchars($_GET['from'])?>">
    <input type=hidden name=enews value=login>
	<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
      <div class="outer"><label>用户名：</label><input name="username" type="text" id="truename" class="input-txt " value=""></div>
      <div class="outer"><label>密码：</label><input name="password" type="text" class="input-txt " id="oicq" value=""></div>
      <div class="error_font">*错误提示</div>
      <div class="button"><input type="submit" name="Submit" class="green_btn" id="sure" value="立即登录"></div>
	</form>
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

<script type="text/javascript" src="/96kaifa/statics/home/js/member.js"></script>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>