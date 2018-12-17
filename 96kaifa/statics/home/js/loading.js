/**
 * Created by xunrui on 2017/8/25.
 */

Loading = function(){
    var options = { page: 1, pagesize: "10", type: null, memberid:null,typeid:0,gameid:null};
    if(arguments[0]){
        options = this.extend(options, arguments[0]);
    };
    switch (options.type){
        case 'uGame':
            this.uGame(options.page,options.pagesize);
            break;
        case 'uCard':
            this.uCard(options.page,options.pagesize);
            break;
        case 'uRecord':
            this.uRecord(options.page,options.pagesize);
            break;
        case 'uRecord1':
            this.uRecord1(options.page,options.pagesize);
            break;
        case 'myMsg':
            this.myMsg(options.page,options.pagesize);
            break;
        case 'openGame':
            this.openGame(options.page,options.pagesize);
            break;
        case 'gameNews':
            this.gameNews(options.page,options.pagesize,options.typeid,options.gameid);
            break;
    }
};
Loading.prototype.uGame = function(page,pagesize){
    var url = document.location.href;
    $.getJSON(url,{'page':page,'pagesize':pagesize},function(res){
        if(res.status==1){
            var html=''
            $.each(res.list,function(i,r){
                html +='<li><a href="'+ r.url+'" target="_blank" title="'+ r.title +'"><img src="'+ r.thumb +'"><span>'+ r.title +'</span></a> <a href="javascript:;" target="_blank" class="wanBtn playgame" content="'+ r.id +'" siteid="4" data-url="'+ r.gameurl+'">开始玩</a></li>';
            });
            $(".gameList").append(html);
            page++;
            $(".load-more").attr('page',page);
        }else{
            $('.load-more a').html(res.msg);
            $('.load-more').fadeOut(3000);
        }
    });
};
Loading.prototype.uCard = function(page,pagesize){
    var url = document.location.href;
    $.getJSON(url,{'page':page,'pagesize':pagesize},function(res){
        if(res.status==1){
            var html=''
            $.each(res.list,function(i,r){
                html +='<dd><div class="gname"><a href="'+ r.openurl+'" target="_blank"><img src="'+ r.thumb +'">'+ r.prename +'</a></div><div class="card"><textarea id="biao'+ r.id +'">'+ r.code +'</textarea> <input type="button" onclick="copyUrl('+ r.id +')" value="复制"> </div> <div class="time">'+ r.time +'</div> </dd>';
            });
            $(".gift-box").append(html);
            page++;
            $(".load-more").attr('page',page);
        }else{
            $('.load-more a').html(res.msg);
            $('.load-more').fadeOut(3000);
        }
    });
};
Loading.prototype.myMsg = function(page,pagesize){
    var url = document.location.href;
    $.getJSON(url,{'page':page,'pagesize':pagesize},function(res){
        if(res.status==1){
            var html=''
            $.each(res.list,function(i,r){
                html +='<li><a href="'+ r.url +'" target="_blank"><img src="'+ r.headimg +'"> <p class="title">'+ r.title +'</p><p class="desc">'+ r.description +'</p> <span class="time">'+ r.time +'</span></a> </li>';
            });
            $(".message-list").append(html);
            page++;
            $(".load-more").attr('page',page);
        }else{
            $('.load-more a').html(res.msg);
            $('.load-more').fadeOut(3000);
        }
    });
};
Loading.prototype.uRecord = function(page,pagesize){
    var url = document.location.href;
    $.getJSON(url,{'page':page,'pagesize':pagesize},function(res){
        if(res.status==1){
            var html=''
            $.each(res.list,function(i,r){
                html +='<li><span class="time">'+ r.paytime +'</span><span class="order">'+ r.invoice +'</span><span class="mode">'+ r.paytype +'</span><span class="number">'+ r.coin +'个</span> <span class="money">￥'+ r.money +'</span></li>';
            });
            $(".record").append(html);
            page++;
            $(".load-more").attr('page',page);
        }else{
            $('.load-more a').html(res.msg);
            $('.load-more').fadeOut(3000);
        }
    });
};
Loading.prototype.uRecord1 = function(page,pagesize){
    var url = document.location.href;
    $.getJSON(url,{'page':page,'pagesize':pagesize},function(res){
        if(res.status==1){
            var html=''
            $.each(res.list,function(i,r){
                html +='<li> <span class="time">'+ r.paytime +'</span><span class="order">'+ r.invoice +'</span> <span class="gname">'+ r.title +'</span> <span class="name">'+ r.product +'</span> <span class="money">￥'+ r.money+'</span> </li>';
            });
            $(".record").append(html);
            page++;
            $(".load-more").attr('page',page);
        }else{
            $('.load-more a').html(res.msg);
            $('.load-more').fadeOut(3000);
        }
    });
};
Loading.prototype.openGame = function(page,pagesize){
    var url = document.location.href;
    $.getJSON(url,{'page':page,'pagesize':pagesize},function(res){
        if(res.status==1){
            var html=''
            $.each(res.list,function(i,r){
                if(i%2==0) html +='<li>';
                html +='<div class="tbody"> <div class="td yxmc"> <a href="'+ r.url +'" target="_blank" class="pic_lnk"><img src="'+ r.thumb +'" alt="'+ r.title +'"></a> <p class="tit_lnk"><a href="'+ r.url +'" target="_blank">'+ r.title +'</a> </p> <p class="type_detail"><a href="'+ r.typeurl +'" target="_blank">'+ r.type +'</a></p> </div> <div class="td time"><span>'+ r.time +'</span></div> <div class="td server">'+ r.area +'</div> <div class="td yxxz"><a href="javascript:;" target="_blank" class="wanBtn playgame" contentid="'+ r.contentid +'" siteid="4" data-url="'+ r.gameurl +'">开始玩</a></div> </div> ';
                if(i%2==1) html +='</li>';
            });
            $("#will-kai .kf-list").append(html);
            page++;
            $(".load-more").attr('page',page);
        }else{
            $('.load-more a').html(res.msg);
            $('.load-more').fadeOut(3000);
        }
    });
};
Loading.prototype.gameNews = function(page,pagesize,typeid,gameid){
    var url = '/gamenews.html';
    $.getJSON(url,{'page':page,'pagesize':pagesize,'typeid':typeid,'gameid':gameid},function(res){
        if(res.status==1){
            var html=''
            $.each(res.list,function(i,r){
                html +='<li><span class="time fr">'+ r.time +'</span><a href="'+ r.typeurl +'" target="_blank" class="flei">['+ r.typename +']</a><a href="'+ r.url +'" target="_blank" class="title">'+ r.title +'</a></li>';
            });
            $(".con_"+ typeid +"_list ul").append(html);
            page++;
            $(".con_"+ typeid +"_list").find(".load-more").attr('page',page);
        }else{
            console.log(".con_"+ typeid +"_list");
            $(".con_"+ typeid +"_list").find('.load-more a').html(res.msg);
            $(".con_"+ typeid +"_list").find('.load-more').fadeOut(3000);
        }
    });
};
Loading.prototype.extend = function(target, options) {
    if (target == undefined || target == null ) {
        return options
    } else {
        if (options) {
            for (var name in options) {
                target[name] = options[name]
            }
        }
        ;return target
    }
};

