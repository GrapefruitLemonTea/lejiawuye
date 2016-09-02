<?php

namespace Home\Controller;

use Think\Controller;

class FestivalController extends Controller {

    public function index() {
        $this->display('list');
    }
	public function showlist(){
		$Festival = D('Festival');
		$result = $Festival->festList();
		$sum  = $Festival->festSum();
		$this->assign('result',$result);
		$this->assign('sum',$sum);
		$this->display('list');
	}
    public function add(){
		$Festival = D('Festival');
		if(IS_POST){
			session('[start]'); // 启动session
			$data = $Festival->create();
			//判断是否重复提交数据
			if($data['code']){
				if($data['code']==session('code')){
					$this->error('请不要重复提交数据！');
				}else{
					session('code',$data['code']);
				}
			}
			if($data){
				$checkRepet['room'] = $data['room'];
				$checkRepet['tel'] = $data['tel'];
				$checkRepet['name'] = $data['name'];
                $checkRepet['_logic'] = 'OR';
				$checkData = $Festival->checkData($checkRepet);
				if($checkData){
					$this->error('您已报名成功，请勿重复报名！');
				}else{
				$result = $Festival->festAdd($data);
				$this->checkResult($result);
				}
			}else{
				$this->error($Festival->getError());
			}
		}else{
			$code = mt_rand(0,100000);
			$this->assign('code',$code);
			$this->display('add');
		}
	}
	    public function checkResult($result){
        if($result){
                $this->success('操作成功！',U('Festival/showlist'));
            }else{
                $this->error('操作失败！',U('Festival/add'));
            }
    }
}
