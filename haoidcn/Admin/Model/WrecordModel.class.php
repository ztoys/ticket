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
    }
    
    public function test(){
        $record = M("wrecord");
        $data['wid'] = 10;
        $data['uid'] = 5;
        $sql = $record->fetchSql(true)->add($data);
        return $sql;
    }
}

?>