<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
  //个人用户登录
   public function dl(){
    	layout(false);
       if (IS_POST) {
     		$adminUser=M("personaluser");
     		$condition=array(
     			"p_name"=>I("post.name"),
     		    "p_pwd"=>I("post.password")
     		    );
           
     		$result=$adminUser->where($condition)->find();
     		if ($result) {
                session("p_name",I("post.name"));
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

   //家装公司登录
   public function dl_cp(){
    	layout(false);
       if (IS_POST) {
     		$adminUser=M("businessuser");
     		$condition=array(
     			"b_name"=>I("post.realname"),
     			"b_ename"=>I("post.name"),
     		    "b_pwd"=>I("post.password")
     		    );
           
     		$result=$adminUser->where($condition)->find();
     		if ($result) {
                session("b_name",I("post.name"));
                $this->success("登录成功",U("Index/index-ducp"));
            }
            else{
                $this->error("用户名或密码错误！");
            }
        }
        else{
           $this->display();
        }
   }

   //注销
    public function loginout(){
        $result=session("username",null);
        if ($result) {
               $this->error();
        }
        else{
           $this->success("退出成功",U("User/login"));
         }
    }

    //注册
    public function regist(){
        $this->display();
    }
    public function doregist(){
        if (!IS_POST) {
                 exit("bad!"); 
        }
        $personaluser=M("personaluser");
        $personaluser->create();
        if (!$personaluser->create()) {
            // $this->error();
            $this->error($personaluser->getError());
        }
        if ($personaluser->add()) {
            $this->success("添加成功",U("Index/index-du"));
        }  
        else{
            $this->error("添加失败");
        }
    }
}