<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function zsgs(){
    	$CompanyModel=D("businessuser");
    	$company=$CompanyModel->select();
    	$this->assign('company', $company,"4");
    	//var_dump($company);
        $this->display();
    }
}