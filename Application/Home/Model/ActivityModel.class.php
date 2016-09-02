<?php
namespace Home\Model;
use Think\Model;
class ActivityModel extends Model {
    //put your code here
    protected $_auto = array(
        array('create_time', 'time', 1, 'function'),
        array('status', '1', 1),
    );
    protected $_validate =array(
        array('room_num','require','房号必须填写！'),
        array('name','require','姓名必须填写！'),
        array('tel','require','手机号码必须填写！'),
        array('tel','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号码格式错误！','0','regex',1),
        array('age','require','儿童年龄必须填写！'),
    );
    public function actAdd($data){
        $Activity = M('Activity');
        $rst = $Activity->add($data);
        return $rst;
    }
    public function actDel($id){
        $Activity =M('Activity');
        $data = $Activity->where('id='.$id)->find();
        $data['status'] = 0;
        $rst = $Activity->save($data);
        return $rst;
    }
    public function actEdit($data){
        $Activity = M('Activity');
        $rst = $Activity->save($data);
        return $rst;
    }
    public function actSum($act){
        $Activity = M('Activity');
        $rst = $Activity->where('status=1')->sum($act);
        return $rst;
    }
	public function actList(){
		$Activity = M('Activity');
		$rst = $Activity->where('status=1')->select();
		return $rst;
	}
}
