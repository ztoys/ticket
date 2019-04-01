<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model {
  
    public function loginTokenDecode($token) {
        $url = "http://10.0.0.51:7080/cgi/identify?token=$token";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $result =curl_exec($ch);
        curl_close($ch);
        $data=json_decode($result,true);
        return $data;
    }

    public function checkAccountExist($acc) {
        $user = M("user");
        $count = $user->where("userid='$acc'")->count();
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }

}
?>