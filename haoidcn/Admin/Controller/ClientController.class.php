<?php
namespace Admin\Controller;

use Think\Controller;
use Admin\Model\WrecordModel;
use Admin\Model\WorkModel;

class ClientController extends CommonController {
	
	//新工单
	public function forms(){
		$userid = strtolower(I("session.userid"));
		$data = array(
			"active01"		=>	"class='active'",
			"uid"			=>	I("session.uid"),
			'x_status'		=>	I('get.status'),
		);
		$this->assign('data',$data);

		$ticket_count = $this->getWorkCount();
		$this->assign('ticket_count', $ticket_count);
		
		if(IS_POST){
			$string = I("post.title");
			preg_match_all("/./us", $string, $match);		//限制 标题的个数
			$title_totle = count($match[0]);
			if($title_totle > 100){
				echo "<script>alert('标题字数不能超于100位'); history.go(-1);</script>";
				exit;
			}

			//上传图片
			$sc_file = "";
			if(!empty($_FILES['photo']['tmp_name'])){
				$info = Upload_f();
				if($info){
					foreach ($info as $val){
						$savepath =  ltrim($val['savepath'],'.');
						$sc_file .= $savepath.$val['savename'].',';
					}
				}
			}
				
			if(I("post.photo01")){
				$photo01_arr = I("post.photo01");
				$photo01 = implode($photo01_arr,',');
		
				//原有的图片名，拼接 上传的文件名
				$sc_file = $photo01.','.$sc_file;
			}
				
			$sc_file = rtrim($sc_file,',');
				
			$data = array(
					'title'		=>	I('post.title'),
					'issue'		=>	htmlspecialchars_decode(I('post.editorValue')),
					'sc_file'	=>	$sc_file,
					'puddate'	=>	time(),
					'wc_sataus'	=>	I('post.cc_status'),
					'uid'		=>	I('post.uid'),
			);
				
				
			if(I("post.x_wid")){
				//修改操作
				$id = $this->update_sql("work","id=".I("post.x_wid"),$data);
				$id = I("post.x_wid");
				if(I('post.cc_status') == "-1"){
					$url = __ROOT__."/index.php/Client/messages/detail/id/".$id;
				}elseif (I('post.cc_status') == "1"){
					$url = __ROOT__."/index.php/Client/messages/detail/id/".$id;
				}
				
				$type = "update";
				
			}else{
				//添加操作
				$id = $this->inser_sql("work",$data);	//添加到工单表
				$url = __ROOT__."/index.php/Client/forms";
				$type = "insert";

			}
			
			if($id){
				//增加操作记录
				$wrecord = new WrecordModel();
				$wrecord->addWorkRecord($id, $data['uid'], $data['puddate'], '创建工单【'.$data['title'].'】。');

				if (I('post.cc_status') == 1) {
					if($type == "insert" ){
						// $E = Email($result_arr["s_email"],"新工单通知","亲爱的同事：".$result_arr["s_name"]."，".$result_arr["u_name"]."这位客户已提交新工单，工单标题为：“".$data['title']."”。请及时查看，并且处理。");
						// $M = Mobile($result_arr["s_phone"],'亲爱的：'.$result_arr["s_name"].'同事。'.$result_arr["u_name"].'这位客户已提交新工单，工单标题为：“'.$data['title'].'”。请及时查看，并且处理。');
						$data = array(
							'tz_status'	=>	'-1',
						);
						$this->update_sql("work","id=".$id,$data);
					}
					echo "<script>alert('工单提交成功。'); location.href='$url';</script>";
					exit;
				}else if(I('post.cc_status') == -1){
					echo "<script>alert('工单已保存到草稿箱，可到草稿箱修改该工单。'); location.href='$url';</script>";
					exit;
				}
			}else{
				if(I('post.cc_status') == 1){
					echo "<script>alert('工单提交失败'); history.go(-1);</script>";
					exit();
				}else if(I('post.cc_status') == -1){
					echo "<script>alert('工单保存失败'); history.go(-1);</script>";
					exit();
				}
			}
		}
		
		//修改操作
		if(IS_GET){
			$x_wid = I('get.forms');
			if($x_wid){
				//显示原本的数据
				$list = D('work')->where("id=".$x_wid)->find();
				$this->assign('list',$list);
				
				//图片
				$file_arr = explode(',',$list['sc_file']);
				$this->assign('file_arr',$file_arr);
			}
		}
		
		$this->display();
	}
	
	//工单 处理
	public function messages(){
		$limits = I("session.limits");		//权限    2-售后	3-会员
		$id = I("session.uid");				//当前用户id
		$status = I("get.case");			//工单状态
		$aid = I("get.messages");			//工单id

		if (!isset($status)) {
			if ($limits == 3) {
				$status = "create";
			} elseif ($limits == 2) {
				$status = "manned";
			}
		}
		
		if($status == "dai"){
			$sta_nb = '1';					//工单状态-待处理
		}elseif($status == "zhong"){
			$sta_nb = '2';					//工单状态-处理中
		}elseif($status == "yi"){
			$sta_nb = '3';					//工单状态-关闭
		}elseif($status == "cao"){
			$sta_nb = '-1';					//工单状态-草稿箱
		}elseif($status == "ping"){
			$sta_nb = '4';					//工单状态-待评价
		}elseif($status == "create"){
			$my_ticket = '1';                //工单装填-我创建的工单
		}elseif($status == "reply"){
			$sel_reply = '1';				 //查询待回复
		}
		
		//搜索操作
		if(I("get.sou")){
			$title = I("get.sou");
			$where = $where + " and w.title like '%$title%'";
		}
		
		//列表显示数据	-- 分页
		if($limits == 3){
			// 客服
			if (isset($sel_reply)) {
				$list = $this->left_join_sql("work", "w", "w.id id, w.title title, w.puddate puddate, w.wc_sataus wc_sataus, w.did did, u.uname dname","left join ".C('DB_PREFIX')."user AS u ON w.did=u.id", "wc_sataus<>'3' and tz_status='1' and uid='$id' $where", "puddate desc");
			} else {
				if (isset($my_ticket)) {
					$list = $this->left_join_sql("work", "w", "w.id id, w.title title, w.puddate puddate, w.wc_sataus wc_sataus, w.did did, u.uname dname","left join ".C('DB_PREFIX')."user AS u ON w.did=u.id", "wc_sataus<>'3' and uid='$id' $where", "puddate desc");
					// $list = $this->sel_sql("work","wc_sataus<>'3' and uid='$id' $where", "puddate desc");
				} else {
					$list = $this->left_join_sql("work", "w", "w.id id, w.title title, w.puddate puddate, w.wc_sataus wc_sataus, w.did did, u.uname dname","left join ".C('DB_PREFIX')."user AS u ON w.did=u.id", "wc_sataus='$sta_nb' and uid='$id' $where", "puddate desc");
					// $list = $this->sel_sql("work","wc_sataus='$sta_nb' and uid='$id' $where","puddate desc");
				}
			}
			
			$this->assign('list',$list);
			$this->assign('list_empty', '<tr><td colspan="5" style="text-align:center;">暂无数据</td></tr>');
			
			$ticket_count = $this->getWorkCount();
			$this->assign('ticket_count', $ticket_count);

		}else if($limits == 2){
			//运维
			$db_work = "work";
			$db_field = "w.id id, w.title title, w.puddate puddate, w.accdate accdate, w.wc_sataus wc_sataus, w.uid uid, u.uname uname";
			$db_join = "left join ".C('DB_PREFIX')."user AS u ON w.uid=u.id";
			$db_order = "puddate desc";

			if ($status == "all") {
				// 未指派工单
				$list = $this->left_join_sql($db_work, "w", $db_field, $db_join, "(w.did is null or w.did=0) and w.wc_sataus<>'3' $where", $db_order);
			} elseif ($status == "manned") {
				$list = $this->left_join_sql($db_work, "w", $db_field, $db_join, "w.wc_sataus<>'3' and did='$id' $where", $db_order);
			} else {
				$list = $this->left_join_sql($db_work, "w", $db_field, $db_join, "wc_sataus='$sta_nb' and did='$id' $where", $db_order);
				// $list = $this->sel_sql("work","wc_sataus='$sta_nb' and did='$id' $where","puddate desc");
			}			
			$this->assign('list',$list);
			if ($status == "all") {
				$this->assign('list_empty', '<tr><td colspan="5" style="text-align:center;">暂无数据</td></tr>');
			} else {
				$this->assign('list_empty', '<tr><td colspan="6" style="text-align:center;">暂无数据</td></tr>');
			}

			$ticket_count = $this->getWorkCount();
			$this->assign('ticket_count', $ticket_count);

		}else if($limits == 1){
			$list = $this->sel_sql("work","wc_sataus='$sta_nb' $where","puddate asc");
			$this->assign('list',$list);
		}
		
		if(I("get.del")){
			$aid = I("get.id");
		}else if(I("get.type")){
			$aid = I("get.wc_sataus");
		}else{
			if(IS_POST){
				$aid = I('post.pid');
			}else{
				$aid = $aid == "" ? $list[0]['id'] : $aid;		//当没有id，默认选中第一条
			}
		}
		
		//列表选中显示样式
		$main = D('Work as w')->field("u.id u_id,u.uname u_uname,u.email u_email,u.url u_url,u.phone u_phone,
		w.id w_id,w.title w_title,w.issue w_issue,w.sc_file w_sc_file,w.puddate w_puddate,w.wc_sataus,
		s.id s_id,s.email s_email,s.uname s_uname,s.phone s_phone")->
		join("LEFT JOIN ".C('DB_PREFIX')."user as u ON w.uid=u.id")->
		join("LEFT JOIN ".C('DB_PREFIX')."service as s ON u.sid=s.id")->where("w.id='$aid'")->find();
		$this->assign('main',$main);

		//对话内容显示
		$record = D("addwork as a")->field("u.uname,u.email,u.phone,u.url,u.limits,a.id,a.g_reply,a.repdate,a.pid,a.uid")->join("LEFT JOIN ".C('DB_PREFIX')."user as u ON a.uid=u.id")->where("a.pid='$aid'")->order("repdate asc")->select();
		$this->assign('record',$record);

		//显示评价
		if($status == "yi") {
			$comment = $this->sel_sql_single("evaluation", "work_id='$aid'");
			$this->assign('comment',$comment);
		}

		//处理对话操作
		if(IS_POST){
			$pid = I('post.pid');
			$url = __ROOT__."/index.php/Client/detail/id/".$pid;
			if(I("post.insert") != "" && I('post.editorValue') != ""){
				$data = array(
						'g_reply'		=>	htmlspecialchars_decode(I('post.editorValue')),
						'repdate'		=>	time(),
						'uid'			=>	$id,
						'pid'			=>	$pid,
				);
				$result = $this->inser_sql("addwork",$data);
				if($result){
					if($limits == "2"){
						// $E = Email($main["u_email"],"最新消息回复通知","尊敬的客户：".$main["u_uname"]."。您好！您的工单标题为：“".$main['w_title']."” 已有最新回复，请注意查看。");
						// $M = Mobile($main["u_phone"],'尊敬的客户：'.$main['u_uname'].'。您好！您的工单标题为：“'.$main['w_title'].'”已有最新回复，请注意查看。');
						$replay_data = array(
							'tz_status' => '1',
						);
						$reply_sql = $this->update_sql("work","id=".$pid, $replay_data);
						if ($reply_sql) {
							echo "<script>alert('发送成功。'); location.href='$url';</script>";
						} else {
							echo "<script>alert('发送成功。'); location.href='$url';</script>";
						}
						exit;
					}else if($limits == "3"){
						// $E = Email($main["s_email"],"工单追加通知","亲爱的同事：".$main["s_uname"]."，".$main["u_uname"]."这位客户的工单标题为：“".$main['w_title']."” 已有最新追加，请及时查看，并且处理。");
						// $M = Mobile($main["s_phone"],'亲爱的：'.$main['s_uname'].'同事。'.$main['u_uname'].'这位客户的工单标题为：“'.$main['w_title'].'”已有最新追加。请及时查看，并且处理。');
						$replay_data = array(
							'tz_status' => '-1',
						);
						$reply_sql = $this->update_sql("work","id=".$pid, $replay_data);
						if ($reply_sql) {
							echo "<script>alert('发送成功。'); location.href='$url';</script>";
						} else {
							echo "<script>alert('发送成功。'); location.href='$url';</script>";
						}
						exit;
					}
					echo "<script>alert('发送成功。'); location.href='$url';</script>";
					exit;
				}
				exit;
			}else{
				echo "<script>alert('回复内容不能为空'); location.href='$url';</script>";
			}
		
		}
		
		//工单处理操作
		if(I("get.type") == "chu" && $limits == "2"){
			$url = __ROOT__."/index.php/Client/messages/case/dai";
			$data	=	array(
					"wc_sataus"		=>	2,
					"did"           =>  $id,
					"accdate"       =>  time(),
					// "tz_status"		=>	1,
			);
			$result = $this->update_sql("work","id=".I('get.wc_sataus'), $data);
			
			if($result){
				// $E = Email($main["u_email"],"工单处理中通知","尊敬的客户：".$main["u_uname"]."。您好！您的工单标题为：“".$main['w_title']."”。正在处理中，请耐心等候。");
				// $M = Mobile($main["u_phone"],'尊敬的客户：'.$main['u_uname'].'。您好！您的工单标题为：“'.$main['w_title'].'”。正在处理中，请耐心等候。');
				echo "<script>alert('操作成功。'); location.href='$url';</script>";
			}

			exit;
		}

		//工单改成评价状态操作
		if(I("get.type") == "ping" and $limits == "2"){
			$url = __ROOT__."/index.php/Client/messages/case/ping";
			$data =	array(
					"wc_sataus"		=>	4,
			);
			$result = $this->update_sql("work","id=".I('get.wc_sataus'),$data);
			
			if($result){
				// $E = Email($main["u_email"],"工单处理中通知","尊敬的客户：".$main["u_uname"]."。您好！您的工单标题为：“".$main['w_title']."”。正在处理中，请耐心等候。");
				// $M = Mobile($main["u_phone"],'尊敬的客户：'.$main['u_uname'].'。您好！您的工单标题为：“'.$main['w_title'].'”。正在处理中，请耐心等候。');
				echo "<script>alert('操作成功。'); location.href='$url';</script>";
			}
			exit;			
		}
		
		//工单结束操作
		if(I("get.type") == "wang" and $limits == "3"){
			
			$url = __ROOT__."/index.php/Client/messages/case/zhong";
			$wc_sataus = I("get.wc_sataus");
			$data = array(
				'wc_sataus'	=> 3,
			);

			$update = $this->update_sql("work","id='$wc_sataus'",$data);
			if($update){
				// $E = Email($main["s_email"],"工单结束通知","亲爱的同事：".$main["s_uname"]."，".$main["u_uname"]."这位客户的工单标题为：“".$main['w_title']."” 已结束，辛苦了。");
				// $M = Mobile($main["s_phone"],'亲爱的同事：'.$main['s_uname'].'。'.$main['u_uname'].'这位客户的工单标题为：“'.$main['w_title'].'”已结束，辛苦了。');
				
				// $E = Email($main["u_email"],"工单结束通知","尊敬的客户：".$main["u_uname"]."。您好！您的工单标题为：“".$main['w_title']."”已结束，若不是本人操作，请联系售后人员。");
				// $M1 = Mobile($main["u_phone"],'尊敬的客户：'.$main['u_uname'].'。您好！您的工单标题为：“'.$main['w_title'].'”已结束，若不是本人操作，请联系售后人员。');
				
				echo "<script>alert('操作成功。'); location.href='$url';</script>";
				exit;
			
			}
		}
		
		//取消操作工单
		if(I("get.del")){

			$de = D('work')->where('id='.I("get.id"))->delete();
			if($de){
				
				$url = __ROOT__."/index.php/Client/messages/case/dai";
				// $E = Email($main["s_email"],"工单取消通知","亲爱的同事：".$main["s_uname"]."，".$main["u_uname"]."这位客户的工单标题为：“".$main['w_title']."” 已取消。");
				// $M = Mobile($main["s_phone"],'亲爱的同事：'.$main['s_uname'].'。'.$main['u_uname'].'这位客户的工单标题为：“'.$main['w_title'].'”已取消。');

				// $E = Email($main["u_email"],"工单取消通知","尊敬的客户：".$main["u_uname"]."。您好！您的工单标题为：“".$main['w_title']."”已取消。若不是本人操作，请联系售后人员。");
				// $M1 = Mobile($main["u_phone"],'尊敬的客户：'.$main['u_uname'].'。您好！您的工单标题为：“'.$main['w_title'].'”已取消。若不是本人操作，请联系售后人员。');
				echo "<script>alert('工单取消成功。'); location.href='$url';</script>";
				exit;
			}
		}
		
		$data = array(
				'unread'		=>	"unread",
				"selected"		=>	"selected",
				'unread'		=>	"unread",
				'aid'			=>	$aid,
				'limits'		=>	$limits,
				'class'			=>	'class="active"',
				'case'			=>	$status,
				"active02"		=>	"class='active'",
				'url'			=>	__ROOT__."/index.php/Client/messages/case/".$status,
				'sou'			=>	'&sou='.I("get.sou"),
		);
		$this->assign('data',$data);
		
		$this->display();
	}

	//工单 详细
	public function detail(){
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
		w.id w_id,w.title w_title,w.issue w_issue,w.sc_file w_sc_file,w.puddate w_puddate,w.wc_sataus,
		s.id s_id,s.email s_email,s.uname s_uname,s.phone s_phone")->
		join("LEFT JOIN ".C('DB_PREFIX')."user as u ON w.uid=u.id")->
		join("LEFT JOIN ".C('DB_PREFIX')."service as s ON u.sid=s.id")->where("w.id='$aid'")->find();
		$this->assign('main',$main);
		
		//对话内容显示
		$record = D("addwork as a")->field("u.uname,u.email,u.phone,u.url,u.limits,a.id,a.g_reply,a.repdate,a.pid,a.uid")->join("LEFT JOIN ".C('DB_PREFIX')."user as u ON a.uid=u.id")->where("a.pid='$aid'")->order("repdate asc")->select();
		$this->assign('record',$record);

		//显示评价
		if($status == "3") {
			$comment = $this->sel_sql_single("evaluation", "work_id='$aid'");
			$this->assign('comment',$comment);
		}

		//处理对话操作
		if(IS_POST){
			$url = __ROOT__."/index.php/Client/detail/case/$url_status/id/".I('post.pid');
			if(I("post.insert") != "" && I('post.editorValue') != ""){
				$data = array(
					'g_reply'		=>	htmlspecialchars_decode(I('post.editorValue')),
					'repdate'		=>	time(),
					'uid'			=>	$id,
					'pid'			=>	I('post.pid'),
				);
				$result = $this->inser_sql("addwork",$data);
				if($result){
					if($limits == "2"){
						// $E = Email($main["u_email"],"最新消息回复通知","尊敬的客户：".$main["u_uname"]."。您好！您的工单标题为：“".$main['w_title']."” 已有最新回复，请注意查看。");
						// $M = Mobile($main["u_phone"],'尊敬的客户：'.$main['u_uname'].'。您好！您的工单标题为：“'.$main['w_title'].'”已有最新回复，请注意查看。');
						echo "<script>alert('发送成功！'); location.href='$url';</script>";
					}else if($limits == "3"){
						// $E = Email($main["s_email"],"工单追加通知","亲爱的同事：".$main["s_uname"]."，".$main["u_uname"]."这位客户的工单标题为：“".$main['w_title']."” 已有最新追加，请及时查看，并且处理。");
						// $M = Mobile($main["s_phone"],'亲爱的：'.$main['s_uname'].'同事。'.$main['u_uname'].'这位客户的工单标题为：“'.$main['w_title'].'”已有最新追加。请及时查看，并且处理。');

						//修改回复状态
						$replay_data = array(
							'tz_status' => '-1',
						);
						$reply_sql = $this->update_sql("work","id=".I('post.pid'), $replay_data);

						//增加操作记录 -- 工单评论
						$wrecord = new WrecordModel();
						$wrecord->addWorkRecord($data['pid'], $id, time(), '评论了工单：'.htmlspecialchars_decode(I('post.editorValue')));

						echo "<script>alert('发送成功！'); location.href='$url';</script>";
					}
					exit;
				}
				exit;
			}else{
				echo "<script>alert('回复内容不能为空'); location.href='$url';</script>";
			}
		
		}
		
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
				'url'			=>	__ROOT__."/index.php/Client/messages/case/".$url_status,
				'url_status'     =>  $url_status,
				'sou'			=>	'&sou='.I("get.sou"),
		);
		$this->assign('data',$data);
		
		$this->display();
	}

	//工单 详细 -- 运维
	public function detail_agent(){
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
		$list_group_user = $this->sel_sql("user", "u_status='$group_id'");
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
				'url'			=>	__ROOT__."/index.php/Client/messages/case/".$url_status,
				'url_status'    =>  $url_status,
				'sou'			=>	'&sou='.I("get.sou"),
				'record'		=>  $record_list,
		);
		$this->assign('data',$data);
		
		$this->display();
	}

	//工单 详细 -- 运维提交
	public function submit_ticket_agent() {
		$id = I("session.uid");				//当前用户id
		$wid = I('post.pid');
		$url_status = I('get.case');

		$ticket_agent_name = I("post.ticket_agent_name");
		$ticket_status_name = I("post.ticket_status_name");
		$url = __ROOT__."/index.php/Client/detail_agent/case/$url_status/id/".$wid;

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

				//如果没有受理人，自动成为该受理人
				$ticket_did = $ticket_info['did'];
				if ($ticket_did == 0 || !isset($ticket_did)) {
					$ticket_data = array(
						'did' => $id
					);
					$ticket_result = $this->update_sql('work', "id='$wid'", $ticket_data);
					if ($ticket_result) {
						//增加操作记录 -- 工单状态修改
						$user_name_info = $this->sel_sql_single("user", "id=$id");
						$user_name = $user_name_info['uname'];
						$wrecord = new WrecordModel();
						$wrecord->addWorkRecord($wid, $id, time()+1, "成为了受理人，工单受理中。");
					}
				}

				echo "<script>alert('发送成功！'); location.href='$url';</script>";
				exit;
			}
			exit;
		} else {
			echo "<script>alert('修改成功！'); location.href='$url';</script>";
			exit;
		}
	}

	//工单 关闭(评价)
	public function close_ticket(){
		$limits = I("session.limits");	//权限    2-售后	3-会员
		$resolve_v = I('post.resolve');
		$resolve_text = I('post.resolve_text');
		$assess_v = I('post.assess');
		$assess_text = I('post.assess_text');
		
		$id = I("session.uid");				//当前用户id
		$w_id = I('post.pid');
		if($limits == "3"){
			$url = __ROOT__."/index.php/Client/detail/case/yi/id/$w_id";
			$data = array(
				'work_id'		=>	$w_id,
				'resolve'		=>	$resolve_v,
				'assess'		=>	$assess_v,
				'create_time'	=>	time(),
			);
			$insert = $this->inser_sql("evaluation", $data);
			if($insert){
				//增加操作记录 -- 工单评价
				$wrecord = new WrecordModel();
				$wrecord->addWorkRecord($w_id, $id, time(), '评价了工单：【问题是否已经解决:'.$resolve_text.'；服务评价：'.$assess_text.'】。');

				$update_data = array(
					'wc_sataus'	=> 3,
				);
				$update = $this->update_sql("work","id='$w_id'",$update_data);
				if ($update) {
					// $E = Email($main["s_email"],"工单结束通知","亲爱的同事：".$main["s_uname"]."，".$main["u_uname"]."这位客户的工单标题为：“".$main['w_title']."” 已结束，辛苦了。");
					// $M = Mobile($main["s_phone"],'亲爱的同事：'.$main['s_uname'].'。'.$main['u_uname'].'这位客户的工单标题为：“'.$main['w_title'].'”已结束，辛苦了。');
					
					// $E = Email($main["u_email"],"工单结束通知","尊敬的客户：".$main["u_uname"]."。您好！您的工单标题为：“".$main['w_title']."”已结束，若不是本人操作，请联系售后人员。");
					// $M1 = Mobile($main["u_phone"],'尊敬的客户：'.$main['u_uname'].'。您好！您的工单标题为：“'.$main['w_title'].'”已结束，若不是本人操作，请联系售后人员。');

					//增加操作记录 -- 工单评价
					$wrecord = new WrecordModel();
					$wrecord->addWorkRecord($w_id, $id, time()+1, '已关闭工单。');

					echo "<script>alert('操作成功。'); location.href='$url';</script>";
					exit;
				} else {
					echo "<script>alert('关闭工单失败');</script>";
				}
			} else {
				echo "<script>alert('评价失败');</script>";
			}
		}
	}
	
	//分页
	public function page_fan($wc_sataus){
		$Work = D('work');
		$count= $Work->where($wc_sataus)->count();    //计算总数
		$Page = new \Think\Page($count,10);
		$Page ->setConfig('prev', "上一页");
		$Page ->setConfig('next', '下一页');
		$Page ->setConfig('first', '首页');
		$Page ->setConfig('last', '尾页');
		$show = $Page->show();
		$list = $Work->where($wc_sataus)->limit($Page->firstRow. ',' . $Page->listRows)->order("puddate desc")->select();
		return $this ->assign('list',$list).$this ->assign('page',$show);
	}
	
	//添加数据
	public function inser_sql($model,$data){

		return D($model)->add($data);
		
	}
	
	//简单查询 单条
	public function sel_sql_single($model, $where) {
		$result = D($model)->where($where)->find();
		return $result;
	}

	//简单查询	多条
	public function sel_sql($model,$where,$orders){
		$result_arr = D($model)->where($where)->order($orders)->select();
		return $result_arr;
	}
	
	//联合查询
	public function lianhe_sql($model,$table,$field,$where){
		return  D($model)->table($table)->field($field)->where($where)->find();
	}

	//左连接查询
	public function left_join_sql($model, $alias, $field, $join, $where, $orders){
		return D($model)->alias($alias)->field($field)->join($join)->where($where)->order($orders)->select();
	}

	//更新操作	
	public function update_sql($model,$where,$data){

		$result = D($model)->where($where)->setField($data);
		return $result;
	}

	//获取各个工单数量
	public function getWorkCount() {
		$work = new WorkModel();
		$data = $work->getWorkCount();
		return $data;
	}
	

}