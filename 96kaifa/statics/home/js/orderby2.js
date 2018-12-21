// JavaScript Document
window.onload = function(){
	var box_orderby = document.getElementsByClassName('m-list-paixu2')[0];
	var a_orderby = box_orderby.getElementsByTagName('a');	
	var url = window.location.href;
	var loc = url.substring(url.lastIndexOf('/')+1, url.length);
	var aurl = '/'+loc;
	var url2 = aurl.substr(aurl.lastIndexOf('.'), aurl.length);
	
	
	
	var aurl_new = aurl.slice(-10);
	var lastnum = aurl_new.substr(0,1);
	
	
	if(lastnum==1){
		a_orderby[1].className = 'on';
		a_orderby[0].className ='';
	}else{
		a_orderby[0].className = 'on';
		a_orderby[1].className ='';
	};

	function getStr(string,str){	
	    var str_before = string.split(str)[0];
	    var str_after = string.split(str)[1];
		str_before=str_before.substring(0,str_before.length-5)
		var aurl_hot = str_before+0+'-0-1.html';
		var aurl_time = str_before+1+'-0-1.html';
		a_orderby[0].href = aurl_hot;
		a_orderby[1].href = aurl_time;
	};
	

	
	getStr(aurl,'.');

}