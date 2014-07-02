<?php
require_once('./api/TwitterAPIExchange.php');

class TweetModel{
    private $twitter;
    public function __construct($settings) {
        $twitter = new TwitterAPIExchange($settings);
        $this->twitter=$twitter;
        return $this;
    }

    public function byDateAction($url, $method) {
        $json = $this->twitter->buildOauth($url, $method)
                ->performRequest();
        $respond = json_decode($json);
        foreach ($respond as $key => $row) {
            $created[$key] = $row['created_at'];
            $text[$key] = $row['text'];
        }
        var_dump($respond);
        die;
        array_multisort($created, $text);
    }

}