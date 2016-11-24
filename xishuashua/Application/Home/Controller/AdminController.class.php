<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function __construct() {
    		parent::__construct();
    		if (!isLogin()) {
    			$this->error("请先登录", U("Admin/login"));
    		}
    }
    public function add(){
        
        $this->display();
    }
    public function password_update(){
    	$this->display();
    }
    public function user_update(){
    	$this->display();
    }
    public function user_list(){
    	$this->display();
    }
    public function manage_news(){
    	$this->display();
    }
    public function update_news(){
        $this->display();
    }
}

