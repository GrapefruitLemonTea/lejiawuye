<?php
namespace Home\Controller;
use Think\Controller;
class DonationController extends Controller {
    public function index(){
        $this->showlist();
    }
    //新增活动捐资、活动开支
    public function donationAdd() {
        $Donation = D('Donation');
        if (IS_POST) {
            $data = $Donation->create();
            if ($data) {
                $result = $Donation->donationAdd($data);
                $this->checkResult($result);
            }else {
                $this->error($Donation->getError());
            }
        } else {
            $this->display('add');
        }
    }
    //编辑活动捐资、活动开支
    public  function donationEdit(){
        $Donation = D('Donation');
        if(IS_POST){
            $data = $Donation->create();
            if($data){
                $result = $Donation->donationEdit($data);
                $this->checkResult($result);
            }else{
                $this->error($Donation->getError());
            }
        }else{
           $id = I('get.did');
           $result = $Donation->find($id);
           $this->assign('result',$result);
           $this->display('edit');
        }
    }
    //活动捐资、活动开支列表
    public function donationList(){
        $Donation = D('Donation');
        $result = $Donation->where('status=1')->select();
        $this->assign('result',$result);
        $this->display('list');
    }
    //活动捐资、活动开支（微信公众号展示）
    public function showList(){
        $Donation = D('Donation');
        $result = $Donation->where('status=1')->select();
        $this->assign('result',$result);
        $this->display('showlist');
    }

    //捐资表详情（微信公众号展示）
        public function listone(){
        $did = I('get.did');
        $Donation = D('Donation');
        $result = $Donation->find($did);
        if($result){
            $this->assign('result',$result);
            $this->display('listone');
        }else{
            $this->error('信息不存在或已被删除！',U('Donation/donationList'));
        }
    }
    //验证操作结果
    function checkResult($result){
        if($result){
                $this->success('操作成功！',U('Donation/donationList'));
            }else{
                $this->error('操作失败！',U('Donation/donationAdd'));
            }
    }
}