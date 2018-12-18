<?php
//---------------------------用户自定义标签函数文件
//网游结合项筛选选项
function user_ShowFieldandChange($ecms=0){
	global $public_r;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='fenlei';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	if ($ecms == '1'){
        $fieldandval['fenlei']='|==|全部,##二人麻将,1##三人麻将,2##四人麻将,3##日本麻将,4##贵阳麻将,5##台湾麻将,6##上海麻将,7##四川麻将,8##北京麻将,9##广东麻将,10##陕西麻将,11##南昌麻将,12##长沙麻将,13##长春麻将,14##武汉麻将,15##山东麻将,16##宁波麻将,17##合肥麻将,18##河北麻将,19##天津麻将,20##太原麻将,21##福州麻将,22##杭州麻将,23##南京麻将,24##大连麻将,25##芜湖麻将,26##淮安麻将,27##南宁麻将,28##沈阳麻将,29##西安麻将,31##红中麻将,32##麻将接龙,33';
    }elseif ($ecms == '2'){
        $fieldandval['fenlei']='|==|全部,##斗地主,1##跑胡子,2##21点,3##保皇,4##打滚子,5##干瞪眼,6##打大A,7##四冲,8##qq三代,9##5十K,10##三打一,11##挖坑,12##拱猪,13##红五,14##黑尖,15##攉龙,16##大怪路子,17##掼蛋,18##包分,19##拖拉机,20##接龙,21##跑得快,22##锄大地,23##梭哈,24##德州扑克,25##炸金花,26##够级,27##纸牌,28##牌九,29##十三张,30##刨幺,31##升级,32##三公,33##尖子顶,34##花牌,35##红十,36##斗牛,37';
    }else{
        $fieldandval['fenlei']='|==|全部,##五子棋,1##象棋,2##围棋,3##飞行棋,4##中国暗棋,5##跳棋,6##井字棋,7##军棋,8##斗兽棋,9##将棋,10##四子棋,11##大富翁,12##国际象棋,13';
    }

	
	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='on';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='<dl class="clearfix"><dt>分类>></dt><dd>|</dd> </dl>';

	//选项与选项的显示间隔符，格式：开始显示字符|结束显示字符
	$valexp='| ';

	//------- 函数参数设置结束 -----


	$userfunecmsver=function_exists('ehtmlspecialchars')?1:0;
	//附加参数
	$urlcs='';
	$mid=(int)$_GET['mid'];
	if($mid)
	{
		$urlcs.='&mid='.$mid;
	}
	if($_GET['classid'])
	{
		$classid=RepPostVar($_GET['classid']);
		$urlcs.='&classid='.$classid;
	}
	else
	{
		if(!$_GET['mid']&&!$_GET['ttid']&&!$_GET['ztid'])
		{
			$classid=intval($GLOBALS['navclassid']);
			$urlcs.='&classid='.$classid;
		}
	}
	if($_GET['ttid'])
	{
		$ttid=RepPostVar($_GET['ttid']);
		$urlcs.='&ttid='.$ttid;
	}
	if($_GET['ztid'])
	{
		$ztid=RepPostVar($_GET['ztid']);
		$urlcs.='&ztid='.$ztid;
	}
	if($_GET['firsttitle'])
	{
		$firsttitle=(int)$_GET['firsttitle'];
		$urlcs.='&firsttitle='.$firsttitle;
	}
	if($_GET['isgood'])
	{
		$isgood=(int)$_GET['isgood'];
		$urlcs.='&isgood='.$isgood;
	}
	if($_GET['endtime'])
	{
		$starttime=RepPostVar($_GET['starttime']);
		$endtime=RepPostVar($_GET['endtime']);
		$urlcs.='&starttime='.$starttime.'&endtime='.$endtime;
	}
	$line=(int)$_GET['line'];
	if($line)
	{
		$urlcs.='&line='.$line;
	}
	$tempid=(int)$_GET['tempid'];
	if($tempid)
	{
		$urlcs.='&tempid='.$tempid;
	}
	if($_GET['orderby'])
	{
		$orderby=RepPostVar($_GET['orderby']);
		$myorder=(int)$_GET['myorder'];
		$urlcs.='&orderby='.$orderby.'&myorder='.$myorder;
	}
	//间隔字符
	$fieldexpr=explode('|',$fieldexp);
	$valexpr=explode('|',$valexp);
	//输出选项
	$fr=explode(',',$fieldandvar);
	$fcount=count($fr);
	$allstr='';
	$urladd='';
	for($i=0;$i<$fcount;$i++)
	{
		$field=$fr[$i];
		//选项链接
		$getval='';
		if($_GET[$field])
		{
			$getval=$userfunecmsver==1?ehtmlspecialchars($_GET[$field],ENT_QUOTES):htmlspecialchars($_GET[$field],ENT_QUOTES);
			$urladd.='&'.$field.'='.urlencode($getval);
		}
		//选项说明
		$vsayr=explode('|==|',$fieldandval[$field]);
		//选项内容
		$valallstr='';
		$vr=explode('##',$vsayr[1]);
		$vcount=count($vr);
		for($vi=0;$vi<$vcount;$vi++)
		{
			$vtr=explode(',',$vr[$vi]); if($vtr[1]=='' || $vtr[1]==null){$vtr[1]=0;}
			if($getval==$vtr[1])
			{
				$css=$changefieldandcss;
			}
			else
			{
				$css=$fieldandcss;
			}

            if ($ecms == '1'){
                $valallstr.=$valexpr[0].'<a href="'.$public_r['newsurl'].'list-'.urlencode($vtr[1]).'-0-0-3.html" class="'.$css.'">'.$vtr[0].'</a>'.$valexpr[1];
            }elseif ($ecms == '2'){
                $valallstr.=$valexpr[0].'<a href="'.$public_r['newsurl'].'list-'.urlencode($vtr[1]).'-0-0-2.html" class="'.$css.'">'.$vtr[0].'</a>'.$valexpr[1];
            }else{
                $valallstr.=$valexpr[0].'<a href="'.$public_r['newsurl'].'list-'.urlencode($vtr[1]).'-0-0-4.html" class="'.$css.'">'.$vtr[0].'</a>'.$valexpr[1];
            }


		}
		$allstr.=$fieldexpr[0].$vsayr[0].$valallstr.$fieldexpr[1];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}







//小游戏结合项筛选选项
function user_ShowFieldandChange2($ecms=0){
	global $public_r;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='fenlei';
	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['fenlei']='|==|全部,##益智,1##动作,2##射击,3##休闲,4##敏捷,5##棋牌,6##经营,7##体育,8##策略,9##冒险,10##装扮,11';
	
	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='on';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='<dl class="clearfix"><dt>分类>></dt><dd>|</dd> </dl>';

	//选项与选项的显示间隔符，格式：开始显示字符|结束显示字符
	$valexp='| ';

	//------- 函数参数设置结束 -----


	$userfunecmsver=function_exists('ehtmlspecialchars')?1:0;
	//附加参数
	$urlcs='';
	$mid=(int)$_GET['mid'];
	if($mid)
	{
		$urlcs.='&mid='.$mid;
	}
	if($_GET['classid'])
	{
		$classid=RepPostVar($_GET['classid']);
		$urlcs.='&classid='.$classid;
	}
	else
	{
		if(!$_GET['mid']&&!$_GET['ttid']&&!$_GET['ztid'])
		{
			$classid=intval($GLOBALS['navclassid']);
			$urlcs.='&classid='.$classid;
		}
	}
	if($_GET['ttid'])
	{
		$ttid=RepPostVar($_GET['ttid']);
		$urlcs.='&ttid='.$ttid;
	}
	if($_GET['ztid'])
	{
		$ztid=RepPostVar($_GET['ztid']);
		$urlcs.='&ztid='.$ztid;
	}
	if($_GET['firsttitle'])
	{
		$firsttitle=(int)$_GET['firsttitle'];
		$urlcs.='&firsttitle='.$firsttitle;
	}
	if($_GET['isgood'])
	{
		$isgood=(int)$_GET['isgood'];
		$urlcs.='&isgood='.$isgood;
	}
	if($_GET['endtime'])
	{
		$starttime=RepPostVar($_GET['starttime']);
		$endtime=RepPostVar($_GET['endtime']);
		$urlcs.='&starttime='.$starttime.'&endtime='.$endtime;
	}
	$line=(int)$_GET['line'];
	if($line)
	{
		$urlcs.='&line='.$line;
	}
	$tempid=(int)$_GET['tempid'];
	if($tempid)
	{
		$urlcs.='&tempid='.$tempid;
	}
	if($_GET['orderby'])
	{
		$orderby=RepPostVar($_GET['orderby']);
		$myorder=(int)$_GET['myorder'];
		$urlcs.='&orderby='.$orderby.'&myorder='.$myorder;
	}
	//间隔字符
	$fieldexpr=explode('|',$fieldexp);
	$valexpr=explode('|',$valexp);
	//输出选项
	$fr=explode(',',$fieldandvar);
	$fcount=count($fr);
	$allstr='';
	$urladd='';
	for($i=0;$i<$fcount;$i++)
	{
		$field=$fr[$i];
		//选项链接
		$getval='';
		if($_GET[$field])
		{
			$getval=$userfunecmsver==1?ehtmlspecialchars($_GET[$field],ENT_QUOTES):htmlspecialchars($_GET[$field],ENT_QUOTES);
			$urladd.='&'.$field.'='.urlencode($getval);
		}
		//选项说明
		$vsayr=explode('|==|',$fieldandval[$field]);
		//选项内容
		$valallstr='';
		$vr=explode('##',$vsayr[1]);
		$vcount=count($vr);
		for($vi=0;$vi<$vcount;$vi++)
		{
			$vtr=explode(',',$vr[$vi]); if($vtr[1]=='' || $vtr[1]==null){$vtr[1]=0;}
			if($getval==$vtr[1])
			{
				$css=$changefieldandcss;
			}
			else
			{
				$css=$fieldandcss;
			}
			$valallstr.=$valexpr[0].'<a href="'.$public_r['newsurl'].'list-'.urlencode($vtr[1]).'-0-0-1.html" class="'.$css.'">'.$vtr[0].'</a>'.$valexpr[1];
		}
		$allstr.=$fieldexpr[0].$vsayr[0].$valallstr.$fieldexpr[1];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}




?>