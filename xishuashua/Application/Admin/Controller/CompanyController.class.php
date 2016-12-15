<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function zsgs(){
    	$CompanyModel=D("businessuser");
    	$company=$CompanyModel->limit(20)->select();
    	$this->assign('company', $company);
    	//var_dump($company);
        $this->display();
    }
}