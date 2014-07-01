<?php
class View{
	protected $fileName=null;
	protected $data=null;
	
	public function __construct($fileName){
		$this->fileName=$fileName;
	}
	
	public function render(){
		require_once($this->fileName);
		return $this;
	}
	
	public function setData($name,$data){
		$this->data[$name]=$data;
	}

}
