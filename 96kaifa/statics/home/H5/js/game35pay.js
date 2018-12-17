Game35 = function() {
    this.gameid = null;
    this.source = null;
    this.action = null;
    this.gameurl = null;
    this.data = null;
    this.pay = null;
    this.usemoney = null;
    this.events = {};
    this.options = {
        iframe: null,
        pay: false,
        channel:null,
        passage:null,
        imgurl:null,
        close:null,
    };
    this.utils = new Game35Utils(this);
    switch (arguments.length) {
        case 0:
            break;
        case 1:
            if (typeof arguments[0] == "string") {
                this.gameid = arguments[0]
            };
            if (typeof arguments[0] == "object") this.options = this.utils.extend(this.options, arguments[0]);
            break;
        case 2:
            this.gameid = arguments[0];
            if (typeof arguments[1] == "object") this.options = this.utils.extend(this.options, arguments[1]);
            break
    };

    this.shareData = {
        imgurl: this.options.imgurl,
        link: window.location.href,
        title: this.options.passage,
        content: "3500游戏"
    };

    this.frameid = this.options.iframe;
    this.channel = this.options.channel;
    this.frameWin = null;
    this.isPay = this.options.pay;
    this.init();
    if(this.options.close =='' || this.options.close != 0) {
        this.utils.loading(4000);
    }
};
Game35.prototype.init = function() {
    var _this = this;
    this.source = this.utils.getParameter("source");
    this.action = this.utils.getParameter("action");
    var data = this.utils.getParameter("data");
    if (data != null) {
        try {
            this.data = JSON.parse(decodeURIComponent(data))
        } catch (e) {
            this.data = data
        }
    };
    this.initGameBack();
    if (this.isPay) {
        this.pay = new Game35Pay(this)
    };
    if (this.utils.isMobile()) {
        this.utils.changeScreen();
        window.addEventListener("orientationchange", this.utils.listenerChangeScreen);
        window.addEventListener("resize", this.utils.listenerChangeScreen)
    };
    if (this.utils.getAppType() == 'wx'){
        this.gamewx = new Game35Wx(this);
    }else if(this.utils.getAppType() == '35'){
        this.app = new Game35App(this);
    };
    if ((this.channel==null ||this.channel<20) && this.utils.isAndroid()){
        var wdown = document.getElementById('wdown');
        if(wdown) {
            wdown.style.display = 'block';
            wdown.href = 'http://a.app.qq.com/o/simple.jsp?pkgname=com.xunrui.h5game';
        }
    }else if(this.channel) {
        this.ch = new Game35Ch(this);
    };
    this.initFrameEvents();
};
Game35.prototype.initFrameEvents = function(){
    var _this = this;
    window.addEventListener("message",function(e){
        if(window != top && e.source && e.source == top) return;
        if (typeof e.data != "object") return;
        switch (e.data.action) {
            case "share:setShareData":
                var shareData = {
                    title: e.data.title,
                    content: e.data.content
                };
                if (e.data.imgurl)
                    shareData.imgurl = e.data.imgurl;
                _this.setShareData(shareData);
                break;
            case "share:showShareTip":
                _this.shareBranch();
                break;
        }
    })
};
Game35.prototype.setShareData = function(shareData){
    if (shareData)
        this.shareData = this.utils.extend(this.shareData, shareData);
    if (this.app && this.app.setShareData)
        this.app.setShareData();
};
Game35.prototype.shareBranch = function(){
    var _this = this;
    if (this.utils.getAppType() !='wx' && this.app && this.app.share) {
        this.app.share();
    } else if(this.utils.getAppType() == 'wx'){
        var div;
        div = document.createElement('div');
        div.className = 'share-square';
        div.id = 'share-square';
        div.innerHTML = '<div class="share-box"><img src="/statics/wap/images/20161123164117_87715.png"><span><img class="z" src="/statics/wap/images/20161123164206_27479.png" >发送朋友圈或朋友</span></div>';
        document.getElementsByTagName("body")[0].appendChild(div);
        div.addEventListener('click',function(){
            var sharesquare = document.getElementById('share-square');
            if(sharesquare)
                sharesquare.parentElement.removeChild(sharesquare);

        });
        _this.gamewx.setShareOk();
    }else{
        this.showAppBox();
    }
};
Game35.prototype.showAppBox = function(){
    var game35share = document.getElementById('game35share');
    if(game35share){
        game35share.style.display = 'block';
        if(this.utils.isIOS()){
            game35share.innerHTML = '<h3>分享有礼</h3> <div class="close" id="shareclose"><i class="icon-close"></i></div> <div class="game-code"> <p>关注微信公众号分享才能获得邀请奖励</p> <div><img src="/statics/wap/H5/images/qrcode.jpg"></div><p>搜索“<strong style="font-size: 16px;color: #333333;">3500游戏</strong>”关注公众号</p></div> <div class="quit-footer"> <p class="quitp"></div>';
        }else{
            game35share.innerHTML = '<h3>分享有礼</h3> <div class="close" id="shareclose"><i class="icon-close"></i></div> <div class="game-code"> <p>需在3500游戏盒中分享才能获得邀请奖励</p> <div><img src="/statics/wap/images/erwm_app.png"></div> </div> <div class="quit-footer"> <p class="quitp"><a class="quitbtn" href="https://sj1.3987.com/down/3500youxihe.3987.apk" style="width: 50%"><span class="left"></span><span class="right"></span>下载3500游戏盒</a></p> </div>';
        }
    };
    var shareclose = document.getElementById('shareclose');
    if(shareclose){
        shareclose.addEventListener('click',function(){
            game35share.style.display = 'none';
        });
    }
};
Game35.prototype.initGameBack = function() {
    var _this = this;
    if (typeof history["pushState"] != "function") return;
    if (localStorage.gameBackTipDate && localStorage.gameBackTipDate == this.utils.formatDate(new Date(), "yyyy-MM-dd")) return;
    history.pushState({
        title: document.title,
        url: location.href
    }, document.title, location.href);
    window.addEventListener("popstate", function(e) {
        if (history.state) return;
        _this.showGameBack()
    });
    if (this.utils.getAppType() == '35') {
        var gamecode = document.getElementById("game-code");
        if (gamecode) {
            gamecode.parentElement.removeChild(gamecode)
        };
        $(".draggable").hide();
    }
};
Game35.prototype.showGameBack = function() {
    var _this = this;
    var quit = document.getElementById("quit");
    if (quit) {
        quit.style.display = "block"
    };
    var quitul = document.getElementById("quitul");
    var render = function(list) {
        quitul.innerHTML = '';
        var li, a, img, span;
        for (var i = 0; i < list.length && i < 4; i++) {
            var game = list[i];
            li = document.createElement("li");
            a = document.createElement("a");
            a.href = game.url;
            img = document.createElement("img");
            img.src = game.thumb;
            img.alt = game.title;
            a.appendChild(img);
            span = document.createElement("span");
            span.innerHTML = game.title;
            a.appendChild(span);
            li.appendChild(a);
            quitul.appendChild(li)
        };
        li = document.createElement('li');
        a = document.createElement("a");
        a.href = _this.utils.getOrigin();
        img = document.createElement("img");
        img.src = '/statics/wap/H5/images/more.png';
        img.alt = '3500游戏';
        a.appendChild(img);
        span = document.createElement("span");
        span.innerHTML = '更多';
        a.appendChild(span);
        li.appendChild(a);
        quitul.appendChild(li)
    };
    var quitclose = document.getElementById("quitclose");
    quitclose.addEventListener("click", function() {
        quitul.innerHTML = '';
        quit.style.display = "none"
    });
    _this.utils.ajax("/api/jsonlist.html", function(data) {
        data.gamelist && render(data.gamelist)
    });
    var backnotip = document.getElementById("backnotip");
    if (backnotip.checked) {
        localStorage.gameBackTipDate = _this.game9g.utils.formatDate(new Date(), "yyyy-MM-dd")
    }
};
Game35.prototype.postMessageFrame = function(data) {
    var frame = document.getElementById(this.frameid);
    if (this.frameWin) {
        this.frameWin.postMessage(data, "*")
    } else if (frame) {
        frame.contentWindow.postMessage(data, "*")
    } else {
        window.postMessage(data, "*")
    }
};
Game35.prototype.addEventListener = function() {
    var type = arguments[0];
    var callback = arguments[1];
    var once = (arguments.length == 3 ? arguments[2] : false);
    if (!this.events[type])
        this.events[type] = [];
    this.events[type].push({
        once: once,
        callback: callback
    })
};
Game35.prototype.dispatchEvent = function() {
    var type = arguments[0];
    var params = [];
    var i;
    if (arguments.length > 1) {
        for (i = 1; i < arguments.length; i++) {
            params.push(arguments[i])
        }
    }
    ;var list = this.events[type];
    var onces = [];
    if (list) {
        for (i = 0; i < list.length; i++) {
            var item = list[i];
            var once = item.once;
            var callback = item.callback;
            if (params.length > 0) {
                callback.apply(this, params)
            } else {
                callback.call(this)
            }
            ;if (once) {
                onces.push(i)
            }
        }
        while (onces.length > 0) {
            var index = onces.pop();
            list.splice(index, 1)
        }
    }
};
Game35.prototype.showOpenCode = function(openid){
    var iswx = this.utils.getAppType() == 'wx' ? '1' : '0;'
    $.getJSON("/getOpenCode.html",{'openid':openid,'iswx':iswx},function(data){
        var laytan = document.getElementById('laytan');
        var html ='';
        if(data.status==-1){
            html = '<div class="laysha"> <div class="erwei" style="text-align: left;"> <div class="chat"> <div class="chat_hd">领取结果<i class="close" id="open_close"></i> </div><div class="lq_fail"> <p style="padding: 0.2rem 0.2rem;">' + data.msg + '</p> </div> </div> </div> </div>'
        }else{
            html = '<div class="laysha"> <div class="erwei"> <div class="chat"> <div class="chat_hd">领取结果<i class="close" id="open_close"></i> </div><div class="lq_succ"> <p class="lqone">长按复制卡号</p> <p class="lqtwo">'+ data.opencode +'</p> <span>一个帐号只能领取一个，请勿重复领取!</span><p class="lqtip" id="lqtip"><a href="javascript:;" >悬浮提示</a></p></div></div></div></div>';
        }
        if(!laytan){
            laytan = document.createElement("div");
            laytan.id = 'laytan';
            laytan.className = 'laytan';
            var popup = document.getElementById('popup');
            popup.appendChild(laytan);
        }
        laytan.innerHTML = html;
        laytan.style.display = "block";
        var openclose = document.getElementById('open_close');
        openclose.addEventListener('click',function(){
            laytan.parentElement.removeChild(laytan);
        });
        var kwdtext = document.getElementById('kwd-text');
        kwdtext.innerHTML = data.opencode;
        var methodcon = document.getElementById('method-con');
        methodcon.innerHTML = data.content;
        var lqtip = document.getElementById('lqtip');
        if(lqtip){
            lqtip.addEventListener('click',function(){
                $(".draggable").css("display","block");
                $(".gamemask").css("display","none");
                $(".gamesite").animate({left:"-100%"},10);
                $(".ball_tip").removeClass('tip_popout').addClass('tip_popin');
            });
        }
    })
};
Game35Pay = function(game35) {
    this.game35 = game35;
    this.data = null;
    this.isAppWxpay = this.game35.utils.getAppType() == 'wx';
    this.isNativeWxpay = this.game35.utils.getAppType() != "wx" && !this.game35.utils.isMobile();
    if (this.game35.utils.isWindowsWechat()) {
        this.isNativeWxpay = true
    };
    this.ui = new Game35PayUI(this.game35);
    this.init()
};
Game35Pay.prototype.init = function() {
    var _this = this;
    window.addEventListener("message", function(e) {
        if (window != top && e.source && e.source == top) return;
        if (typeof e.data != "object") return;
        switch (e.data.action) {
            case "pay":
                if (!e.data.token) {
                    alert("token参数为空");
                    return
                };
                e.data.paytype = 0;
                _this.data = e.data;
                _this.start();
                break;
            case "pay:callback":
                if (e.source == window) return;
                _this.closePayFrame(true);
                _this.payCallback(e.data.status);
                break;
            case "pay:cancel":
                if (e.source == window) return;
                _this.closePayFrame(true);
                _this.payCancel();
                break;
            case "pay:error":
                if (e.source == window) return;
                _this.closePayFrame(true);
                alert(e.data.error);
                break;
            case "pay:ipaynow":
                window.location.href = e.data.tn;
                break;
            case "pay:reload":
                window.location.reload();
                break;
            case "pay:close":
                _this.ui.hidePay();
                break;
        }
    })
};
Game35Pay.prototype.start = function() {
    var _this = this;
    this.game35.utils.waiting();
    var url = this.game35.utils.getOrigin() + "/userinfo/checktoken.html?uid=" + _this.data.uid + "&token=" + _this.data.token;
    this.game35.utils.ajax(url, function(data) {
        if (data && data.uid) {
            if (data.iskey == 1) {
                _this.game35.utils.hideWait();
                _this.ui.showKeyPlay()
            } else {
                _this.ready(data.money)
            }
        } else {
            alert('token无效')
        }
    })
};
Game35Pay.prototype.ready = function() {
    this.data.usemoney = arguments[0];
    this.game35.utils.hideWait();
    this.ui.showPay(this.data)
};
Game35Pay.prototype.pay = function() {
    this.ui.hidePay();
    this.game35.utils.waiting();
    switch (this.data.paytype) {
        case 1:
            this.postAlipay();
            break;
        case 2:
            this.postWxpay();
            break;
        case 3:
            this.postWappay();
            break;
        case 4:
            this.postWxjspay();
            break;
        case 5:
            this.postIpaynow();
            break
    }
};
Game35Pay.prototype.postMessage = function(data) {
    if (this.data.fullscreen) {
        window.postMessage(data, "*")
    } else {
        this.game35.postMessageFrame(data)
    }
};
Game35Pay.prototype.payCallback = function(result) {
    this.ui.showResult(result);
    this.postMessage({
        action: "pay:callback",
        orderid: this.data.orderid,
        money: this.data.money,
        status: result,
    })
};
Game35Pay.prototype.postAlipay = function() {
    var url = this.game35.utils.getOrigin() +  "/order/dogmpay.html" + "?orderid=" + this.data.orderid + "&product=" + encodeURIComponent(this.data.product) + "&money=" + this.data.money + "&sign=" + this.data.sign + "&paytype=" + this.data.paytype + "&appid=" + this.data.appid;
    if (this.data.uid) url += "&uid=" + this.data.uid;
    if (this.data.token) url += "&token=" + this.data.token;
    if (this.data.ext) url += "&ext=" + encodeURIComponent(this.data.ext);
    if (this.data.spid) url += "&spid=" + encodeURIComponent(this.data.spid);
    if (this.data.attach) url += "&attach=" + encodeURIComponent(this.data.attach);
    var _this = this;
    this.game35.utils.ajax(url, function(data) {
        if (data.error) {
            alert(data.error);
            return
        };
        _this.game35.utils.hideWait();
        _this.openPayFrame(data.url)
    })
};
Game35Pay.prototype.postWxpay = function() {
    var url = this.game35.utils.getOrigin() + "/wx/dowxpay.html" + "?orderid=" + this.data.orderid + "&product=" + encodeURIComponent(this.data.product) + "&money=" + this.data.money + "&sign=" + this.data.sign + "&paytype=" + this.data.paytype + "&appid=" + this.data.appid;
    if (this.data.uid) url += "&uid=" + this.data.uid;
    if (this.data.token) url += "&token=" + this.data.token;
    if (this.data.ext) url += "&ext=" + encodeURIComponent(this.data.ext);
    if (this.data.spid) url += "&spid=" + encodeURIComponent(this.data.spid);
    if (this.data.attach) url += "&attach" + encodeURIComponent(this.data.attach);
    var _this = this;
    this.game35.utils.ajax(url, function(data) {
        if (data.error) {
            alert(data.error);
            return
        };
        _this.game35.utils.hideWait();
        _this.showNativeWxpay(data)
    })
};
Game35Pay.prototype.postWappay = function() {
    var url = this.game35.utils.getOrigin() + "/order/pay.html?orderid=" + this.data.orderid + "&product=" + encodeURIComponent(this.data.product) + "&appid=" + this.data.appid + "&sign=" + this.data.sign + "&money=" + this.data.money + "&paytype=" + this.data.paytype;
    if (this.data.uid) url += "&uid=" + this.data.uid;
    if (this.data.token) url += "&token=" + this.data.token;
    if (this.data.ext) url += "&ext=" + encodeURIComponent(this.data.ext);
    if (this.data.spid) url += "&spid=" + encodeURIComponent(this.data.spid);
    if (this.data.attach) url += "&attach" + encodeURIComponent(this.data.attach);
    var _this = this;
    this.game35.utils.ajax(url, function(data) {
        if (data.error) {
            alert(data.error);
            return
        };
        _this.game35.utils.hideWait();
        _this.ui.showResult(data.status);
        _this.postMessage({
            action: "pay:callback",
            orderid: _this.data.orderid,
            money: _this.data.money,
            status: data.status,
        })
    })
};
Game35Pay.prototype.postWxjspay = function() {
    var url = this.game35.utils.getOrigin() + "/order/pay.html" + "?orderid=" + this.data.orderid + "&product=" + encodeURIComponent(this.data.product) + "&money=" + this.data.money + "&sign=" + this.data.sign + "&paytype=" + this.data.paytype + "&appid=" + this.data.appid;
    if (this.data.uid) url += "&uid=" + this.data.uid;
    if (this.data.token) url += "&token=" + this.data.token;
    if (this.data.ext) url += "&ext=" + encodeURIComponent(this.data.ext);
    if (this.data.spid) url += "&spid=" + encodeURIComponent(this.data.spid);
    if (this.data.attach) url += "&attach" + encodeURIComponent(this.data.attach);
    this.game35.utils.hideWait();
    window.location.href = url
};
Game35Pay.prototype.postIpaynow = function() {
    var url = this.game35.utils.getOrigin() + "/order/pay.html" + "?orderid=" + this.data.orderid + "&product=" + encodeURIComponent(this.data.product) + "&money=" + this.data.money + "&sign=" + this.data.sign + "&paytype=" + this.data.paytype + "&appid=" + this.data.appid;
    if (this.data.uid) url += "&uid=" + this.data.uid;
    if (this.data.token) url += "&token=" + this.data.token;
    if (this.data.ext) url += "&ext=" + encodeURIComponent(this.data.ext);
    if (this.data.spid) url += "&spid=" + encodeURIComponent(this.data.spid);
    if (this.data.attach) url += "&attach" + encodeURIComponent(this.data.attach);
    var _this = this;
    _this.game35.utils.ajax(url, function(data) {
        if (data.error) {
            alert(data.error);
            return
        }
        _this.IPayNow(data.invoice)
    })
};
Game35Pay.prototype.IPayNow = function(invoice) {
    var url = this.game35.utils.getOrigin() + "/ipay/doipaynow.html" + "?invoice=" + invoice;
    var _this = this;
    this.game35.utils.ajax(url, function(data) {
        if (data.error) {
            alert(data.error);
            return
        };
        _this.showQuery(data.tn,invoice);
    })
};
Game35Pay.prototype.showQuery = function(tn,invoice){
    var game35query = document.getElementById('game35query');
    if(!game35query){
        var popup = document.getElementById("popup");
        var game35query = document.createElement("div");
        game35query.className = "popdiv";
        game35query.id = "game35query";
        game35query.style = "width: 300px; top: 25%;";
        popup.appendChild(game35query)
    }
    game35query.style.display ='block';
    this.game35.utils.hideWait();
    window.location.href = tn;
    var h3,span,div,img, p,a;
    h3 = document.createElement('h3');
    span = document.createElement('span');
    span.innerHTML = '支付提示';
    h3.appendChild(span);
    game35query.appendChild(h3);

    div = document.createElement('div');
    div.className = 'close';
    var i = document.createElement('i');
    i.className = 'icon-close';
    div.appendChild(i);
    game35query.appendChild(div);
    div.addEventListener('click',function(){
        if(game35query)
            game35query.parentElement.removeChild(game35query);
    });
    div = document.createElement('div');
    div.className = 'pay-result';
    img = document.createElement('img');
    img.src = '/statics/wap/H5/images/pay_tip.png';
    div.appendChild(img);
    span = document.createElement('span');
    span.className = 'query';
    span.innerHTML = '付款完成前请不要关闭此窗口';
    div.appendChild(span);

    p = document.createElement('p');
    p.className = 'div-btn';
    p.style = 'margin-top: 15px';
    a = document.createElement('a');
    a.href = 'javascript:;';
    a.className = 'btnOrange btnBack';
    a.id = 'query_status';
    a.innerHTML = '付款中';
    p.appendChild(a);
    div.appendChild(p);
    p = document.createElement('p');
    p.className = 'div-btn';
    a = document.createElement('a');
    a.href = 'http://wpa.qq.com/msgrd?v=3&uin=537012319&site=qq&menu=yes';
    a.className = 'btnBack contact';
    span = document.createElement('span');
    span.innerHTML = '遇到问题，联系客服';
    a.appendChild(span);
    img = document.createElement('img');
    img.src = 'http://wpa.qq.com/pa?p=2:537012319:52';
    img.alt = '点击这里给我发消息';
    img.title = '点击这里给我发消息';
    a.appendChild(img);
    p.appendChild(a);
    div.appendChild(p);
    game35query.appendChild(div);
    this.qrscan = true;
    var _this = this;
    var check = function(){
        if (!_this.qrscan) return;
        var url = _this.game35.utils.getOrigin() + "/issue/ipaynow.html?invoice=" + invoice;
        _this.game35.utils.ajax(url, function(data) {
            if (data && data.status == 99) {
                _this.qrscan = false;
                game35query.parentElement.removeChild(game35query);
                _this.ui.showResult(data.status);
            } else {
                if (document.getElementById("game35query")) setTimeout(check, 1000);
            }
        });
    };
    check();
};
Game35Pay.prototype.openPayFrame = function(url) {
    var frame = document.getElementById("game35payframe");
    if (!frame) {
        frame = document.createElement("iframe");
        frame.id = "game35payframe";
        frame.className = "game35payframe";
        document.getElementsByTagName("body")[0].appendChild(frame)
    };
    frame.src = url
};
Game35Pay.prototype.closePayFrame = function(closePayUI) {
    var frame = document.getElementById("game35payframe");
    if (frame) frame.parentElement.removeChild(frame);
    if (closePayUI) this.ui.hidePay()
};
Game35Pay.prototype.checkOrder = function(data, callback) {
    var url =  this.game35.utils.getOrigin() + "/wx/query.html?invoice=" + data.invoice;
    this.game35.utils.ajax(url, function(data) {
        callback && callback.call(null, data)
    })
};
Game35Pay.prototype.showNativeWxpay = function(data) {
    this.ui.hidePay();
    this.ui.showQrcode(data);
    this.qrscan = true;
    var _this = this;
    var check = function() {
        if (!_this.qrscan) return;
        _this.checkOrder(data, function(data) {
            if (data && data.status == 99) {
                _this.qrscan = false;
                _this.ui.hideQrcode();
                _this.payCallback(data.status)
            } else {
                if (document.getElementById("game35payqrcode")) {
                    setTimeout(check, 1000)
                }
            }
        })
    };
    check()
};
Game35Pay.prototype.payCancel = function() {
    this.postMessage({
        action: "pay:cancel",
    })
};
Game35PayUI = function(game35) {
    this.game35 = game35
};
Game35PayUI.prototype.showPay = function(data) {
    var _this = this;
    document.getElementById('payment').style.display = 'block';
    document.getElementById('paycon').innerHTML = data.product;
    document.getElementById('paynum').innerHTML = this.game35.utils.formatMoney(data.money, {
        unit: false,
        space: true
    });
    var close = document.getElementById('close');
    var closeIcon = function(e) {
        _this.hidePay();
        _this.game35.pay.payCancel();
        close.removeEventListener("click", closeIcon)
    };
    close.addEventListener("click", closeIcon);
    var paytype = document.getElementById('paytype');
    paytype.innerHTML = "";
    var form, label, img;
    if (!_this.game35.pay.isAppWxpay) {
        label = document.createElement("label");
        label.innerHTML = "支付宝";
        var radio1 = document.createElement("input");
        radio1.type = "radio";
        radio1.id = "checked1";
        radio1.className = "radio";
        radio1.name = "example";
        label.appendChild(radio1);
        var setPaytype1 = function(e) {
            _this.setPayType(1)
        };
        radio1.addEventListener("click", setPaytype1);
        img = document.createElement("img");
        img.src = "/statics/wap/H5/images/zfb.png";
        label.appendChild(img);
        paytype.appendChild(label)
    };
    if (_this.game35.pay.isNativeWxpay) {
        label = document.createElement("label");
        label.innerHTML = "微信支付";
        var radio2 = document.createElement("input");
        radio2.type = "radio";
        radio2.id = "checked2";
        radio2.className = "radio";
        radio2.name = "example";
        label.appendChild(radio2);
        var setPaytype2 = function(e) {
            _this.setPayType(2)
        };
        radio2.addEventListener("click", setPaytype2);
        img = document.createElement("img");
        img.src = "/statics/wap/H5/images/wxzf.png";
        label.appendChild(img);
        paytype.appendChild(label)
    };
    if (_this.game35.pay.isAppWxpay) {
        label = document.createElement("label");
        label.innerHTML = "微信支付";
        var radio4 = document.createElement("input");
        radio4.type = "radio";
        radio4.id = "checked4";
        radio4.className = "radio";
        radio4.name = "example";
        label.appendChild(radio4);
        var setPaytype4 = function(e) {
            _this.setPayType(4)
        };
        radio4.addEventListener("click", setPaytype4);
        img = document.createElement("img");
        img.src = "/statics/wap/H5/images/wxzf.png";
        label.appendChild(img);
        paytype.appendChild(label)
    };
    if (!_this.game35.pay.isAppWxpay && _this.game35.utils.isMobile()) {
        label = document.createElement("label");
        label.innerHTML = "微信支付";
        var radio5 = document.createElement("input");
        radio5.type = "radio";
        radio5.id = "checked5";
        radio5.className = "radio";
        radio5.name = "example";
        label.appendChild(radio5);
        var setPaytype5 = function(e) {
            _this.setPayType(5)
        };
        radio5.addEventListener("click", setPaytype5);
        img = document.createElement("img");
        img.src = "/statics/wap/H5/images/wxzf.png";
        label.appendChild(img);
        paytype.appendChild(label)
    };
    if (data.usemoney != 0 && (data.usemoney >= data.money * 0.1) && data.money>0 ) {
        label = document.createElement("label");
        var umoney = data.usemoney * 0.1;
        var mhtml = "账户余额(<em>" + umoney.toFixed(2) + "元</em>)";
        label.innerHTML = mhtml;
        var radio3 = document.createElement("input");
        radio3.type = "radio";
        radio3.id = "checked3";
        radio3.className = "radio";
        radio3.name = "example";
        label.appendChild(radio3);
        var setPaytype3 = function(e) {
            _this.setPayType(3)
        };
        radio3.addEventListener("click", setPaytype3);
        img = document.createElement("img");
        img.src = "/statics/wap/H5/images/zhye.png";
        label.appendChild(img);
        paytype.appendChild(label)
    };
    var paybtn = document.getElementById('paybtn');
    paybtn.innerHTML = "";
    var btnPay = document.createElement("input");
    btnPay.id = "btn";
    btnPay.type = "button";
    btnPay.className = "btnOrange";
    btnPay.value = "立即支付";
    btnPay.addEventListener("click", function(e) {
        document.getElementById("btn").disabled = true;
        _this.game35.pay.pay()
    });
    paybtn.appendChild(btnPay);
    if(radio1){
        setPaytype1();
    }else if(radio2){
        setPaytype2()
    }else if(radio4){
        setPaytype4()
    }else if(radio5){
        setPaytype5()
    }
};
Game35PayUI.prototype.hidePay = function() {
    document.getElementById('payment').style.display = 'none';
    document.getElementById('payment_result').style.display = 'none';
    var paytype = document.getElementById("paytype");
    if (paytype) {
        paytype.innerHTML = ''
    };
    var paybtn = document.getElementById('paybtn');
    if (paybtn) {
        paybtn.innerHTML = ''
    };
    var payresult = document.getElementById('pay_result');
    if (payresult) {
        payresult.innerHTML = ''
    }
};
Game35PayUI.prototype.showResult = function(result) {
    document.getElementById('payment').style.display = 'none';
    document.getElementById("payment_result").style.display = 'block';
    var _this = this;
    if (!result) return;
    var payres = document.getElementById("pay_result");
    var img = document.createElement("img");
    var span;
    if (result == "99") {
        img.src = "/statics/wap/H5/images/pay_success.png";
        payres.appendChild(img);
        span = document.createElement("span");
        span.className = "result";
        span.innerHTML = "支付成功";
        payres.appendChild(span);
        span = document.createElement("span");
        span.className = "money";
        span.innerHTML = this.game35.utils.formatMoney(this.game35.pay.data.money, {
            unit: false,
            space: true
        });
        payres.appendChild(span)
    } else {
        img.src = "/statics/wap/H5/images/pay_fail.png";
        payres.appendChild(img);
        span = document.createElement("span");
        span.className = "result";
        span.innerHTML = "支付失败";
        payres.appendChild(span)
    };
    var p = document.createElement("p");
    p.className = "div-btn";
    var a = document.createElement("a");
    a.className = "btnOrange btnBack";
    a.href = "javascript:;";
    a.innerHTML = "<front id=\"countDown\">3</front> 秒后自动返回游戏";
    var goback = function() {
        _this.game35.ui.hidePay()
    };
    a.addEventListener("click", goback);
    p.appendChild(a);
    payres.appendChild(p);
    var time = document.getElementById("countDown").innerText;
    var down = function() {
        if (time > 1) {
            time--;
            document.getElementById("countDown").innerHTML = time;
            setTimeout(down, 1000)
        } else {
            _this.hidePay()
        }
    };
    down()
};
Game35PayUI.prototype.showKeyPlay = function() {
    var trybox = document.getElementById('trybox');
    var _this = this;
    if (trybox) {
        var url = _this.game35.utils.getOrigin() + "/game/getkeyplay.html?uid=" + _this.game35.pay.data.uid;
        _this.game35.utils.ajax(url, function(data) {
            if (data) {
                document.getElementById("username").value = data.username;
                document.getElementById("password").value = data.password;
                trybox.style.display = 'block'
            }
        })
    };
    var confirm_mod = document.getElementById('confirm_mod');
    var setKeyPlay = function(e) {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var url = _this.game35.utils.getOrigin()+ "/game/setkeyplay.html?username=" + username + "&password=" + password + '&uid=' + _this.game35.pay.data.uid;
        _this.game35.utils.ajax(url, function(data) {
            if (data.error) {
                alert(data.error);
                return
            };
            document.getElementById('trybox').style.display = 'none';
            _this.game35.pay.ready(_this.game35.pay.money)
        })
    };
    confirm_mod.addEventListener("click", setKeyPlay);
    var tryclose = document.getElementById("tryclose");
    if (tryclose) {
        tryclose.addEventListener('click', function() {
            trybox.style.display = "none"
        })
    }
};
Game35PayUI.prototype.setPayType = function(type) {
    this.game35.pay.data.paytype = type;
    for (var i = 1; i <= 5; i++) {
        $("#checked" + i).removeClass("checked")
    };
    $("#checked" + type).addClass("checked")
};
Game35PayUI.prototype.showQrcode = function(data) {
    var _this = this;
    var game35payqrcode = document.getElementById("game35payqrcode");
    if (!game35payqrcode) {
        var popup = document.getElementById("popup");
        var game35payqrcode = document.createElement("div");
        game35payqrcode.className = "popdiv";
        game35payqrcode.id = "game35payqrcode";
        game35payqrcode.style = "width: 300px; top: 25%;";
        popup.appendChild(game35payqrcode)
    };
    game35payqrcode.style.display = "block";
    var h3 = document.createElement("h3");
    h3.innerHTML = this.game35.utils.getAppType() == "wx" ? "长按二维码识别完成支付" : "微信扫一扫完成支付";
    game35payqrcode.appendChild(h3);
    var close, closeIcon;
    close = document.createElement("div");
    close.className = "close";
    closeIcon = document.createElement("i");
    closeIcon.className = "icon-close";
    close.appendChild(closeIcon);
    var closeWxPay = function(e) {
        _this.hideQrcode();
        _this.game35.pay.payCancel();
        close.removeEventListener("click", closeWxPay)
    };
    close.addEventListener("click", closeWxPay);
    game35payqrcode.appendChild(close);
    var paytable;
    paytable = document.createElement("div");
    paytable.className = "paywxtable clearfix";
    var qr = qrcode(10, 'H');
    qr.addData(data.code_url);
    qr.make();
    paytable.innerHTML = qr.createImgTag();
    game35payqrcode.appendChild(paytable)
};
Game35PayUI.prototype.hideQrcode = function() {
    var div = document.getElementById("game35payqrcode");
    if (div) div.parentElement.removeChild(div)
};
Game35App = function(game35){
    this.game35 = game35;
    this.shareOK = null ;
    this.shareCancel = null ;
    this.random = null;
};
Game35App.prototype.share = function(){
    this.random = this.game35.utils.getRandomString(6);
    JSInterface.share(
        this.game35.shareData.title,
        this.game35.shareData.imgurl,
        this.game35.shareData.link,
        this.game35.shareData.content,
        this.random
    );
};
Game35App.prototype.shareCallback = function(random){
    if(random == this.random){
        this.postMessage({action: "share:ok"})
    }
};

Game35Utils = function(game35) {
    this.game35 = game35
};
Game35Utils.prototype.loading = function(time) {
    var frame = document.getElementById('game35loadingframe');
    if (!frame) {
        frame = document.createElement("iframe");
        frame.id = "game35loadingframe";
        frame.className = "game35loadingframe";
        frame.align = "middle";
        document.getElementsByTagName("body")[0].appendChild(frame)
    };
    frame.src =  this.getOrigin() + "/userinfo/loading.html";
    setTimeout(function() {
        var frame = document.getElementById('game35loadingframe');
        if (frame) {
            frame.remove()
        }
    }, 3000)
};
Game35Utils.prototype.waiting = function() {
    var popupwait = document.getElementById("popupwait");
    if (!popupwait) {
        popupwait = document.createElement('div');
        popupwait.id = 'popupwait';
        popupwait.className = 'popupload';
        document.getElementsByTagName('body')[0].appendChild(popupwait)
    };
    var popd = document.createElement("div");
    popd.className = "popd";
    var img = document.createElement("img");
    img.src = "/statics/wap/images/load.gif";
    popd.appendChild(img);
    popupwait.appendChild(popd);
    var popv = document.createElement("div");
    popv.className = "popv";
    var p = document.createElement("p");
    p.innerHTML = "正在加载中，请耐心等待...";
    popv.appendChild(p);
    var span = document.createElement("span");
    span.innerHTML = "如果长时间无反应请刷新页面";
    popv.appendChild(span);
    popupwait.appendChild(popv)
};
Game35Utils.prototype.hideWait = function() {
    var popupwait = document.getElementById('popupwait');
    if (popupwait) {
        popupwait.remove()
    }
};
Game35Utils.prototype.extend = function(target, options) {
    if (target == undefined || target == null) {
        return options
    } else {
        if (options) {
            for (var name in options) {
                target[name] = options[name]
            }
        };
        return target
    }
};
Game35Utils.prototype.getParameter = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return r[2];
    return null
};
Game35Utils.prototype.formatMoney = function(money, options) {
    if (money == "undefined" || money == "" || isNaN(money)) return;
    var defaults = {
        symbol: true,
        unit: true,
        bold: false,
        space: false
    };
    options = this.extend(defaults, options);
    var s = ((money) / 100).toFixed(2);
    if (options.bold) s = "<em>" + s + (options.unit ? "元" : "") + "</em>";
    s = (options.symbol ? "￥" : "") + s + (options.space ? " " : "");
    return s
};
Game35Utils.prototype.isMobile = function() {
    var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito", "webmate", "nokia", "ucweb", "skyfire");
    var ua = navigator.userAgent.toLowerCase();
    for (var i = 0; i < mobileAgent.length; i++) {
        if (ua.indexOf(mobileAgent[i]) != -1) {
            return true
        }
    };
    return false
};
Game35Utils.prototype.isIOS = function() {
    return /iPhone|iPod|iPad|Mac/ig.test(navigator.userAgent)
};
Game35Utils.prototype.isAndroid = function() {
    return /android|linux/i.test(navigator.userAgent)
};
Game35Utils.prototype.getAppType = function() {
    var ua = navigator.userAgent;
    if (/micromessenger/ig.test(ua)) {
        return "wx"
    } else if (/3500game/ig.test(ua)) {
        return "35"
    } else {
        return "other"
    }
};
Game35Utils.prototype.isWindowsWechat = function() {
    return /WindowsWechat/ig.test(navigator.userAgent)
};
Game35Utils.prototype.h5GetPageSize = function() {
    var xScroll, yScroll;
    if (window.innerHeight && window.scrollMaxY) {
        xScroll = window.innerWidth + window.scrollMaxX;
        yScroll = window.innerHeight + window.scrollMaxY
    } else {
        if (document.body.scrollHeight > document.body.offsetHeight) {
            xScroll = document.body.scrollWidth;
            yScroll = document.body.scrollHeight
        } else {
            xScroll = document.body.offsetWidth;
            yScroll = document.body.offsetHeight
        }
    };
    var windowWidth, windowHeight;
    if (self.innerHeight) {
        if (document.documentElement.clientWidth) {
            windowWidth = document.documentElement.clientWidth
        } else {
            windowWidth = self.innerWidth
        };
        windowHeight = self.innerHeight
    } else {
        if (document.documentElement && document.documentElement.clientHeight) {
            windowWidth = document.documentElement.clientWidth;
            windowHeight = document.documentElement.clientHeight
        } else {
            if (document.body) {
                windowWidth = document.body.clientWidth;
                windowHeight = document.body.clientHeight
            }
        }
    };
    if (yScroll < windowHeight) {
        pageHeight = windowHeight
    } else {
        pageHeight = yScroll
    };
    if (xScroll < windowWidth) {
        pageWidth = xScroll
    } else {
        pageWidth = windowWidth
    };
    arrayPageSize = new Array(pageWidth, pageHeight, windowWidth, windowHeight);
    return arrayPageSize
};
Game35Utils.prototype.changeScreen = function() {
    var wh = this.h5GetPageSize();
    document.getElementById("iframe").style.width = wh[2] + 'px';
    document.getElementById("iframe").style.height = wh[3] + 'px'
};
Game35Utils.prototype.listenerChangeScreen = function() {
    setTimeout(this.changeScreen, 100)
};
Game35Utils.prototype.getOrigin = function(){
    if (window.location.origin) {
        return window.location.origin
    } else {
        return window.location.protocol + "//" + window.location.hostname + (window.location.port ? ":" + window.location.port : "")
    }
};
Game35Utils.prototype.getFullUrl = function() {
    return location.href.match(/[^#;]+/i)[0]
};
Game35Utils.prototype.getPath = function() {
    if (location.pathname) {
        return location.pathname
    } else {
        return location.href.match(/(?:http|https):\/\/[^\/]+([^?#;]+)/i)[1]
    }
};
Game35Utils.prototype.getUrlParam = function(name){
    var reg = new RegExp("(^|&)"+name+"=([^&]*)(&|$)");
    var r =  window.location.search.substr(1).match(reg);
    var strValue = "";
    if (r!=null){
        strValue= unescape(r[2]);
    }
    return strValue;
};
Game35Utils.prototype.now =function(){
    var dt = new Date();
    dt.setMilliseconds(0);
    return dt.getTime() / 1000
};
Game35Utils.prototype.getRandomString = function(len) {
    var base = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var str = "";
    for (var i = 0; i < len; i++) {
        var n = this.getRandomInt(1, base.length) - 1;
        str += base.substr(n, 1)
    }
    ;return str
};
Game35Utils.prototype.getRandomInt = function(min, max) {
    return parseInt((Math.random() * (max - min + 1)) + min)
};
Game35Utils.prototype.ajax = function() {
    var options = {
        method: "GET",
        url: "",
        data: null,
        type: "json",
        success: null,
        fail: null,
    };
    switch (arguments.length) {
        case 1:
            if (typeof arguments[0] == "string") options.url = arguments[0];
            if (typeof arguments[0] == "object") options = this.extend(options, arguments[0]);
            break;
        case 2:
            options.url = arguments[0];
            options.success = arguments[1];
            break
    };
    new Game35UtilsAjax(this.game35, options.method, options.url, options.data, options.type, options.success, options.fail)
};
Game35UtilsAjax = function(game35, method, url, data, type, success, fail) {
    this.game35 = game35;
    this.url = url;
    this.type = type;
    this.success = success;
    this.fail = fail;
    this.xhr = null;
    this.xhr = this.createXHR();
    var _this = this;
    this.xhr.onreadystatechange = function() {
        _this.callback.apply(_this)
    };
    if (typeof data == "object" && data != null) {
        var a = [];
        for (var p in data) {
            a.push(p + "=" + encodeURIComponent(data[p]))
        };
        data = a.join("&")
    };
    try {
        this.xhr.open(method, url, true);
        if (method.toUpperCase() == "POST") {
            this.xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8")
        };
        this.xhr.send(data)
    } catch (e) {
        console.log(url);
        console.log(e)
    }
};
Game35UtilsAjax.prototype.createXHR = function() {
    if (window.XMLHttpRequest) {
        return new XMLHttpRequest()
    } else {
        return new ActiveXObject("Microsoft.XMLHTTP")
    }
};
Game35UtilsAjax.prototype.callback = function() {
    if (this.xhr.readyState == 4 && this.xhr.status == 200) {
        var data = null;
        switch (this.type) {
            case "text":
                data = this.xhr.responseText;
                break;
            case "json":
                try {
                    data = JSON.parse(this.xhr.responseText)
                } catch (e) {
                    data = this.xhr.responseText
                };
                break
        };
        this.success && this.success.call(this.xhr, data)
    } else if (this.xhr.readyState == 4 && this.xhr.status != 200) {
        this.fail && this.fail.call(this.xhr)
    }
};

Game35Wx = function(game35){
    this.game35 = game35;
    this.ready = false;
    this.shareOK = null ;
    this.shareCancel = null ;
    this.init();
};
Game35Wx.prototype.init = function(){
    var _this = this;
    this.onReady(function(){
        _this.setShareData();
    });
    _this.initJsApi();
};
Game35Wx.prototype.initJsApi = function(){
    var timestamp = this.game35.utils.now();
    var noncestr = this.game35.utils.getRandomString(16);
    var url = location.href.split('#')[0];
    url = url.replace(/\&/g, '%26');
    var ajaxUrl =  this.game35.utils.getOrigin()+ "/api/getjsapisignature.html?noncestr=" + noncestr +"&timestamp=" + timestamp + "&url=" + encodeURIComponent(url);
    var _this = this;
    this.game35.utils.ajax(ajaxUrl,function(data){
        if(data.signature) {
            var signature = data.signature;
            wx.config({
                debug: false,
                appId: data.appid,
                timestamp: timestamp,
                nonceStr: noncestr,
                signature: signature,
                jsApiList: ["checkJsApi", "onMenuShareTimeline","onMenuShareAppMessage"]
            });
            wx.ready(function(){
                _this.ready = true;
                _this.game35.dispatchEvent("wxReady")
            });
            wx.error(function(res) {});
        }
    });
};
Game35Wx.prototype.onReady = function(callback) {
    if (this.ready) {
        callback && callback.call(this);
    } else {
        var _this = this;
        this.game35.addEventListener("wxReady", function() {
            callback && callback.call(_this)
        });
    }
};
Game35Wx.prototype.setShareOk = function(){
    var _this = this;
    this.shareOK = function(){
        _this.game35.postMessageFrame({action: "share:ok"});
    }
};
Game35Wx.prototype.setShareData = function() {
    var _this = this;
    var link = this.game35.shareData.link;
    link = link.substr(0, link.indexOf('%26'));
    wx.onMenuShareTimeline({
        title: this.game35.shareData.title,
        link: link,
        imgUrl: this.game35.shareData.imgurl,
        success: function() {
            _this.shareOKHandler()
        },
        cancel: function() {
            _this.shareCancelHandler()
        }
    });
    wx.onMenuShareAppMessage({
        title: window.location.title, // 分享标题
        desc: this.game35.shareData.title, // 分享描述
        link: link, // 分享链接，该链接域名需在JS安全域名中进行登记
        imgUrl: this.game35.shareData.imgurl, // 分享图标
        success: function () {
            _this.shareOKHandler()
            // 用户确认分享后执行的回调函数
        },
        cancel: function () {
            _this.shareCancelHandler()
            // 用户取消分享后执行的回调函数
        }
    });
};
Game35Wx.prototype.shareOKHandler = function(){
    this.shareOK && this.shareOK.call(null);
};
Game35Wx.prototype.shareCancelHandler = function(){
    this.shareCancel && this.shareCancel.apply(this.game35);
};

Game35Ch = function(game35){
    this.game35 = game35;
    this.options = {};
    //this.init();
};
Game35Ch.prototype.init = function(){
    var url = this.game35.utils.getOrigin() + "/api/getChannel.html?channel=" + this.game35.channel;
    var _this = this;
    $.getJSON(url,'',function(res){
        if(res.status ==1)
            _this.setCHData(res.data);
    });
};

Game35Ch.prototype.setCHData = function(data){
    var optiones = {
        id:data.id,
        name:data.name,
        title:data.title,
        links:data.links,
        qq:data.qq,
        group:data.group,
        logo:data.logo,
        back:data.back,
        qrcode:data.qrcode,
        isplace:data.isplace,
    };
    this.optiones = optiones;
    this.replace();
};
Game35Ch.prototype.replace = function(){
    if(this.optiones.logo)
        $('.logo').attr('src',this.optiones.logo);
    if(this.optiones.qq && this.optiones.group){
        var html = this.optiones.title + 'H5游戏群(有礼包)：'+ this.optiones.qq +'<br><a class="group" href="'+ this.optiones.group +'"><img src="/statics/wap/H5/images/group.png"/></a>';
        $("#addgroup").html(html);
        $('.join_qq').attr('href',this.optiones.group);
    }
    if(this.optiones.qrcode){
        $(".wxqrcode").attr('src',this.optiones.qrcode);
    }
    var text = '搜索“'+ this.optiones.title +'”关注公众号'
    $('#con_switch_2 .game-code h4').html(text);
};


function setTab(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        var con=document.getElementById("con_"+name+"_"+i);
        if(con){
            menu.className=i==cursel?"now":"";
            con.style.display=i==cursel?"block":"none";
            if(cursel == 2) $("#switch2").find(".hong").remove();
        }
    }
};

/*var shareOKCallback = function(random){
    alert(random);
    var appShare = new Game35App();
    appShare.shareCallback(random);
};*/

/*function shareOKCallback(random){
    alert('测试');
    var appShare = new Game35App();
    appShare.shareCallback(random);
}*/

if($(".draggable").length>0){
    setTimeout(function () {
        $(".draggable .ball_bg").css("opacity","0.8");
    }, 10000);
    mTouch('.draggable').on('tap',  function () {
        this.style.display="none";
        $(".gamemask").css("display","block");
        $(".gamesite").animate({left:"0%"},10);
        if( $(".ball_tip").hasClass('tip_popin')){
            this.style.display="block";
            $(".gamemask").css("display","none");
            $(".gamesite").animate({left:"-100%"},10);
            $(".ball_tip").removeClass('tip_popin').addClass('tip_popout');
        }
    })
    mTouch('#method').on('tap',  function () {
        $('.method-con').toggle();
    })
};
if($(".sitedrawer").length>0){
    mTouch('.sitedrawer, .gamemask').on('tap',  function () {
        $(".draggable").css("display","block");
        $(".gamemask").css("display","none");
        $(".gamesite").animate({left:"-100%"},10);
    })
    mTouch('.lqtip a').on('tap',  function () {
        $(".draggable").css("display","block");
        $(".gamemask").css("display","none");
        $(".gamesite").animate({left:"-100%"},10);
        $(".ball_tip").removeClass('tip_popout').addClass('tip_popin');
    })
};
var ua = navigator.userAgent
if(/3500game/ig.test(ua)){
    var gameurl = window.location.href + "?type=playing";
    JsInterface.openGame(gameurl)
}
