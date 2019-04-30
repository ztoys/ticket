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



<style type="text/css">
	.table-title{
		font-size: 18px;
		font-weight: bold;
	}
	.table-note{
		border-left: 2px solid #0866c6;
		padding-left: 10px;
		margin: 20px 0;
		font-size: 14px;
	}
</style>
<!-- header end -->

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/unify.js"></script>
</head>


<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>
<body >

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
        
        <ul class="breadcrumbs">
            <li><a href="<?php echo U('Console/dashboard');?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="<?php echo U('Console/dashboard');?>">面板</a> <span class="separator"></span></li>
            <li>工单字段</li>
        </ul>
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                        <div>
                           <div class="widgetbox personal-information">
                               <div class="dataTables_wrapper">
								   <div class="table-title">工单字段</div>
								   <p class="table-note">启用的字段</p>
                                   <table class="table table-bordered">
                                   	<tr>
                                   		<th width="25%">字段名称</th>
                                   		<th width="25%">字段类型</th>
                                   		<th width="25%">字段类别</th>
                                   		<th width="25%">操作</th>
                                   	</tr>
                                   	<?php if(is_array($list_field)): $i = 0; $__LIST__ = $list_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="c_manage<?php echo ($vo["id"]); ?>">
                                   			<td><?php echo ($vo["name"]); ?></td>
                                   			<td>
												<?php switch($vo['type']): case "1": ?>文本框<?php break;?>
													<?php case "2": ?>文本区域<?php break;?>
													<?php case "3": ?>下拉菜单<?php break; endswitch;?>
											</td>
                                   			<td>
												<?php switch($vo['system']): case "1": ?>系统内置<?php break;?>
													<?php default: ?>自定义<?php endswitch;?>
											</td>
                                   			<td>
												<?php if($vo["system"] == '1' && $vo["id"] != 5): ?><span class="note">无法编辑</span>
													<?php else: ?>
													<a href="<?php echo U('Admin/ticket_field_detail', array('fieldid'=>$vo['id']));?>">编辑</a><?php endif; ?>
											</td>
                                   		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                   	
                                   </table>
                           </div>
                        </div>
                    </div><!--row-fluid-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
<script type="text/javascript">
jQuery(document).ready(function(){

	
	jQuery('.taglist .close').click(function(){
		jQuery(this).parent().remove();
		return false;
	});
	
});
</script>
</body>
</html>