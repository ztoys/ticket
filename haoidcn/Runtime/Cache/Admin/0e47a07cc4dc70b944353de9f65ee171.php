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
    
    .ticket-initiator{
        padding: 10px 20px;
        background: #FFF;
        border-bottom: none;
        font-size: 14px;
    }
    .title-tip{
        margin-right: 10px;
        border-left: 5px solid #0866c6;
    }
    .messageleft{
        background: #FFF;
        border-top: 1px solid #0866c6;
        padding: 20px;
        box-sizing: border-box;
        padding-bottom: 9999px;
	    margin-bottom: -9999px;
    }
    .messageview{
        height: auto;
    }
    .msgreply{
        border-top: none;
    }
    .form-ticket-status select{
        width: 100%;
    }
    .record-list{
        padding: 0 15px;
    }
    .record-list li{
        position: relative;
        list-style: none;
        margin-bottom: 20px;
        padding-top: 10px;
        border-top: 1px solid #EEE;
    }
    .record-list li::before{
        content: '';
        width: 3px;
        height: 15px;
        background: #0866c6;
        position: absolute;
        left: -10px;
        top: 12px;
    } 
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
                <li <?php echo ($data["user_block04"]); ?>><a href="<?php echo U('Admin/role_permissions');?>"><span class="iconfa-tags"></span>角色权限</a></li>
                <!-- <li <?php echo ($data["user_block01"]); ?>><a href="<?php echo U('Admin/group_manage');?>"><span class="iconfa-group"></span>群组管理</a></li> -->
                <li <?php echo ($data["user_block02"]); ?>><a href="<?php echo U('Admin/user_manage');?>"><span class="iconfa-user"></span>成员和组</a></li>
                <!-- <li <?php echo ($data["user_block03"]); ?>><a href="<?php echo U('Admin/ticket?case=all');?>"><span class="iconfa-file"></span>工单指派<span class="right"><?php echo ($ticket_count["c_unass"]); ?></span></a></li> -->
                <li class="dropdown <?php echo ($data01["kh_one"]); ?>"><a href=""><span class="iconfa-file"></span>工单中心</a>
                	<ul <?php echo ($data01["kh_block"]); ?>>
                    	<li <?php echo ($data01["kh_two01"]); ?>><a href="<?php echo U('Admin/ticket?case=all');?>"><span class="right"><?php echo ($ticket_count["c_unass"]); ?></span>工单指派</a></li>
                        <li <?php echo ($data01["kh_two02"]); ?>><a href="<?php echo U('Admin/ticket_field');?>">工单字段</a></li>
                        <!-- <li <?php echo ($data01["kh_two02"]); ?>><a href="<?php echo U('Admin/c_manage');?>">管理客户</a></li> -->
                    </ul>
                </li>
                
                <!--<li class="dropdown <?php echo ($data["sh_one"]); ?>"><a href=""><span class="iconfa-comments"></span> 售后人员管理</a>
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
                    <div class="ticket-initiator">
                        <span class="title-tip"></span>工单发起人：<?php echo ($main["u_uname"]); ?>
                        <a href="<?php echo ($data["url"]); ?>" class="btn btn-success btn-sm right" style="margin-top: -3px;color: #FFF;">返回</a>
                    </div>

                    <?php if($main["wc_sataus"] != '3'): ?><div class="messageleft">
                            <form class="form-ticket-status" action="<?php echo U('Client/messages');?>" method="post" enctype="multipart/form-data">
                                <!-- <div>
                                    <label>受理用户组</label>
                                    <select name="" id="">
                                        <option value="">请选择</option>
                                        <?php if(is_array($list_group)): $i = 0; $__LIST__ = $list_group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["status"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div> -->
                                <div>
                                    <label>受理人</label>
                                    <select id="select_ticket_agent">
                                        <option value="-1"> -- </option>
                                        <?php if(is_array($list_group_user)): $i = 0; $__LIST__ = $list_group_user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo[id] == $main[w_did]): ?>selected<?php endif; ?> ><?php echo ($vo["uname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <div style="margin-top: 20px;">
                                    <label>工单状态</label>
                                    <select id="select_ticket_status">
                                        <option value="1" <?php if($main["wc_sataus"] == '1'): ?>selected<?php endif; ?> >待处理</option>
                                        <option value="2" <?php if($main["wc_sataus"] == '2'): ?>selected<?php endif; ?> >正在研发中</option>
                                        <option value="4" <?php if($main["wc_sataus"] == '4'): ?>selected<?php endif; ?> >待评价</option>
                                    </select>
                                </div>

                                <div style="margin-top: 20px;">
                                    <label>产品确认</label>
                                    <select id="select_ticket_product">
                                        <option value="0" <?php if($main["work_product"] == ''): ?>selected<?php endif; ?> >--</option>
                                        <option value="1" <?php if($main["work_product"] == '1'): ?>selected<?php endif; ?> >已确认</option>
                                        <option value="2" <?php if($main["work_product"] == '2'): ?>selected<?php endif; ?> >已拒绝</option>
                                    </select>
                                </div>

                                <div style="margin-top: 20px;">
                                    <label>研发确认</label>
                                    <select id="select_ticket_develop">
                                        <option value="0" <?php if($main["work_develop"] == ''): ?>selected<?php endif; ?> >--</option>
                                        <option value="1" <?php if($main["work_develop"] == '1'): ?>selected<?php endif; ?> >已确认</option>
                                        <option value="2" <?php if($main["work_develop"] == '2'): ?>selected<?php endif; ?> >已拒绝</option>
                                    </select>
                                </div>

                                <div style="margin-top: 20px;">
                                    <label>完成时间</label>
                                    <input type="text" id="ticket_finish" style="width:100%;box-sizing:border-box;height:30px;">
                                </div>

                                <!-- <hr>

                                <div style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-success" style="width: 100%;">确认</button>
                                </div> -->

                                <!-- <button type="button"  class="btn btn-primary btn-line" style="margin-top: 40px;" onclick="submitTicket()"> 提交 </button> -->
                            </form>
                        </div><?php endif; ?>

                    <div class="messageright cell">
                        <div class="messageview" style="<?php if($data["status"] == 3): ?>height:100%<?php endif; ?>">
                            <div class="btn-group pull-right">
                                <!-- <?php if($data["limits"] == 3 and $data["case"] == '1'): ?><a href="<?php echo U('Client/forms?type=xiu&forms='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;修改&nbsp;&nbsp;</a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="javascript:void();" onclick="del('messages-<?php echo ($main["w_id"]); ?>');" class="btn btn-danger alertdanger" style="color:#fff;">&nbsp;&nbsp;取消&nbsp;&nbsp;</a><?php endif; ?> -->
                                
                                <!-- <?php if($data["limits"] == 2 and $data["case"] == '1'): ?><a href="<?php echo U('Client/messages?type=chu&wc_sataus='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;处理&nbsp;&nbsp;</a><?php endif; ?>

                                <?php if($data["limits"] == 2 and $data["case"] == '2'): ?><a href="<?php echo U('Client/messages?type=ping&wc_sataus='.$main['w_id']);?>" class="btn dropdown-toggle"  style="color:#555;">&nbsp;&nbsp;待评价&nbsp;&nbsp;</a><?php endif; ?>
                                
                                <?php if($data["limits"] == 3 and $data["status"] != '3'): ?><a href="<?php echo U('Client/messages?type=wang&wc_sataus='.$main['w_id']);?>" class="btn btn-success" style="color:#fff;">&nbsp;&nbsp;关闭工单&nbsp;&nbsp;</a>
                                    <button type="button" data-toggle="modal" data-target="#modal_comment" class="btn btn-success" style="color:#fff;">&nbsp;&nbsp;关闭工单&nbsp;&nbsp;</button><?php endif; ?>
                                <?php if($data["limits"] == 3 and $data["case"] == '-1'): ?><a href="<?php echo U('Client/forms?type=xiu&forms='.$main['w_id']);?>" class="btn dropdown-toggle" style="color:#555;">&nbsp;&nbsp;编辑&nbsp;&nbsp;</a><?php endif; ?> -->
                            </div>
                            <h1 class="subject" style="border-bottom: 1px solid #ddd;">
                                <div>
                                    <b><?php echo ($main["w_title"]); ?></b>
                                </div>
                                <div style="margin-top: 10px;">
                                    <span class="note2">创建于：<?php echo (date("Y-m-d H:i:s",$main["w_puddate"])); ?></span>
                                    <button type="button" data-toggle="modal" data-target="#modal_ticket_event" class="btn btn-success btn-sm" style="margin-left: 10px;">查看工单事件</button>
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
                                                    <div style="width:120px;height:130px;text-align:center;padding-top: 10px;">
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
                                    <form id="form_ticket" action="<?php echo U('Admin/submit_ticket_agent?case='.$data['url_status']);?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="ticket_agent" id="form_agent">
                                        <input type="hidden" name="ticket_agent_name" id="form_agent_name">
                                        <input type="hidden" name="ticket_status" id="form_ticket_status">
                                        <input type="hidden" name="ticket_product" id="form_ticket_product">
                                        <input type="hidden" name="ticket_develop" id="form_ticket_develop">
                                        <input type="hidden" name="ticket_finish" id="form_ticket_finish">
                                        <input type="hidden" name="ticket_status_name" id="form_ticket_status_name">
                                        <input type="hidden" name="ticket_product_name" id="form_ticket_product_name">
                                        <input type="hidden" name="ticket_develop_name" id="form_ticket_develop_name">
                                        <input type="hidden" name="ticket_finish_name" id="form_ticket_finish_name">
                                        <input type="hidden" name="insert" value="insert" />
                                        <input type="hidden" name="pid" value="<?php echo ($main["w_id"]); ?>">
                                        <div>
                                            <textarea name="editorValue" id="editorValue"></textarea>
                                        </div>
                                        <p style="margin-top:20px;" align="right">
                                            <button type="button"  class="btn btn-primary btn-lg" onclick="submitTicket()"> 提交 </button>
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

                            <div name="one"></div>

                            
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

<!-- 模态框START -->
<!-- 工单事件 -->
<div class="modal fade modal-comment" id="modal_ticket_event" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        工单事件
                    </h4>
                </div>
                <div class="modal-body">
                    <ul class="record-list">
                        <?php if(is_array($data["record"])): $i = 0; $__LIST__ = $data["record"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                               <p class="note2"><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></p>
                                <?php echo ($vo["uname"]); echo ($vo["event"]); ?>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消
                    </button>
                </div>
            </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 模态框END -->

<input type="hidden" id="n_ticket_finish" value="<?php echo ($main["work_finish"]); ?>">

<script type="text/javascript">

    jQuery(".form-ticket-status select").change(function(){
        submitTicket();
    })

    function submitTicket() {
        var ticket_agent = jQuery("#select_ticket_agent").val();
        var ticket_status = jQuery("#select_ticket_status").val();
        var ticket_product = jQuery("#select_ticket_product").val();
        var ticket_develop = jQuery("#select_ticket_develop").val();
        var ticket_finish = jQuery("#ticket_finish").val();
        if (ticket_status == "2" && ticket_agent == "-1") {
            alert("请选择受理人");
            return false;
        }
        if (ticket_finish) {
            ticket_finish = ticket_finish.replace(/-/g,'/'); 
            var timestamp = new Date(ticket_finish).getTime()/1000;
        }
        jQuery("#form_agent").val(ticket_agent);
        jQuery("#form_ticket_status").val(ticket_status);
        jQuery("#form_ticket_product").val(ticket_product);
        jQuery("#form_ticket_develop").val(ticket_develop);
        jQuery("#form_ticket_finish").val(timestamp);
        jQuery("#form_agent_name").val(jQuery("#select_ticket_agent").find("option:selected").text());
        jQuery("#form_ticket_status_name").val(jQuery("#select_ticket_status").find("option:selected").text());
        jQuery("#form_ticket_product_name").val(jQuery("#select_ticket_product").find("option:selected").text());
        jQuery("#form_ticket_develop_name").val(jQuery("#select_ticket_develop").find("option:selected").text());
        jQuery("#form_ticket_finish_name").val(jQuery("#select_ticket_finish").find("option:selected").text());
        jQuery("#form_ticket").submit();
    }

    jQuery(document).ready(function(){
        jQuery('#ticket_finish').datepicker({
            language: "zh-CN",
            keepOpen: true,
            autoclose: true,
            clearBtn: true, //清除按钮
            todayBtn: false, //今日按钮
            format: "yyyy-mm-dd"
        });
        var nTicketFinish = jQuery("#n_ticket_finish").val();
        if (nTicketFinish) {
            jQuery("#ticket_finish").datepicker('setDate',new Date(nTicketFinish*1000)); //参数为毫秒数
        }

        jQuery("#form_ticket_statues select,#ticket_finish").change(function(){
            submitTicket();
        })
    })

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