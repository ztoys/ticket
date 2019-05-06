<?php
namespace Api\Controller;
use Think\Controller;

class TicketController extends BaseController {

    //获取工单回复内容
    public function ticket_reply_info(){
        $tid = I('tid');   //工单id
        
       	//对话内容显示
        $ret = D("addwork as a")->field("u.uname,u.email,u.phone,u.url,u.limits,a.id,a.g_reply,a.repdate,a.pid,a.uid")->join("LEFT JOIN ".C('DB_PREFIX')."user as u ON a.uid=u.id")->where("a.pid='$tid'")->order("repdate asc")->select();
        
        if ($ret) {
            $this->sendResult($ret);
         }else{
             $return['error_code'] = -1 ;
             $return['error_message'] = 'request  fail';
             $this->sendResult($return);
         }
    }
    
}