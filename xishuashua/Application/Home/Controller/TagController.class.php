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
               $this->success("添加成功",U("tag/prices"));
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
    		//exit("bad!");
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
      $this->display();
    }
     public function roomtypedelete(){
    	$roomtype = $_GET['roomtype'];
    	// var_dump($_GET['roomtype']);
        if ($roomtype == '') {
            exit("bad param!");
        }
        if(M("roomtype")->delete($roomtype)){
            $this->success("删除成功！",U("tag/roomtype"));
        }
    }
    public function tagdelete(){
    	$this->display();
    }
    public function tag(){
    	$this->display();
    }
}