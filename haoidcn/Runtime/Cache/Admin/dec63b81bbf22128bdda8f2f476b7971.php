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



<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/unify.js"></script>

<style type="text/css">
	a:hover{
		text-decoration:none;
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
    .datepicker-wrap{
        position: absolute;
        top: 0;
        left: 0;
        background: #FFF;
        box-shadow: 0 3px 3px 3px rgba(0,0,0,.5);
    }
    .table tr.danger{
        background: #eee;
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

	<!-- header end -->
    
    <div class="rightpanel">
        
         <!-- head binge -->
			
        <ul class="breadcrumbs">
            <li><a href="<?php echo U('Console/dashboard');?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="<?php echo U('Console/dashboard');?>">面板</a> <span class="separator"></span></li>
            <li>处理工单</li>
        </ul>
		<!-- head end -->
		
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="messagepanel">
                    <div class="messagemenu">
                        <!-- <ul>
                            <li class="back"><a><span class="iconfa-chevron-left"></span > Back</a></li>
                            <li <?php if($data["case"] == 'dai'): echo ($data["class"]); endif; ?>><a href="<?php echo U('Client/messages?case=dai');?>" ><span></span> 待处理的工单</a></li>
                            <li <?php if($data["case"] == 'zhong'): echo ($data["class"]); endif; ?>><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="iconfa-inbox"></span> 处理中的工单</a></li>
                            <li <?php if($data["case"] == 'yi'): echo ($data["class"]); endif; ?>><a href="<?php echo U('Client/messages?case=yi');?>"><span class="iconfa-edit"></span> 已关闭的工单</a></li>
                            <?php if($data["limits"] == '3'): ?><li <?php if($data["case"] == 'cao'): echo ($data["class"]); endif; ?>><a href="<?php echo U('Client/messages?case=cao');?>"><span class="iconfa-edit"></span> 草稿箱</a></li><?php endif; ?>
                        </ul> -->
                    </div>
                    <div class="messagecontent" style="border: none;">
                        <?php if($limits == '3'): ?><form id="form_head_search">
                                <div class="form-wrap head sm-select">
                                    <div class="left">
                                        <label for="ticket_owned" class="form-label">所属客户</label>
                                        <select id="ticket_owned">
                                            <option value="0">全部</option>
                                            <?php if(is_array($owned_field)): $i = 0; $__LIST__ = $owned_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['id'] != ''): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <label for="ticket_agent" class="form-label">受理人</label>
                                        <select id="ticket_agent">
                                            <option value="0">全部</option>
                                            <?php if(is_array($agent_list_info)): $i = 0; $__LIST__ = $agent_list_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["uname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <label for="ticket_status" class="form-label">状态</label>
                                        <select id="ticket_status">
                                            <option value="0">全部</option>
                                            <option value="1">待处理</option>
                                            <option value="2">正在研发中</option>
                                            <option value="4">待评价</option>
                                            <option value="3">已关闭</option>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <label for="ticket_level" class="form-label">优先级</label>
                                        <select id="ticket_level">
                                            <option value="0">全部</option>
                                            <option value="3">紧急</option>
                                            <option value="2">重要</option>
                                            <option value="1">一般</option>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <label for="ticket_type" class="form-label">工单类型</label>
                                        <select id="ticket_type">
                                            <option value="0">全部</option>
                                            <option value="1">产品BUG</option>
                                            <option value="2">新需求</option>
                                            <option value="3">投诉与建议</option>
                                            <option value="4">其它</option>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <input type="text" id="ticket_search" style="width:120px;" placeholder="搜索标题、负责人">
                                    </div>
                                    <div class="left">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="selectTicket()">查询</button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-bordered table-fixed table-tr-click">
                                <tr>
                                    <th width="5%">编号</th>
                                    <th width="25%">标题</th>
                                    <th width="10%">工单类型</th>
                                    <th width="5%">优先级</th>
                                    <th width="10%">状态</th>
                                    <th width="5%">产品确认</th>
                                    <th width="5%">研发确认</th>
                                    <th width="10%">完成时间</th>
                                    <th width="10%">负责人</th>
                                    <th width="15%">提交时间</th>
                                </tr>
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$list_empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr onclick="javascript:window.location.href='<?php echo U('Client/detail?case='.$data['case'].'&id='.$vo['id']);?>'" <?php if($vo['wc_sataus'] == '3'): ?>class="danger"<?php endif; ?>>
                                        <td><?php echo ($vo["id"]); ?></td>
                                        <td><?php echo ($vo["title"]); ?></td>
                                        <td>
                                            <?php switch($vo['work_type']): case "1": ?>产品BUG<?php break;?>
                                                <?php case "2": ?>新需求<?php break;?>
                                                <?php case "3": ?>投诉与建议<?php break;?>
                                                <?php case "4": ?>其它<?php break; endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['work_level']): case "1": ?>一般<?php break;?>
                                                <?php case "2": ?>重要<?php break;?>
                                                <?php case "3": ?>紧急<?php break; endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['wc_sataus']): case "1": ?>待处理<?php break;?>
                                                <?php case "2": ?>正在研发中<?php break;?>
                                                <?php case "4": ?>待评价<?php break;?>
                                                <?php case "3": ?>已关闭<?php break;?>
                                                <?php case "-1": ?>草稿箱<?php break; endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['work_product']): case "1": ?>已确认<?php break;?>
                                                <?php case "2": ?>已拒绝<?php break;?>
                                                <?php default: ?>--<?php endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['work_develop']): case "1": ?>已确认<?php break;?>
                                                <?php case "2": ?>已拒绝<?php break;?>
                                                <?php default: ?>--<?php endswitch;?>
                                        </td>
                                        <?php if($vo['work_finish'] != ''): ?><td><?php echo (date("Y-m-d",$vo["work_finish"])); ?></td>
                                        <?php else: ?>
                                            <td>--</td><?php endif; ?>
                                        <td>
                                            <?php echo ((isset($vo["dname"]) && ($vo["dname"] !== ""))?($vo["dname"]):" -- "); ?>
                                        </td>
                                        <td><?php echo (date("Y-m-d H:i:s",$vo["puddate"])); ?></td>
                                    </tr><?php endforeach; endif; else: echo "$list_empty" ;endif; ?>
                            </table> 
                            <?php echo ($page); endif; ?>

                        <?php if($limits == '2'): ?><form id="form_head_search">
                                <div class="form-wrap head sm-select">
                                    <div class="left">
                                        <label for="ticket_owned" class="form-label">所属客户</label>
                                        <select id="ticket_owned">
                                            <option value="0">全部</option>
                                            <?php if(is_array($owned_field)): $i = 0; $__LIST__ = $owned_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['id'] != ''): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <label for="ticket_status" class="form-label">状态</label>
                                        <select id="ticket_status">
                                            <option value="0">全部</option>
                                            <option value="1">待处理</option>
                                            <option value="2">正在研发中</option>
                                            <option value="4">待评价</option>
                                            <option value="3">已关闭</option>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <label for="ticket_level" class="form-label">优先级</label>
                                        <select id="ticket_level">
                                            <option value="0">全部</option>
                                            <option value="3">紧急</option>
                                            <option value="2">重要</option>
                                            <option value="1">一般</option>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <label for="ticket_type" class="form-label">工单类型</label>
                                        <select id="ticket_type">
                                            <option value="0">全部</option>
                                            <option value="1">产品BUG</option>
                                            <option value="2">新需求</option>
                                            <option value="3">投诉与建议</option>
                                            <option value="4">其它</option>
                                        </select>
                                    </div>
                                    <div class="left">
                                        <input type="text" id="ticket_search" style="width:120px;" placeholder="搜索标题、发起人">
                                    </div>
                                    <div class="left">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="selectTicket()">搜索</button>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-bordered table-fixed table-tr-click">
                                <tr>
                                    <th width="5%">编号</th>
                                    <th width="20%">标题</th>
                                    <th width="7%">工单类型</th>
                                    <th width="5%">优先级</th>
                                    <th width="5%">状态</th>
                                    <th width="10%">产品确认</th>
                                    <th width="10%">研发确认</th>
                                    <th width="10%">完成时间</th>
                                    <th width="10%">工单发起人</th>
                                    <th width="12%">创建日期</th>
                                    <?php if($data["case"] != 'all'): ?><th width="12%">受理时间</th><?php endif; ?>
                                </tr>
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$list_empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr onclick="javascript:window.location.href='<?php echo U('Client/detail_agent?case='.$data['case'].'&id='.$vo['id']);?>'" <?php if($vo['wc_sataus'] == '3'): ?>class="danger"<?php endif; ?>>
                                        <td><?php echo ($vo["id"]); ?></td>
                                        <td><?php echo ($vo["title"]); ?></td>
                                        <td>
                                            <?php switch($vo['work_type']): case "1": ?>产品BUG<?php break;?>
                                                <?php case "2": ?>新需求<?php break;?>
                                                <?php case "3": ?>投诉与建议<?php break;?>
                                                <?php case "4": ?>其它<?php break; endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['work_level']): case "1": ?>一般<?php break;?>
                                                <?php case "2": ?>重要<?php break;?>
                                                <?php case "3": ?>紧急<?php break; endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['wc_sataus']): case "1": ?>待处理<?php break;?>
                                                <?php case "2": ?>正在研发中<?php break;?>
                                                <?php case "4": ?>待评价<?php break;?>
                                                <?php case "3": ?>已关闭<?php break;?>
                                                <?php case "-1": ?>草稿箱<?php break; endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['work_product']): case "1": ?>已确认<?php break;?>
                                                <?php case "2": ?>已拒绝<?php break;?>
                                                <?php default: ?>--<?php endswitch;?>
                                        </td>
                                        <td>
                                            <?php switch($vo['work_develop']): case "1": ?>已确认<?php break;?>
                                                <?php case "2": ?>已拒绝<?php break;?>
                                                <?php default: ?> --<?php endswitch;?>
                                        </td>
                                        <?php if($vo['work_finish'] != ''): ?><td><?php echo (date("Y-m-d",$vo["work_finish"])); ?></td>
                                        <?php else: ?>
                                            <td>--</td><?php endif; ?>
                                        <td>
                                            <?php echo ((isset($vo["uname"]) && ($vo["uname"] !== ""))?($vo["uname"]):" -- "); ?>
                                        </td>
                                        <td><?php echo (date("Y-m-d H:i:s",$vo["puddate"])); ?></td>
                                        <?php if($data["case"] != 'all'): if($vo['accdate'] != ''): ?><td><?php echo (date("Y-m-d H:i:s",$vo["accdate"])); ?></td>
                                            <?php else: ?>
                                                <td>--</td><?php endif; endif; ?>
                                    </tr><?php endforeach; endif; else: echo "$list_empty" ;endif; ?>
                            </table> 
                            <?php echo ($page); endif; ?>

                    </div><!--messagecontent-->

                </div><!--messagepanel-->

            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

<!-- datepicker -->
<div class="datepicker-wrap">
    <input type="text" class="datepicker" id="date_picker" style="display:none;">
</div>

<input type="hidden" value="<?php echo ($data["case"]); ?>" id="ticket_case">
<input type="hidden" value="<?php echo ($ticket_type); ?>" id="de_ticket_type">
<input type="hidden" value="<?php echo ($ticket_status); ?>" id="de_ticket_status">
<input type="hidden" value="<?php echo ($ticket_level); ?>" id="de_ticket_level">
<input type="hidden" value="<?php echo ($ticket_agent); ?>" id="de_ticket_agent">
<input type="hidden" value="<?php echo ($ticket_owned); ?>" id="de_ticket_owned">
<input type="hidden" value="<?php echo ($ticket_search); ?>" id="de_ticket_search">

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
                        <span>请进行服务评价</span><span style="float:right">评价后将自动关闭工单</span>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消
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

    function selectTicket() {
        var ticket_status = jQuery("#ticket_status").val();
        var ticekt_level = jQuery("#ticket_level").val();
        var ticket_type = jQuery("#ticket_type").val();
        var ticket_case = jQuery("#ticket_case").val();
        var ticket_owned = jQuery("#ticket_owned").val();
        var ticket_agent = jQuery("#ticket_agent").val() || '0';
        var ticket_search = jQuery("#ticket_search").val();

        var url = "<?php echo U('Client/messages', array('case'=>'ticket_case','tktype'=>'ticket_type','tklevel'=>'ticekt_level','tkstatus'=>'ticket_status','tkagent'=>'ticket_agent','tkowned'=>'ticket_owned','tksearch'=>'ticket_search'));?>";
        url = url.replace("ticket_case", ticket_case)
                 .replace("ticket_type", ticket_type)
                 .replace("ticekt_level", ticekt_level)
                 .replace("ticket_status", ticket_status)
                 .replace("ticket_owned", ticket_owned)
                 .replace("ticket_agent", ticket_agent)
                 .replace("ticket_search", ticket_search);
        jQuery(location).attr('href', url);
    }

    jQuery(document).ready(function(){
        var de_ticket_type = jQuery("#de_ticket_type").val();
        var de_ticket_status = jQuery("#de_ticket_status").val();
        var de_ticket_level = jQuery("#de_ticket_level").val();
        var de_ticket_agent = jQuery("#de_ticket_agent").val();
        var de_ticket_owned = jQuery("#de_ticket_owned").val();
        var de_ticket_search = jQuery("#de_ticket_search").val();
        if (de_ticket_type) {
            jQuery("#ticket_type").val(de_ticket_type);
        }
        if (de_ticket_status) {
            jQuery("#ticket_status").val(de_ticket_status);
        }
        if (de_ticket_level) {
            jQuery("#ticket_level").val(de_ticket_level);
        }
        if (de_ticket_agent) {
            jQuery("#ticket_agent").val(de_ticket_agent);
        }
        if (de_ticket_owned) {
            jQuery("#ticket_owned").val(de_ticket_owned);
        }
        if (de_ticket_search) {
            jQuery("#ticket_search").val(de_ticket_search);
        }
    })

    jQuery("#form_head_search").submit(function(){
        selectTicket();
        return false;
    })

</script>
</body>
</html>