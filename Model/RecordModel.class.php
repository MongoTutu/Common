<?php
namespace Common\Model;
use Think\Model\MongoModel;
class RecordModel extends MongoModel{
	
	public function add_log($sid,$type){
		$log['sid'] = $sid;
		$log['time'] = time();
		$log['uid'] = cookie('id');
		$log['type'] = $type;
		$this->data($log)->add();
	}
	
}