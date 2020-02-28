<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RightChoice</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lux/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron">
	  <h1 class="display-3">Hello, <?= $viewData;?></h1>
	  <p class="lead">Hi, i am an API, i would like to help you with the information.</p>
	  <hr class="my-4">
	  <p>But i am constrained to get some information from you first.</p>
	  <p class="lead">
	    <a class="btn btn-primary btn-lg" href="#" role="button">COMMANDS i follow</a>
	  </p>
	</div>
</body>
</html>