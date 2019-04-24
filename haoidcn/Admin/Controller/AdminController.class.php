<?php
namespace Admin\Controller;

use Think\Controller;
use Admin\Model\WrecordModel;
use Admin\Model\WorkModel;

class AdminController extends CommonController {
	
	//用户管理 - 群组管理
	public function group_manage() {
		$data = array(
			'user_one' => "active",
			'user_block' => "style='display:block'",
			'user_block01' => "class='active'",
		);
		$this->assign("data", $data);

		$ticket_count = $this->getWorkCount();
		$this->assign('ticket_count', $ticket_count);
		
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

		$ticket_count = $this->getWorkCount();
		$this->assign('ticket_count', $ticket_count);

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

	//用户管理 - 群组管理 -- 授权成员
	public function user_ver() {
		$id = I("post.id");
		$data = array(
			"zl_status" => '1',
		);
		$result = $this->update_sql("user", "userid='$id'", $data);
		if ($result) {
			echo "<meta charset='utf-8' /><script>alert('授权成员 $id 成功'); location.href='user_manage.html';</script>";
		} else {
			echo "<meta charset='utf-8' /><script>alert('授权成员 $id 失败');</script>";
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

	//用户管理 - 未指派工单
	public function ticket(){
		$limits = I("session.limits");		//权限    2-售后	3-会员
		$id = I("session.uid");				//当前用户id
		$status = I("get.case");			//工单状态
		
		//搜索操作
		$ticket_type = I("get.tktype");
		$ticket_status = I("get.tkstatus");
		$ticket_level = I("get.tklevel");
		$ticket_owned = I("get.tkowned");
		$where = "";
		if($ticket_type != '' && $ticket_type != '0'){
			$this->assign('ticket_type',$ticket_type);
			$where = $where." and w.work_type='$ticket_type'";
		}
		if($ticket_status != '' && $ticket_status != '0'){
			$this->assign('ticket_status',$ticket_status);
			$where = $where." and w.wc_sataus='$ticket_status'";
		}
		if($ticket_level != '' && $ticket_level != '0'){
			$this->assign('ticket_level',$ticket_level);
			$where = $where." and w.work_level='$ticket_level'";
		}
		if($ticket_owned != '' && $ticket_owned != '0'){
			$this->assign('ticket_owned',$ticket_owned);
			$where = $where." and w.work_owned='$ticket_owned'";
		}

		//列表显示数据	-- 分页
		if($limits == 1 && $status == 'all'){
			$db_work = "work";
			$db_field = "w.id id, w.title title, w.puddate puddate, w.accdate accdate, w.wc_sataus wc_sataus, w.uid uid, w.work_type work_type,w.work_level work_level,w.work_owned work_owned, w.work_product work_product,w.work_develop work_develop,w.work_finish work_finish, u.uname uname";
			$db_join = "left join ".C('DB_PREFIX')."user AS u ON w.uid=u.id";
			$db_order = "puddate desc";

			// $list = $this->left_join_sql($db_work, "w", $db_field, $db_join, "(w.did is null or w.did=0) and w.wc_sataus<>'3' $where", $db_order);

			$count = $this->left_join_count($db_work, "w", $db_field, $db_join, "(w.did is null or w.did=0) and w.wc_sataus<>'3' $where", $db_order);
			$p = Getpage($count);
			$list = $this->left_join_limit($db_work, "w", $db_field, $db_join, "(w.did is null or w.did=0) and w.wc_sataus<>'3' $where", $db_order, $p->firstRow, $p->listRows);
			
			if ($status == "all") {
				$this->assign('list_empty', '<tr><td colspan="7" style="text-align:center;">暂无数据</td></tr>');
			} else {
				$this->assign('list_empty', '<tr><td colspan="8" style="text-align:center;">暂无数据</td></tr>');
			}
			$p_show = $p->show();
			$this->assign('list',$list);
			$this->assign('page',$p_show);
		}
		
		//列表选中显示样式
		$db_field = "u.id u_id,u.uname u_uname,u.email u_email,u.url u_url,u.phone u_phone,
		w.id w_id,w.title w_title,w.issue w_issue,w.sc_file w_sc_file,w.puddate w_puddate,w.wc_sataus,
		s.id s_id,s.email s_email,s.uname s_uname,s.phone s_phone";
		$main = D('Work as w')->field($db_field)->
		join("LEFT JOIN ".C('DB_PREFIX')."user as u ON w.uid=u.id")->
		join("LEFT JOIN ".C('DB_PREFIX')."service as s ON u.sid=s.id")->where("w.id='$aid'")->find();
		$this->assign('main',$main);

		// $file_arr = $this->sel_sql("files", "id in ($filesId)");
		$this->assign('file_arr',$file_arr);

		$ticket_count = $this->getWorkCount();
		$this->assign('ticket_count', $ticket_count);

		$data = array(
				'user_one' => "active",
				'user_block' => "style='display:block'",
				'user_block03' => "class='active'",
				'unread'		=>	"unread",
				"selected"		=>	"selected",
				'unread'		=>	"unread",
				'limits'		=>	$limits,
				'class'			=>	'class="active"',
				'case'			=>	$status,
				"active02"		=>	"class='active'",
				'url'			=>	__ROOT__."/index.php/Admin/ticket/case/".$status,
				'sou'			=>	'&sou='.I("get.sou"),
		);
		$this->assign('data',$data);
		
		$this->display();
	}

	//用户管理 - 未指派工单 -- 详细
	public function ticket_detail(){
		$limits = I("session.limits");		//权限    2-售后	3-会员
		$id = I("session.uid");				//当前用户id
		$aid = I("get.id");			//工单id
		$url_status = I("get.case");

		$work_detail = $this->sel_sql_single("work", "id='$aid'");
		if($work_detail) {
			$status = $work_detail['wc_sataus'];			//工单状态
		}

		//列表选中显示样式
		$main = D('Work as w')->field("u.id u_id,u.uname u_uname,u.email u_email,u.url u_url,u.phone u_phone,
		w.id w_id,w.title w_title,w.issue w_issue,w.sc_file w_sc_file,w.puddate w_puddate,w.wc_sataus, w.did w_did,
		s.id s_id,s.email s_email,s.uname s_uname,s.phone s_phone")->
		join("LEFT JOIN ".C('DB_PREFIX')."user as u ON w.uid=u.id")->
		join("LEFT JOIN ".C('DB_PREFIX')."service as s ON u.sid=s.id")->where("w.id='$aid'")->find();
		$this->assign('main',$main);

		//文件
		// $file_arr = explode(',',$main['w_sc_file']);
		$filesId = $main['w_sc_file'];
		if ($filesId != '') {
			$file_arr = $this->sel_sql("files", "id in ($filesId)");
			$this->assign('file_arr',$file_arr);
		}
		
		//对话内容显示
		$record = D("addwork as a")->field("u.uname,u.email,u.phone,u.url,u.limits,a.id,a.g_reply,a.repdate,a.pid,a.uid")->join("LEFT JOIN ".C('DB_PREFIX')."user as u ON a.uid=u.id")->where("a.pid='$aid'")->order("repdate asc")->select();
		$this->assign('record',$record);

		//显示评价
		if($status == "3") {
			$comment = $this->sel_sql_single("evaluation", "work_id='$aid'");
			$this->assign('comment',$comment);
		}

		//工单事件
		$wrecord = new WrecordModel();
		$record_list = $wrecord->getWorkRecord($aid);

		//受理人列表
		$user_info = $this->sel_sql_single("user", "id='$id'");
		$group_id = $user_info['u_status'];
		$list_group_user = $this->sel_sql("user", "limits='2' and zl_status='1'");
		$this->assign('list_group_user', $list_group_user);
		
		$data = array(
			'unread'		=>	"unread",
			"selected"		=>	"selected",
			'unread'		=>	"unread",
			'aid'			=>	$aid,
			'limits'		=>	$limits,
			'class'			=>	'class="active"',
			'case'			=>	$status,
			'status'		=>  $status,
			"active02"		=>	"class='active'",
			'url'			=>	__ROOT__."/index.php/Admin/ticket/case/".$url_status,
			'url_status'    =>  $url_status,
			'sou'			=>	'&sou='.I("get.sou"),
			'record'		=>  $record_list,
		);
		$this->assign('data',$data);
		
		$this->display();
	}

	//用户管理 -未指派工单 -- 详细 -- 提交
	public function submit_ticket_agent() {
		$id = I("session.uid");				//当前用户id
		$wid = I('post.pid');
		$ticket_agent_name = I("post.ticket_agent_name");
		$ticket_status_name = I("post.ticket_status_name");
		$url_status = I("get.case");
		$url = __ROOT__."/index.php/Admin/ticket_detail/case/$url_status/id/".$wid;

		$ticket_agent = I('post.ticket_agent');
		$ticket_status = I('post.ticket_status');
		if($ticket_agent == '-1') {
			$ticket_agent = null;
		}

		$ticket_info = $this->sel_sql_single('work', "id='$wid'");
		if (!($ticket_info['did'] == $ticket_agent && $ticket_info['wc_sataus'] == $ticket_status)) {
			$ticket_data = array(
				'did' => $ticket_agent,
				'wc_sataus' => $ticket_status,
			);
			$this->update_sql('work', "id='$wid'", $ticket_data);
	
			//增加操作记录 -- 工单状态修改
			$wrecord = new WrecordModel();
			$wrecord->addWorkRecord($wid, $id, time(), '修改了工单状态【受理人：'.$ticket_agent_name.'】【工单状态：'.$ticket_status_name.'】。');
		}
		
		if(I('post.editorValue') != ""){
			$data = array(
					'g_reply'		=>	htmlspecialchars_decode(I('post.editorValue')),
					'repdate'		=>	time(),
					'uid'			=>	$id,
					'pid'			=>	$wid,
			);
			$result = $this->inser_sql("addwork",$data);
			if($result){

				//增加操作记录 -- 工单评论
				$wrecord = new WrecordModel();
				$wrecord->addWorkRecord($wid, $id, time(), '评论了工单：'.htmlspecialchars_decode(I('post.editorValue')));
				// $E = Email($main["s_email"],"工单追加通知","亲爱的同事：".$main["s_uname"]."，".$main["u_uname"]."这位客户的工单标题为：“".$main['w_title']."” 已有最新追加，请及时查看，并且处理。");
				// $M = Mobile($main["s_phone"],'亲爱的：'.$main['s_uname'].'同事。'.$main['u_uname'].'这位客户的工单标题为：“'.$main['w_title'].'”已有最新追加。请及时查看，并且处理。');

				//修改回复状态
				$replay_data = array(
					'tz_status' => '1',
				);
				$reply_sql = $this->update_sql("work","id=".$wid, $replay_data);

				echo "<script>alert('发送成功！'); location.href='$url';</script>";
				exit;
			}
			exit;
		} else {
			echo "<script>alert('修改成功！'); location.href='$url';</script>";
			exit;
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

	//左连接查询
	public function left_join_sql($model, $alias, $field, $join, $where, $orders){
		return D($model)->alias($alias)->field($field)->join($join)->where($where)->order($orders)->select();
	}
	public function left_join_count($model, $alias, $field, $join, $where, $orders){
		return D($model)->alias($alias)->field($field)->join($join)->where($where)->order($orders)->count();
	}
	public function left_join_limit($model, $alias, $field, $join, $where, $orders, $first_row, $list_row){
		return D($model)->alias($alias)->field($field)->join($join)->where($where)->order($orders)->limit($first_row, $list_row)->select();
	}

	//获取各个工单数量
	public function getWorkCount() {
		$work = new WorkModel();
		$data = $work->getWorkCount();
		return $data;
	}
}