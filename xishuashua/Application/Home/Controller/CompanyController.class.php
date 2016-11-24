<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function __construct() {
    		parent::__construct();
    		if (!isLogin()) {
    			$this->error("请先登录", U("Admin/login"));
    		}
    	}
    public function news(){
        $this->display();
    }
    public function input_list(){
    	$this->display();
    }
    public function user_list(){
    	$this->display();
    }
    public function user_update(){
    	$this->display();
    }
}