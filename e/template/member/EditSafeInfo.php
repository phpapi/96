<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='修改资料';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;修改安全信息";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
  <form name=userinfoform method=post enctype="multipart/form-data" action=../doaction.php>
    <input type=hidden name=enews value=EditSafeInfo>
<div class="right-box">
  <div class="hd20">
    <h3>账号安全</h3>
  </div>
  <div class="rmodal">
    <div class="body">
      <div class="outer">
        <label>当前账号：</label>
        <span class="account"><?=$user[username]?></span> </div>

      <div class="outer"><label>原密码：</label><input name='oldpassword' class="input-txt " type='password' id='oldpassword' size="38" maxlength='20'></div>
      <div class="outer"><label>新密码：</label><input name='password' class="input-txt " type='password' id='oldpassword' size="38" maxlength='20'></div>
      <div class="outer"><label>确认新密码：</label><input name='repassword' class="input-txt " type='password' id='oldpassword' size="38" maxlength='20'></div>
      <div class="outer"><label>邮箱：</label><input name='email' class="input-txt " type='text' value='<?=$user[email]?>' size="38" maxlength='20'></div>

      <div class="error_font">*错误提示</div>
      <div class="button"><input type='submit' name='Submit' class="green_btn" id="sure" value='确定'></div>
    </div>
  </div>
</div>
  </form>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>