
!function(a){function b(a){a&&a.stopPropagation?a.stopPropagation():window.event&&(window.event.cancelBubble=!0)}function c(a){return a&&a.preventDefault?a.preventDefault():window.event.returnValue=!1,!1}function d(a,b){b?a.removeAttr("unselectable").removeAttr("onselectstart").css("-moz-user-select","").css("-webkit-user-select",""):a.attr("unselectable","on").attr("onselectstart","return false;").css("-moz-user-select","none").css("-webkit-user-select","none")}a.fn.scrollbar=function(e,f){"function"==typeof e?(f=e,e={}):(e=e||{},f=f||function(){});var g={contentCls:"content",trackCls:"track",direction:"y",step:50,touchable:!0,autoReset:!0,inEndEffect:!1,slide:0},h=a.extend({},g,e),i=a("body"),j=a(document);return this.each(function(){function e(a){if("none"!=o.css("display")){a=a||window.event;var d=-a.wheelDelta/120||a.detail/3,e="y"==h.direction?-n.position().top+d*h.step:-n.position().left+d*h.step;e>D?(e=D,h.inEndEffect||(b(a),c(a))):0>e?(e=0,h.inEndEffect||(b(a),c(a))):(b(a),c(a)),r.slide(e)}}function g(a){b(a),v={pageX:a.changedTouches[0].pageX,pageY:a.changedTouches[0].pageY},t="y"==h.direction?-n.position().top||0:-n.position().left||0}function k(a){b(a);var d={pageX:a.changedTouches[0].pageX,pageY:a.changedTouches[0].pageY},e="x"==h.direction?v.pageX-d.pageX:v.pageY-d.pageY;("x"==h.direction&&Math.abs(d.pageY-v.pageY)<Math.abs(e)||"y"==h.direction)&&(e+=t,c(a),0>e?e=0:e>D&&(e=D),C>0&&(p.css("y"==h.direction?"top":"left",e*r.ratio+"px"),n.css("y"==h.direction?"top":"left",-e+"px")))}function l(a){b(a),isTouch=!1}var m=a(this),n=m.find("."+h.contentCls),o=m.find("."+h.trackCls),p=o.children(),q=this,r={},s=0,t=0,u=0,v={},w=!1;if(m.css({position:"relative",overflow:"hidden"}),n.css({position:"absolute"}),"x"==h.direction){var x=0;n.children().each(function(){var b=a(this);b.css({width:b.width()+"px"}),x+=b.outerWidth(!0)}),n.css({width:x+"px"})}p.css({position:"absolute"}),o.show();var y="y"==h.direction?o.height():o.width(),z="y"==h.direction?n.height():n.width(),A="y"==h.direction?m.height():m.width(),B=B=A/z*y,C=y-B,D=z-A;z>A?p.css("y"==h.direction?"height":"width",B+"px"):o.hide(),r.ratio=C/D,r.slide=function(a){a>D?a=D:0>a&&(a=0),D>0&&(p.css("y"==h.direction?"top":"left",a*r.ratio+"px"),n.css("y"==h.direction?"top":"left",-a+"px"))},r.resize=function(){if("x"==h.direction){var b=0;n.children().each(function(){var c=a(this);c.removeAttr("style").css({width:c.width()+"px"}),b+=c.outerWidth(!0)}),n.css({width:b+"px"})}o.show(),y="y"==h.direction?o.height():o.width(),z="y"==h.direction?n.height():n.width(),A="y"==h.direction?m.height():m.width(),B=A/z*y,C=y-B,D=z-A,z>A?p.css("y"==h.direction?"height":"width",B+"px"):o.hide(),r.ratio=C/D,h.autoReset&&r.slide(0)},r.getRatio=function(){return r.ratio=C/D},r.slide(h.slide),o.on({mousedown:function(a){w=!0,s="y"==h.direction?o.offset().top:o.offset().left,u="y"==h.direction?a.pageY-s-p.position().top:a.pageX-s-p.position().left,d(i,!1)},mouseup:function(a){if(w){var b="y"==h.direction?a.pageY-s:a.pageX-s;u>0&&B>u&&(b-=u),r.slide(b/r.ratio)}}}),j.on({mousemove:function(a){if(w){var b="y"==h.direction?a.pageY-s:a.pageX-s;u>0&&B>u&&(b-=u),r.slide(b/r.ratio)}},mouseup:function(){w=!1,u=0,d(i,!0)},resize:r.resize}),document.addEventListener&&q.addEventListener("DOMMouseScroll",e,!1),q.onmousewheel=e,q.addEventListener&&h.touchable&&(q.addEventListener("touchstart",g),q.addEventListener("touchmove",k),q.addEventListener("touchend",l)),f(r)})}}(jQuery);

var $window = $(window);
var $document = $(document);
var u = navigator.appVersion;
var isIE6 = u.indexOf("MSIE 6") > -1;
var $showcase = $(".showcase");
if ($showcase.length > 0) {
    var _showcase_top = $showcase.offset().top;
} (function() {
    var $scrollbar = $showcase.find(".scrollbar");
    var _scrollbar_api;
    function imageDownload($obj, callback) {
        var len = $obj.length;
        var num = 0;
        var list = [];
        $obj.each(function() {
            if (this.complete && this.width) {
                doSomething();
            } else {
                this.onload = doSomething;
            }
            function doSomething() {
                num++;
                list.push(this);
                if (num == len) {
                    callback(list);
                }
            }
        });
    }
    imageDownload($scrollbar.find("li img"),
    function() {
        $scrollbar.scrollbar({
            contentCls: "s-content",
            direction: "x",
            inEndEffect: true
        },
        function(api) {
            _scrollbar_api = api;
        });
    });
})(); 