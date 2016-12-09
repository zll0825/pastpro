/* @update: 2016-2-16 13:14:14 */
var assetsCommon;
assetsCommon = {
},
// 首页公告
assetsCommon.hornTip = function () {
    $(".ggClose").click(function(){
        $(".site_msg").slideUp();
    })
},
//用户头像
assetsCommon.myPhoto = function () {
    $(".myphoto").hover(function(){
        $(this).children("span").animate({top:'0px', left:'0px'},"80")      
        },function(){
            $(this).children("span").animate({top:'94px', left:'0px'},"10")
            }   
    )
}

assetsCommon.ui_lineMove = function (t, e, n, s, i) {
    //console.log(e-1);
    return 0 === s ? t.find('.ui-select-listBox-l-blue').css('left', e * n + 20).width(e/1.5)  : (null == s && (s = 200), t.find('.ui-select-listBox-l-blue').stop().animate({
        left: e * n + 20
    }, s, function () {
        return i ? i()  : void 0
    }))
},
assetsCommon.ui_selectListBox = function (t, e) {
    //alert()
    var n;
    return n = this,
    $('.ui-select-listBox').each(function () {
        var s,
        i,
        o;
        return s = $(this),
        o = $(this).find('.ui-select-listBox-list').outerWidth(),
        i = $(this).find('.ui-select-listBox-list--now').index(),
        n.ui_lineMove(s, o, i, 0),
        $(this).find('.ui-select-listBox-list').hover(function () {
            var i;
            return i = $(this).index(),
            n.ui_lineMove(s, o, i, e),
            $(this).click(function () {
                return t ? ($(this).siblings('.ui-select-listBox-list').removeClass('ui-select-listBox-list--now'), $(this).addClass('ui-select-listBox-list--now'), t(i))  : void 0
            })
        }),
        $(this).mouseleave(function () {
            var t;
            return t = $(this).find('.ui-select-listBox-list--now').index(),
            n.ui_lineMove(s, o, t, e)
        })
    })
},
assetsCommon.setVipRankPop = function () {
    var t,
    e,
    n;
    return t = $('.j_vipRankIcon'),
    n = '.vipRankPop',
    e = 0,
    t.bind('mouseenter', function () {
        //if($(this).parent().parent().hasClass('curron-now'))
        var t,
        s,
        i,
        o;
        return $(n).length > 0 && $(n).remove(),
        i = '<div class="vipRank-pop vipRankPop" style="z-index: 10001;"><em class="vipRank-pop-ico vip-icon"></em><div class="vipRank-pop-content fc_9"></div></div>',
        t = $(i),
        l = t.find('.vipRank-pop-content'),
        z = $(this).parent().parent().hasClass('curron-now'),
        z ? l.html($(this).attr('data-stu')):l.html($(this).attr('data-msg')),
        z ? p = 420 :p = 220,
        z ? l.css('width','240'):l.css('width','120'),
        o = $(this).offset().top,
        s = $(this).offset().left,
        console.log(p),
        w = $(t.find('.vipRank-pop-content')).width(),
        t.css({
            top: o - 50,
            left: s - w/2+8,
            opacity: 0
        }),
        $('body').append(t),
        setTimeout(function () {
            return t.css({
                top:o-60,
                opacity: 1
            })
        }, 10),
        clearTimeout(e),
        t.bind('mouseleave', function () {
            return e = setTimeout(function () {
                return $(n).remove()
            }, 500)
        }),
        t.bind('mouseenter', function () {
            return clearTimeout(e)
        })
    }).bind('mouseleave', function () {
        return e = setTimeout(function () {
            return $(n).remove()
        }, 500)
    })
}
assetsCommon.setUserSecurityPop = function () {
    var t,
    e,
    n;
    return t = $('.j_userSecurityIcon'),
    n = '.j_userSecurityPop',
    e = 0,
    t.bind('mouseenter', function () {
        var t,
        s,
        i,
        o;
        return $(n).length > 0 && $(n).remove(),
        i = '<div class="user-security-pop j_userSecurityPop" style="z-index: 10001;"><em class="user-security-pop-ico"></em><div class="user-security-pop-content"></div></div>',
        t = $(i),
        t.find('.user-security-pop-content').html($(this).attr('data-msg')),
        o = $(this).offset().top,
        s = $(this).offset().left,
        t.css({
            top: o + 50,
            left: s - 95,
            opacity: 0
        }),
        $('body').append(t),
        setTimeout(function () {
            return t.css({
                top: o + 35,
                opacity: 1
            })
        }, 10),
        clearTimeout(e),
        t.bind('mouseleave', function () {
            return e = setTimeout(function () {
                return $(n).remove()
            }, 500)
        }),
        t.bind('mouseenter', function () {
            return clearTimeout(e)
        })
    }).bind('mouseleave', function () {
        return e = setTimeout(function () {
            return $(n).remove()
        }, 500)
    })
},

assetsCommon.setUserSecurity = function (obj) {
    var t,
    e,
    n;
    return n = this,
    t = $('#assetUserWelcome'),
    e = $('<div class="u-security pad_t10"></div>'),
    bb();
    function bb () {
        var s ={
              //info:{ isRealName :true,  isBindPhone:true,   level:1 ,phoneNoShort:"130****9176",isRealMail:true, isRealBank:false}
            info:obj
        } ;

        var hlt = window.location.host;
        hlt += "/member/safetyLevel.do?doWhat=sl";
        var hp = document.location.protocol;
        hlt = hp + "//" + hlt;
        
        //账户中心银行卡管理跳转地址
        var hlt1 = window.location.host;
        hlt1 += "/member/bindCardInfo.do";
        hlt1 = hp+"//"+hlt1;

            var i,
            o,
            r,
            u,
            a,
            c,
            l,
            p,
            h,
            d,
            f,
            y,
            k,
            b,
            m,
            $,
            v;
            return 'undefined' != typeof s ? (y = "", k = "", b = "", h = '', p = '', c = '', a = '', r = '', o = '', f = hlt, u = '', d = hlt, v = hlt, l = '', $ = hlt, i = hlt, s.info.isRealName ? (u = d, p = '您已通过实名认证。<a class=\'font-link\' href=\'' + u + '\' target=\'_blank\'>查看详情</a>')  : (h = 'risky', u = v, p = '完成实名认证！<a class=\'font-link\' href=\'' + u + '\' target=\'_blank\'>立即认证</a>'),s.info.repwdFlag ? (u = d, y = '您已完成密码验证。<a class=\'font-link\' href=\'' + u + '\' target=\'_blank\'>查看详情</a>')  : (k = '', u = v, y = '完成密码验证！<a class=\'font-link\' href=\'' + u + '\' target=\'_blank\'>立即验证</a>'), s.info.isBindPhone ? (l = i, a = '您已绑定手机' + s.info.phoneNoShort + '。<a class=\'font-link\' href=\'' + l + '\' target=\'_blank\'>更改</a>')  : (c = 'risky', l = $, a = '绑定手机号，可及时接受异常通知，快速找回密码。<a class=\'font-link\' href=\'' + l + '\' target=\'_blank\'>立即绑定</a>'),s.info.isRealBank ? (u = d, o = '您已绑定银行卡。<a class=\'font-link\' href=\'' + hlt1 + '\' target=\'_blank\'>查看详情</a>')  : (r = 'risky', u = v, o = '完成银行卡绑定！<a class=\'font-link\' href=\'' + u + '\' target=\'_blank\'>立即认证</a>'), m = '<a class="j_userSecurityIcon u-security-icon u-security-icon-person ' + h + '" href="' + u + '" target="_blank" data-msg="' + p + '"></a>\n<a class="j_userSecurityIcon u-security-icon u-security-icon-phone ' + c + '" href="' + l + '" target="_blank" data-msg="' + a + '"></a>\n<a class="j_userSecurityIcon u-security-icon u-security-icon-bank ' + r + '" href="' + f + '" target="_blank" data-msg="' + o + '"></a>\n<a class="j_userSecurityIcon u-security-icon u-security-icon-pwd ' + k + '" href="' + f + '" target="_blank" data-msg="' + y + '"></a>', e.html(m), t.html(e), n.setUserSecurityPop())  : void 0
        }    
},

// 我的礼品 点击升降序
assetsCommon.getSort = function () {
    $('.getsort').click(function () {
        //console.log($(this).children());
        $(this).addClass('active');
        $(this).siblings('a').removeClass('active')
        if($(this).children('em').hasClass('icon_user_shang')||$(this).children('em').hasClass('icon_user_shang1'))
        {
            $(this).addClass('on').removeClass('shang');
            $(this).siblings().addClass('shang').removeClass('on');
            $(this).children('em').addClass('icon_user_desc').removeClass(' icon_user_shang icon_user_shang1');
            $(this).siblings;
        }
        else
        {
            $(this).children('em').addClass('icon_user_shang1').removeClass(' icon_user_desc icon_user_shang');
        }
    })
}
//输入卡号判断银行
assetsCommon.zoomCardNum = function () {
    $('.ui-input-cardNo').keyup(function (t) {
        var e = $(this).val();
        37 != t.which && 39 != t.which && 67 != t.which && 17 != t.which && ($(this).val($(this).val().replace(/\D/g, '')), $(this).val() || $(this).val(''));
        var n = '';
        e = $(this).val() + '';
        for (var i = 0; i < e.length; i++) i % 4 == 0 && 0 != i && (n += '&nbsp;'),
        n += e.substr(i, 1);
        var s = $(this).parents('.bank-info').find('.magnifier');
        s.html(n)
    }).focus(function () {
        $(this).parents('.bank-info').addClass('enty-number-focus')
    }).blur(function () {
        $(this).parents('.bank-info').removeClass('enty-number-focus')
    })
},
//模拟表单placeholder
assetsCommon.placeHold = function () {
    $(".input-text input").each(function() {
        var thisVal = $(this).val();
        //判断文本框的值是否为空，有值的情况就隐藏提示语，没有值就显示
        if (thisVal != "") {
            $(this).siblings("span").hide();
        } else {
            $(this).siblings("span").show();
        }
        //输入框聚焦效果
        $(this).focus(function() {
            $(this).siblings("span").hide();
            $(".input-text").removeClass("input-text-cur");
            $(this).parent().addClass("input-text-cur");
            $(this).parent().siblings(".point").show();
        }).blur(function() {
            var val = $(this).val();
            if (val != "") {
                $(this).siblings("span").hide();
            } else {
                $(this).siblings("span").show();
            }
        });
    });    
}
//鼠标浮动显示提示框
assetsCommon.tipPop = function () {
    var e;
    return e = null,
    $('.tipBox').on({
        mouseenter: function () {
            return clearTimeout(e),
            $(this).find('.tipBox-con').css('top', function () {
                return 10 - $(this).innerHeight() / 2
            }),
            $('.tipBox-mark').removeClass('tipBox-con-hover'),
            $(this).addClass('tipBox-con-hover')
        },
        mouseleave: function () {
            return e = setTimeout(function (e) {
                return function () {
                    return $(e).removeClass('tipBox-con-hover')
                }
            }(this), 200)
        }
    }, '.tipBox-mark')
},
assetsCommon.init = function () {    
    this.hornTip();
    this.myPhoto();
    this.getSort();
    this.zoomCardNum();
    this.placeHold();
    this.tipPop();
    this.setVipRankPop()
},
assetsCommon.init2 = function (obj) {
    this.setUserSecurity(obj);
},
$(function () {
    return assetsCommon.init()
});

//当加载页面时，左边树要相应选中
var lt = window.location.href;
var issueSignIndex = lt.indexOf("?");
lt = issueSignIndex != -1 ? lt.substring(0,issueSignIndex) : lt;
$(".side_nav .nav_name a[href='"+lt+"']").closest("dl").addClass("navcurron").siblings().removeClass("navcurron");

//页面中 大小写 金额处理，只处理  <span class="dlDecimal"><em></em><i></i><em></em></span> 格式的
$(function(){
    dealwithDecimal();
});

function dealwithDecimal(){
    $(".dlDecimal").each(function(){
        var em =  $(this).find("em:eq(0)");
        if(em){
            var tm = $.trim($(em).text());
            var ix = tm.indexOf(".");
            if(ix > -1){
                var leftStr = tm.substring(0,ix);
                var rightStr = tm.substring(ix);
                $(em).text(leftStr);
                $(this).find("i").text(rightStr);
            }           
            
        }else{
            //不处理
        }
        $(".dlDecimal").show();
    });
}