<?php
namespace Admin\Controller;
use Think\Controller;
class DiaryController extends Controller {
    public function zxrj_xq(){
        $this->display();
    }
     public function zxrj(){
    	$newModel=M("adminnewspicture");
    	$p=$newModel->select();
    	$this->assign("p",$p);
    	
        $penews=M("personalnews");
        $p1 = isset($_GET['p']) ? intval($_GET['p']) : "1";
        $ca=$penews->order('pn_id desc')->page($p1 ,3)->select();
        $this->assign("pe",$ca);
        $total1 = $penews->count();
        $Page1 = new \Think\Page($total1, 3);
        $show1= $Page1->show();
        $this->assign("pages1", $show1);

        //var_dump($show1);

        $bnews=M("businessnews");
        $p2 = isset($_GET['p']) ? intval($_GET['p']) : "1";
        $b=$bnews->order('bn_id desc')->page($p2 ,4)->select();
        $this->assign("b",$b);
        $total2 = $penews->count();
        $Page2= new \Think\Page($total2, 4);
        $show2= $Page2->show();
        $this->assign("pages2", $show2);

        $news=M("news");
        $p3 = isset($_GET['p']) ? intval($_GET['p']) : "1";
        $n=$news->order('n_id desc')->page($p3 ,4)->select();
        $this->assign("n",$n);
        $total3 = $news->count();
        $Page3= new \Think\Page($total3, 4);
        $show3= $Page3->show();
        $this->assign("pages3", $show3);

        //var_dump($n);
        $this->display();
    }
}
