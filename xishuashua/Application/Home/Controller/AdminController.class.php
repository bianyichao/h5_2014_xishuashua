<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
     public function __construct(){
        parent::__construct();
        if (!isLogin()) {
            $this->error('请先登录',U("User/login"));
        }
    }
    public function add(){
        $this->display();
    }
    public function doadd(){
        if (!IS_POST) {
                 exit("bad!"); 
               //var_dump($_POST);
        }
        $newsModel=M("admin");
        $newsModel->create();
        if (!$newsModel->create()) {
                 // $this->error();
            $this->error($newsModel->getError());
        }
        if ($newsModel->add()) {
            $this->success("添加成功",U("admin/list"));
        }  
        else{
            $this->error("添加失败");
        }
    }
    public function password_update(){
    	$this->display();
    }
    public function user_update(){
    	$this->display();
    }
    // public function list(){
    //     $username=$_SESSION['admin'];
    //     $this->assign("user", $username);
    //     $newsModel=M("admin");
    //     $lists=$newsModel->page($p ,2)->order('id desc')->select();
    //     var_dump($lists);
    //     $this->assign('admin',$lists);
    // 	//$this->display();
    // }
    public function manage_news(){
    	$this->display();
    }
    public function update_news(){
        $this->display();
    }
}

