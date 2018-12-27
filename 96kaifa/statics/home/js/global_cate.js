function GetUrlRelativePath() {
    var url = document.location.toString();
    var arrUrl = url.split("//");

    var start = arrUrl[1].indexOf("/");

    var relUrl = arrUrl[1].substring(start); //stop省略，截取从start开始到结尾的所有字符
    console.log(relUrl);

    if(relUrl.length==26){
        var str =relUrl.substring(26,25);
    }else{
        var str =relUrl.substring(27,26);
    }
    return str;
}
var url = GetUrlRelativePath()
// console.log(url);
if(url==2){
    $("#navi li a").eq(2).addClass("nav-cur").siblings().removeClass("nav-cur");
}else if(url==3){
    $("#navi li a").eq(3).addClass("nav-cur").siblings().removeClass("nav-cur");
}else if(url==4){
    $("#navi li a").eq(4).addClass("nav-cur").siblings().removeClass("nav-cur");
}