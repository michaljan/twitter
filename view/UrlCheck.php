<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TWITTER TASK">
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
				<li><a href="./index.php?controller=MainController">Home</a></li>
				<li><a href="./index.php?controller=ByDateController">Sort by date</a></li>
				<li><a href="./index.php?controller=ByLenController">Sort by length</a></li>
                                <li class="active"><a href="./index.php?controller=UrlCheckController">Check for url</a></li>
                                <li><a href="./index.php?controller=HashTagController">Sort by length</a></li>
                                
			</ul>
		</div>
            <div class="col-md-5">
                <h3>Links </h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th><th>Date</th><th>Post</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i=1;
                            foreach($this->data['data']['link'] as $value){
                                echo '<tr><td>'.$i.'<td>'.$value['created_at'].'<td>'.$value['text'].'<td><tr>';
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
            <table class="table table-hover">
                <h3>No links</h3>
                    <thead>
                        <tr>
                            <th>#</th><th>Date</th><th>Post</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i=1;
                            foreach($this->data['data']['nolink'] as $value){
                                echo '<tr><td>'.$i.'<td>'.$value['created_at'].'<td>'.$value['text'].'<td><tr>';
                            $i++;
                            
                        }
                        ?>
                    </tbody>
                </table>
            </div>>
	</div>		
  </body>
</html>

