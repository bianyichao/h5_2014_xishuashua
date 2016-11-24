<?php
namespace Home\Controller;
use Think\Controller;
class TagController extends Controller {
    public function __construct() {
    		parent::__construct();
    		if (!isLogin()) {
    			$this->error("请先登录", U("Admin/login"));
    		}
    }
    public function tag(){
        $this->display();
    }
    public function roomtype(){
    	$this->display();
    }
    public function prices(){
    	$this->display();
    }
}