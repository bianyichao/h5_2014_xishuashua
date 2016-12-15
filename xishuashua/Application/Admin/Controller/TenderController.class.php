<?php
namespace Admin\Controller;
use Think\Controller;
class TenderController extends Controller {
    public function jzzp(){
    	$putModel = D("put");
		//$put = $putModel->select();
		
		$put=$putModel->join('left join personaluser ON put.p_name = personaluser.p_name')->page($p ,4)->order('pu_id desc')->select();
       
        $this->assign('tender', $put);
        //var_dump($put);
        $this->display();
    }
    public function doAdd() {

		if (!IS_POST) {
			exit("bad request!");
		}
		else{
		if( !$_SESSION['name']){
               echo "<script>alert('您还没登录!');</script>";
        }
        if($_SESSION['tag']==1){

                //echo "<script>alert('您不是业主噢！000');</script>";
        	    //$this->redirect('admin/courier/index', '', 1, '您不是业主!')
                $this->error("您不是业主噢!");
        }
        else{
        	$putModel = D("put");
		    if (!$putModel->create()) {
			    $this->error($newsModel->getError());
		    }
		    if ($putModel->add()) {
			     $this->success("添加成功！", U("jzzp"));
		    }
		    else {
			     $this->error("添加失败！");
		    }
        }
		}
	}
}