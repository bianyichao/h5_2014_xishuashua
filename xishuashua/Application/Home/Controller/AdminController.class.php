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
        if (IS_POST) {
            
           if ($_POST['password']==$_POST['repsd']) {
            //var_dump(111);
              $model = M("admin");
              $model->create();
              if($model->save()){
                $this->success("修改成功", U("admin/lists"));
              }
              else {
                $this->error($model->getError());
              }
           }
           else{$username=$_SESSION['admin'];
             if ($username == '') {
                exit("bad param!");
             }
             $newsModel=M("admin");
             $a=$newsModel->where("admin='$username'")->find();
             //var_dump($a);
             $this->assign("a", $a);
             $this->display();
           }
         }
         else {
             $username=$_SESSION['admin'];
             if ($username == '') {
                exit("bad param!");
             }
             $newsModel=M("admin");
             $a=$newsModel->where("admin='$username'")->find();
             //var_dump($a);
             $this->assign("a", $a);
             $this->display();
        }
        
    }
    public function user_update(){
    	if (IS_POST) {
            $model = M("admin");
            $model->create();
            //var_dump($model->create());
            if($model->save()){
                $this->success("修改成功", U("admin/lists"));
            }
            else {
                $this->error($model->getError());
            }
         }
        else {
             $id = isset($_GET['id']) ? intval($_GET['id']) : '';
             if ($id == '') {
                exit("bad param!");
             }
             $adminModel=D("admin");
             $a=$adminModel->find($id);
             $this->assign("a", $a);
             $this->display();
        }
    }
    public function lists(){
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
    public function admindelete() {
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if ($id == '') {
            exit("bad param!");
        }
        if(M("admin")->delete($id)){
            $this->success("删除成功！",U("admin/lists"));
        }
    }
    public function manage_news(){
    	$this->display();
    }
   

    public function update_news(){
        $this->display();
    }
}

