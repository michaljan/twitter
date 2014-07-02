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
        //foreach($respond as $key=>$value){
        //    $date[$key]=new DateTime($value['created_at']);
        //    $post[$key]=$value['text'];
        //}
        function cmp($a, $b) {
        $a= new DateTime($a['created_at']);
        $b= new DateTime($b['created_at']);
        if ($a == $b) {
            return 0;
        }
        return $a < $b ? -1 : 1;
         };
        uasort($respond,'cmp');
        return $respond;
    }
    

   

}