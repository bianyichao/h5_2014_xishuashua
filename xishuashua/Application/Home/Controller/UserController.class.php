<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
    	layout(false);
       if (IS_POST) {
     		$adminUser=M("admin");
     		$condition=array(
     			"admin"=>I("post.username"),
     		    "passsword"=>I("post.pwd")
     		    );
     		$result=$adminUser->where($condition)->count();
     		if ($result) {
     			session("admin",I("post.username"));
                $this->success("登录成功",U("Index/main"));
     		}
     		else{
     			$this->error("用户名或密码错误！");
     		}
     	}
     	else{
           $this->display();


     	}
   }
}