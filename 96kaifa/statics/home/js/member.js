Member = function(){
    //验证已登录
    this.login = false;
    this.register = false;
    this.islogin = false;
    this.memberid = null;
    this.headimg = null;
    this.username = null;
    this.filename = null;
    this.timestamp = (new Date()).getTime();
    this.wrongtime = null;
    this.messageid = null;
    this.ispass = false;
    this.sign = null;
    this.return = null;
    var _this = this;

};

Member.prototype.ready = function(){
    var loginOk ='<a href="/userinfo/ucenter.html" class="a1 a_user"><img class="head" src="'+ this.headimg +'">'+ this.username +'</a><a href="/userinfo/logout.html" class="a2 a_exit">退出</a>|';
    $("#login_ok").html(loginOk);
    var ziwg = document.getElementById('ziwg');
    if(ziwg){
        this.recentPlay();
    }
    var ucenter = document.getElementById('ucenter');
    if(ucenter){
        ucenter.href = '/userinfo/ucenter.html';
    };
    this.reCharge();
    var msgid = document.getElementById('msgid');
    if(msgid){
        this.getMessage();
    }
};
Member.prototype.init = function(){
    var _this = this;
    if(this.login){
        this.login.addEventListener('click',function(){
            _this.return = window.location.href;
            $(".login_pop, .cover").show();
            _this.loginInit();
        });
    };
    if(this.register){
        this.register.addEventListener('click',function(){
            $(".login_pop, .cover").show();
            $(".login_pop").hide();
            $(".register_pop").show();
            _this.registerInit();
        });
    };
    if(document.getElementById('pwd_captcha')){
        this.showGeeTest('pwd_captcha','pwd');
    };
    var ucenter = document.getElementById('ucenter');
    if(ucenter){
        ucenter.addEventListener('click',function(){
            _this.return = '/userinfo/ucenter.html';
            $(".login_pop, .cover").show();
            _this.loginInit();
        });
    }
};
Member.prototype.loginInit = function(){
    var _this = this;
    _this.wrongtime = _this.getCookie('worngtime');
    if(_this.wrongtime && _this.wrongtime>=3){
        _this.showGeeTest('logcaptcha','log');
    }
    var loginBtn = document.getElementById('login_btn');
    loginBtn.addEventListener('click',function(){
        var login_name = $("#login_username").val(), login_passwd = $("#login_password").val();
        var formObj=$('.login_pop');
        var worngtime = _this.getCookie('worngtime');
        if(login_name==''){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入手机号/用户名");
            return false;
        }
        if(login_passwd==''){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入密码");
            return false;
        } else{
            $(formObj).find(".error_font").hide();
            $(formObj).find(".error_font").text("");
        }
        if(worngtime && worngtime>3 && !_this.checkGeeTest()){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请先滑动图片验证");
            return false;
        };
        var remember = false;
        if($("#remember").is('checked')){
            remember = true;
        }
        $(formObj).find(".error_font").hide();
        var param = {
            method : "POST",
            url : "/userinfo/login.html",
            data : 'username='+login_name+'&password='+login_passwd,
            type : 'json'
        };
        _this.ajax(param,function(res){
            if(res.status!=1){
                $(formObj).find(".error_font").show();
                $(formObj).find(".error_font").text(res.msg);
                _this.wrongtime += 1;
                _this.setCookie('worngtime',_this.wrongtime,3600);
                if(_this.wrongtime >3) _this.showGeeTest('logcaptcha','log');
            }else{
                _this.setCookie("remember",login_name+'|'+login_passwd,3600*365*24);
                _this.setCookie('worngtime',0);
                if(_this.return){
                    window.location.href= _this.return;
                }else{
                    window.location.href= res.url;
                }
            }
        });
    });


    document.getElementById('qq-btn').addEventListener('click',function(){
       window.location.href = "/oauth/login.html?type=qq&filename="+ _this.filename;
    });
    document.getElementById('qq-weibo').addEventListener('click',function(){
        window.location.href = "/oauth/login.html?type=sina&filename="+ _this.filename;
    });
    document.getElementById('qq-weixin').addEventListener('click',function(){
        window.location.href = "/oauth/login.html?type=weixin&filename="+ _this.filename;
    });

    var remember = this.getCookie('remember');
    if(remember){
        var str = remember.split('|');
        $("#login_username").val(str[0]);
        $("#login_password").val(str[1]);
    }
};
Member.prototype.registerInit = function(){
    this.showGeeTest('reg_captcha','reg');
    var btnRegister = document.getElementById('btnRegister');
    var _this = this;
    btnRegister.addEventListener('click',function(){
        var reg_phone = $("#reg_phone").val(), reg_passwd = $("#reg_password").val() , reg_fullname=$("#fullname").val(), reg_idcard = $("#idcard").val() , reg_phoneCode = $("#reg_sjyzm").val();
        var pwdpan  = /^\d+$/;
        var pwdpan2 = /^[A-Za-z]+$/;
        var formObj=$('.register_pop');
        if(!_this.checkPhone(reg_phone)){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入正确的手机号码");
            return false;
        }
        if(reg_passwd==''){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入密码");
            return false;
        }else if(reg_passwd.length<6 || reg_passwd.length>16){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入6-16 位的密码");
            return false;
        }else if(pwdpan.test(reg_passwd) || pwdpan2.test(reg_passwd)){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*密码必须包含字母和数字");
            return false;
        };

        if(reg_fullname=='') {
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入您的真实姓名");
            return false;
        }else if(!/^[\u4e00-\u9fa5]+$/.test(reg_fullname)){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入正确的姓名");
            return false;
        }
        if(reg_idcard=='') {
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入身份证号码");
            return;
        }else if(!/^\d{15}|\d{18}$/.test(reg_idcard)){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入正确身份证号码");
            return;
        }

        if(reg_phoneCode == ""){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请输入手机验证码");
            return false;
        }
        if(!_this.checkGeeTest()){
            $(formObj).find(".error_font").show();
            $(formObj).find(".error_font").text("*请先滑动图片验证");
            return false;
        }

        $(formObj).find(".error_font").hide();

        var param = {
            method : "POST",
            url : "/userinfo/register.html",
            data : 'username='+reg_phone+'&password='+reg_passwd +'&code='+reg_phoneCode +'&fullname='+reg_fullname+'&idcard='+reg_idcard,
            type : 'json'
        };

        _this.ajax(param,function(res){
            if(res.status!=1){
                $(formObj).find(".error_font").show();
                $(formObj).find(".error_font").text(res.msg);
            }else{
                if(_this.return){
                    window.location.href= _this.return;
                }else{
                    window.location.reload();
                }
            }
        });
    });
    var getyzmreg = document.getElementById('get-yzm');
    getyzmreg.addEventListener('click',function(){
        getyzmreg.disabled = true;
        var reg_phone = $("#reg_phone").val();
        if(!_this.checkPhone(reg_phone)){
            $(".error_font").show();
            $(".error_font").text("*请输入正确的手机号码");
            return false;
        };
        if(!_this.checkGeeTest()){
            $(".error_font").show();
            $(".error_font").text("*请先滑动图片验证");
            return false;
        };
        $(".error_font").hide();
        _this.getPhoneCode(reg_phone,'reg');
    });
    document.getElementById('user_login').addEventListener('click',function(){
        $(".login_pop").show();
        $(".register_pop").hide();
        _this.loginInit();
    });
};
Member.prototype.playgame = function(){
     var _this = this;
    $('.playgame').live('click',function(){
        var url = $(this).data('url');
        if(!url) return;
        _this.filename = url.split('/')[3];
        if(!_this.islogin){
            $(".login_pop, .cover").show();
            _this.loginInit();
            _this.return = url;
            return false;
        }else{
            window.open(url);
        }
    });
};
Member.prototype.upPersonal = function(){
    if(!this.islogin || !this.memberid) return ;
    var nickname = document.getElementById('nickname').value;
    var year = $('#year option:selected').val();
    var month = $('#month option:selected').val();
    var day = $('#day option:selected').val();

    var obj = document.getElementsByName('gender');  //这个是以标签的name来取控件
    var gender = 0;
    for(i=0; i<obj.length;i++)  {
        if(obj[i].checked) gender=obj[i].value;
    };

    var param = {
        method : "POST",
        url : window.location.href,
        data : 'nickname='+nickname+'&birthyear='+year+'&birthmonth='+month+'&birthday='+day+'&gender='+gender+'&uid='+this.memberid,
        type : 'json'
    };
    _this = this;
    this.ajax(param,function(res){
        if(res.status == 1){
            _this.showOKMsg(res.msg);
            setTimeout(function(){ window.location.reload();},2000);
        }else{
            $(".error_font").show();
            $(".error_font").html(res.msg)
        }
    });
};
Member.prototype.reCharge = function(){
    if(!this.islogin || !this.memberid) return;
    new Charge(this);
};
Member.prototype.phoneBind = function(){
    var _this = this;
    var sure = document.getElementById('sure');
    if(sure){
        sure.addEventListener('click',function(){
            var phone = document.getElementById("phone").value;
            if(!_this.checkPhone(phone)){
                $('.error_font').show();
                $('.error_font').text("*请输入正确的手机号码");
                return false;
            };

            var code = document.getElementById("sjyzm").value;
            if(!code || code ==''){
                $('.error_font').show();
                $('.error_font').text("*请输入手机验证码");
                return false;
            };
            $('.error_font').hide();
            var param = {
                method : "POST",
                url : window.location.href,
                data : 'phone='+phone+'&code='+code,
                type : 'json'
            };
            _this.ajax(param,function(res){
                if(res.status == 1 ){
                    _this.showOKMsg(res.msg);
                    setTimeout(function(){
                        window.location.href = '/userinfo/mobile.html';
                    },2000);
                }else{
                    $('.error_font').show();
                    $('.error_font').text(res.msg);
                }
            });
        })
    };
    var getyzmbid = document.getElementById("get-yzm");
    if(getyzmbid){
        getyzmbid.addEventListener('click',function(){
            getyzmbid.disabled = true;
            var phone = document.getElementById("phone").value;
            if(!_this.checkPhone(phone)){
                $('.error_font').show();
                $('.error_font').text("*请输入正确的手机号码");
                return false;
            };
            _this.getPhoneCode(phone,'bind');
        });
    }
};
Member.prototype.phoneModify = function(){
    var _this = this;
    var getyzmedt = document.getElementById('get-yzm');
    if(getyzmedt){
        getyzmedt.addEventListener('click',function(){
            getyzmedt.disabled = true;
            var phone = document.getElementById('phone').value;
            if(!_this.checkPhone(phone)){
                $(".error_font").show();
                $(".error_font").text("*请输入正确的手机号码");
                return false;
            };
            $(".error_font").hide();
            _this.getPhoneCode(phone,'edit');
        });
    };

    var step1 = document.getElementById('sec_step1');
    if(step1){
        step1.addEventListener('click',function(){
            var phone = document.getElementById('phone').value;
            var code = document.getElementById('sjyzm').value;
            if(!_this.checkPhone(phone)){
                $(".error_font").show();
                $(".error_font").text("*请输入正确的手机号码");
                return false;
            };
            if(!code || code.length <1){
                $(".error_font").show();
                $(".error_font").text("*请输入手机验证码");
                return false;
            }
            $(".error_font").hide();

            var param = {
                method : 'POST',
                url: window.location.href,
                data : 'phone='+phone+'&code='+code,
                type : 'json'
            };
            _this.ajax(param,function(res){
                if(res.status ==1){
                    window.location.href = res.url;
                }else{
                    $(".error_font").show();
                    $(".error_font").text(res.msg);
                }
            });
        });
    }

    var step2 = document.getElementById('sec_step2');
    if(step2){
        step2.addEventListener('click',function(){
            var oldphone = document.getElementById('oldphone').value;
            var phone = document.getElementById('phone').value;
            var code = document.getElementById('sjyzm').value;
            if(!_this.checkPhone(phone)){
                $(".error_font").show();
                $(".error_font").text("*请输入正确的手机号码");
                return false;
            };
            if(!code || code.length<1){
                $(".error_font").show();
                $(".error_font").text("*请输入手机验证码");
                return false;
            }
            $(".error_font").hide();
            var param = {
                method : 'POST',
                url : window.location.href,
                data : 'phone='+phone+'&code='+code+'&oldphone='+oldphone,
                type : 'json'
            };
            _this.ajax(param,function(res){
                if(res.status ==1){
                    _this.showOKMsg(res.msg);
                    setTimeout(function(){
                        window.location.href = '/userinfo/mobile.html';
                    },1000);
                }else{
                    $(".error_font").show();
                    $(".error_font").text(res.msg);
                }
            })
        });
    }
};
Member.prototype.password = function(){
    var _this = this;
    var sure = document.getElementById('sure');
    if(sure){
        sure.addEventListener('click',function(){
            var pwd = document.getElementById('pwd').value;
            if(!pwd || pwd.length<1){
                $('.error_font').show();
                $('.error_font').html('*请输入旧密码');
                return;
            }
            var npwd =  document.getElementById('new_pwd').value;
            if(!npwd || npwd.length<6 || npwd.length>10){
                $('.error_font').show();
                $('.error_font').html('*请输入6-16位新密码');
                return;
            }else if(npwd == pwd){
                $('.error_font').show();
                $('.error_font').html('*新密码不能与旧密码相同');
                return;
            }
            var cpwd = document.getElementById('confirm_pwd').value;
            if(!cpwd || cpwd.length<1){
                $('.error_font').show();
                $('.error_font').html('*请输入确认密码');
                return;
            }else if(cpwd != npwd){
                $('.error_font').show();
                $('.error_font').html('*两次密码不相同');
                return;
            }
            $('.error_font').hide();
            var param ={
                method : 'POST',
                url : window.location.href,
                data : 'oldpwd='+pwd+'&newpwd='+npwd,
                type : 'json'
            };
            _this.ajax(param,function(res){
               if(res.status == 1){
                   _this.showOKMsg(res.msg);
                   setTimeout(function(){
                       window.location.href = res.url;
                   },1000);
               }else{
                   $('.error_font').show();
                   $('.error_font').html(res.msg);
               }
            });
        });
    }
};
Member.prototype.findPwd = function(){
    var _this = this;
    var step1 = document.getElementById('step1');
    if(step1){
        step1.addEventListener('click',function(){
            var username = document.getElementById('username').value;
            if(!username || username.length<1){
                $('error_font').show();
                $('error_font').text('*请输入手机号/用户名');
                return ;
            }
            if(!_this.checkGeeTest()){
                $(".error_font").show();
                $(".error_font").text("*请先滑动图片验证");
                return ;
            }else{
                $(".error_font").show();
                $(".error_font").text("*正在验证用户名,请稍等……");
            };

            var param = {
                method : 'POST',
                url : window.location.href,
                data : 'username='+username,
                type : 'json'
            };
            _this.ajax(param,function(res){
                if(res.status ==1){
                    window.location.href = res.url;
                }else{
                    $(".error_font").show();
                    $(".error_font").text(res.msg);
                }
            })
        });
    }

    var step2 = document.getElementById('step2');
    if(step2){
        step2.addEventListener('click',function(){
            var phone = document.getElementById('phone').value;
            var code = document.getElementById('sjyzm').value;
            if(!code || code.length<1){
                $('.error_font').show();
                $('.error_font').text('*请输入手机验证码');
                return ;
            };
            $('.error_font').hide();
            var param = {
                method : 'POST',
                url : window.location.href,
                data : 'phone='+phone+'&code='+code,
                type : 'json'
            };
            _this.ajax(param,function(res){
                if(res.status == 1){
                    window.location.href = res.url;
                }else{
                    $('.error_font').show();
                    $('.error_font').text(res.msg);
                }
            })
        })
    };

    var step3 = document.getElementById('step3');
    if(step3){
        step3.addEventListener('click',function(){
            var npwd = document.getElementById('new_pwd').value;
            var cpwd = document.getElementById('confirm_pwd').value;
            if(!npwd || npwd.length<6 || npwd.length>16){
                $('.error_font').show();
                $('.error_font').text('*请输入6-16位字母或数字');
                return;
            }
            if(cpwd.length<1){
                $('.error_font').show();
                $('.error_font').text('*请输入确认密码');
                return;
            }else if(cpwd != npwd){
                $('.error_font').show();
                $('.error_font').text('*两次密码不相等');
                return;
            };
            $('.error_font').hide();
            var param = {
                method : 'POST',
                url : window.location.href,
                data : 'newpwd='+ npwd,
                type : 'json'
            };
            _this.ajax(param,function(res){
                if(res.status ==1){
                    window.location.href = res.url;
                }else{
                    $('.error_font').show();
                    $('.error_font').text(res.msg);
                }
            })
        })
    }

    var step4 = document.getElementById('step4');
    if(step4){
        step4.addEventListener('click',function(){
            $(".login_pop, .cover").show();
            _this.loginInit();
        })
    };
    var getyzmfid = document.getElementById('getyzm');
    if(getyzmfid){
        getyzmfid.addEventListener('click',function(){
            $('#getyzm').attr('disabled',true);
            var phone = document.getElementById('phone').value;
            if(!_this.checkPhone(phone)){
                $('.error_font').show();
                $('.error_font').text('*请输入正确的手机号码');
                return;
            }
            _this.getPhoneCode(phone,'pwd');
        });
    }
};
Member.prototype.headImg = function(){
    var sure = document.getElementById('sure');
    if(sure){
        var _this = this;
        sure.addEventListener('click',function(){
            var headimg = document.getElementById('headimg').value;
            if(headimg == ''){
                $(".error_font").show();
                $(".error_font").text('请先上传图片');
                return false;
            }
            var param = {
                method:'POST',
                url: window.location.href,
                data: 'headimg='+headimg+'&uid='+_this.memberid,
                type: 'json'
            };
            _this.ajax(param,function(data){
               if(data && data.status ==1){
                   _this.showOKMsg(data.msg);
                   window.location.reload();
               } else{
                   $(".error_font").show();
                   $(".error_font").text(data.msg);
                   return false;
               }
            });
        });
    }
};
Member.prototype.recentPlay = function(){
    var param = {
        method:'POST',
        url:'/recentplay.html',
        data:'uid='+this.memberid,
        type:'json'
    };
    this.ajax(param,function(res){
        if(res.status == 1){
            var html = '';
            $.each(res.list,function(i,r){
                html += '<dd><a href="javascript:;" target="_blank" class="playgame" data-url="'+ r.gameurl +'" title="'+ r.title +'"><img src="'+ r.thumb +'" alt="' + r.title + '"><span>'+ r.title +'</span></a></dd>';
            });
            html +='<dd><a href="/userinfo/game.html" target="_blank" class="gameMore"><i class="line1"></i><i class="line2"></i></a></dd>';
            $('#ziwg').show();
            $('#ziwg').append(html);
        }
    })
};
Member.prototype.showOpenGain = function(openid){
    if(!this.ispass) return
    this.ispass = false;

    var _this = this;
    var param = {
        method:'POST',
        url:'/getOpenState.html',
        data: 'openid='+openid,
        type:'json'
    };
    _this.ajax(param,function(res){

        var gain = document.getElementById('gain');
        if(gain) gain.parentElement.removeChild(gain);

        if(res.status == 3){
            $('#jryx').before('<span class="js">结束</span>');
        }else if(res.status == 2){
            $('#jryx').before('<a href="javascript:;" class="th" id="gain">淘号</a>');
        }else{
            $('#jryx').before('<a href="javascript:;" class="lq" id="gain">领取</a>');
        }
        _this.getOpenCode(openid);
    });
};
Member.prototype.getOpenCode = function(openid){
    var gain = document.getElementById('gain');
    var _this = this;
    if(gain){
        gain.addEventListener("click",function(){
            if(!_this.islogin){
                $(".login_pop, .cover").show();
                _this.return = document.location.href;
                _this.loginInit();
                return false;
            }
            var param = {
                method:'POST',
                url:'/getOpenCode.html',
                data:'openid='+openid,
                type:'json'
            };
            _this.ajax(param,function(res){
                if(res.status == 1){
                    _this.showOpenMsg('<div class="gift-con"><span class="text">领取成功，请尽快使用，以免卡号失效！</span><span id="open_code">'+ res.opencode +'</span><a href="javascript:void(0);" class="buttoncopy" id="buttoncopy">复制</a> </div>');
                }else if(res.status == 2){
                    _this.showOpenMsg('<div class="ylq-con"><span class="text">您已领取过，请勿重复领取！</span><span class="text">可进入“个人中心－<a href="/userinfo/my_card.html">我的礼包</a>”查看已领卡号</span></div>');
                }else{
                    _this.showOpenMsg('<div class="ylq-con"><span class="text">'+ res.msg +'</span></div>');
                }
            })
        })
    }
};



	$('#a_login').click(function(){
		$('#login_pop').css('display','block')
		$('.cover').css('display','block')
	})
	
	$('#user_login').click(function(){
		$('.register_pop').css('display','none')
		$('#login_pop').css('display','block')
		$('.cover').css('display','block')
	})

	$('#gamego').click(function(){
		$('#login_pop').css('display','block')
		$('.cover').css('display','block')
	})
	
	$('#gamegoo').click(function(){
		$('#login_pop').css('display','block')
		$('.cover').css('display','block')
	})
	
	
	$('#register_btn').click(function(){
		$('.register_pop').css('display','block')
		$('.cover').css('display','block')
	})
	
	$('#register_btn2').click(function(){
		$('#login_pop').css('display','none')
		$('.register_pop').css('display','block')
		$('.cover').css('display','block')
	})
	

Member.prototype.showOpenMsg = function(msg){
    var divpop = document.getElementById('div_pop');
    if(divpop) divpop.parentElement.removeChild(divpop);
alert(1);
    var div = document.createElement('div');
    div.className = 'div_pop gift_pop block';
    div.id = 'div_pop';
    div.style = 'display:block';
    div.innerHTML = '<span class="pop_close" id="pop_open_close"></span><p class="pop-tit">操作提示</p>'+ msg;
    document.getElementsByTagName("body")[0].appendChild(div);

    $('.cover').show();
    $('#div_pop').show();
    var close = document.getElementById('pop_open_close');
    close.addEventListener('click',function(){
        $('.cover').hide();
        $('#div_pop').remove();
    });

	
	
    var buttoncopy = document.getElementById('buttoncopy');
    if(buttoncopy){
		
        buttoncopy.onclick = function(){
			
            var text = $("#card").html();
            if(window.clipboardData){
                window.clipboardData.setData('text',text);
                alert("复制成功 ");
            }else{
                alert("复制失败，请手动操作");
            }
        }
    };
	
	
	
};
Member.prototype.showGeeTest = function (box,type) {
    var _this = this;
    $('#'+box).html('');
    if ($('#'+box).length > 0) {
        var handlerPopup = function (captchaObj) {
            _this.captchaObj = captchaObj;
            captchaObj.appendTo("#"+box);
        };
        var url = "/userinfo/getGeetest.html?type="+ type +"&t=" + (new Date()).getTime();
        _this.ajax(url,function(data){
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "float", //
                offline: !data.success //
            }, handlerPopup);
        })
    }
};
Member.prototype.checkGeeTest = function () {
    var validate = this.captchaObj.getValidate();
    this.geetest = {
        geetest_challenge: validate.geetest_challenge,
        geetest_validate: validate.geetest_validate,
        geetest_seccode: validate.geetest_seccode
    }
    if (!this.geetest.geetest_challenge || !this.geetest.geetest_validate || !this.geetest.geetest_seccode) {
        return false;
    } else {
        return true;
    }
};
Member.prototype.countDown = function(time){
    var _this = this;
    if (time == 0) {
        $(".get-yzm").attr('disabled',false);
        $(".get-yzm").text("免费获取验证码");
        return;
    } else {
        $(".get-yzm").text("" + time + "秒后再发送");
        time--;
    }
    setTimeout(function() { _this.countDown(time)},1000)
};
Member.prototype.showOKMsg = function(msg){

    var result_pop = document.getElementById('result_pop');
    if(result_pop) result_pop.parentElement.removeChild(result_pop);
    var div,div1,span,p;
    div = document.createElement('div');
    div.className = 'div_pop result_pop';
    div.id = 'result_pop';
    div.style = 'display:block';
    span = document.createElement('span');
    span.className = 'pop_close';
    div.appendChild(span);
    p = document.createElement('p');
    p.className = 'pop-tit';
    p.innerHTML = '操作提示';
    div.appendChild(p);
    div1 = document.createElement('div');
    div1.className = 'pop-con';
    var i = document.createElement('i');
    div1.appendChild(i);
    var p1 = document.createElement('p');
    p1.innerHTML = msg;
    div1.appendChild(p1);
    div.appendChild(div1);
    document.getElementsByTagName("body")[0].appendChild(div);
    span.addEventListener('click',function(){
        div.parentElement.removeChild(div);
        $('.cover').hide();
        $('#result_pop').remove();
    });
    $('.cover').show();
    $('#result_pop').show();
}
Member.prototype.getMessage = function(){
    if(this.memberid){
        var param = {
            method: 'POST',
            url: '/api/getmsg.html',
            data: 'uid='+ this.memberid,
            type: 'json'
        };
        var _this = this;
        var msgid = _this.getCookie('msgid_'+_this.memberid);
        _this.ajax(param,function(res){
            _this.messageid = res.msgid;
            if(res.status == 1 && msgid != res.msgid){
                $('.icon6').append('<b></b>');

            }
        });
        $("#msgid").live('click',function(){
            $('.icon6').html('&#xe632;');
            _this.setCookie('msgid_'+_this.memberid,_this.messageid,30*3600*24);
        });
    }
};
Member.prototype.checkPhone = function(phone){
    var my = false;
    var partten = /^((\(\d{3}\))|(\d{3}\-))?1[0-9]\d{9}$/;
    if (partten.test(phone))
        my = true;
    if (phone.length != 11)
        my = false;
    if (!my) {
        return false;
    }
    return true;
};
Member.prototype.getPhoneCode = function(phone,type){
    var _this = this;
    var param = {
        method : "POST",
        url : "/userinfo/getcode.html",
        data : 'phone='+ phone+'&type='+type,
        type : 'json'
    };
    _this.ajax(param,function(res){
        if(res.status==1){
            _this.countDown(60);
        }else{
            $(".error_font").show();
            $(".error_font").text(res.msg);
        }
    });
};
Member.prototype.getSign = function(data){
    if(typeof data == "object") data = $.param(data);
    if(data) data += '&timestamp=' + this.timestamp;
    var param = {
        method : "POST",
        url : "/oauth/getsign.html",
        data : data,
        type : 'json',
    };
    var _this = this;
    _this.ajax(param,function(res){
        if(res.status == 1){
            _this.sign = res.sign;
        }
    });
};
Member.prototype.loadMore = function(types){
    var _this = this;
    $('.load-more').click(function(){
        var param = {
            page:$(this).attr('page'),
            pagesize:$(this).attr('pagesize'),
            type:types,
            memberid:_this.memberid,
            typeid:$(this).attr('typeid'),
            gameid:$(this).attr('gameid'),
        };
        new Loading(param);
    })
};
Member.prototype.ajax = function(){
    var options = { method: "GET", url: "", data: null, type: "json", success: null, fail: null, rebuild: false};
    switch (arguments.length) {
        case 2:
            if (typeof arguments[0] == "string") options.url = arguments[0];
            if (typeof arguments[0] == "object") options = this.extend(options, arguments[0]);
            options.success = arguments[1];
            break
    };
    var method = options.method;
    this.type = options.type;
    this.xhr = this.createXHR();
    this.success = options.success;
    var _this = this;
    this.xhr.onreadystatechange = function(){
        _this.callback.apply(_this)
    };
    try {
        this.xhr.open(method, options.url, true);
        if (method.toUpperCase() == "POST") {
            this.xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8")
        };
        this.xhr.send(options.data)
    } catch (e) {
        console.log(e)
    }
};
Member.prototype.createXHR = function() {
    if (window.XMLHttpRequest) {
        return new XMLHttpRequest()
    } else {
        return new ActiveXObject("Microsoft.XMLHTTP")
    }
};
Member.prototype.callback = function() {
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
Member.prototype.reBuild = function(data){
    if(!data || data =='') return ;
    if(typeof data =='object') data = $.param(data);
    if(this.sign)
        data += '&sign='+ this.sign;
    if(this.timestamp)
        data += '&timestamp=' + this.timestamp;
    return data;
};
Member.prototype.copyUrl = function(box){
    var Url=document.getElementById("biao"+box);
    Url.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
    this.showOKMsg("已复制好，可贴粘。");
};
Member.prototype.extend = function(target, options) {
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
Member.prototype.count = function(){
    var digg = document.getElementById('digg');
    var _this = this;
    if(digg){
        var siteid = $("#digg").attr('siteid');
        var contentid = $("#digg").attr('contentid');
        digg.addEventListener('click',function(){
            if(_this.getCookie('con_'+contentid+'_'+ siteid)){
                alert('已点赞过了');
                return false;
            }
            _this.docount(contentid,siteid,true);
        });
        _this.docount(contentid,siteid,false);
    }

    //统计
    $(".jryx,.posited,.wanBtn").live('click',function(){
        var siteid = $(this).attr('siteid');
        var contentid = $(this).attr('contentid');
        if(!siteid || !contentid) return false;
        _this.docount(contentid,siteid,false);
    });
};
Member.prototype.docount = function(contentid,siteid,add){
    var param = {
        method : 'POST',
        url : '/api/count.html',
        data : 'contentid='+contentid+'&siteid='+siteid,
        type : 'json'
    };
    var _this = this;
    _this.ajax(param,function(res){
        if(res.status ==1 && add){
            var num = parseInt($("#good_or_bad em").html())+1;
            $("#good_or_bad em").html(num);
            _this.setCookie('con_'+contentid+'_'+ siteid,contentid,3600)
        }
    });
};
Member.prototype.setCookie = function(name,value,time){
    if(!time){
        var Days = 30;
        var exp = new Date();
        exp.setTime(exp.getTime() + 3600);
        document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString()  + ";path=/";
    }else{
        document.cookie = name + "="+ escape (value) + ";expires=" + time + ";path=/";
    }
};
Member.prototype.getCookie = function(name) {
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
        return unescape(arr[2]);
    else
        return null;
};

Charge = function(member){
    this.member = member;
    this.amout = null;
    this.paytype = null;
    this.agree = false;
    this.init();
};
Charge.prototype.init = function(){
    if(!this.paytype) this.paytype = '1';
    if(!this.amout) this.amout = 10;
    if($("#acceptant").is(':checked')) this.agree = true;
    this.ready();
};
Charge.prototype.ready = function(){
    var li_b= $(".payment a");
    _this = this;
    li_b.click(function(){
        $(this).addClass("now");
        $(this).siblings().removeClass("now");
        _this.paytype = $(this).attr('type');
    });
    var li_a= $(".amount a");
    li_a.click(function(){
        $(this).addClass("now");
        $(this).siblings().removeClass("now");
        _this.amout = parseInt($(this).html());
        $("#coin").html(_this.amout*10 + '个');
    });
    $('#acceptant').click(function(){
        if($(this).is(':checked')){
            _this.agree = true;
        }else{
            _this.agree = false;
        }
    });
    var write = document.getElementById('write');
    if(write){
        write.addEventListener('change',function(){
            var value = write.value;
            if(!/^\d+$/.test(value)){
                $(".error_font").show();
                $(".error_font").html('*请输入整数金额');
                return
            }else{
                $(".error_font").hide();
                li_a.siblings().removeClass("now");
                _this.amout = parseInt(value);
                $("#coin").html(_this.amout*10 + '个');
            }
        });
    }

    var rechBtn = document.getElementById('rechBtn');
    if(rechBtn){
        rechBtn.addEventListener('click',function(){
            _this.postPayCharge();
        });
    }
};
Charge.prototype.postPayCharge = function(){
    if(!this.agree){
        $(".error_font").show();
        $(".error_font").html('*请先阅读3500充值服务协议');
        return false;
    }
    if(this.amout<1){
        $(".error_font").show();
        $(".error_font").html('*请选择支付金额');
        return false;
    }else if(this.amout>10000){
        $(".error_font").show();
        $(".error_font").html('*最大金额不得超过10000元');
        return false;
    };
    $(".error_font").hide();

    var param = {
        method : "POST",
        url : "/order/dopay.html",
        data : 'money='+this.amout+'&paytype='+this.paytype,
        type : 'json'
    };

    var _this = this;
    _this.member.ajax(param,function(res){
        if(res.status == 1){
            window.open(res.url);
            _this.showQuery(res.invoice);
        }else{
            $(".error_font").show();
            $(".error_font").html(res.msg);
        }
    });
};
Charge.prototype.showQuery = function(invoice){

    var result_pop = document.getElementById('result_pop');
    if(result_pop) result_pop.parentElement.removeChild(result_pop);
    var div,div1,span,p;
    div = document.createElement('div');
    div.className = 'div_pop result_pop';
    div.id = 'result_pop';
    div.style = 'display:block';
    span = document.createElement('span');
    span.className = 'pop_close';
    div.appendChild(span);
    p = document.createElement('p');
    p.className = 'pop-tit';
    p.innerHTML = '操作提示';
    div.appendChild(p);
    div1 = document.createElement('div');
    div1.className = 'pop-con';

    div1.innerHTML = '<i class="warn-ico"></i><p>请在新打开的页面上完成付款</p> ' +
        '<div class="info"><span>1. 付款完成前请不要关闭此窗口。</span><span>2. 付款完成后请根据情况点击以下按钮。</span></div> ' +
        '<div class="warn-btn"> <a  href="javascript:void(0);" id="complete">已完成付款</a><a href="javascript:void(0);" id="problem">付款遇到问题</a></div>';

    div.appendChild(div1);
    document.getElementsByTagName("body")[0].appendChild(div);
    span.addEventListener('click',function(){
        div.parentElement.removeChild(div);
        $('.cover').hide();
        $('#result_pop').remove();
    });

    var complete = document.getElementById('complete');
    if(complete){
        $("#complete").live('click',function(){
            check();
        });
    };

    var problem = document.getElementById('problem');
    if(problem){
        $("#problem").live('click',function(){
            $('.cover').hide();
            $('#result_pop').remove();
        });
    }

    $('.cover').show();
    $('#result_pop').show();

    var url='';
    if(this.paytype == 1){
        url = '/alipay/query.html';
    }else if(this.paytype == 2){
        url = '/wx/query.html';
    };
    var check = function(){
        $.post(url,{invoice:invoice},function(data){
            if(data && data.status == 1){
                div1.innerHTML = '<i></i><p>充值成功！</p>';
            }else{
                if(document.getElementById('result_pop')){
                    setTimeout(check, 1000);
                }
            }
        });
    };
    check();
};

Comment = function(member){
    this.member = member;
    this.isLogin = false;
    this.commentid = null;
    this.replyid = null;
    this.supportid = null;
    this.memberid = null;
    this.timestamp = null;
    this.sign = null;
    this.page = 1;
    this.init();
};
Comment.prototype.init = function(){
    this.commentid = $('#comment_box').attr('data');
    this.isLogin = this.member.islogin;
    this.memberid = this.member.memberid;
    this.loading();
    this.ready();
};
Comment.prototype.ready = function(){
    var _this = this;
    var issuebtn = document.getElementById('issuebtn');
    if(issuebtn){
        issuebtn.addEventListener('click',function(){
            if(!_this.isLogin){
                $(".login_pop, .cover").show();
                _this.member.return = window.location.href;
                _this.member.loginInit();
                return false;
            }
            var context = document.getElementById("public_saytext").value;
            if(context.length < 1){
                alert('请输入评论内容！');
                return false;
            };
            if($("#cmt-upimg").length>0){
                context = '<p>'+context+'</p><p>';
                $("#cmt-upimg").find("img").each(function(i){
                    context += '<img src="'+ $(this).attr('src')+'">';
                });
                context += '</p>';
            };

            $.post("/comment/post.html",{'commentid':_this.commentid,'context':context,'memberid':_this.memberid,'sign':_this.sign},function(res){
                if(res.status==1 || res.status==-2){
                    window.location.reload();
                }else{
                    alert('请输入评论内容！');
                }
            });
        });
    }
    this.getSign();
};
Comment.prototype.getSign = function(){
    if(!this.commentid || !this.memberid) return;
    var _this = this;
    $.post('/comment/getsign.html',{'commentid':this.commentid,'memberid':this.memberid},function(data){
        if(data.status==1){
            _this.sign =data.sign;
            _this.timestamp = data.time;
            var uploadimg = document.getElementById('img_upload');
            if(uploadimg) _this.uploadImg();;
        }
    });
}
Comment.prototype.loading = function(){
    if(!this.commentid) return;
    var _this = this;
    $.getJSON('/comment/list.html',{'commentid':this.commentid},function(data){
        if(data.status==1){
            var html = '';
            $.each(data.list,function(i,r){
                html += '<div class="block-cont clearfix">' +
                    '<div class="cont-head"><em></em><img src="'+ r.headimg +'"></div>' +
                    '<div class="cont-msg" id="cont-msg-'+ r.id +'">' +
                    '<div class="wrap-user"><a class="user-zan fr supportid" id="support_'+ r.supportid +'" data="'+ r.supportid +'" href="javascript:void(0)">'+ r.support +'</a> <span class="user-name">'+ r.username +'</span> <span class="user-time">发表于 '+ r.inputtime +'</span></div>' +
                    '<div class="wrap-issue">'+ r.content +'</div> ' +
                    r.reply +
                    '<div class="wrap-action"><a class="click-reply" data="'+ r.replyid +'" href="javascript:void(0)">回复</a></div>' +
                    '</div>' +
                    '</div>';
            });
            if(data.total>=20){ document.getElementById('cmt-list-more').style.display = 'block';};
            $("#cmt-list-block").append(html);
            $("#total").html(data.total);
            _this.commentReply();
            _this.commentMore();
            _this.commentSupport();
        }else{
            $("#list-comment-empty").show();
            $("#cmt-list").hide();
        }
    });
};
Comment.prototype.uploadImg = function(){
    var _this = this;
    $("#img_upload").live("click",function(){
       if(!_this.isLogin){
           alert('请先登录');
           return false;
       }
    });
    if(!this.isLogin) return false;
    $("#img_upload").uploadify({
        'fileSizeLimit' : '2048KB',
        'buttonClass' : 'img_upload',
        'buttonText' : '<i></i>上传图片',
        'formData'     : {
            'commentid': _this.commentid,
            'memberid' : _this.memberid,
            'sign'     : _this.sign
        },
        'swf'      : '/statics/home/uploadify.swf',
        'uploader' : '/comment/uploadimg.html',
        'uploadLimit' : 4,
        'multi'    : false,
        'onUploadError' : function(file, errorCode, errorMsg, errorString) {
            alert(errorMsg);
        },
        'onUploadSuccess' : function(file, data, response) {
            data = JSON.parse(data);
            if(data.status==1){
                var html = '<div class="upimg-item"><span class="upclose"></span><img src="'+ data.url +'"></div>';
                $("#cmt-upimg").append(html);
            }else{
                alert(data.msg);
            }
        }
    });
    $(".upclose").live("click",function(){
        $(this).closest('.upimg-item').remove();
    });
};
Comment.prototype.commentReply = function (){
    var _this = this;
    $(".click-reply").live('click',function(){
        if(!_this.isLogin){
            alert('请先登录！');
            return false;
        }
        $(this).addClass('click-now');
        _this.replyid = $(this).attr('data');

        var postrpbox = document.getElementById('post-rpbox_'+_this.replyid);
        if(postrpbox){
            $("#post-rpbox_"+_this.replyid).remove();
        }else{
            var html = '<div class="post-rpbox" id="post-rpbox_'+ _this.replyid +'"><div class="post-rpbox-in"><div class="rpbox-lf"><input type="text" name="context" id="context" autocomplete="off" class="user-input"></div><div class="rpbox-gh"><a href="javascript:void(0)"><button class="btn-hf" id="btn-hf" node-type="issue">回复</button> </a></div></div></div>';
            $(this).closest('.cont-msg').append(html);
            var btnhf = document.getElementById('btn-hf');
            btnhf.addEventListener('click',function(){
                _this.commentPostReply();
            });
        }
    });
};
Comment.prototype.commentPostReply = function(){
    if(!this.replyid) return ;
    var context = document.getElementById('context').value;
    if(context == ''){
        alert('回复内容不能为空');
        return false;
    }
    $.post('/comment/reply.html',{'commentid':this.commentid,'memberid':this.memberid,'replyid':this.replyid,'context':context,'sign':this.sign},function(data){
        if(data.status==1){
            window.location.reload();
        }else{
            alert(data.msg);
        }
    });
};
Comment.prototype.commentSupport = function(){
    var _this = this;
    $(".supportid").live('click',function(){
        if(!_this.isLogin){
            alert('请先登录！');
            return false;
        }
        var supportid = $(this).attr('data');
        var num = $(this).html();

        $.post('/comment/support.html',{'commentid':_this.commentid,'memberid':_this.memberid,'supportid':supportid,'sign':_this.sign},function(res){
            if(res.status ==1){
                $("#support_"+ supportid).html(parseInt(num)+1);
            }else{
                alert(res.msg);
            }
        });
    });
};
Comment.prototype.commentMore = function(){
    var  cmtlistmore = document.getElementById('cmt-list-more');
    var _this = this;
    cmtlistmore.addEventListener('click',function(){
        var page = $("#cmt-list-more").attr('page');
        var pagesize = $("#cmt-list-more").attr('pagesize');

        $.getJSON('/comment/list.html',{'commentid':_this.commentid,'page':page,'pagesize':pagesize},function(data){
            if(data.status==1){
                var html = '';
                $.each(data.list,function(i,r){
                    html += '<div class="block-cont clearfix">' +
                        '<div class="cont-head"><em></em><img src="'+ r.headimg +'"></div>' +
                        '<div class="cont-msg" id="cont-msg-'+ r.id +'">' +
                        '<div class="wrap-user"><a class="user-zan fr supportid" id="support_'+ r.supportid +'" data="'+ r.supportid +'" href="javascript:void(0)">'+ r.support +'</a> <span class="user-name">'+ r.username +'</span> <span class="user-time">发表于 '+ r.inputtime +'</span></div>' +
                        '<div class="wrap-issue">'+ r.content +'</div> ' +
                        r.reply +
                        '<div class="wrap-action"><a class="click-reply" data="'+ r.replyid +'" href="javascript:void(0)">回复</a></div>' +
                        '</div>' +
                        '</div>';
                });
                $("#cmt-list-block").append(html);
                page++;
                $("#cmt-list-more").attr('page',page);
            }else{
                $("#cmt-list-more a").html(data.msg);
                $("#cmt-list-more").fadeOut(3000);
            }
        });
    })
};



