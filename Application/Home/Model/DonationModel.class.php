<?php
namespace Home\Model;
use Think\Model;
class DonationModel extends Model {
    //put your code here
    protected $_auto = array(
        array('create_time', 'time', 1, 'function'),
        array('status', '1', 1),
    );
    public function donationAdd($data){
        $Donation = M('Donation');
        $rst = $Donation->add($data);
        return $rst;
    }
    public function donationEdit($data){
        $Donation = M('Donation');
        $rst = $Donation->save($data);
        return $rst;
    }
}
