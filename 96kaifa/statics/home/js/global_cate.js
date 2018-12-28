function tabPath() {
    var url = document.location.toString();
    var arrUrl = url.split("//");

    var start = arrUrl[1].indexOf("/");

    var relUrl = arrUrl[1].substring(start); //stop省略，截取从start开始到结尾的所有字符
    console.log(relUrl);

    if(relUrl.length==18){
        var str =relUrl.substring(13,12);
    }else if(relUrl.length==19){
        var str =relUrl.substring(14,13);
    }
    return str;
}
var  taburl= tabPath()
console.log(taburl);
if(taburl==2){
    $("#navi li a").eq(2).addClass("nav-cur").siblings().removeClass("nav-cur");
    $("#navi li a").eq(0).removeClass("nav-cur");
}else if(taburl==3){
    $("#navi li a").eq(3).addClass("nav-cur").siblings().removeClass("nav-cur");
    $("#navi li a").eq(0).removeClass("nav-cur");
}else if(taburl==4){
    $("#navi li a").eq(4).addClass("nav-cur").siblings().removeClass("nav-cur");
    $("#navi li a").eq(0).removeClass("nav-cur");
}