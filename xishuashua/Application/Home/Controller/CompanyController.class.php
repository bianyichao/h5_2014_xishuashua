<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function __construct(){
        parent::__construct();
        if (!isLogin()) {
            $this->error('请先登录',U("User/login"));
        }
    }
    public function news(){
     $newsModel=M("businessnews");
      $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
      $lists=$newsModel->page($p ,3)->order('bn_id desc')->select();
       //    var_dump($lists);
      $this->assign('news',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total, 3);
      $show= $Page->show();
      $this->display();
    }
    public function input_list(){
    	 $newsModel=M("businessinput");
       //$data = $newsModel->join('businessuser ON businessinput.b_id = businessinput.b_id')->select();

      $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
      $lists=$newsModel->join('businessuser ON businessinput.b_id = businessinput.b_id')->page($p ,4)->order('bi_id desc')->select();
      //var_dump($lists);
      $this->assign('lists',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total,4);
      $show= $Page->show();
      $this->assign("pages", $show);
      $this->display();
    }
    public function user_list(){
      $newsModel=M("businessuser");
      $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
      $lists=$newsModel->page($p ,4)->order('b_id desc')->select();
       //    var_dump($lists);
      $this->assign('lists',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total,4);
      $show= $Page->show();
      $this->assign("pages", $show);
      $this->display();
    }
    public function user_update(){
    	if (IS_POST){
          
                $model = M("businessuser");
                $model->create();
                //var_dump($model->create());

                if($model->save()){
                  $this->success("修改成功", U("company/user_list"));
                 }
                else {
                    $this->error($model->getError());
                }
        }
           
        
        else {
            $b_id = isset($_GET['b_id']) ? intval($_GET['b_id']) : '';
             if ($b_id == '') {
                exit("bad param!");
             }
             $adminModel=M("businessuser");
             $a=$adminModel->find($b_id);
             $this->assign("a", $a);
             $this->display();
        }
    }
    public function userdelete(){
        $b_id = isset($_GET['b_id']) ? intval($_GET['b_id']) : '';
        if ($b_id == '') {
            exit("bad param!");
        }
        if(M("businessuser")->delete($b_id)){
            $this->success("删除成功！",U("company/user_list"));
        }
    }
     public function newsdelete(){
        $bn_id = isset($_GET['bn_id']) ? intval($_GET['bn_id']) : '';
        if ($bn_id == '') {
            exit("bad param!");
        }
        if(M("businessnews")->delete($bn_id)){
            $this->success("删除成功！",U("company/news"));
        }
    }
}