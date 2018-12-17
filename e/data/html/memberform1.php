<?php
if(!defined('InEmpireCMS'))
{exit();}
?>      <div class="outer"><label>真实姓名：</label><input name="truename" type="text" id="truename" class="input-txt " value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[truename]))?>">
</div>
      <div class="outer"><label>QQ号码：</label><input name="oicq" type="text" class="input-txt " id="oicq" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[oicq]))?>">
</div>
      <div class="outer"><label>联系电话：</label><input name="mycall" type="text" id="mycall" class="input-txt " value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[mycall]))?>">
</div>
      <div class="outer"><label>手机：</label><input name="phone" type="text" class="input-txt " id="phone" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[phone]))?>">
</div>
      <div class="outer"><label>会员头像：</label><a class="touxiang-link"><?=empty($addr[userpic])?"":"<img src='".htmlspecialchars(stripSlashes($addr[userpic]))."' class=touxiang border=0>"?></a>&nbsp;&nbsp;<input type="file" name="userpicfile" style="padding:10px 0 0 10px;"></div>