<?php
include "../vendor/autoload.php";

use App\Services\CalendarCalculator;

$calendor = new CalendarCalculator();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test VSCode Web with Codespace</title>
</head>
<body>
	<header>
		<h1>This code was code on Note 8 Samsung Dex</h1>
	</header>
	<div class="content-wrapper">
		<p>This is awesome! <?=$calendor->handle(Carbon\Carbon::parse('2023 05 16 1:25 AM')) ?></p>
	</div>
</body>
</html>
