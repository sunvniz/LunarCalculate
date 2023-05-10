<?php

include_once("../includes/functions.php");

if($_POST["date"])
	list($year,$month,$date) = explode("-", $_POST["date"]);
else
	list($year,$month,$date) = explode("-", Date("Y-m-d"));
//echo $year;
$amlich = convertSolar2Lunar($date,$month,$year);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Xem lịch âm hôm nay</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Chào bạn! chúc bạn một ngày mới tốt lành</h1>    
	<div class="container">
	
		<form action="lichamduong.php" method="POST" class="form-horizontal">
		<fieldset>
		<!-- Form Name -->
		<legend>Xem lịch âm</legend>

		<!-- Text input-->
		<div class="form-group form-group-lg">
		  <label class="col-md-4 control-label" for="date">Nhập ngày cần xem</label>  
		  <div class="col-md-8">
		  <input id="date" name="date" type="date" class="form-control input-md" aria-describedby="inputSuccess4Status">		  
    		<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
    		<span id="inputSuccess4Status" class="sr-only">(success)</span>
		    
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="submit"></label>
		  <div class="col-md-8">
		    <button id="submit" name="submit" class="btn btn-success"> Xem  </button>
		  </div>
		</div>

		</fieldset>
		</form>
	
	<H1>Ngày âm là: <?=$amlich;?></H1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    </div><!--end container-->
  </body>
</html>
