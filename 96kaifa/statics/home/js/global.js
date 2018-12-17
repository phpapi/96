
//返回顶部
$(window).scroll(function () {
	if ($(window).scrollTop() > 300) {
	$("#backtop").fadeIn(400);
	} else {
	$("#backtop").fadeOut(200);
	}
	});
	$("#backtop").click(function () {
	$('html,body').animate({
	scrollTop : '0px'
	}, 200);
});

//收藏本站
function AddFavorite(sTitle, sURL) {
	var sURL = window.location.href, sTitle = document.title;
	try {
		window.external.addFavorite(sURL, sTitle);
	}
	catch (e) {
		try {
			window.sidebar.addPanel(sTitle, sURL, "");
		}
		catch (e) {
			alert("加入收藏失败，请使用Ctrl+D进行添加");
		}
	}
};

//选项卡切换
function onSelect(obj,ch)
 {
	 var parentNodeObj= obj.parentNode;
	 var s=0;
	 for(i=0;i<parentNodeObj.childNodes.length;i++)
	 {
		// alert("第" +i +"次")
		if (parentNodeObj.childNodes[i].nodeName=="#text")
		   {
			 continue;  
		   }
		parentNodeObj.childNodes[i].className="tab_1";
		var newObj=document.getElementById(ch + "_" + s);
		
		if(newObj!=null)
		{
			 newObj.style.display='none';
			 if(parentNodeObj.childNodes[i]==obj)
			 {
				newObj.style.display='';	
			 }
		}
		s +=1;
	 }
	 obj.className="tab_2";
 }

$(function(){
	//顶部二维码
	$(".wx_show").hover(function(){ 
			$(this).css("color","#ea7408");
			$(this).next().show();
		},function(){ 
			$(this).css("color","#666");
			$(this).next().hide();
		}
	);

	//登录注册弹窗
	$(".pop_close").on("click",function(){
		$(this).parent().hide();
		$(".cover").hide();
	});


	//获取焦点
	$(".input-txt,.sech_keyword").focus(function() {
		$(this).parents(".tr").addClass('new-input-txt');
	
	});
	$(".input-txt,.sech_keyword").blur(function() {
		$(this).parents(".tr").removeClass('new-input-txt');
	});

	//换一批	
	$(".wbody .wlist:gt(0)").hide();
	$(".refresh").toggle(
	    function(){
	        $(".wbody .wlist:gt(0)").show();
	        $(".wbody .wlist:lt(1)").hide();
	        },
	    function(){
	        $(".wbody .wlist:gt(0)").hide();
	        $(".wbody .wlist:lt(1)").show();
	        }
	);

	//执行兼容placeholder代码
	  JPlaceHolder.init();
    //开始玩
   // member.playgame();
})

//兼容placeholder代码
var JPlaceHolder = {
    //检测
    _check : function(){
        return 'placeholder' in document.createElement('input');
    },
    //初始化
    init : function(){
        if(!this._check()){
            this.fix();
        }
    },
    //修复
    fix : function(){
      jQuery(':input[placeholder]').each(function(index, element) {
          var self = $(this), txt = self.attr('placeholder');
          self.wrap($('<div></div>').css({position:'relative', zoom:'1', float:'left'}));     //把所有含有属性placeholder的input用一个新创建的div包裹起来
          var pos = self.position(),  paddingleft = self.css('padding-left'), size=self.css("font-size");
          if(txt=="请输入游戏名称"){
            h = 36;
          }else{h = self.innerHeight()}
          
          var holder = $('<div class="simulate"></div>').text(txt).css({position:'absolute', left:pos.left, top:pos.top, height:h, lineHeight:h+'px', paddingLeft:paddingleft, color:'#a9a9a9'}).appendTo(self.parent());  //新建div图层并把它追加到所有含有属性placeholder的input父图层里面
          self.focusin(function(e) {
              holder.hide();
          }).focusout(function(e) {
              if(!self.val()){
                  holder.show();
              }
          });
          holder.click(function(e) {
              holder.hide();
              self.focus();
          });
      });
    }
};

/*侧边折叠菜单*/
$(function(){
	if($(".mtitle.now").next().hasClass('mcon')){
		$(".mtitle.now").addClass('on');
	}
	$(".mtitle").click(function(){
		$(this).toggleClass("on").siblings(".mtitle").removeClass("on");
		$(this).next(".mcon").slideToggle(300).siblings(".mcon").slideUp(500);
	})	
})

function copyUrl(k){
    member.copyUrl(k);
};

tyMap = window.tyMap || {};
function tyViaJs(locationId) {
    var _f = undefined;
    var _fconv = 'tyMap[\"' + locationId + '\"]';
    try {
        _f = eval(_fconv);
        if (_f != undefined) {
            _f()
        }
    } catch(e) {}
}
function tyLoader(closetag) {
    var tyTest = null,
        tyTestPos = document.getElementsByTagName("span");
    for (var i = 0; i < tyTestPos.length; i++) {
        if (tyTestPos[i].className == "tyTestPos") {
            tyTest = tyTestPos[i];
            break
        }
    }
    if (tyTest == null) return;
    if (!closetag) {
        document.write("<span id=tyTestPos_" + tyTest.id + " style=display:none>");
        tyViaJs(tyTest.id);
        return
    }
    document.write("</span>");
    var real = document.getElementById("tyTestPos_" + tyTest.id);
    for (var i = 0; i < real.childNodes.length; i++) {
        var node = real.childNodes[i];
        if (node.tagName == "SCRIPT" && /closetag/.test(node.className)) continue;
        tyTest.parentNode.insertBefore(node, tyTest);
        i--
    }
    tyTest.parentNode.removeChild(tyTest);
    real.parentNode.removeChild(real)
}

//首页专用
tyMap['1'] = function() {
    document.writeln("<script type=\'text/javascript\'>");
    document.writeln("var cpro_id=\'u2878886\';");
    document.writeln("(window[\'cproStyleApi\'] = window[\'cproStyleApi\'] || {})[cpro_id]={at:\'3\',rsi0:\'1200\',rsi1:\'90\',pat:\'6\',tn:\'baiduCustNativeAD\',rss1:\'#FFFFFF\',conBW:\'1\',adp:\'1\',ptt:\'0\',titFF:\'%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91\',titFS:\'14\',rss2:\'#000000\',titSU:\'0\',ptbg:\'90\',piw:\'0\',pih:\'0\',ptp:\'0\'}");
    document.writeln("</script>");
    document.writeln("<script src=\'http://cpro.baidustatic.com/cpro/ui/c.js\' type=\'text/javascript\'></script>");
}

//列表右侧广告
tyMap['3'] = function(){
    document.writeln("<a href=\"http://app.3500.com\" target=\"_blank\"><img src=\"/statics/home/images/ad01.png\" ></a>")
}

//资讯内页广告
tyMap['4'] = function(){
    document.writeln("<a href=\"http://app.3500.com\" target=\"_blank\"><img src=\"/statics/home/images/ad02.png\"></a>");
}





