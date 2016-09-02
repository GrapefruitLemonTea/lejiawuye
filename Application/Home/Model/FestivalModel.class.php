<?php
namespace Home\Model;
use Think\Model;
class FestivalModel extends Model {
    //put your code here
    protected $_auto = array(
        array('create_time', 'time', 1, 'function'),
        array('status', '1', 1),
    );
    protected $_validate =array(
	array('block','require','必须选择楼宇'),
        array('room','require','房号必须填写！'),
        array('name','require','姓名必须填写！'),
        array('tel','require','手机号码必须填写！'),
        array('tel','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号码格式错误！','0','regex',1),
    );
    public function festAdd($data){
        $Festival = M('Festival');
        $rst = $Festival->add($data);
        return $rst;
    }

    public function festSum(){
        $Festival = M('Festival');
        $rst = $Festival->where('status=1')->count();
        return $rst;
    }
	public function festList(){
		$Festival = M('Festival');
		$rst = $Festival->where('status=1')->select();
		return $rst;
	}
	public function checkData($checkRepet){
		$Festival = M('Festival');
		$rst = $Festival->where($checkRepet)->select();
		return $rst;
	}
}
