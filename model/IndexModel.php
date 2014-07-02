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
        foreach ($respond as $key => $row) {
            $created[$key] = $row['created_at'];
            $text[$key] = $row['text'];
        }
        $data=array_multisort($created, $text);
        var_dump($data);
        die;
        
    }
    

}