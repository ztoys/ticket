<?php
namespace Api\Controller;
use Think\Controller;
use Admin\Model\WorkModel;
class BaseController extends Controller {

	//是否开启本地调试
	private $is_local_debug;

    public function __construct()
    {
		//是否开启本地调试。
		$this->is_local_debug = 0 ;

		//做一个检测，以免这个配置更新到线上。
		if (
			$this->is_local_debug > 0 
			&&$_SERVER['HTTP_HOST'] != '127.0.0.1' 
			&& $_SERVER['HTTP_HOST'] != 'wu.com' 
			&& strpos($_SERVER['HTTP_HOST'], "192.168") == false
		){
			$this->sendError("-1001","非本地环境禁止开通调试。请通知管理员关闭调试模式");
			exit();
		}
		//为了兼容纯json请求
		if (strstr($_SERVER['CONTENT_TYPE'],"json")) {
			$json = file_get_contents('php://input');
			$array = json_decode($json,1);
			$_POST = array_merge($_POST,$array) ;
		}
		
    }

	/**
	 * 返回json结果
	 */
	protected function sendResult($array, $param){
		if (isset($array['error_code'])) {
			$result['error_code'] = $array['error_code'] ;
			$result['error_message'] = $array['error_message'] ;
		}
		else{
			$result['error_code'] = 0 ;
			$result['data'] = $array ;
		}

		if (isset($param)) {
			foreach($param as $key => $val){
				$result[$key] = $val;
			}
		}
		
		if ($this->is_local_debug > 0 ) {
			header('Access-Control-Allow-Origin: *');//允许跨域请求
			header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie');
			header('Access-Control-Allow-Credentials : true');//允许跨域请求
		}
		echo json_encode($result);

		//如果开启API调试模式，则记录请求参数和返回结果
		if (C('API_LOG')) {
			$info = '';
			$info .= "\n\n【★★★★★★★★★★★】";
			$info .= "\n请求接口：".MODULE_NAME  ."/".CONTROLLER_NAME."/".ACTION_NAME."";
			$info .= "\n请求".'$_REQUEST'."：\n";
			$info .= json_encode($_REQUEST);
			$info .= "\n返回结果：\n";
			$info .= json_encode($result)."\n";	
			$info .= "【★★★★★★★★★★★】\n";		
			\Think\log::record($info , 'INFO');
		}

	}

	//返回错误提示
	protected function sendError($error_code , $error_message = ''){
		$error_code = $error_code ? $error_code : 10103 ;
		if (!$error_message) {
			$error_codes = C("error_codes");
			foreach ($error_codes as $key => $value) {
				if ($key == $error_code ) {
					$error_message = $value ;
				}
			}
		}
		$array['error_code'] = $error_code;
		$array['error_message'] = $error_message ;
		$this->sendResult($array);
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
	public function left_join_count($model, $alias, $field, $join, $where, $orders){
		return D($model)->alias($alias)->field($field)->join($join)->where($where)->order($orders)->count();
	}
	public function left_join_limit($model, $alias, $field, $join, $where, $orders, $first_row, $list_row){
		return D($model)->alias($alias)->field($field)->join($join)->where($where)->order($orders)->limit($first_row, $list_row)->select();
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
