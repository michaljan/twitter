<?php
include_once('./view/View.php');
include_once('./model/IndexModel.php');

interface iController{
	public function execute($setting,$request);
	public function render();

}


class MainController implements iController{
	protected $request;
	protected $connection;
	public function execute($settings,$request){
		$view=new View('./view/Main.php');
		$this->view=$view;
		return $this;
	
	}
	public function render(){
		$this->view->render();
		return $this;
	}

}

class ByDateController implements iController{
	protected $request;
	protected $connection;
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->byDateAction($url,$method, $getfield);
		var_dump($data);
                $view=new View('./view/Main.php');
		$this->view=$view;
		$this->view->setData('byDate',$data);
		return $this;
	
	}
	public function render(){
		$this->view->render();
		return $this;
	}

}
