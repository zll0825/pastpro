(function() {
    var a = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz".split("");
    Math.uuid = function(b, e) {
        var g = a,
            d = [],
            c;
        e = e || g.length;
        if (b) {
            for (c = 0; c < b; c++) {
                d[c] = g[0 | Math.random() * e]
            }
        } else {
            var f;
            d[8] = d[13] = d[18] = d[23] = "-";
            d[14] = "4";
            for (c = 0; c < 36; c++) {
                if (!d[c]) {
                    f = 0 | Math.random() * 16;
                    d[c] = g[(c == 19) ? (f & 3) | 8 : f]
                }
            }
        }
        return d.join("")
    }
})();
function Base64() {
    _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
    this.encode = function(c) {
        var a = "";
        var k, h, f, j, g, e, d;
        var b = 0;
        c = _utf8_encode(c);
        while (b < c.length) {
            k = c.charCodeAt(b++);
            h = c.charCodeAt(b++);
            f = c.charCodeAt(b++);
            j = k >> 2;
            g = ((k & 3) << 4) | (h >> 4);
            e = ((h & 15) << 2) | (f >> 6);
            d = f & 63;
            if (isNaN(h)) {
                e = d = 64
            } else {
                if (isNaN(f)) {
                    d = 64
                }
            }
            a = a + _keyStr.charAt(j) + _keyStr.charAt(g) + _keyStr.charAt(e) + _keyStr.charAt(d)
        }
        return a
    };
    this.decode = function(c) {
        var a = "";
        var k, h, f;
        var j, g, e, d;
        var b = 0;
        c = c.replace(/[^A-Za-z0-9\+\/\=]/g, "");
        while (b < c.length) {
            j = _keyStr.indexOf(c.charAt(b++));
            g = _keyStr.indexOf(c.charAt(b++));
            e = _keyStr.indexOf(c.charAt(b++));
            d = _keyStr.indexOf(c.charAt(b++));
            k = (j << 2) | (g >> 4);
            h = ((g & 15) << 4) | (e >> 2);
            f = ((e & 3) << 6) | d;
            a = a + String.fromCharCode(k);
            if (e != 64) {
                a = a + String.fromCharCode(h)
            }
            if (d != 64) {
                a = a + String.fromCharCode(f)
            }
        }
        a = _utf8_decode(a);
        return a
    };
    _utf8_encode = function(b) {
        b = b.replace(/\r\n/g, "\n");
        var a = "";
        for (var e = 0; e < b.length; e++) {
            var d = b.charCodeAt(e);
            if (d < 128) {
                a += String.fromCharCode(d)
            } else {
                if ((d > 127) && (d < 2048)) {
                    a += String.fromCharCode((d >> 6) | 192);
                    a += String.fromCharCode((d & 63) | 128)
                } else {
                    a += String.fromCharCode((d >> 12) | 224);
                    a += String.fromCharCode(((d >> 6) & 63) | 128);
                    a += String.fromCharCode((d & 63) | 128)
                }
            }
        }
        return a
    };
    _utf8_decode = function(a) {
        var b = "";
        var d = 0;
        var e = c1 = c2 = 0;
        while (d < a.length) {
            e = a.charCodeAt(d);
            if (e < 128) {
                b += String.fromCharCode(e);
                d++
            } else {
                if ((e > 191) && (e < 224)) {
                    c2 = a.charCodeAt(d + 1);
                    b += String.fromCharCode(((e & 31) << 6) | (c2 & 63));
                    d += 2
                } else {
                    c2 = a.charCodeAt(d + 1);
                    c3 = a.charCodeAt(d + 2);
                    b += String.fromCharCode(((e & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                    d += 3
                }
            }
        }
        return b
    }
};

function bi_setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";domain=.niwodai.com"+ ";" + expires;
}

function bi_getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return null;
}

function getUuid(id){
    if(bi_getCookie(id)!=null){
        return bi_getCookie(id);
    }else {
        var temp=Math.uuid();
        bi_setCookie(id,temp,730);
        return temp;
    }
}
function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return decodeURI(r[2]);
    return null;
}
function getChannel(){
    var source = getQueryString('utm_source');
    var medium = getQueryString('utm_medium');
    var campaign = getQueryString('utm_campaign');
    var content = getQueryString('utm_content');
    var term = getQueryString('utm_term');
    var cid = getQueryString('cid');
    if(!cid){
        cid = getQueryString('nwd_ext_aid')
    };
    if(!cid){
        cid = getQueryString('extsid')
    };
    var c="na";
    var m;
    if(source==""||source==null) {source=c}
    if(medium==""||medium==null){medium=c}
    if(campaign==""||campaign==null){campaign=c}
    if(content==""||content==null){content=c}
    if(term==""||term==null){term=c}
    if(cid==""||cid==null){cid=c}
    m=source+"|"+medium+"|"+campaign+"|"+content+"|"+term+"|"+cid;
    return encodeURI(m);
}
function getSrc(){
    var url=window.location.host;
    if (url.indexOf("m.niwodai.com")>-1) {
        return "wap";
    } else {
        return "pc";
    }
}

function clickFunc(id,url){
    url+="&buttonid="+id;
    url=encodeURI(url);
    $("#"+id).click(function(){
        $.ajax({
            type: "get",
            url: url,
            async: true,
            dataType: 'jsonp',
            jsonpCallback: "cb"
        });
    });
}

function ajaxReq(url){
    url=encodeURI(url);
    $.ajax({
        type: "get",
        url: url,
        async: true,
        dataType: 'jsonp',
        jsonpCallback: "cb"
    });
}
function cb(data) {
}

var headerUrl;
var protocol = document.location.protocol.toLowerCase();
if(protocol == "https:"){
    headerUrl="https://collector.niwodai.com/?";
}else{
    headerUrl="http://collector.niwodai.net/?";
}

var uuid,cururl,referer,channel,sw,sh,bw,bh,isSetCookie,pvUrl,src,userid,pagetype;
src=getSrc();
uuid = getUuid('UNQID');
cururl = document.location.href.replace(/&/g,'~@~');
referer = document.referrer.replace(/&/g,'~@~');
channel=getChannel();
sw=screen.width;
sh=screen.height;
bw = document.body.clientWidth;
bh = document.body.clientHeight;
isSetCookie=window.navigator.cookieEnabled;


function buryPoint(userid,pagetype){
	userid = userid;
	pagetype = pagetype;
    var pvstr="uuid="+uuid+"&uid="+userid+"&t=pageview&src="+src+"&cid="+ encodeURIComponent(channel)+"&sr="+sw+"_"+sh+""+"&bp="+bw+"_"+bh+
        "&cookie="+isSetCookie+"&refer="+encodeURIComponent(referer)+"&cururl="+encodeURIComponent(cururl)+"&pagetype="+encodeURIComponent(pagetype)+"&time="+new Date().valueOf();
    pvUrl=headerUrl+pvstr;
    ajaxReq(pvUrl);
}
function transFunc(userid,pagetype,transtype,amount){
    var transUrl;
    var transStr="uuid="+uuid+"&uid="+userid+"&t=transaction&src="+src+"&cid="+ encodeURIComponent(channel)+"&sr="+sw+"_"+sh+""+"&bp="+bw+"_"+bh+
        "&cookie="+isSetCookie+"&refer="+encodeURIComponent(referer)+"&cururl="+encodeURIComponent(cururl)+"&pagetype="+encodeURIComponent(pagetype)+"&time="+new Date().valueOf()+"&amount="+amount+
        "&transtype="+transtype;
    transUrl=headerUrl+transStr;
    ajaxReq(transUrl);
}

// $(".onlineqq").mousedown(function(){
//     var buttonStr="uuid="+uuid+"&uid="+userid+"&t=button&src="+src+"&cid="+ channel+"&sr="+sw+"_"+sh+""+"&bp="+bw+"_"+bh+
//         "&cookie="+isSetCookie+"&refer="+referer+"&cururl="+cururl+"&pagetype="+encodeURI(pagetype)+"&time="+new Date().valueOf()+"&buttonid=onlineQQService";
//     var buttonUrl=headerUrl+buttonStr;
//     $.ajax({
//         type: "get",
//         url: buttonUrl,
//         async: true,
//         dataType: 'jsonp',
//         jsonpCallback: "cb"
//     });
// });

$(".hover_sina").click(function(){
    var buttonStr="uuid="+uuid+"&uid="+userid+"&t=button&src="+src+"&cid="+ encodeURIComponent(channel)+"&sr="+sw+"_"+sh+""+"&bp="+bw+"_"+bh+
        "&cookie="+isSetCookie+"&refer="+encodeURIComponent(referer)+"&cururl="+encodeURIComponent(cururl)+"&pagetype="+encodeURIComponent(pagetype)+"&time="+new Date().valueOf()+"&buttonid=sinaWeiBo";
    var buttonUrl=headerUrl+buttonStr;
    $.ajax({
        type: "get",
        url: buttonUrl,
        async: true,
        dataType: 'jsonp',
        jsonpCallback: "cb"
    });
});