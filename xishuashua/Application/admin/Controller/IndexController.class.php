<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$newModel=M("adminnewspicture");
    	$p=$newModel->select();
    	$this->assign("p",$p);
    	//var_dump($p);

    	$company=M("businessuser");
    	$c=$company->order('b_id desc')->limit(4)->select();
    	$this->assign("c",$c);

        $put=M("put");
        $p=$put->order('pu_id desc')->limit(4)->select();
        $this->assign("pp",$p);

        $casepicture=M("casepicture");
        $ca=$casepicture->order('cp_id desc')->limit(9)->select();
        $this->assign("ca",$ca);

        $penews=M("personalnews");
        $ca=$penews->order('pn_id desc')->limit(4)->select();
        $this->assign("pe",$ca);


        $this->display();
    }
     public function index_du(){
        $newModel=M("adminnewspicture");
        $p=$newModel->select();
        $this->assign("p",$p);
        //var_dump($p);

        $company=M("businessuser");
        $c=$company->order('b_id desc')->limit(4)->select();
        $this->assign("c",$c);

        $put=M("put");
        $p=$put->order('pu_id desc')->limit(4)->select();
        $this->assign("pp",$p);

        $casepicture=M("casepicture");
        $ca=$casepicture->order('cp_id desc')->limit(9)->select();
        $this->assign("ca",$ca);

        $penews=M("personalnews");
        $ca=$penews->order('pn_id desc')->limit(4)->select();
        $this->assign("pe",$ca);


        $this->display();
    }
}