<?php
namespace Wechat\Controller;
use Think\Controller;
class ServerController extends CommonController {
		
	//初始化控制器
	function _initialize(){
		parent::_initialize();
		$this->token = $_GET['token'];	//获取token
		
		if(!empty($this->token)){	//通过token 获取 账号信息
		
			$yzDB = D("Youzan");
			$data = $yzDB->getinfoByToken($this->token);
			$this->wechat_appid = $data['wx22b12dbfc204b969'];	//微信appid
			$this->wechat_appSecert = $data['5c88dab2409d842dea29a0d604cdbe1c'];	//微信appsecert
			$this->youzan_appid = $data['yz_appid'];	//有赞appid
			$this->youzan_appSecert = $data['yz_appsecert'];	//有赞appSecert
			$this->token = $data['token'];	//有赞appSecert
			$options['token'] = $this->token;
			$options['appid'] = $this->wechat_appid;
			$options['appsecret'] = $this->wechat_appSecert;
			
			$this->wechat = new \Org\Util\Wechat($options);
			
		}
				
		if(!empty($_GET["signature"])){
			echo $this->wechat->checkSignature();
			exit;		 
		}
		
	}
	
	
	function index(){
		
	}
	
}
