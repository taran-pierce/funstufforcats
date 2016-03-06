<!DOCTYPE html>
<html>
	<head>
		<title>Fun Stuff or Cats</title>
		<link rel="stylesheet" type="text/css" href="/static/vendor/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/static/css/style.css" />
	</head>
	<body>
		<?php
			include "templates/header.php";
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-sm-push-7">
					<img class="img-responsive" src="http://placekitten.com/960/600" alt="Rando Cat" />
				</div>
				<div class="col-xs-12 col-sm-7 col-sm-pull-5">
					<h1>Hello World!</h1>
					<h2>Let's check out some fun stuff!</h2>
					<h3>or cats...</h3>
					<p>Honestly, it's probably just going to be a bunch of cats at first.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<a href="http://thecatapi.com">
						<img class="img-responsive" src="http://thecatapi.com/api/images/get?format=src&type=gif">
					</a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<img class="img-responsive" src="http://placekitten.com/700/300" alt="Rando Cat" />
				</div>
				<div class="col-xs-12 col-sm-4">
					<img class="img-responsive" src="http://placekitten.com/300/340" alt="Rando Cat" />
				</div>
			</div>
		</div>
		<script type="text/javascript" src="//code.jquery.com/jquery-2.2.1.min.js"></script>
		<script type="text/javascript" src="/static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>
