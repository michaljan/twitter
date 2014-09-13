<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ttter API example">
    <meta name="author" content="Michal Janicki">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/vendor/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/vendor/modernizr-2.7.0.min.js"></script>
    <title>Twitter task</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="./index.php?controller=MainController">Home</a></li>
				<li><a href="./index.php?controller=ByDateController">Sort by date</a></li>
				<li><a href="./index.php?controller=ByLenController">Sort by length</a></li>
                                <li><a href="./index.php?controller=UrlCheckController">Check for url</a></li>
                                <li><a href="./index.php?controller=HashTagController">Hash tags</a></li>
			</ul>
		</div>
            <div class="col-md-6">
                <h3>Twitter API project</h3>
                <p>This project is puerilely for the demonstration purposes. Based on MVC framework which you can find on
                    <a href=" http://mxmelite.com"> http://mxmelite.com</a> 
                    uses API provided by James Mallison which can be found on
                    <a link="http://github.com/j7mbo/twitter-api-php"> http://github.com/j7mbo/twitter-api-php/ </a> website. 
                </p>
                <p>Below you can find specifications for the task provided by one of the employers for the Junior PHP position interview
                    
                This technical test is intended to demonstrate your PHP skills when solving a simple task.

The priority for the test is to demonstrate the quality of your code, not to implement all features necessarily.

If you wish to leave comments for us within the code to explain your reasoning or thought process, then please do.

Please write a PHP solution, which can do following:

1. Download the last 20 tweets from a twitter account, using the Twitter API

2. a) Order the tweets by the date and time that they have been published.

b) Order the tweets by its length.

3. a) Filter whether or not a tweet contains a link.

b) Filter whether or not a tweet contains multiple hash tags.

4. Show all used hash tags used in the tweets.

5. Supply Example run code that will show how your program is called. 
                </p>
            </div>
	</div>		
  </body>
</html>

