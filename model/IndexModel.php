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
        function cmp($a, $b) {
            $a= new DateTime($a['created_at']);
            $b= new DateTime($b['created_at']);
        if ($a == $b) {
            return 0;
        }
        return $a > $b ? -1 : 1;
         };
        uasort($respond,'cmp');
        return $respond;
    }
    public function byLenAction($url, $method, $getfield) {
        $json = $this->twitter->setGetfield($getfield)
                ->buildOauth($url, $method)
                ->performRequest();
        $respond = json_decode($json,true);
        function cmpLen($a, $b) {
        $a= strlen($a['text']);
        $b= strlen($b['text']);
        if ($a == $b) {
            return 0;
        }
        return $a > $b ? -1 : 1;
         };
        uasort($respond,'cmplen');
        return $respond;
    }
    
    public function linkCheckAction($url, $method, $getfield){
        $json = $this->twitter->setGetfield($getfield)
                ->buildOauth($url, $method)
                ->performRequest();
        $respond = json_decode($json,true);
        foreach ($respond as $row){
            $result=preg_match('@(?:http://)@', $row['text']);
            if($result==true){
                $link[]=$row;
            }   
            else{
                $noLink[]=$row;
            }
        }
        $data=array('link'=>$link,'nolink'=>$noLink);
        return($data);
    }
    public function hashTagAction($url, $method, $getfield){
        $json = $this->twitter->setGetfield($getfield)
                ->buildOauth($url, $method)
                ->performRequest();
        $respond = json_decode($json,true);
        foreach ($respond as $row){
            $result=preg_match_all('@(#\w+)@', $row['text'],$matches);
            if($result==true){
                $hashtagPost[]=$row;
                $hashTags[]=$matches[0];
            }   
        }
        $data=array('hashtagPost'=>$hashtagPost,'hashTags'=>$hashTags);
        return($data);
    }

   

}