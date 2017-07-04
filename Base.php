<?php
namespace hysunli\view;
class Base{
	private $file;
	private $var = [];

	/**
	 * 载入模板
	 */
	public function make(){
		//include "../app/home/view/entry/index.php";
		$this->file = "../app/". MODULE . "/view/" . CONTROLLER . "/".ACTION.".php";
		return $this;
	}

	public function with($data){

		$this->var = $data;
		return $this;
	}

	/**
	 * 当输出对象，会自动触发此方法
	 * @return string
	 */
	public function __toString() {
		//把键名变为变量名，键值变为变量值
		extract($this->var);//相当于$data = 'lumiya';
		include $this->file;
		return '';
	}


}