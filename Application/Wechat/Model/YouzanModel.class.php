<?php
namespace Wechat\Model;
use Think\Model;
class YouzanModel extends Model {
	
	
	/**
	 * 获取有赞店铺与微信公众平台信息
	 * @param varchar $token Token
	 */
	function getinfoByToken($token){
		if(!empty($token)){
			$data = $this->alias("A")->where("yz_token = '%s'",$token)->join("__WECHAT__ B ON B.yz_id = A.yz_id")->find();
			return $data;
		}else{
			return false;
		}
	}
}
