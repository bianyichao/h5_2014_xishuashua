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
     		    "password"=>I("post.pwd")
     		    );
           
     		$result=$adminUser->where($condition)->find();
     		if ($result) {
                session("admin",I("post.username"));
                $this->success("登录成功",U("Index/index"));
            }
            else{
                $this->error("用户名或密码错误！");
            }
        }
        else{
           $this->display();
        }
   }

    public function loginout(){
        $result=session("username",null);
        if ($result) {
               $this->error();
        }
        else{
           $this->success("退出成功",U("User/login"));
         }
    }

}