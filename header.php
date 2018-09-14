<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HTML</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		html, body {
			padding: 0;
			margin: 0;
		}
		header {
			background-color: gray;
			min-height: 100px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		main { padding: 2%; }
		footer {
			position: fixed;
			bottom: 0;
			left: 0;
			right: 0;
			padding: 1em 0;
			background-color: #000;
			color: #fff;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<?php
			function get_header($tag){
				$tag = $_GET['info'];
				if($tag == 'html'){
					echo "<h1>What is HTML?</h1>";
				} elseif ($tag == 'php') {
					echo "<h1>What is PHP?</h1>";
				} else {
					echo "<h1>No info available.</h1>";
				}
			}
		get_header($_GET['info']);
		?>
	</header>
	