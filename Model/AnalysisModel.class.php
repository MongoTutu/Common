<?php
namespace Common\Model;
use Think\Model\MongoModel;
class AnalysisModel extends MongoModel{
	
	public function add_all($data){
		$this->clear();
		foreach($data as $k=>$v){
			$this->add($v);
		}
	}

	public function get_by_page($p,$order='factors desc'){
		$num = 10;
		$skip = ($p-1) * $num;
		
		$data = $this->where(array('type'=>array('IN',array('news','event'))))->order($order)->limit($skip,$num)->select();

		foreach($data as $k=>$v){
			$data[$k]['images'] = IMAGES.$v['images'];
			$data[$k]['shares'] = intval($v['views']/2 + 1);
			unset($data[$k]['factors']);
			unset($data[$k]['entrepreneur_factors']);
			unset($data[$k]['investor_factors']);
			unset($data[$k]['time_factor']);
			unset($data[$k]['incubator_factors']);
		}
		$data = array_values($data);
		
		return $data;
	}
	
}
