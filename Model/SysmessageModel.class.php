<?php
namespace Common\Model;
use Think\Model\MongoModel;
class SysmessageModel extends MongoModel{

	// 55a76cb7e37b2dfe58b5fd98  KSTART
	public $kstart = '55a76cb7e37b2dfe58b5fd98';
	public $kstart_helper = '55a76c55e37b2d3358b5fd98';

	public function send_sys_message($tid,$text,$fid){
		if(!$fid){
			$fid = $this->kstart;
		}
		
		if(!$tid || !$text){
			return 0;
		}

		$e_tid = D('Common/User')->where(array('_id'=>$tid))->find();
		if(!$e_tid){
			return 0;
		}

		$data['tid'] = new \MongoId($tid);
		$data['fid'] = $fid;
		$data['text'] = $text;
		$data['time'] = time();
		$data['status'] = 1;
		$data['rm'] = 1;

		$suc = $this->data($data)->add();
		
		if($suc){
			return 1;
		}else{
			return 0;
		}
	}

}
