<?php
require_once('./controller/IndexController.php');
require_once('./view/View.php'); 
$settings = array(
    'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
    'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
    'consumer_key' => "YOUR_CONSUMER_KEY",
    'consumer_secret' => "YOUR_CONSUMER_SECRET"
);

var_dump($controller);

if(empty($_GET['controller'])){
	$controller='MainController';
        var_dump($controller);
        die;

}
else{
	$controller=$_GET['controller'];
}

if(class_exists($controller)){   
	$mainController= new $controller;
	$mainController->execute($connection,$_REQUEST);
	$mainController->render();
}
