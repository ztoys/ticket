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
