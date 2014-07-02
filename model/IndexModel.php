<?php
require_once('./api/TwitterAPIExchange.php');

class TweetModel{
    private $twitter;
    public function __construct($settings) {
        $twitter = new TwitterAPIExchange($settings);
        $this->twitter=$twitter;
        return $this;
    }

    public function byDateAction($url, $method, $getfield) {
        $json = $this->twitter->setGetfield($getfield)
                ->buildOauth($url, $method)
                ->performRequest();
        $respond = json_decode($json,true);
        //asort($respond, "mySortByDate");
        foreach($respond as $key=>$value){
            $date[$key]=new DateTime($value['created_at']);
            $post[$key]=$value['text'];
        }
        
        echo '<pre>';
        print_r($date,$post);
        die;
        return $respond;
    }
    
    public function mySortByDate($val1,$val2){
        return $val1['created_at']>$val2['created_at'];
    }
}