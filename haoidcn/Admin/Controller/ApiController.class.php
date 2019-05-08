<?php
namespace Admin\Controller;

use Think\Controller;
use Admin\Model\WrecordModel;
use Admin\Model\WorkModel;

class ApiController extends CommonController {

	//获取工单回复内容
    public function ticket_reply_info(){
        $tid = I('tid');   //工单id
        
       	//对话内容显示
        $ret = D("addwork as a")->field("u.uname name,u.email,u.phone,u.url,u.limits,a.id,a.g_reply reply,a.repdate date,a.pid,a.uid")->join("LEFT JOIN ".C('DB_PREFIX')."user as u ON a.uid=u.id")->where("a.pid='$tid'")->order("repdate asc")->select();
        
        if ($ret) {
            $this->sendResult($ret);
         }else{
            $return['error_code'] = -1;
            $return['error_message'] = 'request  fail';
            $this->sendResult($return);
         }
    }

    //获取群组列表
    public function group_list(){
        $list_group = $this->sel_sql("status", "");
        if ($list_group) {
            $this->sendResult($list_group);
        }else{
            $return['error_code'] = -1;
            $return['error_message'] = 'request  fail';
            $this->sendResult($return);
        }
    }

}