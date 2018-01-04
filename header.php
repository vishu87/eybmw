<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Andorra Investing</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?v=1.0.2">
	
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
	
	<link rel="icon" type="image/png" href="assets/img/favicon.png">

</head>
<body>
<header>
<?php if(isset($_SESSION["MEM_ID"])): ?>
<div class="container">
	<div class="logout">
		<a href="logout.php">Logout</a>
	</div>
</div>
<?php endif; ?>
</header>