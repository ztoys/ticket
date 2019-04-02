<?php
namespace Admin\Model;
use Think\Model;

class WorkModel extends Model {

    public function getWorkCount() {
        $work = M("work");
        $uid = I("session.uid");
        $limits = I("session.limits");

        if ($limits == '3') {
            //客服
            $count_mycreate = $work->where("uid=$uid and wc_sataus<>'3'")->count();                 //我创建的
            $count_reply = $work->where("uid=$uid and wc_sataus<>'3' and tz_status='1'")->count();  //待我回复的
            $count_comment = $work->where("uid=$uid and wc_sataus='4'")->count();                   //待我评价的
            $count_close = $work->where("uid=$uid and wc_sataus='3'")->count();                     //已关闭的
            $data = array (
                "c_mycreate" => $count_mycreate,
                "c_reply" => $count_reply,
                "c_comment" => $count_comment,
                "c_close" => $count_close,
            );
        } elseif ($limits == '2') {
            //运维
            $count_unass = $work->where("(did is null or did=0) and wc_sataus<>'3'")->count();  // 未指派
            $count_myticket = $work->where("did=$uid and wc_sataus<>'3'")->count();                     // 分配给我的
            $count_admissible = $work->where("did=$uid and wc_sataus='2'")->count();                   // 受理中
            $count_comment = $work->where("did=$uid and wc_sataus='4'")->count();                      // 待评价
            $count_close = $work->where("did=$uid and wc_sataus='3'")->count();                        // 已关闭的工单
            $data = array (
                "c_unass" => $count_unass,
                "c_myticket" => $count_myticket,
                "c_admissible" => $count_admissible,
                "c_comment" => $count_comment,
                "c_close" => $count_close,
            );
        }

        return $data;
    }

    

}

?>