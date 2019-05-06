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
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/common.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.alerts.js"></script>
<!-- <script type="text/javascript" src="<?php echo (C("URL")); ?>js/elements.js"></script> -->
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/ticket.css">
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/unify.js"></script>

<style type="text/css">
	a:hover{
		text-decoration:none;
    }
    .messageright{
        margin: 0;
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
        text-align: center;
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
    .record-list li:first-child{
        border: none;
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
    .form-ticket-status label{
        margin-bottom: 5px;
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
                	<ul <?php echo ($data01["kh_block"]); ?> class="nav-header-child">
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
                <li <?php if($data["case"] == 'manned'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=manned');?>"><span class="iconfa-folder-open"></span> 我的工单<span class="right"><?php echo ($ticket_count["c_myticket"]); ?></span></a></li>
                <!-- <li <?php if($data["case"] == 'all'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=all');?>"><span class="iconfa-pencil"></span> 未指派工单<span class="right"><?php echo ($ticket_count["c_unass"]); ?></span></a></li>
                <li <?php if($data["case"] == 'zhong'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="iconfa-pencil"></span>正在研发中<span class="right"><?php echo ($ticket_count["c_admissible"]); ?></span></a></li>
                <li <?php if($data["case"] == 'ping'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=ping');?>"><span class="iconfa-refresh"></span>待评价<span class="right"><?php echo ($ticket_count["c_comment"]); ?></span></a></li>
                <li <?php if($data["case"] == 'yi'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=yi');?>"><span class="iconfa-briefcase"></span> 已关闭的工单<span class="right"><?php echo ($ticket_count["c_close"]); ?></span></a></li> --><?php endif; ?>
            <?php if($limits == '3'): ?><li class="nav-header">工单中心</li>
            	<!-- <li <?php echo ($set["active"]); ?>><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-laptop"></span> 后台面板</a></li> -->
                <li <?php echo ($data["active01"]); ?>><a href="<?php echo U('Client/forms');?>"><span class="iconfa-pencil"></span>创建工单</a></li>
                <li <?php if($data["case"] == 'create'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=create');?>"><span class="iconfa-folder-open"></span> 我的工单<span class="right"><?php echo ($ticket_count["c_mycreate"]); ?></span></a></li>
                <!-- <li <?php if($data["case"] == 'reply'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=reply');?>"><span class="iconfa-table"></span> 待我回复<span class="right"><?php echo ($ticket_count["c_reply"]); ?></span></a></li> -->
                <!-- <li <?php if($data["case"] == 'dai'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=dai');?>"><span class="iconfa-pencil"></span> 待处理的工单</a></li> -->
                <!-- <li <?php if($data["case"] == 'zhong'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="iconfa-pencil"></span> 处理中的工单</a></li> -->
                <!-- <li <?php if($data["case"] == 'ping'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=ping');?>"><span class="iconfa-table"></span> 待我评价<span class="right"><?php echo ($ticket_count["c_comment"]); ?></span></a></li> -->
                <!-- <li <?php if($data["case"] == 'yi'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=yi');?>"><span class="iconfa-briefcase"></span> 已关闭的工单<span class="right"><?php echo ($ticket_count["c_close"]); ?></span></a></li> -->
                <!-- <li <?php if($data["case"] == 'cao'): echo ($data["active02"]); endif; ?> ><a href="<?php echo U('Client/messages?case=cao');?>"><span class="iconfa-th-list"></span> 草稿箱</a></li> --><?php endif; ?>
            </ul>
        </div><!--leftmenu-->
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        <!-- head binge -->
        
        <ul class="breadcrumbs">
            <li><a href="<?php echo U('Console/dashboard');?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="<?php echo U('Console/dashboard');?>">面板</a> <span class="separator"></span></li>
            <li>工单详情</li>
        </ul>
        <!-- head end -->
        <div class="maincontent">
            <div class="">
                <div class="messagepanel">
                    <div class="ticket-info">
                        <?php if($main["wc_sataus"] != '3'): ?><div class="">
                                <div class="ticket-info-title">
                                    工单信息
                                </div>
                                <div class="ticket-info-main">
                                    <form class="form-ticket-status" id="form_ticket_statues" action="<?php echo U('Client/messages');?>" method="post" enctype="multipart/form-data">
                                        <!-- <div>
                                            <label>受理用户组</label>
                                            <select name="" id="">
                                                <option value="">请选择</option>
                                                <?php if(is_array($list_group)): $i = 0; $__LIST__ = $list_group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["status"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div> -->
                                        <!-- <div>
                                            <label>受理人</label>
                                            <select id="select_ticket_agent">
                                                <option value="-1"> -- </option>
                                                <?php if(is_array($list_group_user)): $i = 0; $__LIST__ = $list_group_user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo[id] == $main[w_did]): ?>selected<?php endif; ?> ><?php echo ($vo["uname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div> -->
                                        <div>
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
                                    </form>

                                    <div>
                                        <p class="ticket-info-label"><i class="icon-doc"></i>工单信息</p>
                                        <div class="ticket-info-detail">
                                            <p>
                                                <span class="info-label">工单号：</span>
                                                <?php echo ($main["w_id"]); ?>
                                            </p>
                                            <p>
                                                <span class="info-label">优先级：</span>
                                                <?php switch($main['w_level']): case "1": ?>一般<?php break;?>
                                                    <?php case "2": ?>重要<?php break;?>
                                                    <?php case "3": ?>紧急<?php break; endswitch;?>
                                            </p>
                                            <p>
                                                <span class="info-label">工单类型：</span>
                                                <?php switch($main['w_type']): case "1": ?>产品BUG<?php break;?>
                                                    <?php case "2": ?>新需求<?php break;?>
                                                    <?php case "3": ?>投诉与建议<?php break;?>
                                                    <?php case "4": ?>其它<?php break; endswitch;?>
                                            </p>
                                            <p>
                                                <span class="info-label">创建时间：</span>
                                                <?php echo (date("Y-m-d H:i:s",$main["w_puddate"])); ?>
                                            </p>
                                            <p>
                                                <span class="info-label">受理时间：</span>
                                                <?php if($main['w_accdate'] != ''): echo (date("Y-m-d H:i:s",$main["w_accdate"])); ?>
                                                <?php else: ?>
                                                    --<?php endif; ?>
                                            </p>
                                            <p>
                                                <span class="info-label">发起人：</span>
                                                <?php echo ($main["u_uname"]); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endif; ?>
                    </div>

                    <div class="ticket-main messagecontent">
                        <div class="ticket-head">
                            工单详情
                            <a href="<?php echo ($data["url"]); ?>" class="back left underline"><  返回</a>
                        </div>

                        <div class="messageright cell">
                            <div class="messageview" style="<?php if($data["status"] == 3): ?>height:100%<?php endif; ?>">
                                <div class="ticket-title">
                                    <?php echo ($main["w_title"]); ?>
                                </div>
                                
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

                                <div class="ticket-content">
                                    <div>
                                        <?php echo ($main["w_issue"]); ?>
                                    </div>
                                    <div class="ticket-file">
                                        <?php if(!empty($file_arr[0])): ?><p class="left">附件：</p>
                                            <div class="cell">
                                                <?php if(is_array($file_arr)): foreach($file_arr as $k=>$vo): ?><div class="ticket-file-item" id="picture<?php echo ($k); ?>" title="<?php echo ($vo['file_name']); ?>">
                                                        <div>
                                                            <div class="left">
                                                                <i class="icon-file"></i>
                                                                <input type="hidden" name="photo01[]" value="<?php echo ($vo['id']); ?>">
                                                            </div>
                                                            <div class="left file-text">
                                                                <p class="overlfow-text" style="max-width: 100px;"><?php echo ($vo['file_name']); ?></p>
                                                                <a href="<?php echo U('Client/download_file',array('fileid'=>$vo['id']));?>" target="_blank">下载</a>
                                                            </div>
                                                            <!-- <div style="margin-top:5px ;text-align:center;">
                                                                <a href="javascript:void()" onclick="del_tp('picture<?php echo ($k); ?>');">删除</a>
                                                            </div> -->
                                                        </div>
                                                    </div><?php endforeach; endif; ?>
                                            </div><?php endif; ?>	
                                    </div>
                                </div><!--msgbody-->

                                <div style="margin-top: 10px;">
                                    <div class="head-tab">
                                        <ul>
                                            <li class="on">
                                                <a onclick="showTabItem(0)">服务记录</a>
                                            </li>
                                            <li>
                                                <a onclick="showTabItem(1)">操作日志</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-content-wrap">
                                    <div class="tab-item">
                                        <div class="msg-reply-wrap" id="reply_wrap">
                                            <?php if(is_array($record)): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "$record_empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="msgauthor"><div class="left head-portrait"><i class="icon-person"></i></div><div class="cell reply-right"><div class=""><span class="name"><?php echo ($vo["uname"]); ?></span><span class="date"><?php echo (date("Y-m-d H:i:s",$vo["repdate"])); ?></span></div><div clas=""><div class="msgbody <?php if($vo['uid'] == $data['uid']): ?>mine<?php endif; ?>"><?php echo ($vo["g_reply"]); ?></div></div></div></div><!--msgauthor--><?php endforeach; endif; else: echo "$record_empty" ;endif; ?>
                                        </div>
                                    </div>
                                    <div class="tab-item">
                                        <ul class="record-list">
                                            <?php if(is_array($data["record"])): $i = 0; $__LIST__ = $data["record"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                                    <p class="note2"><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></p>
                                                    <?php echo ($vo["uname"]); echo ($vo["event"]); ?>
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                </div>



                                <?php if($data["status"] != '3'): ?><div class="msgreply" >
                                        <form id="form_ticket" action="<?php echo U('Client/submit_ticket_agent?case='.$data['url_status']);?>" method="post" enctype="multipart/form-data" target="rfFrame">
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
                                                <textarea name="editorValue" id="editorValue" placeholder="请输入回复内容"></textarea>
                                            </div>
                                            <p style="margin-top:20px;">
                                                <button type="button"  class="btn btn-primary btn-lg btn-reply" onclick="submitTicket()">回复</button>
                                            </p>
                                        </form>
                                    </div><!--messagereply--><?php endif; ?>
                                
                            </div><!--messageview-->
                        </div><!--messageright-->
                    </div><!--messagecontent-->

                </div><!--messagepanel-->
            </div><!--maincontentinner-->
        </div><!--maincontent-->
    </div>
</div><!--mainwrapper-->

<div id="alertSuccess" class="alert alert-success fadeInDown animated">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    提交成功！
</div>

<iframe id="rfFrame" name="rfFrame" src="about:blank" style="display:none;"></iframe>

<input type="hidden" id="n_ticket_finish" value="<?php echo ($main["work_finish"]); ?>">

<script type="text/javascript">

    function submitTicket() {
        var ticket_status = jQuery("#select_ticket_status").val();
        var ticket_product = jQuery("#select_ticket_product").val();
        var ticket_develop = jQuery("#select_ticket_develop").val();
        var ticket_finish = jQuery("#ticket_finish").val();
        
        if (ticket_finish) {
            ticket_finish = ticket_finish.replace(/-/g,'/'); 
            var timestamp = new Date(ticket_finish).getTime()/1000;
        }
        jQuery("#form_ticket_status").val(ticket_status);
        jQuery("#form_ticket_product").val(ticket_product);
        jQuery("#form_ticket_develop").val(ticket_develop);
        jQuery("#form_ticket_finish").val(timestamp);
        jQuery("#form_agent_name").val(jQuery("#select_ticket_agent").find("option:selected").text());
        jQuery("#form_ticket_status_name").val(jQuery("#select_ticket_status").find("option:selected").text());
        jQuery("#form_ticket_product_name").val(jQuery("#select_ticket_product").find("option:selected").text());
        jQuery("#form_ticket_develop_name").val(jQuery("#select_ticket_develop").find("option:selected").text());
        jQuery("#form_ticket_finish_name").val(jQuery("#ticket_finish").val());
        jQuery("#form_ticket").submit();
    }

    function submitTicketSuccess() {
        var alertDom = jQuery("#alertSuccess");
        alertDom.show();
        setTimeout(function(){
            alertDom.hide();
        }, 5000);
        var uid = "<?php echo ($data['uid']); ?>";

        jQuery.ajax({
            type: "post",
            url: "<?php echo U('Api/ticket_reply_info');?>",
            data: {
                "tid": "<?php echo ($main["w_id"]); ?>",
            },
            success: function(data){
                var data = JSON.parse(data);
                if (data.error_code == 0){
                    jQuery("#editorValue").val('');
                    var replyDom = jQuery("#reply_wrap");
                    var scrollDom = replyDom.parents(".tab-content-wrap")[0];
                    var listData = data.data;
                    var uname_tpl = '<&uname&>';
                    var date_tpl = '<&date&>';
                    var reply_tpl = '<&reply&>';
                    var mine_tpl = '<&mine&>'
                    var htmlTpl = '<div class="msgauthor"><div class="left head-portrait"><i class="icon-person"></i></div><div class="cell reply-right"><div class=""><span class="name">'+uname_tpl+'</span><span class="date">'+date_tpl+'</span></div><div clas=""><div class="msgbody '+mine_tpl+'">'+reply_tpl+'</div></div></div></div>';
                    if (listData && listData.length) {
                        var tpl = "";
                        for( var i=0; i < listData.length; i++ ){
                            var uname = listData[i].name || '';
                            var date = formatTimeStamp(listData[i].date+"000" || '');
                            var reply = listData[i].reply || '';
                            var mine = '';
                            if (listData[i].uid == uid) {
                                mine = 'mine';
                            }
                            var itemTpl = htmlTpl.replace(/<&uname&>/ig, uname).replace(/<&date&>/ig, date).replace(/<&reply&>/ig, reply).replace(/<&mine&>/ig, mine);
                            tpl += itemTpl;
                        }
                        replyDom.html(tpl);
                        scrollDom.scrollTop = scrollDom.scrollHeight;
                    }
                }
            }
        })

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

        showTabItem(0);
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

    function showTabItem(index) {
        var tabHead = jQuery(".head-tab");
        var tabContent = jQuery(".tab-content-wrap");
        tabHead.find("li").removeClass("on").eq(index).addClass("on");
        tabContent.find(".tab-item").hide().eq(index).show();
    }

</script>
</body>
</html>