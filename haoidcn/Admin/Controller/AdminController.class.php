<?php
namespace Admin\Controller;

use Think\Controller;

class AdminController extends CommonController {
	
	//用户管理 - 群组管理
	public function group_manage() {
		$data = array(
			'user_one' => "active",
			'user_block' => "style='display:block'",
			'user_block01' => "class='active'",
		);
		$this->assign("data", $data);
		
		$list = $this->sel_sql("status", "", "time desc");
		$this->assign("list", $list);
    	$this->display();
	}

	//用户管理 - 群组管理 -- 添加新群组
	public function group_add() {
		$name = I("post.name");
		$type = I("post.type");
		$data = array(
			'status' => $name,
			'time' => time(),
			'type'	=>	$type,
		);
		$result = $this->inser_sql("status", $data);
		if ($result) {
			echo "<meta charset='utf-8' /><script>alert('添加新群组 $name 成功'); location.href='group_manage.html';</script>";
		} else {
			echo "<meta charset='utf-8' /><script>alert('添加新群组 $name 失败');</script>";
		}
	}

	//用户管理 - 群组管理 -- 修改群组
	public function group_set() {
		$id = I("post.id");
		$name = I("post.name");
		$data = array(
			'status' => $name,			
		);
		$result = $this->update_sql("status", "id='$id'",$data);
		if ($result) {
			echo "<meta charset='utf-8' /><script>alert('修改群组成功'); location.href='group_manage.html';</script>";
		} else {
			echo "<meta charset='utf-8' /><script>alert('修改群组失败');</script>";
		}
	}

	//用户管理 - 群组管理 -- 删除群组
	public function group_del() {
		$id = I("post.id");
		$result = $this->del_sql("status", "id='$id'");
		if ($result) {
			echo "<meta charset='utf-8' /><script>alert('删除群组成功'); location.href='group_manage.html';</script>";
		} else {
			echo "<meta charset='utf-8' /><script>alert('删除群组失败');</script>";
		}
	}


	//用户管理 - 成员管理
	public function user_manage() {
		$data = array(
			'user_one' => "active",
			'user_block' => "style='display:block'",
			'user_block02' => "class='active'",
		);

		$this->assign("data", $data);

		$list_group = $this->sel_sql("status", "");
		$this->assign("list_group", $list_group);

		//查询用户
		$group_id =  $list_group[0]['id'];
		$list_user = $this->sel_sql("user", "u_status='$group_id'");
		$this->assign("list_user", $list_user);
		$this->assign("list_user_empty", '<tr><td colspan="5" style="text-align: center;">暂无数据</td></tr>');

    	$this->display();
	}

	//用户管理 - 成员管理 - 添加用户
	public function user_add() {
		$acc = I("post.acc");
		$name = I("post.name");
		$pwd = I("post.pwd");
		$status = I("post.status");

		$group_info = $this->sel_sql_single("status", "id='$status'");
		$limits = $group_info['type'];
		
		$data = array(
			'userid'   => $acc,
			'pwd'      => md5($pwd),
			'uname'    => $name,
			'u_status' => $status,
			'limits'  => $limits,
			'f_date'   => time(),
		);
		$result = $this->inser_sql("user", $data);
		if ($result) {
			echo "<meta charset='utf-8' /><script>alert('添加成员 $name 成功'); location.href='user_manage.html';</script>";
		} else {
			echo "<meta charset='utf-8' /><script>alert('添加成员 $name 失败');</script>";
		}
	}

	//用户管理 - 群组管理 -- 删除成员
	public function user_del() {
		$id = I("post.id");
		$result = $this->del_sql("user", "userid='$id'");
		if ($result) {
			echo "<meta charset='utf-8' /><script>alert('删除成员 $id 成功'); location.href='user_manage.html';</script>";
		} else {
			echo "<meta charset='utf-8' /><script>alert('删除成员 $id 失败');</script>";
		}
	}

	//查询群组成员
	public function sel_group_user() {
		$group_id = I("post.id");
		$list_user = $this->sel_sql("user", "u_status='$group_id'");
		$this->ajaxReturn($list_user,'JSON');
	}

 	//添加客户
    public function client(){
    	$data01 = array(
    		'kh_one' => "active",
    		'kh_block' => " style='display:block';",
    		'kh_two01' => " class='active'"
    	);
    	$this->assign("data01",$data01);
    	
    	//显示   用户类型    以及负责人
    	$this->sely_f();
    	
    	if(I("post.f_submit")){
    		
    		if(I("post.pwd") == I("post.pwd01")){

    			$data01 = array(
						'userid' => strtolower(I("post.userid")),
						'uname' => strtolower(I("post.userid")),
    					'pwd' => md5(I("post.pwd")),
    					'sid' => I("post.sid"),
    					'u_status' => I("post.u_status"),
    					'limits' => 3,
    					'f_date' => time()
    			);
    			$result = D("user")->add($data01);
    			if($result){
					echo "<meta charset='utf-8' /><script>alert('客户添加成功'); location.href='client.html';</script>";
	    		}else{
					echo "<meta charset='utf-8' /><script>alert('客户添加失败');  history.go(-1);</script>";
	    		}
    		}else{
    			$this->error('新增失败');
    		}
    	}
    	
    	$this->display();
    }
    
    //管理客户
    public function c_manage(){
    	if(IS_AJAX){
    	
    		
    		//修改客户
    		if(I("get.sel")){
    			$data = array(
    					'id'		=>	I("get.id"),
    					'limits'	=>	'3'
    			);
    			
    			$result = D("user")->field("id,userid,uname,qq,email,phone,url,u_status,sid,pwd")->where($data)->find();
    			//显示
    			if(I("get.sel") == "sel_u"){
    				$jiben = implode("-",$result);
    				$sta_arr = D("service")->where('id='.$result['sid'])->find();
    				$sta = $sta_arr['uname'];
    				$this->ajaxReturn($jiben.'-'.$sta);
    			}
    			
    			//修改密码
    			if(I("get.sel") == "sel_p"){
    				if(md5(I("get.pwd")) == $result['pwd']){
    					$data = array(
    							'pwd'	=>	md5(I("get.pwd01"))
    					);
    					$id = I("get.id");
    					$re = D("user")->where("id='$id'")->save($data);
    					if($re){
    						$se = 1;
    					}
    				}else{
    					$se = 2;
    				}
    			}
    			
    		//修改基本信息
			if(I("get.sel") == "upd"){
				
				
		 		$data = array(
		   				'userid'	=>	strtolower(I("get.userid")),
		   				'uname'		=>	I("get.uname"),
		   				'phone'		=>	I("get.phone"),
		   				'qq'		=>	I("get.qq"),
		   				'email'		=>	I("get.email"),
		   				'url'		=>	I("get.url"),
		   				'sid'		=>	I("get.sid"),
		   				'u_status'		=>	I("get.u_status")
		   		);
		   		$id = I("get.id");
		   		$se = D("user")->where("id='$id'")->save($data);
	
	   		}
    			
    			
    			$this->ajaxReturn($se);
    		}
    		
    		exit;
    		
    	}
    	

    	//删除客户
    	if(I("get.del")){
    		$id = I("get.id");
    		$result = D("user")->where("id=$id")->delete();
    	}
    	 
    	
    	//显示   用户类型    以及负责人
    	$this->sely_f();
    	
    	$data01 = array(
    		'kh_one' => "active",
    		'kh_block' => " style='display:block';",
    		'kh_two02' => " class='active'"
    	);
    	$this->assign("data01",$data01);
    	
    	
//     	显示客户列表
    	$User = D("user");
    	$count  = $User->where("limits='3'")->count();    //计算总数
    	$Page   = new \Think\Page($count,10);
    	
    	$Page->setConfig('prev', "上一页");
    	$Page->setConfig('next', '下一页');
    	$Page->setConfig('first', '首页');
    	$Page->setConfig('last', '尾页');
    	$show 	= $Page->show();
    	
    	$list = $User->table(C('DB_PREFIX').'user u, '.C('DB_PREFIX').'service s')->where("u.sid=s.id and u.limits='3'")->field('u.id,u.userid,u.uname,u.qq u_qq,u.email u_email,u.phone u_phone,u.url u_url,u.u_status,s.uname s_name,u.limits')->limit($Page->firstRow. ',' . $Page->listRows)->order("f_date desc")->select();
    	$this->assign("list",$list);
    	
    	$this->assign("page",$show);
    	$this->display();
    }
    
    
    //添加类型
    public function c_status(){
    	
    	$data = D("status")->order("time desc")->select();
    	//显示列表
    	$this->assign("data",$data);
    	
    	//添加类型
    	if(I("post.f_submit")){
    		$data = array(
    			"status" => I("post.status"),
    			"time" => time()
    		);
    		$result = D("status")->add($data);
    		
	    	if($result){
				echo "<meta charset='utf-8' /><script>alert('添加成功'); location.href='c_status.html';</script>";
	    	}else{
				echo "<meta charset='utf-8' /><script>alert('添加失败');  history.go(-1);</script>";
	   		}
    		
    	}
    	
    	//删除类型
    	if(I("get.del")){
    		$id = I("get.id");
    		$result = D("status")->where("id=$id")->delete();
    	}
    	

    	$data01['kh_one'] = "active";
    	$data01['kh_block'] = " style='display:block';";
    	$data01['kh_two03'] = " class='active'";

    	$this->assign("data01",$data01);
    	
    	$this->display();
    }
    
    //添加售后
    public function service(){
	
    	$data = array(
    			'sh_one' => "active",
    			'sh_block' => " style='display:block';",
    			'sh_two01' => " class='active'",
    			'f_date' => time()
    	);
    	$this->assign("data",$data);
    	
    	//添加售后
    	if(I("post.f_submit")){
    		if(I("post.pwd") == I("post.pwd01")){

    			
    			$data = array(
    					"userid" => strtolower(I("post.userid")),
    					"uname" => I("post.uname"),
    					"pwd" => md5(I("post.pwd")),
    					"phone" => I("post.phone"),
    					"email" => strtolower(I("post.email")),
    					"zl_status" => "1",
    					"limits" => 2,
    					"f_date" => time()
    			);
    			$result = D("user")->add($data);
	    		
	    		if($result){
	    			$res01 = D("user")->where("userid='".strtolower(I("post.userid"))."'")->find();
	    			//添加service
	    			$data01 = array(
	    					"id"=>$res01['id'],
	    					"uname" => I("post.uname"),
	    					"phone" => I("post.phone"),
	    					"email" => strtolower(I("post.email")),
	    					"time" => time()
    				);
    				$result = D("service")->add($data01);
						echo "<meta charset='utf-8' /><script>alert('添加成功'); location.href='service.html';</script>";
	    		}else{
	    			echo "<meta charset='utf-8' /><script>alert('添加失败');  history.go(-1);</script>";
	    		}
				exit;
    		}
    		
    	}
    	
    	//显示添加是否成功
    	
    	$this->display();
    }
    
    //管理售后
    public function s_manage(){
    	
    	//修改售后
	   	if(IS_AJAX){
	   		
	   		
	   		if(I("get.sel")){
	   			$data = array(
	   					'id'		=>	I("get.id"),
	   					'limits'	=>	'2'
	   			);
	   			
	   			$result = D("user")->where($data)->find();
	   			
				if(I("get.sel") == "sel_u"){
					$this->ajaxReturn(implode("-",$result));
				}
				
				//修改密码
				if(I("get.sel") == "sel_p"){
					if(md5(I("get.pwd")) == $result['pwd']){
						$data = array(
							'pwd'	=>	md5(I("get.pwd01"))
						);
						$id = I("get.id");
						$re = D("user")->where("id='$id'")->save($data);
						if($re){
							$se = 1;
						}
					}else{
						$se = 2;
					}
				}
				//修改基本信息
	   			if(I("get.sel") == "upd"){
		   			$data = array(
		   					'userid'	=>	strtolower(I("get.userid")),
		   					'uname'		=>	I("get.uname"),
		   					'phone'		=>	I("get.phone"),
		   					'email'		=>	I("get.email")
		   			);
		   			$id = I("get.id");
		   			$se = D("user")->where("id='$id'")->save($data);
		   			D("service")->where("id='$id'")->save($data);
	
		   		}
	   			$this->ajaxReturn($se);
	   		}
    		exit;
    	}
    	
    	$User = D("user");
    	$count  = $User->where("limits='2'")->count();    //计算总数
    	$Page   = new \Think\Page($count,10);
    	$Page->setConfig('prev', "上一页");
    	$Page->setConfig('next', '下一页');
    	$Page->setConfig('first', '首页');
    	$Page->setConfig('last', '尾页');
    	$show 	= $Page->show();
    	$this->assign("page",$show);
    	
    	$list = $User->where("limits='2'")->order("f_date desc")->limit($Page->firstRow. ',' . $Page->listRows)->select();
    	$this->assign("list",$list);
    	 
    	$data = array(
    			'sh_one' => "active",
    			'sh_block' => " style='display:block';",
    			'sh_two02' => " class='active'"
    	);
    	$this->assign("data",$data);
    	$this->display();
    }
    
    //工作时间
    public function office(){
    	
    	$list = D('time')->find();
    	$this->assign('list',$list);
		if(IS_POST){
			$data = array(
				'begin_time'		=>	I('post.begin_time'),
				'end_time'			=>	I('post.end_time'),
				'begin_beputtime'	=>	strtotime(I('post.begin_beputtime')),
				'end_beputtime'		=>	strtotime(I('post.end_beputtime')),
				'pubtime'			=>	time(),
			);
			
			if(empty($list)){
				$result = D('time')->add($data);
			}else{
				$result = D('time')->where("id='".$list['id']."'")->save($data);
			}
			if($result){
				echo "<meta charset='utf-8' /><script>alert('更新成功'); location.href='office.html';</script>";
			}
			exit;
		}

		$list = D('time')->find();
		$this->assign('list',$list);
    	
    	$data02 = array(
    			'sh_one' => "active",
    			'sh_block' => " style='display:block';",
    			'sh_two01' => " class='active'",
    			'f_date' => time()
    	);
    	$this->assign("data02",$data02);
    	$this->display();
    }
    
    
    //基本配置
    public function config(){
//     	echo $mall_address = strtoupper('mall_address');
    	
    	$config = D("config");
    	$list = $config->find();
    	$this->assign("list",$list);
    	if(IS_POST){
    		
//     		$data = array(
//     			'mail_address'=>I("post.mail_address"),
//     			'mail_smtp'=>I("post.mail_smtp"),
//     			'mail_loginname'=>I("post.mail_loginname"),
//     			'mail_password'=>I("post.mail_password"),
//     			'mail_formname'=>I("post.mail_formname"),
//     			'phone_target'=>I("post.phone_target"),
//     			'phone_user'=>I("post.phone_user"),
//     			'phone_pass'=>I("post.phone_pass"),
//     		);
    		
    		
    		if($list){		//更新操作
    			$re = $config->where("id='".$list['id']."'")->save($_POST);
    		}else{			//添加操作
    			$re = $config->add($_POST);
    		}
			if($re){

				echo "<script>alert('更新成功'); location.href='config.html';</script>";
				exit;
			}else{

				echo "<script>alert('更新成功'); history.go(-1);</script>";
				exit;
			}
    	}
    	
    	
		$data03 = array(
    			'sh_two01' => " class='active'",
    	);
    	$this->assign("data03",$data03);
    	$this->display();
    }    
    
    
  	//查询 用户类型-负责人 查询
  	private function sely_f(){
  		
  		//显示用户类型
    	$data = D("status")->order("time desc")->select();
    	$this->assign("data",$data);
    	
    	//显示负责人
    	$data02 = D("service")->order("time desc")->select();
    	$this->assign("data02",$data02);
  	}
	
	//添加数据
	public function inser_sql($model,$data){
		return D($model)->add($data);
	}
	  
	//更新操作	
	public function update_sql($model,$where,$data){
		$result = D($model)->where($where)->setField($data);
		return $result;
	}

	//删除操作	
	public function del_sql($model,$where){
		return D($model)->where($where)->delete();
	}

	//简单查询	多条
	public function sel_sql($model,$where,$orders){
		$result_arr = D($model)->where($where)->order($orders)->select();
		return $result_arr;
	}

	//简单查询 单条
	public function sel_sql_single($model, $where) {
		$result = D($model)->where($where)->find();
		return $result;
	}
}