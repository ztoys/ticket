<?php 
header("Content-type: text/html; charset=utf-8");
$status = isset($_POST['status'])	? $_POST['status'] : false;
if($status){
	
	//检测数据库账号密码
	$mysql = mysqli_connect($_POST['db_host'],$_POST['db_user'],$_POST['db_pwd']);
	$link =  $mysql ? 1 : 2;
	if($link == 1){

		//创建数据库
		$db_name = $_POST['db_name'];
		//查询数据库是否存在 ，存在则删除，再创建
		// $sel_db = mysqli_select_db($_POST['db_name'],$mysql);
		// if($sel_db){
		// 	$dbname01 = mysql_query("drop database $db_name");
		// }
		$conn = new mysqli($_POST['db_host'],$_POST['db_user'],$_POST['db_pwd']);
		// 检测连接
		if ($conn->connect_error) {
			die("连接失败: " . $conn->connect_error);
		}
		$create_db_sql = "CREATE DATABASE ".$db_name;
		$dbname02 = $conn->query($create_db_sql);
		// $dbname02 = mysql_query("CREATE DATABASE $db_name");
			
		if($dbname02){
			mysqli_select_db($mysql, $_POST['db_name']);
			//创建 默认数据表
			$sql_arr = array(
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."addwork;",
					"CREATE TABLE ".$_POST['db_prefix']."addwork (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						tz_status enum('1','-1') NOT NULL DEFAULT '-1',
						g_reply text NOT NULL,
						repdate varchar(250) NOT NULL,
						pid int(10) NOT NULL,
						uid int(10) NOT NULL,
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."config;",
					"CREATE TABLE ".$_POST['db_prefix']."config (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						mail_address varchar(250) NOT NULL,
						mail_smtp varchar(250) NOT NULL,
						mail_loginname varchar(250) NOT NULL,
						mail_password varchar(250) NOT NULL,
						mail_formname varchar(250) NOT NULL,
						phone_target varchar(250) NOT NULL,
						phone_user varchar(250) NOT NULL,
						phone_pass varchar(250) NOT NULL,
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."ecomment;",
					"CREATE TABLE ".$_POST['db_prefix']."ecomment (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						remark varchar(250) NOT NULL,
						s_grade enum('2','1') NOT NULL,
						f_grade enum('2','1') NOT NULL,
						pj_date varchar(250) NOT NULL,
						uid int(10) NOT NULL,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."service;",
					"CREATE TABLE ".$_POST['db_prefix']."service (
						id tinyint(10) unsigned NOT NULL,
						uname varchar(250) NOT NULL,
						phone varchar(250) NOT NULL,
						email varchar(250) NOT NULL,
						time varchar(250) NOT NULL,
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."status;",
					"CREATE TABLE ".$_POST['db_prefix']."status (
						id tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
						type enum('1', '2', '3') NOT NULL,
						status varchar(250) NOT NULL,
						time varchar(250) NOT NULL,
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."time;",
					"CREATE TABLE ".$_POST['db_prefix']."time (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						begin_time varchar(250) NOT NULL,
						end_time varchar(250) NOT NULL,
						begin_beputtime varchar(250) NOT NULL,
						end_beputtime varchar(250) NOT NULL,
						pubtime varchar(250) NOT NULL,
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."user;",
					"CREATE TABLE ".$_POST['db_prefix']."user (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						userid varchar(250) NOT NULL,
						pwd varchar(250) NOT NULL,
						uname varchar(250),
						qq varchar(250),
						email varchar(250),
						phone varchar(250),
						url varchar(250),
						f_date varchar(250),
						zl_status enum('1','-1') DEFAULT '-1',
						u_status varchar(250),
						limits enum('1','2','3') NOT NULL,
						sid varchar(250),
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."work;",
					"CREATE TABLE ".$_POST['db_prefix']."work (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						title varchar(250) NOT NULL,
						issue text NOT NULL,
						sc_file varchar(255) NOT NULL,
						puddate varchar(250) NOT NULL,
						accdate varchar(250) ,
						work_type int(11) NOT NULL,
						work_level int(11) NOT NULL,
						work_owned int(11) NOT NULL,
						work_product int(11),
						work_develop int(11),
						work_finish varchar(250),
						cc_status enum('-1','1') NOT NULL,
						tz_status enum('-1','1') NOT NULL,
						wc_sataus enum('2','1','-1','3','4') NOT NULL,
						ea_status enum('-1','1'),
						uid int(250) NOT NULL,
						did int(250),
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."evaluation;",
					"CREATE TABLE ".$_POST['db_prefix']."evaluation (
						work_id int(10) unsigned NOT NULL AUTO_INCREMENT,
						resolve varchar(255) NOT NULL,
						assess varchar(255) NOT NULL,
						remark varchar(255),
						create_time bigint(20) NOT NULL,
						PRIMARY KEY (work_id)
						) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."wrecord;",
					"CREATE TABLE ".$_POST['db_prefix']."wrecord (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						wid int(10) NOT NULL,
						uid int(10) NOT NULL,
						time bigint(20) NOT NULL,
						event text,
						point_word text,
						PRIMARY KEY (id),
						KEY wid (wid)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",
					"DROP TABLE IF EXISTS ".$_POST['db_prefix']."files;",
					"CREATE TABLE ".$_POST['db_prefix']."files (
						id int(10) unsigned NOT NULL AUTO_INCREMENT,
						file_name varchar(255) NOT NULL,
						save_name varchar(255) NOT NULL,
						save_path varchar(255) NOT NULL,
						PRIMARY KEY (id)
					) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;",

			);
			$i = 0;
			foreach ($sql_arr as $k=>$v){
				$result = mysqli_query($mysql, $v);
				if($result){
					$i += 1;
				}
			}

			if($i == 21){
				$result = mysqli_query($mysql, "insert into ".$_POST['db_prefix']."user(userid,pwd,email,limits,zl_status) values('".$_POST['userid']."','".md5($_POST['pwd'])."','".$_POST['email']."','1','1')");
				if($result){
					//创建项目的配置文件
					$config ="<?php
							return array(

								'DB_TYPE'		=>	'mysql'	,							// 数据库类型
								'DB_HOST'		=> '".$_POST['db_host']."',					// 服务器地址
								'DB_NAME'		=> '".$_POST['db_name']."',					// 数据库名
								'DB_USER'		=> '".$_POST['db_user']."',					// 账号
								'DB_PWD'		=> '".$_POST['db_pwd']."',					// 密码
								'DB_PORT'		=>	3306,								// 端口
								'DB_PREFIX'		=> '".$_POST['db_prefix']."',					// 数据库表前缀
								'DB_CHARSET'	=> '".$_POST['db_charset']."',				// 数据库字符集
								'URL'			=>	__ROOT__.'/haoidcn/Admin/Public/',	//引入文件路径


								//邮箱
								'MAIL_CHARSET'	=>	'UTF-8',							//编码
								'MAIL_AUTH'		=>	true,								//邮箱认证
								'MAIL_HTML'		=>	true,								//true HTML格式 false TXT格式

							);";
					$fp = fopen('../haoidcn/Admin/Conf/config.php',"w");
					$result = fwrite($fp, $config);
					
					if($result){
						$url = explode('/', $_SERVER['PHP_SELF']);
						echo "<script>alert('安装成功，现在跳转到工单系统的登录页面'); location.href='../';</script>";
					}
				} else {
					die("生成管理员失败".mysqli_error($conn));
				}
			}

		} else {
			die("创建数据库".$db_name."失败".$conn->connect_error);
		}
	}else if($link == 2){

		echo "<script>alert('数据库服务器或登录密码不正确'); history.go(-1);</script>";
		exit;

	}
}
$step = isset($_GET['step']) ? $_GET['step'] : 1;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>工单系统</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="css/install.css" type="text/css"/>

<script src="js/jquery.js" language="javascript" type="text/javascript"></script>
<script src="js/install.js" language="javascript" type="text/javascript"></script>


</head>
<body class="body">
	<div class="con_bg">
		<div class="con">
			<div class="con-config">
				<form action="" id='fomr01' class="editprofileform" method="post">
					<input type="hidden" name="status" value="1">
					<div class="con_title"><h3><b>基本配置</b></h3></div>
					<div class="con-agreement01">
						<div class="con-email">
							<br/>
							<div style="color : #337ab7;"><label>数据库配置</label></div>
							<p>
								<label style="width:150px;">数据库主机：</label>
								<input type="text" class="input-xlarge" name="db_host" id="db_host" value="localhost" placeholder="" style="width:350px;"/>
							</p>
							<p>
								<label style="width:150px;">数据库账号：</label>
								<input type="text" class="input-xlarge" name="db_user" id="db_user" value="root" placeholder="" style="width:350px;"/>
							</p>
							<p>
								<label style="width:150px;">数据库密码：</label>
								<input type="text" class="input-xlarge" name="db_pwd" id="db_pwd" value="" placeholder="" style="width:350px;"/>
							</p>
							<p>
								<label style="width:150px;">数据表前缀：</label>
								<input type="text" class="input-xlarge" name="db_prefix" id="db_prefix" value="haoidcn_" placeholder="如：haoidcn_" style="width:350px;"/>
							</p>
							<p>
								<label style="width:150px;">数据库名称：</label>
								<input type="text" class="input-xlarge" name="db_name" id="db_name" value="" placeholder="如：haoidcn" style="width:350px;"/>
								
							</p>
							<p>
								<label style="width:150px;"></label>
								<font>如数据库已存在，系统将会覆盖已有的数据库</font>
							</p>
							<br/>
							<p>
								<label style="width:150px;">数据库编码：</label>
								<input type="text" class="input-xlarge" name="db_charset" id="db_charset" value="UTF8" readonly="readonly" style="width:350px;"/>
							</p>
						</div>
						
						<div class="con-admin">
							<br/>
							<div style="color : #337ab7;"><label>管理员初始密码</label></div>
							<p>
								<label style="width:150px;">管理员账号：</label>
								<input type="text" class="input-xlarge" name="userid" id="userid" value="admin" placeholder="" style="width:350px;"/>
							</p>
							<p>
								<label style="width:150px;">管理员密码：</label>
								<input type="text" class="input-xlarge" name="pwd" id="pwd" value="admin" placeholder="" style="width:350px;"/>
							</p>
							<p>
								<label style="width:150px;">管理员邮箱：</label>
								<input type="text" class="input-xlarge" name="email" id="email" value="" placeholder="如：admin@163.com" style="width:350px;"/>
							</p>
						</div>
						<br/>
					</div>
					<div class="con-base">
						<input type="button" class="btn btn-primary" value="开始安装" onclick="DoInstall();" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
