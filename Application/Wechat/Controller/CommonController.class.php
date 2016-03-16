<?php
namespace Wechat\Controller;
use Think\Controller;
class CommonController extends Controller {
	protected $token;
	public $wechat_appid;	//微信appid
	public $wechat_appSecert;	//微信appsecert
	public $youzan_appid;	//有赞appid
	public $youzan_appSecert;	//有赞appSecert
	
	public $wechat;	//实例化微信SDK类
	//初始化控制器
	protected function _initialize(){
		$this->token = $_GET['token'];
		
		$this->wechat = new \Org\Util\Wechat();
	}
}
