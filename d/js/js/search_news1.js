function search_check(obj){if(obj.keyboard.value.length==0){alert('请输入搜索关键字');return false;}return true;}document.write("<table border=0 cellpadding=3 cellspacing=1><form name=search_js1 method=post action='/e/search/index.php' onsubmit='return search_check(document.search_js1);'><tr><td><div align=center>搜索: <select name=show><option value=title>标题</option><option value=smalltext>简介</option><option value=newstext>内容</option><option value=writer>作者</option><option value=title,smalltext,newstext,writer>搜索全部</option></select><select name=classid><option value=0>所有栏目</option><option value='10' style='background:#99C4E3'>|-扑克</option><option value='11' style='background:#99C4E3'>|-麻将</option><option value='12' style='background:#99C4E3'>|-棋类</option><option value='6' style='background:#99C4E3'>|-网游</option><option value='7' style='background:#99C4E3'>|-小游戏</option><option value='8' style='background:#99C4E3'>|-礼包</option><option value='1'>|-资讯</option><option value='2' style='background:#99C4E3'>&nbsp;&nbsp;|-新闻</option><option value='3' style='background:#99C4E3'>&nbsp;&nbsp;|-攻略</option><option value='4' style='background:#99C4E3'>&nbsp;&nbsp;|-活动</option><option value='5' style='background:#99C4E3'>&nbsp;&nbsp;|-公告</option><option value='9' style='background:#99C4E3'>|-开服表</option></select><input name=keyboard type=text size=13><input type=submit name=Submit value=搜索></div></td></tr></form></table>");