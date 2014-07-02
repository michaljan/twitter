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
        if ($a == $b) {
            return 0;
        }
        var_dump($a);
        var_dump($b);
        return $a< $b ? -1 : 1;
         };
        var_dump($respond); 
        uksort($respond,'cmp');
        echo '<pre>';
        die;
        return $respond;
    }
    

   

}