<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>成员管理</title>

<!-- header binge -->


<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-timepicker.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/responsive-tables.css">


<!-- <script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.js"></script> -->
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-ui-1.9.2.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-timepicker.min.js"></script>
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
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/elements.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.dataTables.min.js"></script>


<!-- header end -->

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/unify.js"></script>

<script type="text/javascript">
jQuery(document).ready(function(){

	
	jQuery('.taglist .close').click(function(){
		jQuery(this).parent().remove();
		return false;
	});
	
});
</script>

</head>


<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>
<body>

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
                
                <li class="dropdown <?php echo ($data["user_one"]); ?>"><a href=""><span class="iconfa-user"></span> 用户管理</a>
                    <ul <?php echo ($data["user_block"]); ?>>
                        <li <?php echo ($data["user_block01"]); ?>><a href="<?php echo U('Admin/group_manage');?>">群组管理</a></li>
                        <li <?php echo ($data["user_block02"]); ?>><a href="<?php echo U('Admin/user_manage');?>">成员管理</a></li>
                    </ul>
                </li>

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
                <li <?php echo ($data03["sh_two01"]); ?>><a href="<?php echo U('Admin/config');?>"><span class="iconfa-comments"></span> 基本配置</a></li><?php endif; ?>
            
            <?php if($limits == '2'): ?><li class="nav-header">工单管理</li>
                <li <?php if($data["case"] == 'all'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=all');?>"><span class="iconfa-pencil"></span> 未指派工单</a></li>
                <li <?php if($data["case"] == 'manned'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=manned');?>"><span class="iconfa-pencil"></span> 分配给我的</a></li>
                <li <?php if($data["case"] == 'zhong'): echo ($data["active02"]); endif; ?>><a href="<?php echo U('Client/messages?case=zhong');?>"><span class="iconfa-pencil"></span>受理中</a></li>
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

<!-- header end -->
    
    <div class="rightpanel">
        <!-- head binge -->
        
			
        <ul class="breadcrumbs">
            <li><a href="<?php echo U('Console/dashboard');?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="<?php echo U('Console/dashboard');?>">后台面板</a> <span class="separator"></span></li>
            <li>成员管理</li>
        </ul>
		
		<!-- head end -->
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-pencil"></span></div>
            <div class="pagetitle">
				<h5 style="height:10px;"></h5>
                <h1>成员管理</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                   <div>
                        <div class="widgetbox personal-information">
                            <h4 class="widgettitle">
                                成员管理
                            </h4>
                            <div class="widgetcontent">
                                <div style="margin-bottom: 20px;">
                                    <label class="inline-block">群组：</label>
                                    <select class="form-control" id="group_select">
                                		<?php if(is_array($list_group)): $i = 0; $__LIST__ = $list_group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["status"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>

                                    <button type="button" data-toggle="modal" data-target="#modal_add_user" class="btn btn-success right">添加成员</button>
                                </div>
                            	<table class="table table-bordered table-middle">
                            		<tr>
                            			<th width="250px;">账号</th>
                            			<th width="300px;">姓名</th>
                            			<th width="300px;">手机</th>
                            			<th width="400px;">邮箱</th>
                            			<th width="200px;">操作</th>
                                    </tr>
                                    <tbody id="table_user">
                                        <?php if(is_array($list_user)): $i = 0; $__LIST__ = $list_user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr >
                                                <td><?php echo ($vo["userid"]); ?></td>
                                                <td><?php echo ($vo["uname"]); ?></td>
                                                <td><?php echo ((isset($vo["phone"]) && ($vo["phone"] !== ""))?($vo["phone"]):" -- "); ?></td>
                                                <td><?php echo ((isset($vo["email"]) && ($vo["email"] !== ""))?($vo["email"]):" -- "); ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger" onclick="delUser('<?php echo ($vo["userid"]); ?>')" style="margin-left: 10px;">删除</button>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                            	</table> 
		                    <?php echo ($page); ?>
                            </div>
                                      
                        </div>
                        <div id="update" style="display:none;">
                           	<form class="editprofileform" method="post">
                               <input type="hidden" name="f_submit" value="f_submit">
                               <input type="hidden" name="id" id="id" value="">
                               
                                <div class="widgetbox personal-information">
                                    <h4 class="widgettitle">修改售后人员</h4>
                                    <div class="widgetcontent">
                                    	
                                     <div id="update01">
	                                    	<p>
	                                            <label>账号：</label>
	                                            <input type="text" name="userid" id="userid" class="input-xlarge" value="" />
	                                        </p>
	                                    	<p>
	                                            <label>姓名：</label>
	                                            <input type="text" name="uname" id="uname" class="input-xlarge" value="" />
	                                        </p>
	                                       	<p>
	                                            <label>密码：</label>
		                                        <a href="javascript:void();" onclick="xiu('s_manage');">修改密码？</a>
	                                         </p>
	                                       
	                                        <p>
	                                            <label>手机：</label>
	                                            <input type="text" name="phone" id="phone" class="input-xlarge" value="" />
	                                        </p>
	                                        <p>
	                                            <label>email：</label>
	                                            <input type="text" name="email" id="email" class="input-xlarge" value="" />
	                                        </p>
		                                
	                                    </div>
	                                    
		                                 <div id="update02" style="display:none;">
		                                 	
		                                 	<input type="hidden" name="pwd_status" id="pwd_status" value="">
                                        	<p>
	                                            <label>旧密码：</label>
	                                            <input type="password" name="pwd" id="pwd" class="input-xlarge" value="" />
	                                        </p>
	                                        <p>
	                                            <label>新密码：</label>
	                                            <input type="password" name="pwd01" id="pwd01" class="input-xlarge" value="" />
	                                        </p>
	                                        
	                                        <p>
	                                            <label>确认密码：</label>
	                                            <input type="password" name="pwd02" id="pwd02" class="input-xlarge" value="" />
	                                        </p>
	                                        
                                        </div>
                                        
                                        <p>
		                                	<a href="javascript:void();" class="btn btn-primary" onclick="update_t('s_manage');"><small>提交信息</small></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                                	<a href="javascript:void();" class="btn btn-primary" onclick="none('update');"><small>取消</small></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                                	<span id="caozuo"></span>
		                                </p>
                                    </div>
                                </div>
                            </form>
                                       
                        </div>
                    </div><!--row-fluid-->
                  
                  
        		 <!-- footer binge -->
								<div class="footer">
                    
                </div><!--footer-->
				
				<!-- footer end -->
                
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->


<!-- 模态框 START -->

<!-- 添加新成员 -->
<div class="modal fade modal-add-user" id="modal_add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo U('Admin/user_add');?>" method="post" enctype="multipart/form-data" id="form_user_add">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        添加新成员
                    </h4>
                </div>
                <div class="modal-body">
                    <p style="margin-top: 20px;">
                        <label class="left label-title" style="margin-top:4px;width:100px;">帐号：</label>
                        <div class="cell">
                            <input type="text" name="acc" placeholder="" id="add_user_acc">
                        </div>
                    </p>
                    <p style="margin-top: 20px;">
                        <label class="left label-title" style="margin-top:4px;width:100px;">名称：</label>
                        <div class="cell">
                            <input type="text" name="name" placeholder="" id="add_user_name">
                        </div>
                    </p>
                    <p style="margin-top: 10px;">
                        <label class="left label-title" style="margin-top:4px;width:100px;">密码：</label>
                        <div class="cell">
                            <input type="password" name="pwd" placeholder="" id="add_user_pwd">
                        </div>
                    </p>
                    <p style="margin-top: 10px;">
                        <label class="left label-title" style="margin-top:4px;width:100px;">确认密码：</label>
                        <div class="cell">
                            <input type="password" placeholder="" id="add_user_repwd">
                        </div>
                    </p>
                    <input type="hidden" name="status" id="user_status">
                    <p style="margin-top: 10px;">
                        <label class="left label-title" style="margin-top:4px;width:100px;">群组：</label>
                        <div class="cell">
                            <select class="form-control" id="add_user_type">
                                <?php if(is_array($list_group)): $i = 0; $__LIST__ = $list_group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["status"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <button type="button" class="btn btn-primary" onclick="addUser()">
                        提交
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal -->
</div>

<!-- 删除用户 -->
<div class="modal fade modal-del-user" id="modal_del_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo U('Admin/user_del');?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        删除成员
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="user_del_id">
                    <h5>确认删除  <span id="user_del_name"></span>  吗？</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消
                    </button>
                    <button type="submit" class="btn btn-primary">
                        确认
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal -->
</div>


<!-- 模态框 END -->

</body>
<script>
    function addUser() {
        var acc = jQuery("#add_user_acc").val();
        var name = jQuery("#add_user_name").val();
        var pwd = jQuery("#add_user_pwd").val();
        var repwd = jQuery("#add_user_repwd").val();
        var type = jQuery("#add_user_type").val();

        if (!acc) {
            alert("请输入帐号！");
            return false;
        }
        if (!name) {
            alert("请输入名称！");
            return false;
        }
        if (!pwd || !repwd) {
            alert("请输入密码！");
            return false;
        }
        if (pwd != repwd) {
            alert("密码不一致！");
            return false;
        }

        jQuery("#user_status").val(type);
        jQuery("#form_user_add").submit();
    }

    function delUser(uid) {
        jQuery("#user_del_name").text(uid);
        jQuery("#user_del_id").val(uid);
        jQuery("#modal_del_user").modal('show');
    }

    jQuery("#group_select").change(function(){
        var groupId = jQuery(this).val();
        jQuery.ajax({
            type: "post",
            url: "sel_group_user",
            data: {
                id: groupId
            },
            success: function (data) {
                var tbody = jQuery("#table_user");
                var html_tpl = '';
                var dataLen = data.length;
                if (dataLen) {
                    for(var i = 0; i < dataLen; i++) {
                        html_tpl += '<tr><td>' + data[i].userid + '</td><td>' + data[i].uname + '</td><td>' + data[i].phone + '</td><td>' + data[i].email + '</td><td><button type="button" class="btn btn-sm btn-danger" onclick="delUser(\'' + data[i].userid + '\')" style="margin-left: 10px;">删除</button></td></tr>'
                    }
                } else {
                    html_tpl = '<tr><td colspan="5" style="text-align: center;">暂无数据</td></tr>';
                }
                tbody.html(html_tpl);
            }
        })
    })

</script>
</html>