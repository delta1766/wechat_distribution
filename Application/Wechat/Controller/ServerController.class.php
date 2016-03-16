<?php
namespace Wechat\Controller;
use Think\Controller;
class ServerController extends Controller {
	//初始化控制器
	function _initialize(){
		$this->wechat = new \Org\Util\Wechat();
	}
	function index(){
		
	}
	
}
