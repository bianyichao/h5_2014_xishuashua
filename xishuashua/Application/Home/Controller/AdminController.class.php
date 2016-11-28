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
            $this->success("添加成功",U("admin/lists"));
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
    public function lists(){
      $username=$_SESSION['admin'];
      $this->assign("user", $username);
      $newsModel=M("admin");
      $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
      $lists=$newsModel->page($p ,9)->order('id desc')->select();
       //    var_dump($lists);
      $this->assign('admin',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total, 2);
      $show= $Page->show();
      $this->display();
    }
    public function manage_news(){
    	$this->display();
    }
    public function update_news(){
        $this->display();
    }
}

