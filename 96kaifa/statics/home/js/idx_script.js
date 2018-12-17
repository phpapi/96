// JavaScript Document

// 焦点图切换
$(document).ready(function() {
   (function($){
        $.fn.slider=function(arg){
            var me = $(this),opt = $.extend({inteval:5000,auto:true,loop:false,prev:me.find(".prev"),next:me.find(".next"),pageBtns:"",finish:function(){},start:function(){}}, arg),pageBtns,scrollable = me.find(".scrollable"),ori_items = me.find(".items"),total_num = me.find(".item").length,cur_page = 0,mov_w = me.find(".item").outerWidth(),move_left=0,interval;
			var startIndex = total_num;
			var navDot = me.find('.nav-dot');
			var dotList = $('a', navDot);
			
            opt.start();
            if (opt.loop) {
                ori_items.append(ori_items.find(".item").clone());
                ori_items.prepend(ori_items.find(".item").clone());
                scrollable.scrollLeft(getCurScroLeft());
            }
           opt.prev.length&&opt.prev.bind("click",move).hover(function(){$(this).addClass("hover")},function(){$(this).removeClass("hover")});
           opt.next.length&&opt.next.bind("click",move).hover(function(){$(this).addClass("hover")},function(){$(this).removeClass("hover")});
           function moveTo(e){
                pageBtns.unbind("click",moveTo);
                var cur_li=$(e.target).closest("li"),num=cur_li.index();
                pageBtns.removeClass("select");cur_li.addClass("select");
                var cur_scrollLeft=num*mov_w;
                scrollable.animate({scrollLeft:cur_scrollLeft},{duration:'normal',easing:'swing',complete:function(){pageBtns.bind("click",moveTo);opt.finish(num)},queue:false});
           }
           function move(e){
              opt.prev.length&&opt.prev.unbind("click",move);
              opt.next.length&&opt.next.unbind("click",move);
              if(e){
                  clearInterval(interval);
                  var cur_btn=$(e.target);
                  if(cur_btn.hasClass("prev")){
					move_left=1;
					--startIndex < 0 ? Math.abs(startIndex) : '';
					};
                  if(cur_btn.hasClass("next")){
					move_left=0;
					++startIndex < 0 ? Math.abs(startIndex) : '';
				  };
              }
               var cur_scrollLeft=move_left ? getCurScroLeft()-mov_w:getCurScroLeft()+mov_w;
              scrollable.stop().animate({scrollLeft:cur_scrollLeft},{duration:'normal',easing:'swing',complete:complate,queue:false});
           }
           function complate(){
               cur_page=move_left?cur_page-1:cur_page+1;
               if(cur_page<= -total_num+2){cur_page+=total_num;resetscroll()}
               if(cur_page>=2*total_num-2){cur_page-=total_num;resetscroll()}
               opt.prev.length&&opt.prev.bind("click",move);
               opt.next.length&&opt.next.bind("click",move);
               opt.finish();
			   var currentDotIndex = startIndex % total_num;
			   navDot.find('.current-dot').removeClass();
			   dotList.eq(currentDotIndex).addClass('current-dot');
			}
           function resetscroll(){
               scrollable.scrollLeft(getCurScroLeft());
           }
           function getCurScroLeft(){
               return opt.loop?total_num * mov_w+cur_page*mov_w:cur_page*mov_w;
           }
        }
    })(jQuery);
    $("#banner-slide").slider({
        interval:5000,
        loop:true,
        auto:true
    }); 
});

$(function(){ //设置自动滚动
	setInterval(function(){
		$('.slider .next').click();
	},5000);
});

//排行榜切换
$(".rank-box ul").each(function(i){  
  $(this).find('li').hover(
  function () {
     $("li",$(this).parent()).removeClass("top");
     $(this).addClass("top");
  }
  );
});