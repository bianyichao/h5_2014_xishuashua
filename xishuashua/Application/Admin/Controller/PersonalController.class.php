<?php
namespace Admin\Controller;
use Think\Controller;
class PersonalController extends Controller {
    public function jzzp_xq(){
        $pu_id = isset($_GET['pu_id']) ? intval($_GET['pu_id']) : '';
        $adminModel=M("put");
        $a=$adminModel->find($pu_id);

        $this->assign("a", $a);
        $name=$a['p_name'];
        //var_dump($name);
        $ad=M("personaluser")->where("p_name='$name'")->find();
         //var_dump($ad);
        $this->assign("ad", $ad);
        $this->display();
    }

    public function zt(){
    	if (!IS_POST) {
                 exit("bad!"); 
        }
        //var_dump($POST);
        $adminModel=M("put");
        //var_dump($a);
        $data['state']=1;
        $t=$_POST['pu_id'];
        //var_dump($t);
        $a=$adminModel->where("pu_id=$t")->save($data);
        if($a){
            $this->success("预约成功！",U("index/index"));
        }
         else {
        	$this->success("已经预约！",U("index/index"));
        }
         

    }
}