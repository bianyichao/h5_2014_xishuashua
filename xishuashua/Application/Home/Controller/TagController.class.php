<?php
namespace Home\Controller;
use Think\Controller;
class TagController extends Controller {
    public function prices(){
      if (IS_POST) {
    		//exit("bad!");
    	$newsModel=M("expectedprice");
         $newsModel->create();
         if (!$newsModel->create()) {
            // $this->error();
            $this->error($newsModel->getError());
         }
         if ($newsModel->add()) {
               $this->redirect("tag/prices");
         }  
         else{
              $this->error("添加失败");
         }
       }

       $newsModel=M("expectedprice");
       $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
       $lists=$newsModel->page($p ,3)->select();
       //    var_dump($lists);
      $this->assign('prices',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total, 3);
      $show= $Page->show();
       $this->assign("pages", $show);
      $this->display();
   }
     public function pricesdelete(){
    	$e_price = isset($_GET['e_price']) ? intval($_GET['e_price']) : '';
        if ($e_price == '') {
            exit("bad param!");
        }
        if(M("expectedprice")->delete($e_price)){
            $this->success("删除成功！",U("tag/prices"));
        }
    }
    public function roomtype(){
      
    	if (IS_POST) {
        if ($_POST['roomtype']=="") {
        exit("bad!");
      }
    	$newsModel=M("roomtype");
         $newsModel->create();
         if (!$newsModel->create()) {
            // $this->error();
            $this->error($newsModel->getError());
         }
         if ($newsModel->add()) {
               $this->success("添加成功",U("tag/roomtype"));
         }  
         else{
              $this->error("添加失败");
         }
       }

       $newsModel=M("roomtype");
       $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
       $lists=$newsModel->page($p ,3)->select();
       //    var_dump($lists);
      $this->assign('type',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total, 3);
      $show= $Page->show();
       $this->assign("pages", $show);
      $this->display();
    }
     public function roomtypedelete(){
    	   $roomtype = $_GET['roomtype'];
        //var_dump($roomtype);
        if ($roomtype == ' ') {
            exit("bad param!");
        }
        if(M("roomtype")->where("roomtype='$roomtype'")->delete()){
            $this->success("删除成功！",U("tag/roomtype"));
        }
    }
    public function tagsdelete(){
       $t_name = $_GET['t_name'];
        //var_dump($roomtype);
        if ($t_name == ' ') {
            exit("bad param!");
        }
        if(M("tags")->where("t_name='$t_name'")->delete()){
            $this->success("删除成功！",U("tag/tags"));
        }
    }
    public function tags(){

    if (IS_POST) {
        if ($_POST['t_name']=="") {
        exit("bad!");
      }
      $newsModel=M("tags");
         $newsModel->create();
         if (!$newsModel->create()) {
            // $this->error();
            $this->error($newsModel->getError());
         }
         if ($newsModel->add()) {
               $this->success("添加成功",U("tag/tags"));
         }  
         else{
              $this->error("添加失败");
         }
       }

       $newsModel=M("tags");
       $p = isset($_GET['p']) ? intval($_GET['p']) : "1";
       $lists=$newsModel->page($p ,3)->select();

        //var_dump($lists);
      $this->assign('tags',$lists);
      $total = $newsModel->count();
      $Page = new \Think\Page($total, 3);
      $show= $Page->show();
       $this->assign("pages", $show);
      $this->display();
    }
}