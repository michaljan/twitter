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
                $view=new View('./view/ByDate.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
	public function render(){
		$this->view->render();
		return $this;
	}

}

class ByLenController implements iController{
	protected $request;
	protected $connection;
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->byLenAction($url,$method, $getfield);
                $view=new View('./view/ByLen.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
	public function render(){
		$this->view->render();
		return $this;
	}
}

class UrlCheckController implements iController{
	protected $request;
	protected $connection;
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->linkCheckAction($url,$method, $getfield);
                $view=new View('./view/UrlCheck.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
	public function render(){
		$this->view->render();
		return $this;
	}
}

class HashTagController implements iController{
	protected $request;
	protected $connection;
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->linkCheckAction($url,$method, $getfield);
                $view=new View('./view/HashTag.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
	public function render(){
		$this->view->render();
		return $this;
	}
}