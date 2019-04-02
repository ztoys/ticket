<?php
namespace Admin\Controller;

use Think\Controller;
use Admin\Model\WorkModel;

class ConsoleController extends CommonController {
	
	//控制台
 	public function dashboard(){
		$limits = I("session.limits");		//权限    2-售后	3-会员
		$uid = I("session.uid");				//当前用户id

		$set = array(
			'active' => 'class="active"',
			'limits' => I('session.limits'),
		); 
		$this->assign("set",$set);
		$ticket_count = $this->getWorkCount();
		$this->assign('ticket_count', $ticket_count);

		$data = array(
			'limits' => $limits,
			'uid'    => $uid,
		);
		$this->assign('data', $data);

		$this->display();
	}
	
	
	//获取各个工单数量
	public function getWorkCount() {
		$work = new WorkModel();
		$data = $work->getWorkCount();
		return $data;
	}
}