<?php
namespace Home\Controller;
use Think\Controller;
class ActivityController extends Controller {
    public function index(){
        //$this->display();
    }
    public function activeAdd(){
        $Activity = D('Activity');
        if(IS_POST){
            $data = $Activity->create();
            if($data){
                $result = $Activity->actAdd($data);
                $this->checkResult($result);
            }else{
                $this->error($Activity->getError());
            }
        }else {
            $this->display('add');
        } 
    }
    public function activeDel(){}
    public function activeEdit(){}
    public function activeSum(){
        $Activity = D('Activity');
        $act1 = $Activity->actSum('act1');
        $this->assign('act1',$act1);
        $act2 = $Activity->actSum('act2');
        $this->assign('act2',$act2);
        $act3 = $Activity->actSum('act3');
        $this->assign('act3',$act3);
        $act4 = $Activity->actSum('act4');
        $this->assign('act4',$act4);
        $act5 = $Activity->actSum('act5');
        $this->assign('act5',$act5);
        $act6 = $Activity->actSum('act6');
        $this->assign('act6',$act6);
        $this->display('sum');
    }
	public function activeList(){
		$Activity = D('Activity');
		$result = $Activity->actList();
		$this->assign('result',$result);
		$this->display('list');
	}
    public function checkResult($result){
        if($result){
                $this->success('操作成功！',U('Activity/activeList'));
            }else{
                $this->error('操作失败！',U('Activity/activeAdd'));
            }
    }
}