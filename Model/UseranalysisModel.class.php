<?php
namespace Common\Model;
use Think\Model\MongoModel;
class UseranalysisModel extends MongoModel{
	
	public function add_all($data){
		$this->clear();
		foreach($data as $k=>$v){
			$this->add($v);
		}
	}
	
}
