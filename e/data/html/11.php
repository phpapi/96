<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10" class="color">
  </td>
</tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>标题图片</td><td bgcolor='ffffff'><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'>
<input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>游戏ID</td><td bgcolor='ffffff'>
<input name="yxid" type="text" id="yxid" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[yxid]))?>" size="15">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>开始时间</td><td bgcolor='ffffff'><input name="kstime" type="text" id="kstime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[kstime]))?>" size="25"><input type=button name=button value="设为当前时间" onclick="document.add.kstime.value='<?=$todaytime?>'">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>结束时间</td><td bgcolor='ffffff'><input name="jstime" type="text" id="jstime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[jstime]))?>" size="25"><input type=button name=button value="设为当前时间" onclick="document.add.jstime.value='<?=$todaytime?>'">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>礼包号</td><td bgcolor='ffffff'><textarea name="lbh" cols="60" rows="10" id="lbh"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[lbh]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>总数</td><td bgcolor='ffffff'><input name="zongshu" type="text" id="zongshu" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[zongshu]))?>" size=""><input type=button name=button value="重新获取总数" onclick="zongshu.value=(lbh.value.split('\n')).length"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>已领数</td><td bgcolor='ffffff'>
<input name="yiling" type="text" id="yiling" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[yiling]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>礼包内容</td><td bgcolor='ffffff'>
<textarea name="lbnr" cols="50" rows="12" id="lbnr"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[lbnr]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>使用方法</td><td bgcolor='ffffff'>
<textarea name="syff" cols="50" rows="12" id="syff"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[syff]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>音序(不用填，自动生成)</td><td bgcolor='ffffff'>
<input name="infozm" type="text" id="infozm" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[infozm]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>标题封面</td><td bgcolor='ffffff'>
<input name="btfm" type="text" id="btfm" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[btfm]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=btfm<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr></table>