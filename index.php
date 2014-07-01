<?php
require_once('./controller/IndexController.php');
require_once('./view/View.php'); 
$settings = array(
    'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
    'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
    'consumer_key' => "YOUR_CONSUMER_KEY",
    'consumer_secret' => "YOUR_CONSUMER_SECRET"
);

var_dump($settings);
die;
if(empty($_GET['controller'])){
	$controller='MainController';

}
else{
	$controller=$_GET['controller'];
}

if(class_exists($controller)){   
	$mainController= new $controller;
	$mainController->execute($settimgs,$_REQUEST);
	$mainController->render();
}
