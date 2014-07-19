<?php
include_once('./view/View.php');
include_once('./model/IndexModel.php');

abstract class abstarctController{
	protected $request;
	protected $connection;
        public abstract function execute($setting,$request);
	public function render(){
		$this->view->render();
		return $this;
	}

}


class MainController extends abstarctController{
	public function execute($settings,$request){
		$view=new View('./view/Main.php');
		$this->view=$view;
		return $this;
	
	}
}

class ByDateController extends abstarctController{
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->buildConnection($url,$method, $getfield);
                $view=new View('./view/ByDate.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
	

}

class ByLenController extends abstarctController{
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->buildConnection($url,$method, $getfield);
                $view=new View('./view/ByLen.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
	
}

class UrlCheckController extends abstarctController{
	
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->buildConnection($url,$method, $getfield);
                $view=new View('./view/UrlCheck.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
	
}

class HashTagController extends abstarctController{
	public function execute($settings,$request){
		$tweet=new TweetModel($settings);
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$method='GET';
                $getfield='?screen_name=fabianwilliams&count=20';
		$data=$tweet->buildConnection($url,$method, $getfield);
                $view=new View('./view/HashTag.php');
		$this->view=$view;
		$this->view->setData('data',$data);
		return $this;
	
	}
}