<?php
namespace Home\Controller;
use Think\Controller;
class PersonalController extends Controller {
     public function __construct(){
        parent::__construct();
        if (!isLogin()) {
            $this->error('请先登录',U("User/login"));
        }
    }
    public function news(){
        $this->display();
    }
    public function put_list(){
    	$this->display();
    }
    public function user_list(){
    	$this->display();
    }
    public function put_update(){
    	$this->display();
    }
}