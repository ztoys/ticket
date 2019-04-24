<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>工单系统</title>
<!-- header binge -->


<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-datepicker.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/responsive-tables.css">


<!-- <script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.js"></script> -->
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-datepicker.zh-CN.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-fileupload.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/modernizr.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.uniform.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/responsive-tables.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.alerts.js"></script>
<!-- <script type="text/javascript" src="<?php echo (C("URL")); ?>js/elements.js"></script> -->
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.dataTables.min.js"></script>



<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/unify.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>baidubianjiqi/third-party/jquery.min.js"></script>

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
        position: relative;
        margin: 0;
    }
    .comments li:last-child .comment p{margin-top:15px;}
    .comment-wrap {
        padding: 10px 20px;
        border-bottom: 1px solid #DDD;
    }
    .comment-wrap .comment-title{
        font-size: 16px;
        margin-bottom: 10px;
    }
    .comment-wrap .comment-item+.comment-item{
        margin-top: 10px;
    }
    .comment-wrap .comment-item-label{
        border-left: 2px solid #999;
        padding-left: 10px;
        margin-right: 10px;
    }    
    .messageview{
        position: relative;
    }
    .tip-comment-btn{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 30px;
        line-height: 30px;
        color: #FFF;
        text-align: center;
        background: #0766c6;
        cursor: pointer;
        border-top: 1px solid #0d60b3;
        box-shadow: 0 -2px 20px rgba(7, 102, 198, .3);
    }
    .ticket-comment-wrap{
        background: #f7fcff;
        padding: 20px 0;
    }
    .ticket-comment{
        width: 500px;
        margin: 0 auto;
    }
    .ticket-comment .title{
        font-size: 18px;
        font-weight: bold;
        padding: 20px 0 10px;
        text-align: center;
    }
    .ticket-comment .note2{
        text-align: center;
    }    
    .ticket-comment .label-title{
        margin-bottom: 8px;
    }
    .ticket-comment input[type='radio']{
        margin-top: 0;
    }    
    .ticket-comment .radio-wrap label{
        display: inline-block;
    }
    .ticket-comment .radio-wrap label+input{
        margin-left: 20px;
    }    
    .ticket-comment .btn.submit{
        display: block;
        width: 200px;
        margin: 50px auto 20px;
    }
    

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
                        <li class="nav-header">工单中心</li>
                        <?php if($data["limits"] == '3'): ?><li><a href="<?php echo U('Client/forms');?>"><span class="icon-tasks"></span>创建工单</a></li><?php endif; ?>
                        <li><a href="<?php echo U('Client/messages?case=dai');?>"><span class="icon-tasks"></span> 待处理的工单 </a></li>
                        <li><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="icon-tasks"></span> 正在研发中的工单 </a></li>
                        <li><a href="<?php echo U('Client/messages?case=yi');?>"><span class="icon-tasks"></span> 已处理的工单</a></li>
                        <!-- <?php if($data["limits"] == '3'): ?><li><a href="<?php echo U('Client/messages?case=cao');?>"><span class="icon-tasks"></span> 草稿箱 </a></li><?php endif; ?> -->
                    </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <div class="userinfo">
                            <h5>
                                <span><?php echo (session('userid')); ?></span>
                                <!-- <small><?php echo (session('email')); ?></small> -->
                                <!-- <a style="color: #FFF;" href="<?php echo U('Index/editprofile');?>">修改资料</a> -->
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
            	<li class="nav-header">管理控制中心</li>
<!--             	<li class="active"><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-question-sign"></span> 工单</a></li> -->
				
				
                <!-- <li <?php echo ($set["active"]); ?>><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-laptop"></span> 后台面板</a></li> -->
                
                <!-- <li class="dropdown <?php echo ($data["user_one"]); ?>"><a href=""><span class="iconfa-user"></span> 用户管理</a></li> -->
                <li <?php echo ($data["user_block01"]); ?>><a href="<?php echo U('Admin/group_manage');?>"><span class="iconfa-group"></span>群组管理</a></li>
                <li <?php echo ($data["user_block02"]); ?>><a href="<?php echo U('Admin/user_manage');?>"><span class="iconfa-user"></span>成员管理</a></li>
                <li <?php echo ($data["user_block03"]); ?>><a href="<?php echo U('Admin/ticket?case=all');?>"><span class="iconfa-file"></span>工单指派<span class="right"><?php echo ($ticket_count["c_unass"]); ?></span></a></li>
                <!-- <li class="dropdown <?php echo ($data01["kh_one"]); ?>"><a href=""><span class="iconfa-user"></span> 客户管理</a>
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
                
                <li <?php echo ($data02["sh_two01"]); ?>><a href="<?php echo U('Admin/office');?>"><span class="iconfa-comments"></span> 工作时间</a></li> -->
                <!-- <li <?php echo ($data03["sh_two01"]); ?>><a href="<?php echo U('Admin/config');?>"><span class="iconfa-comments"></span> 基本配置</a></li> --><?php endif; ?>
            
            <?php if($limits == '2'): ?><li class="nav-header">工单中心</li>
                <li <?php echo ($data["active01"]); ?>><a href="<?php echo U('Client/forms');?>"><span class="iconfa-pencil"></span>创建工单</a></li>
                <li <?php if($data["case"] == 'manned'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=manned');?>"><span class="iconfa-pencil"></span> 我的工单<span class="right"><?php echo ($ticket_count["c_myticket"]); ?></span></a></li>
                <!-- <li <?php if($data["case"] == 'all'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=all');?>"><span class="iconfa-pencil"></span> 未指派工单<span class="right"><?php echo ($ticket_count["c_unass"]); ?></span></a></li>
                <li <?php if($data["case"] == 'zhong'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="iconfa-pencil"></span>正在研发中<span class="right"><?php echo ($ticket_count["c_admissible"]); ?></span></a></li>
                <li <?php if($data["case"] == 'ping'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=ping');?>"><span class="iconfa-refresh"></span>待评价<span class="right"><?php echo ($ticket_count["c_comment"]); ?></span></a></li>
                <li <?php if($data["case"] == 'yi'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=yi');?>"><span class="iconfa-briefcase"></span> 已关闭的工单<span class="right"><?php echo ($ticket_count["c_close"]); ?></span></a></li> --><?php endif; ?>
            <?php if($limits == '3'): ?><li class="nav-header">工单中心</li>
            	<!-- <li <?php echo ($set["active"]); ?>><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-laptop"></span> 后台面板</a></li> -->
                <li <?php echo ($data["active01"]); ?>><a href="<?php echo U('Client/forms');?>"><span class="iconfa-pencil"></span>创建工单</a></li>
                <li <?php if($data["case"] == 'create'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=create');?>"><span class="iconfa-bookmark"></span> 我的工单<span class="right"><?php echo ($ticket_count["c_mycreate"]); ?></span></a></li>
                <!-- <li <?php if($data["case"] == 'reply'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=reply');?>"><span class="iconfa-table"></span> 待我回复<span class="right"><?php echo ($ticket_count["c_reply"]); ?></span></a></li> -->
                <!-- <li <?php if($data["case"] == 'dai'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=dai');?>"><span class="iconfa-pencil"></span> 待处理的工单</a></li> -->
                <!-- <li <?php if($data["case"] == 'zhong'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="iconfa-pencil"></span> 处理中的工单</a></li> -->
                <!-- <li <?php if($data["case"] == 'ping'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=ping');?>"><span class="iconfa-table"></span> 待我评价<span class="right"><?php echo ($ticket_count["c_comment"]); ?></span></a></li> -->
                <!-- <li <?php if($data["case"] == 'yi'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=yi');?>"><span class="iconfa-briefcase"></span> 已关闭的工单<span class="right"><?php echo ($ticket_count["c_close"]); ?></span></a></li> -->
                <!-- <li <?php if($data["case"] == 'cao'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=cao');?>"><span class="iconfa-th-list"></span> 草稿箱</a></li> --><?php endif; ?>
            </ul>
        </div><!--leftmenu-->
    </div><!-- leftpanel -->

    <div class="maincontent">
        <div class="maincontentinner">
            <div class="messagepanel">
                <div class="messagecontent main-content">
                    <div class="messageright">
                        <div class="messageview" style="<?php if($data["status"] == 3): ?>height:100%<?php endif; ?>">
                            <div class="btn-group pull-right">
                                <!-- <?php if($data["limits"] == 3 and $data["case"] == '1'): ?><a href="<?php echo U('Client/forms?type=xiu&forms='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;修改&nbsp;&nbsp;</a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="javascript:void();" onclick="del('messages-<?php echo ($main["w_id"]); ?>');" class="btn btn-danger alertdanger" style="color:#fff;">&nbsp;&nbsp;取消&nbsp;&nbsp;</a><?php endif; ?> -->
                                
                                <!-- <?php if($data["limits"] == 2 and $data["case"] == '1'): ?><a href="<?php echo U('Client/messages?type=chu&wc_sataus='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;处理&nbsp;&nbsp;</a><?php endif; ?> -->

                                <!-- <?php if($data["limits"] == 2 and $data["case"] == '2'): ?><a href="<?php echo U('Client/messages?type=ping&wc_sataus='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;待评价&nbsp;&nbsp;</a><?php endif; ?> -->
                                <button class="btn btn-primary btn-sm" onclick="javascript:window.location.href='<?php echo ($data["url"]); ?>'" style="margin-right:10px;">&nbsp;&nbsp;返回&nbsp;&nbsp;</button> 
                                <?php if($data["limits"] == 3 and $data["status"] != '3'): ?><!-- <a href="<?php echo U('Client/messages?type=wang&wc_sataus='.$main['w_id']);?>" class="btn btn-success" style="color:#fff;">&nbsp;&nbsp;关闭工单&nbsp;&nbsp;</a> -->
                                    <button type="button" data-toggle="modal" data-target="#modal_comment" class="btn btn-danger btn-sm" style="color:#fff;">关闭工单</button><?php endif; ?>
                                <!-- <?php if($data["limits"] == 3 and $data["case"] == '-1'): ?><a href="<?php echo U('Client/forms?type=xiu&forms='.$main['w_id']);?>" class="btn dropdown-toggle" style="color:#555;">&nbsp;&nbsp;编辑&nbsp;&nbsp;</a><?php endif; ?> -->
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
                            <?php if($main["wc_sataus"] == '3'): ?><div class="comment-wrap">
                                    <p class="comment-title">工单评价</p>
                                    <p class="comment-item">
                                        <span class="comment-item-label">问题是否已经解决</span>
                                        <?php switch($comment["resolve"]): case "1": ?><span class="label">是</span><?php break;?>
                                            <?php case "0": ?><span class="label">否</span><?php break; endswitch;?>
                                    </p>
                                    <p class="comment-item">
                                        <span class="comment-item-label">服务评价</span>
                                        <?php switch($comment["assess"]): case "3": ?><span class="label">非常满意</span><?php break;?>
                                            <?php case "2": ?><span class="label">满意</span><?php break;?>
                                            <?php case "1": ?><span class="label">一般</span><?php break;?>
                                            <?php case "0": ?><span class="label">不满意</span><?php break; endswitch;?>
                                    </p>
                                </div><?php endif; ?>
                            <!-- comment end -->

                            <div class="msgbody"  style="background:#fcfcfc;border-bottom:1px solid #DDD;">
                                <div>
                                    <?php echo ($main["w_issue"]); ?>
                                </div>
                                <?php if(!empty($file_arr[0])): ?><div style="overflow:hidden;zoom:1;margin-top: 20px;">
                                        <?php if(is_array($file_arr)): foreach($file_arr as $k=>$vo): ?><div id="picture<?php echo ($k); ?>" title="<?php echo ($vo['file_name']); ?>">
                                                <div style="float:left;margin-right: 10px;padding:5px;border:1px solid #ccc;" >
                                                    <div style="width:120px;height:130px;text-align:center;">
                                                        <i class="icon-file"></i>
                                                        <input type="hidden" name="photo01[]" value="<?php echo ($vo['id']); ?>">
                                                        <div style="margin-top:10px ;text-align:center;">
                                                            <p class="overlfow-text" style="margin:0 10px 5px 10px;">
                                                                <?php echo ($vo['file_name']); ?>
                                                            </p>
                                                            <a href="<?php echo U('Client/download_file',array('fileid'=>$vo['id']));?>" target="_blank">下载</a>
                                                            &nbsp;&nbsp;
                                                            <!-- <a href="javascript:void()" onclick="del_tp('picture<?php echo ($k); ?>');">删除</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><?php endforeach; endif; ?>
                                    </div><?php endif; ?>	
                                <?php if($data["limits"] == 3 and $data["case"] == 'zhong'): ?><p style="color:red;">【备注】：若本工单已无问题，请点击右上角的“结束”按钮，本工单将处理完毕，将会在“已处理的工单”处显示。</p><?php endif; ?>
                            </div><!--msgbody-->

                            <?php if($data["status"] != '3'): ?><div class="msgreply" >
                                    <form id="form01" action="<?php echo U('Client/detail?case='.$data['url_status']);?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="insert" value="insert" />
                                        <input type="hidden" name="pid" value="<?php echo ($main["w_id"]); ?>">
                                        <div>
                                            <textarea name="editorValue" id="editorValue"></textarea>
                                        </div>
                                        <p style="margin-top:20px;" align="right">
                                            <input type="submit"  class="btn btn-primary btn-lg" value="  发送  ">
                                        </p>
                                    </form>
                                </div><!--messagereply--><?php endif; ?>

                            <div class="msg-reply-wrap">
                                <?php if(is_array($record)): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="msgauthor"  style="padding:0 0 10px;border:1px solid #ddd;box-sizing:border-box;margin:10px 0;">
                                        <?php if($vo['limits'] == 2): ?><h3 class="widgettitle" style="background:#27b34b;"><?php echo ($vo["uname"]); ?>  回复<span class="date pull-right"><?php echo (date("Y-m-d H:i:s",$vo["repdate"])); ?></span></h3><?php endif; ?>
                                        
                                        <?php if($vo['limits'] == 3 or $vo['limits'] == 1): ?><h3 class="widgettitle" style="background:#666;"><?php echo ($vo["uname"]); ?>  评论<span class="date pull-right"><?php echo (date("Y-m-d H:i:s",$vo["repdate"])); ?></span></h3><?php endif; ?>
                                        
                                        <div >
                                            <div class="msgbody">
                                                <?php echo ($vo["g_reply"]); ?>
                                            </div>
                                        </div>
                                    </div><!--msgauthor--><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            
                            </div>

                            <div name="one"></div>

                            <?php if($main["wc_sataus"] == '4' and $data["limits"] == 3 ): ?><div class="ticket-comment-wrap">
                                    <form action="<?php echo U('Client/close_ticket');?>" method="post" enctype="multipart/form-data" id="form_close_ticket2">
                                        <div class="ticket-comment">
                                            <input type="hidden" name="pid" value="<?php echo ($main["w_id"]); ?>">
                                            <input type="hidden" name="resolve_text" id="resolve_text2">
                                            <input type="hidden" name="assess_text" id="assess_text2">
                                            <div style="zoom:1;">
                                                <h4 class="title">请进行服务评价</h4>
                                                <p class="note2">评价后将自动关闭工单</p>
                                            </div>
                                            <div style="padding-left: 105px;margin-top: 50px;">
                                                <p style="margin-top: 20px;">
                                                    <label class="label-title">问题是否已经解决：</label>
                                                    <div class="radio-wrap">
                                                        <input type="radio" name="resolve" value="1" data-text="是" id="rs_1" checked>
                                                        <label for="rs_1">是</label>
                                                        <input type="radio" name="resolve" value="0" data-text="否" id="rs_0"> 
                                                        <label for="rs_0">否</label>
                                                    </div>
                                                </p>
                                                <p style="margin-top: 20px;">
                                                    <label class="label-title">服务评价：</label>
                                                    <div class="radio-wrap">
                                                        <input type="radio" name="assess" value="3" data-text="非常满意" id="as_1">
                                                        <label for="as_1">非常满意</label>
                                                        
                                                        <input type="radio" name="assess" value="2" data-text="满意" id="as_2" checked>
                                                        <label for="as_2">满意</label>
                                                        
                                                        <input type="radio" name="assess" value="1" data-text="一般" id="as_3">
                                                        <label for="as_3">一般</label>
                                                        
                                                        <input type="radio" name="assess" value="0" data-text="不满意" id="as_4">
                                                        <label for="as_4">不满意</label>
                                                    </div>
                                                </p>
                                            </div>
                                            
                                            <button type="button" onclick="closeTicket2()" class="btn btn-success submit">
                                                提交
                                            </button>
                                        </div>
                                    </form>
                                </div><?php endif; ?>
                            
                        </div><!--messageview-->
                        
                        
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
        <form action="<?php echo U('Client/close_ticket');?>" method="post" enctype="multipart/form-data" id="form_close_ticket">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        工单评价
                    </h4>
                </div>
                <div class="modal-body ticket-comment">
                    <input type="hidden" name="pid" value="<?php echo ($main["w_id"]); ?>">
                    <input type="hidden" name="resolve_text" id="resolve_text">
                    <input type="hidden" name="assess_text" id="assess_text">
                    <div style="zoom:1;">
                        <span>请进行服务评价</span><span style="float:right">评价后将自动关闭工单</span>
                    </div>
                    <p style="margin-top: 20px;">
                        <label class="label-title">问题是否已经解决</label>
                        <div class="radio-wrap">
                            <input type="radio" name="resolve" value="1" data-text="是" id="ars_1" checked>
                            <label for="ars_1">是</label>
                            <input type="radio" name="resolve" value="0" data-text="否" id="ars_0"> 
                            <label for="ars_0">否</label>
                        </div>
                    </p>
                    <p style="margin-top: 10px;">
                        <label class=" label-title">服务评价</label>
                        <div class="radio-wrap">
                            <input type="radio" name="assess" value="3" data-text="非常满意" id="aas_1"> 
                            <label for="aas_1">非常满意</label>
                            <input type="radio" name="assess" value="2" data-text="满意" id="aas_2" checked>
                            <label for="aas_2">满意</label>
                            <input type="radio" name="assess" value="1" data-text="一般" id="aas_3">
                            <label for="aas_3">一般</label>
                            <input type="radio" name="assess" value="0" data-text="不满意" id="aas_4"> 
                            <label for="aas_4">不满意</label>
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消
                    </button>
                    <button type="button" onclick="closeTicket()" class="btn btn-primary">
                        提交
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </form>
	</div><!-- /.modal -->
</div>

<script type="text/javascript">

    function closeTicket () {
        var resolveText = jQuery("#form_close_ticket input[name='resolve']:checked").data('text');
        var assessText = jQuery("#form_close_ticket input[name='assess']:checked").data('text');
        jQuery("#resolve_text").val(resolveText);
        jQuery("#assess_text").val(assessText);
        
        jQuery("#form_close_ticket").submit();
    }

    function closeTicket2 () {
        var resolveText = jQuery("#form_close_ticket2 input[name='resolve']:checked").data('text');
        var assessText = jQuery("#form_close_ticket2 input[name='assess']:checked").data('text');
        jQuery("#resolve_text2").val(resolveText);
        jQuery("#assess_text2").val(assessText);
        
        jQuery("#form_close_ticket2").submit();
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

</script>
</body>
</html>