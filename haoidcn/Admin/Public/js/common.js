/**
 * 时间戳转换
 * @param {int} timestamp
 * @returns {string}
 */
function add0 (m) {
    return m<10?'0'+m:m 
}
function formatTimeStamp (timestamp) {
    if (!timestamp) {
        return '';
    }
    if (typeof timestamp == "string") {
        timestamp = parseInt(timestamp);
    }
    //时间戳是整数，否则要parseInt转换
    var time = new Date(timestamp);
    var y = time.getFullYear();
    var m = time.getMonth()+1;
    var d = time.getDate();
    var h = time.getHours();
    var mm = time.getMinutes();
    var s = time.getSeconds();
    return y+'-'+add0(m)+'-'+add0(d)+' '+add0(h)+':'+add0(mm)+':'+add0(s);
}

/**
 * bootstrap 隐藏alert
 */
jQuery(function(){
    jQuery(".alert").find(".close").on("click", function(){
        jQuery(this).parents(".alert").hide();
    })
})

/**
 * 返回上一页（刷新缓存）
 */
function goBack(){
    window.location.href=document.referrer;
}

/**
 * alert 弹出提示
 */
function alertSuccess(){
	var alertDom = jQuery("#alertSuccess");
	alertDom.show();
	if (window.alertTimeOut) {
		clearTimeout(window.alertTimeOut);
	}
	window.alertTimeOut = setTimeout(function(){
		alertDom.hide();
	}, 5000);
}
function alertError(str){
	var alertDom = jQuery("#alertError");
	jQuery("#alert_error_text").text(str);
	alertDom.show();
	if (window.alertTimeOut) {
		clearTimeout(window.alertTimeOut);
	}
	window.alertTimeOut = setTimeout(function(){
		alertDom.hide();
	}, 5000);
}

/**
 * 获取URL?后面的参数
 */
function GetURLParam() {  
    var url = location.search; //获取url中"?"符后的字串  
    var theRequest = new Object();  
    if (url.indexOf("?") != -1) {  
       var str = url.substr(1);  
       strs = str.split("&");  
       for(var i = 0; i < strs.length; i ++) {  
          theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);  
       }  
    }  
    return theRequest;  
 }  