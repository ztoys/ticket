<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo ($main["w_title"]); ?></title>
<!-- header binge -->
<link href="<?php echo (C("URL")); ?>baidubianjiqi/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">



<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-timepicker.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/responsive-tables.css">


<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/responsive-tables.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.alerts.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/elements.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.dataTables.min.js"></script>


<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/unify.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>baidubianjiqi/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo (C("URL")); ?>baidubianjiqi/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo (C("URL")); ?>baidubianjiqi/umeditor.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>baidubianjiqi/lang/zh-cn/zh-cn.js"></script>

<style type="text/css">
    body {
        background: #F5F5F5;
    }
	a:hover{
		text-decoration:none;
    }
    .leftpanel{
        display: none;
    }
    .rightpanel{
        margin: 0;
    }
    .messageright{
        margin: 0;
        border-top: 1px solid #0866c6;
        border-left: 1px solid #0866c6;
    }
    .comments li:last-child .comment p{margin-top:15px;}
    .modal-comment form input[type='radio']{
        vertical-align: -2px;
    }
    .modal-comment form .label-title{
        display: inline-block;
        width: 150px;
    }    
    .modal-comment form input[type='radio']{
        margin-left: 10px;
    }    
</style>
</head>

<body>

<div class="mainwrapper">
    <!-- header binge -->
    

<div class="mainwrapper">
    <div class="header">
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="count"></span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">工单管理</span>
                    </a> -->
                    <ul class="dropdown-menu">
                        <li class="nav-header">工单管理</li>
                        <?php if($data["limits"] == '3'): ?><li><a href="<?php echo U('Client/forms');?>"><span class="icon-tasks"></span>创建工单</a></li><?php endif; ?>
                        <li><a href="<?php echo U('Client/messages?case=dai');?>"><span class="icon-tasks"></span> 待处理的工单 </a></li>
                        <li><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="icon-tasks"></span> 处理中的工单 </a></li>
                        <li><a href="<?php echo U('Client/messages?case=yi');?>"><span class="icon-tasks"></span> 已处理的工单</a></li>
                        <!-- <?php if($data["limits"] == '3'): ?><li><a href="<?php echo U('Client/messages?case=cao');?>"><span class="icon-tasks"></span> 草稿箱 </a></li><?php endif; ?> -->
                    </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <div class="userinfo">
                            <h5>
                                <?php echo (session('userid')); ?>
                                <small><?php echo (session('email')); ?></small>
                                <a style="color: #FFF;" href="<?php echo U('Index/editprofile');?>">修改资料</a>
                                <a style="color: #FFF;" href="<?php echo U('Index/exit_t');?>">退出</a>
                            </h5>
                            <!-- <ul>
                                <li><a href="<?php echo U('Index/editprofile');?>">修改资料</a></li>
                                <li><a href="">帐户设置</a></li>
                                <li><a href="<?php echo U('Index/exit_t');?>">退出</a></li>
                            </ul> -->
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    <div class="leftpanel">
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            <?php if($limits == '1'): ?><!-- 管理员 -->
            	<li class="nav-header">总后台管理</li>
<!--             	<li class="active"><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-question-sign"></span> 工单</a></li> -->
				
				
            	<!-- <li <?php echo ($set["active"]); ?>><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-laptop"></span> 后台面板</a></li> -->

                <li class="dropdown <?php echo ($data01["kh_one"]); ?>"><a href=""><span class="iconfa-user"></span> 客户管理</a>
                	<ul <?php echo ($data01["kh_block"]); ?>>
                    	<li <?php echo ($data01["kh_two01"]); ?>><a href="<?php echo U('Admin/client');?>">添加客户</a></li>
                        <li <?php echo ($data01["kh_two02"]); ?>><a href="<?php echo U('Admin/c_manage');?>">管理客户</a></li>
                        <li <?php echo ($data01["kh_two03"]); ?>><a href="<?php echo U('Admin/c_status');?>">客户类型管理</a></li>
                    </ul>
                </li>
                
                <li class="dropdown <?php echo ($data["sh_one"]); ?>"><a href=""><span class="iconfa-comments"></span> 售后人员管理</a>
                	<ul <?php echo ($data["sh_block"]); ?>>
                    	<li <?php echo ($data["sh_two01"]); ?>><a href="<?php echo U('Admin/service');?>">添加售后人员</a></li>
                        <li <?php echo ($data["sh_two02"]); ?>><a href="<?php echo U('Admin/s_manage');?>">管理售后人员</a></li>
                    </ul>
                </li>
                
                <li <?php echo ($data02["sh_two01"]); ?>><a href="<?php echo U('Admin/office');?>"><span class="iconfa-comments"></span> 工作时间</a></li>
                <li <?php echo ($data03["sh_two01"]); ?>><a href="<?php echo U('Admin/config');?>"><span class="iconfa-comments"></span> 基本配置</a></li><?php endif; ?>
            
            <?php if($limits == '2'): ?><li class="nav-header">工单管理</li>
                <li <?php if($data["case"] == 'all'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=all');?>"><span class="iconfa-pencil"></span> 未指派工单</a></li>
                <li <?php if($data["case"] == 'manned'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=manned');?>"><span class="iconfa-pencil"></span> 分配给我的</a></li>
                <li <?php if($data["case"] == 'reply'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=reply');?>"><span class="iconfa-pencil"></span>等待回复</a></li>
                <li <?php if($data["case"] == 'ping'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=ping');?>"><span class="iconfa-refresh"></span>待评价</a></li>
                <li <?php if($data["case"] == 'yi'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=yi');?>"><span class="iconfa-briefcase"></span> 已关闭的工单</a></li><?php endif; ?>
            <?php if($limits == '3'): ?><li class="nav-header">工单管理</li>
            	<!-- <li <?php echo ($set["active"]); ?>><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-laptop"></span> 后台面板</a></li> -->
                <li <?php echo ($data["active01"]); ?>><a href="<?php echo U('Client/forms');?>"><span class="iconfa-pencil"></span>创建工单</a></li>
                <li <?php if($data["case"] == 'create'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=create');?>"><span class="iconfa-bookmark"></span> 我创建的工单</a></li>
                <li <?php if($data["case"] == 'reply'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=reply');?>"><span class="iconfa-table"></span> 待我回复</a></li>
                <!-- <li <?php if($data["case"] == 'dai'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=dai');?>"><span class="iconfa-pencil"></span> 待处理的工单</a></li> -->
                <!-- <li <?php if($data["case"] == 'zhong'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="iconfa-pencil"></span> 处理中的工单</a></li> -->
                <li <?php if($data["case"] == 'ping'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=ping');?>"><span class="iconfa-table"></span> 待我评价</a></li>
                <li <?php if($data["case"] == 'yi'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=yi');?>"><span class="iconfa-briefcase"></span> 已关闭的工单</a></li>
                <!-- <li <?php if($data["case"] == 'cao'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=cao');?>"><span class="iconfa-th-list"></span> 草稿箱</a></li> --><?php endif; ?>
            </ul>
        </div><!--leftmenu-->
    </div><!-- leftpanel -->
    
    <div class="maincontent">
        <div class="maincontentinner">
            <div class="messagepanel">
                <div class="messagecontent">
                    <div class="messageright" style="min-height:800px;">
                        <div class="messageview" style="<?php if($data["status"] == 3): ?>height:100%<?php endif; ?>">
                            <div class="btn-group pull-right">
                                <!-- <?php if($data["limits"] == 3 and $data["case"] == '1'): ?><a href="<?php echo U('Client/forms?type=xiu&forms='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;修改&nbsp;&nbsp;</a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="javascript:void();" onclick="del('messages-<?php echo ($main["w_id"]); ?>');" class="btn btn-danger alertdanger" style="color:#fff;">&nbsp;&nbsp;取消&nbsp;&nbsp;</a><?php endif; ?> -->
                                
                                <?php if($data["limits"] == 2 and $data["case"] == '1'): ?><a href="<?php echo U('Client/messages?type=chu&wc_sataus='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;处理&nbsp;&nbsp;</a><?php endif; ?>

                                <?php if($data["limits"] == 2 and $data["case"] == '2'): ?><a href="<?php echo U('Client/messages?type=ping&wc_sataus='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;待评价&nbsp;&nbsp;</a><?php endif; ?>
                                
                                <?php if($data["limits"] == 3 and $data["status"] != '3'): ?><!-- <a href="<?php echo U('Client/messages?type=wang&wc_sataus='.$main['w_id']);?>" class="btn btn-success alertsuccess" style="color:#fff;">&nbsp;&nbsp;关闭工单&nbsp;&nbsp;</a> -->
                                    <button type="button" data-toggle="modal" data-target="#modal_comment" class="btn btn-success alertsuccess" style="color:#fff;">&nbsp;&nbsp;关闭工单&nbsp;&nbsp;</button><?php endif; ?>
                                <?php if($data["limits"] == 3 and $data["case"] == '-1'): ?><a href="<?php echo U('Client/forms?type=xiu&forms='.$main['w_id']);?>" class="btn dropdown-toggle" style="color:#555;">&nbsp;&nbsp;编辑&nbsp;&nbsp;</a><?php endif; ?>
                            </div>
                            <h1 class="subject" style="border-bottom: 1px solid #ddd;">
                                <div>
                                    <b><?php echo ($main["w_title"]); ?></b>
                                </div>
                                <div style="margin-top: 10px;">
                                    <span class="note2"><?php echo ($main["u_uname"]); ?></span>
                                    <span class="note2" style="margin-left: 10px;"><?php echo (date("Y-m-d",$main["w_puddate"])); ?></span>
                                </div>

                            </h1>
                            
                            <!-- comment -->
                            <?php if($data["case"] == 'yi'): ?><div class="comment-wrap">
                                    <p>评价</p>
                                    <p>
                                        <span>问题是否已经解决</span>
                                        <?php switch($comment["resolve"]): case "1": ?><span>是</span><?php break;?>
                                            <?php case "0": ?><span>否</span><?php break; endswitch;?>
                                    </p>
                                    <p>
                                        <span>服务评价</span>
                                        <?php switch($comment["assess"]): case "3": ?><span>非常满意</span><?php break;?>
                                            <?php case "2": ?><span>满意</span><?php break;?>
                                            <?php case "1": ?><span>一般</span><?php break;?>
                                            <?php case "0": ?><span>不满意</span><?php break; endswitch;?>
                                    </p>
                                </div><?php endif; ?>
                            <!-- comment end -->

                            <div class="msgbody"  style="background:#fcfcfc;">
                                <div>
                                    <?php echo ($main["w_issue"]); ?>
                                </div>
                                <?php if(!empty($file_arr[0])): ?><div style="margin-left:220px;overflow:hidden;zoom:1;">
                                        <?php if(is_array($file_arr)): foreach($file_arr as $k=>$vo): ?><div id="picture<?php echo ($k); ?>">
                                                <div style="float:left;margin:5px; padding:5px;border:1px solid #ccc;" >
                                                    <div style="width:150px;height:125px;">
                                                        <img src="/ticket/Uploads/<?php echo ($vo); ?>" style="width:150px;height:100px;" />
                                                        <input type="hidden" name="photo01[]" value="<?php echo ($vo); ?>">
                                                        <div style="text-align:center;"><a href="javascript:void()" onclick="del_tp('picture<?php echo ($k); ?>');">删除</a></div>
                                                    </div>
                                                </div>
                                            </div><?php endforeach; endif; ?>
                                    </div><?php endif; ?>	
                                <?php if($data["limits"] == 3 and $data["case"] == 'zhong'): ?><p style="color:red;">【备注】：若本工单已无问题，请点击右上角的“结束”按钮，本工单将处理完毕，将会在“已处理的工单”处显示。</p><?php endif; ?>
                            </div><!--msgbody-->
                            
                            <?php if(is_array($record)): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="">
                                    <div class="msgauthor"  style="padding:0 0;border:1px solid #ddd;box-sizing:border-box;margin:10px 0;width:50%;<?php if($vo['limits'] == 2): ?>margin-left:49.85%;<?php endif; ?>">
                                    
                                        <?php if($vo['limits'] == 2): ?><h3 class="widgettitle" style="background:#FF8888;">回复<span class="date pull-right"><?php echo (date("Y-m-d H:i:s",$vo["repdate"])); ?></span></h3><?php endif; ?>
                                        
                                        <?php if($vo['limits'] == 3): ?><h3 class="widgettitle" style="background:#666;">评论<span class="date pull-right"><?php echo (date("Y-m-d H:i:s",$vo["repdate"])); ?></span></h3><?php endif; ?>
                                        
                                        <div >
                                            <div class="authorinfo"  style="margin:15px 0px 0px 15px;">
                                                <?php echo ($vo["uname"]); ?>
                                            </div><!--authorinfo-->
                                            
                                            <div class="msgbody"  style="margin-left:25px;">
                                                <?php echo ($vo["g_reply"]); ?>
                                            </div>
                                        </div>
                                    </div><!--msgauthor-->
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div name="one"></div>
                            <br/>
                            <br/>
                        </div><!--messageview-->
                        <?php if($data["status"] != '3'): ?><div class="msgreply" >
                                <form id="form01" action="<?php echo U('Client/messages');?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="insert" value="insert" />
                                    <input type="hidden" name="pid" value="<?php echo ($main["w_id"]); ?>">
                                    <p>
                                        <script type="text/plain" id="myEditor" style="width:100%;height:200px;"></script>
                                    </p>
                                    <p style="margin-top:10px;" align="right">
                                        <input type="submit"  class="btn btn-primary" value="  发送  ">
                                    </p>
                                </form>
                            </div><!--messagereply--><?php endif; ?>
                        
                    </div><!--messageright-->
                </div><!--messagecontent-->
            </div><!--messagepanel-->
            
            <!-- footer binge -->
            				<div class="footer">
                    
                </div><!--footer-->
            
            <!-- footer end -->
            
            
        </div><!--maincontentinner-->
    </div><!--maincontent-->
    
</div><!--mainwrapper-->

<!-- 评价模态框 -->
<div class="modal fade modal-comment" id="modal_comment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <form action="<?php echo U('Client/close_ticket');?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        工单评价
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="pid" value="<?php echo ($main["w_id"]); ?>">
                    <div style="zoom:1;">
                        <span>请进行服务评价</span><span style="float:right">评价后将自动关闭</span>
                    </div>
                    <p style="margin-top: 20px;">
                        <label class="left label-title">问题是否已经解决</label>
                        <div class="cell">
                            <input type="radio" name="resolve" value="1"> 是
                            <input type="radio" name="resolve" value="0"> 否
                        </div>
                    </p>
                    <p style="margin-top: 10px;">
                        <label class="left label-title">服务评价</label>
                        <div class="cell">
                            <input type="radio" name="assess" value="3"> 非常满意
                            <input type="radio" name="assess" value="2"> 满意
                            <input type="radio" name="assess" value="1"> 一般
                            <input type="radio" name="assess" value="0"> 不满意
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <button type="submit" class="btn btn-primary">
                        提交
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </form>
	</div><!-- /.modal -->
</div>

<script type="text/javascript">

    //实例化编辑器
    var um = UM.getEditor('myEditor');
    um.addListener('blur',function(){
        $('#focush2').html('编辑器失去焦点了')
    });
    um.addListener('focus',function(){
        $('#focush2').html('')
    });
    //按钮的操作
    function insertHtml() {
        var value = prompt('插入html代码', '');
        um.execCommand('insertHtml', value)
    }
    function isFocus(){
        alert(um.isFocus())
    }
    function doBlur(){
        um.blur()
    }
    function createEditor() {
        enableBtn();
        um = UM.getEditor('myEditor');
    }
    function getAllHtml() {
        alert(UM.getEditor('myEditor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UM.getEditor('myEditor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UM.getEditor('myEditor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用umeditor')方法可以设置编辑器的内容");
        UM.getEditor('myEditor').setContent('欢迎使用umeditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UM.getEditor('myEditor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UM.getEditor('myEditor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UM.getEditor('myEditor').selection.getRange();
        range.select();
        var txt = UM.getEditor('myEditor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UM.getEditor('myEditor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UM.getEditor('myEditor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UM.getEditor('myEditor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UM.getEditor('myEditor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            domUtils.removeAttributes(btn, ["disabled"]);
        }
    }
    

    function keyevent(){
        if(event.keyCode==13){
        	if($("#sou").val() != ""){
        		location.href=$("#url").val()+"/sou/"+$("#sou").val();
        	}
        }
    }
    document.onkeydown = keyevent;

</script>
</body>
</html>