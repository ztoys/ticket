<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>工单系统</title>
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/style.shinyblue.css" type="text/css" />
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/user.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>
<style type="text/css">
    input.readonly {
        background: #DDD;
    }
    .wait-verify{
        width: 300px;
        height: 300px;
        box-shadow: 0 2px 10px rgba(255, 255, 255,.3);
        background: #FFF;
        margin-top: -40px;
        padding-top: 60px;
        border-radius: 10px;
        text-align: center;
        box-sizing: border-box;
    }
    .wait-verify i{
        width: 128px;
        height: 128px;
    }    
    .wait-verify .text{
        margin-top: 20px;
        font-size: 16px;
    }    
    .alert{
        display: inline-block;
        position: relative;
        top: 0;
        left: 0;
        margin-left: 0;
        width: 270px;
    }
</style>
</head>

<body class="loginpage">
<div class="loginpanel">
    <div class="loginpanelinner">
        <?php if($user_not_exist == false): if($userlaw == '-1'): ?><div class="wait-verify">
                    <i class="icon-verify"></i>
                    <p class="text">
                        请等待管理员验证通过
                    </p>
                </div><?php endif; ?>
            <form id="login" action="?" method="post" style="<?php if($userlaw == '-1'): ?>display: none;<?php endif; ?>">
                <input type="hidden" name='root' id='root' value="<?php echo (C("ROOT")); ?>">
                <input type='hidden' name='login' id='login' value="login">
                
                <div class="inputwrapper login-alert">
                    <div class="alert alert-error">无效的用户名或密码</div>
                </div>
                
                <?php if($ok == '-1'): ?><div class="inputwrapper login-alert" style="display:block">
                        <div class="alert alert-error">用户名或密码输入错误</div>
                    </div><?php endif; ?>
                <div class="inputwrapper animate1 bounceIn">
                    <input type="text" name="username" id="username" value="" placeholder="账号/手机/邮箱" />
                </div>
                <div class="inputwrapper animate2 bounceIn">
                    <input type="password" name="password" id="password" value="" placeholder="输入密码" />
                </div>
                <div class="inputwrapper animate3 bounceIn">
                    <button name="submit">登录</button>
                </div>
            </form><?php endif; ?>

        <?php if($user_not_exist): ?><form action="<?php echo U('Index/user_add');?>" method="post" enctype="multipart/form-data" id="form_user_add">
                <input type="hidden" name="status" id="user_group">
                <div class="inputwrapper animate1 bounceIn">
                    <input type="text" name="acc" placeholder="帐号：" value="<?php echo ($user_info["account"]); ?>" class="readonly" readonly="readonly" >
                </div>
                <div class="inputwrapper animate1 bounceIn">
                    <input type="text" name="name" placeholder="名称：" value="<?php echo ($user_info["user_name"]); ?>" class="readonly" readonly="readonly" >
                </div>
                <div class="inputwrapper animate1 bounceIn">
                    <select class="form-control" id="add_user_type" style="width:270px;height:40px;">
                        <?php if(is_array($list_group)): $i = 0; $__LIST__ = $list_group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["status"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="inputwrapper animate1 bounceIn">
                    <input type="password" name="pwd" placeholder="密码：" id="add_user_pwd">
                </div>
                <div class="inputwrapper animate1 bounceIn">
                    <input type="password" placeholder="确认密码：" id="add_user_repwd">
                </div>
                <div class="inputwrapper animate3 bounceIn">
                    <button name="button" onclick="registerAcc()">注册</button>
                </div>
            </form><?php endif; ?>
        
    </div><!--loginpanelinner-->
</div><!--loginpanel-->


</body>
<script>

    function registerAcc () {
        var p = jQuery("#add_user_pwd").val();
        var r = jQuery("#add_user_repwd").val();

        if ( p == "" || r == "") {
            alert("请输入密码！");
            return false;
        }

        if (p != r) {
            alert("密码不一致！");
            return false;
        }

        jQuery("#user_group").val(jQuery("#add_user_type").val());
        jQuery("#form_user_add").submit();
    }

	/* function ajax_login(){
		 onsubmit=" return ajax_login();"
	    var root = jQuery('#ROOT').val();

	    var u = jQuery('#username').val();
	    var p = jQuery('#password').val();
		$.ajax({
			type:"get",
			url:root+"actionindex.html?username="+u+"&password="+p,
			success:function(mag){
				if(mag == "-1"){

	                jQuery('.login-alert').fadeIn();
	                return false;
				}
			}
		});
	} */
</script>

</html>