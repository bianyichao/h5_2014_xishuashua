<?php
namespace Home\Controller;
use Think\Controller;
class PersonalController extends Controller {

    public function news(){
        $this->display();
    }
    public function put_list(){
    	$this->display();
    }
    public function user_list(){
        $newsModel = D("personaluser");
        $news = $newsModel->select();
        $this->assign('news', $news);
    	$this->display();
    }
    public function user_update(){
    		if (IS_POST) {
                    $model = M("personaluser");
                    $model->create();
                    //var_dump($model->create());
                    if($model->save()){
                        $this->success("修改成功", U("personal/user_lists"));
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
                     $personalModel=M("personaluser");
                     $a=$personalModel->find($id);
                     $this->assign("a", $a);
                     $this->display();
                }
    }
}