<?php
require_once('./controller/IndexController.php');
require_once('./view/View.php'); 
$settings = array(
    'oauth_access_token' => "zXpieczwctauHn1xA36o0YMEuc0XNglrxLA16PH",
    'oauth_access_token_secret' => "jG2qVNvaZQIlctoxJmjf2rHbXldFtRyzjhSCw9codae5l",
    'consumer_key' => "O7LeeDUsH8LYPiHCDtmtx0LhJ",
    'consumer_secret' => "2rVFFhOmfemcQCmYRJ3Acvtj46KpdSTv1OSbBiVRVFDp9KPvEg"
);

if(empty($_GET['controller'])){
	$controller='MainController';

}
else{
	$controller=$_GET['controller'];
}

if(class_exists($controller)){   
	$mainController= new $controller;
	$mainController->execute($settings,$_REQUEST);
	$mainController->render();
}
