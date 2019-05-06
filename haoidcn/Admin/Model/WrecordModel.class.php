<?php
namespace Admin\Model;
use Think\Model;

class WrecordModel extends Model {
    public function addWorkRecord($wid, $uid, $time, $event = '', $point_word = '') {
        $record = M("wrecord");
        $data["wid"] = $wid;
        $data["uid"] = $uid;
        $data["time"] = $time;
        $data["event"] = $event;
        $data["point_word"] = $point_word;
        $record->add($data);
        if ($record) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getWorkRecord($wid) {
        $record = M("wrecord");
        $db_field = "r.id id, r.wid wid, r.uid uid, r.time time, r.event event, r.point_word point_word, u.uname uname";
        $db_join = "left join ".C('DB_PREFIX')."user AS u ON r.uid=u.id";
        $list = $record->alias("r")->field($db_field)->join($db_join)->where("wid=$wid")->order('time asc')->select();
        return $list;
    }

    

}

?>