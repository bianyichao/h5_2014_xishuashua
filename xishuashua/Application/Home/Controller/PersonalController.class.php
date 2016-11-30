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
      $newsModel=M("personalnews");
      $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
      $lists=$newsModel->page($p ,3)->order('pn_id desc')->select();
       //    var_dump($lists);
      $this->assign('news',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total, 3);
      $show= $Page->show();
      $this->display();
    }
      public function news_delete(){
        $pn_id = isset($_GET['pn_id']) ? intval($_GET['pn_id']) : '';
        if ($pn_id == '') {
            exit("bad param!");
        }
        if(M("personalnews")->delete($pn_id)){
            $this->success("删除成功！",U("personal/news"));
        }
    }
      public function update_news(){
        $this->display();
    }
    public function user_update(){
        if (IS_POST) {
            //var_dump(aaa);
            if ($_POST['p_pwd']==$_POST['repwd']) {
                $model = M("personaluser");
                $model->create();
                //var_dump($model->create());
                if($model->save()){
                  $this->success("修改成功", U("personal/user_list"));
                 }
                else {
                    $this->error($model->getError());
                }
            }
            else{
                 $p_id = isset($_GET['p_id']) ? intval($_GET['p_id']) : '';
             if ($p_id == '') {
                exit("bad param!");
             }
             $adminModel=M("personaluser");
             $a=$adminModel->find($p_id);
             $this->assign("a", $a);
             $this->display();
            }
        }
           
        
        else {
             $p_id = isset($_GET['p_id']) ? intval($_GET['p_id']) : '';
             if ($p_id == '') {
                exit("bad param!");
             }
             $adminModel=M("personaluser");
             $a=$adminModel->find($p_id);
             $this->assign("a", $a);
             $this->display();
        }
    }
    public function user_list(){
    	$newsModel=M("personaluser");
      $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
      $lists=$newsModel->page($p ,4)->order('p_id desc')->select();
       //    var_dump($lists);
      $this->assign('user',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total,4);
      $show= $Page->show();
      $this->assign("pages", $show);
      $this->display();
    }
    public function put_update(){
        $this->display();
    }
    public function user_delete(){
    	$p_id = isset($_GET['p_id']) ? intval($_GET['p_id']) : '';
        if ($p_id == '') {
            exit("bad param!");
        }
        if(M("personaluser")->delete($p_id)){
            $this->success("删除成功！",U("personaluser/user_list"));
        }
    }
}