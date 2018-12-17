$(function(){tab($(".slide .s_cur span"),$(".slide .s_page li"),$(".slide .s_page li"),"on",5000,2000,1,1,590,311,$(".s_prve"),$(".s_next"));$(".package_g .bd ul").each(function(i){$(this).find("li").mousemove(function(){$(this).parent().find("li").removeClass("on");$(this).addClass("on");});});$(".k_package .bd li").mousemove(function(){$('.k_package .bd li').removeClass("on");$(this).addClass("on");});tab1($(".package_g .hd_tab span"),$(".package_g .bd ul"),"on","click");hg();});function tab(o1,o2,o4,c,t1,t2,a,b,x,y,lf,rt){var count=o1.size()-1;var now;var lr;var TimeInterval;o1.each(function(i){$(this).mouseover(function(){o2.hide().eq(i).show();var w=o4.eq(i).width(),h=o4.eq(i).height();if(w>x){h=h*(x/w);w=x;o4.eq(i).attr({"width":w,"height":h});}
if(h>y){w=w*(y/h);h=y;o4.eq(i).attr({"width":w,"height":h});}
o1.removeClass(c);$(this).addClass(c);window.clearInterval(TimeInterval);}).mouseout(function(){now=i+1;TimeInterval=window.setInterval(changeimage,t1);});if($(this).hasClass(c)){$(this).addClass(c);o2.hide().eq(i).show();var w=o4.eq(i).width(),h=o4.eq(i).height();if(w>x){h=h*(x/w);w=x;o4.eq(i).attr({"width":w,"height":h});}
if(h>y){w=w*(y/h);h=y;o4.eq(i).attr({"width":w,"height":h});}
now=i+1;}})
o2.each(function(i){$(this).mouseover(function(){window.clearInterval(TimeInterval);}).mouseout(function(){TimeInterval=window.setInterval(changeimage,t1);});})
TimeInterval=window.setInterval(changeimage,t1);rt.mouseover(function(){window.clearInterval(TimeInterval);window.clearInterval(TimeInterval);});lf.mouseover(function(){window.clearInterval(TimeInterval);window.clearInterval(TimeInterval);});lf.click(function(){window.clearInterval(TimeInterval);window.clearInterval(TimeInterval);changeimage2();lr=0;return false;});rt.click(function(){window.clearInterval(TimeInterval);window.clearInterval(TimeInterval);changeimage();lr=1;return false;});rt.mouseout(function(){TimeInterval=window.setInterval(changeimage,t1);});lf.mouseout(function(){TimeInterval=window.setInterval(changeimage,t1);});function changeimage(){if(lr==0)now=now+2;if(now>count)now=0;o2.hide().eq(now).stop().fadeTo(0,a).fadeTo(t2,b);o1.removeClass(c).eq(now).addClass(c);var w=o4.eq(now).width(),h=o4.eq(now).height();if(w>x){h=h*(x/w);w=x;o4.eq(now).attr({"width":w,"height":h});}
if(h>y){w=w*(y/h);h=y;o4.eq(now).attr({"width":w,"height":h});}
lr=1;now++;}
function changeimage2(){if(lr==1||lr==undefined)now=now-2;if(now<0)now=count;o2.hide().eq(now).stop().fadeTo(0,a).fadeTo(t2,b);o1.removeClass(c).eq(now).addClass(c);var w=o4.eq(now).width(),h=o4.eq(now).height();if(w>x){h=h*(x/w);w=x;o4.eq(now).attr({"width":w,"height":h});}
if(h>y){w=w*(y/h);h=y;o4.eq(now).attr({"width":w,"height":h});}
now--;}}
function tab1(o1,o2,c,e){o1.each(function(i){$(this).bind(e,function(){o2.hide().eq(i).show();o1.removeClass(c);$(this).addClass(c);})
if($(this).hasClass(c)){$(this).addClass(c);o2.hide().eq(i).show();}})}
(function($){$.fn.myScroll=function(options){var defaults={speed:70,rowHeight:70};var opts=$.extend({},defaults,options),intId=[];function marquee(obj,step){obj.find("ul").animate({marginTop:'-=1'},0,function(){var s=Math.abs(parseInt($(this).css("margin-top")));if(s>=step){$(this).find("li").slice(0,1).appendTo($(this));$(this).css("margin-top",0);}});}
this.each(function(i){var sh=opts["rowHeight"],speed=opts["speed"],_this=$(this);intId[i]=setInterval(function(){marquee(_this,sh);},speed);_this.hover(function(){clearInterval(intId[i]);},function(){intId[i]=setInterval(function(){marquee(_this,sh);},speed);});});}})(jQuery);jQuery(function($){$(".eal_time .bd").myScroll({speed:84,rowHeight:84});});$(function(){$(".eq_img").each(function(){$(this).hover(function(){$(this).find(".eq").show();},function(){$(this).find(".eq").hide();})});});$(function(){$('#search_tab').bind('click',function(){$('.search_list').toggle();});$('body').bind('click',function(e){if(!$(e.target).closest('#search_tab').length){$('.search_list').hide();}});$('#search_tab .search_list li').each(function(i){$(this).bind('click',function(){h=$(this).attr('rel');htem=$(this).attr('value');t=$(this).html();$('.search_tab p').html(t);if(h=='forum'){input='<input class="forum_field" type="hidden" name="mod" value="forum" /><input class="forum_field" type="hidden" name="orderby" value="lastpost" /><input class="forum_field" type="hidden" name="ascdesc" value="desc" /><input class="forum_field" type="hidden" name="searchsubmit" value="yes" />';$('.all-val').attr('value','srchtxt');$("#search_tab").append(input);$('form[name="searchTop"]').attr('method','post');$('form[name="searchTop"]').attr('action','/e/search/');}else{$('.forum_field').remove();$('.all-val').attr('value',h);$('.tempiddd').attr('value',htem);$('form[name="searchTop"]').attr('method','post');$('form[name="searchTop"]').attr('action','/e/search/');}});});});function hg(){var a=$(window).height(),b=$('body');c=a-b.height();if(c>0){$(".pageFoot").css({"marginTop":c+30+'px'});}



linghao ()
function linghao (){
	var lingId =0
	lingId = $("#linghao").attr("value")
	uid = $("#linghao").attr("uid")
	$.get("/fahao/yiling.php?id="+lingId+"&uid="+uid, function(data1){
		$('#yiling').html(data1);});
	

	
		
	$.get("/fahao/wancheng.php?id="+lingId+"&uid="+uid, function(data){
		if(data=="wancheng"){
			 $("#linghao").attr("class", "fhb_btn Th");
		}
		});
	$.get("/fahao/jieshu.php?id="+lingId+"&uid="+uid, function(data){
		if(data=="jieshu"){

		}
		});
		
		
		
	$('#linghao').click(function(){
		$('#user_box').css('display','block');
		$('.cover').css('display','block');
		
	$.get("/fahao/hao.php?id="+lingId+"&uid="+uid, function(data){
		$('#card').html(data);
		});
	$.get("/fahao/yiling.php?id="+lingId+"&uid="+uid, function(data1){
		$('#yiling').html(data1);});
	})
	
	
	$('.user_close').click(function(){
		$('#user_box').css('display','none')
	})
	

	
}
}