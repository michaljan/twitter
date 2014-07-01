<?php
include_once('./entity/User.php');
require_once('./api/TwitterAPIExchange.php');

class TweetModel{
	public function __construct($settings){
		$twitter = new TwitterAPIExchange($settings);
		return $this;
	}
	public function byDateAction($url,$method){
		$json=$twitter->buildOauth($url, $method)
					  ->performRequest();
		$respond=json_decode($json);
		foreach($respond as $key=>$row){
			$created[$key]=$row['created_at'];
			$text[$key]=$row['text'];		
		}
                var_dump($respond);
                die;
		array_multisort($created,$text);
	}
	

}