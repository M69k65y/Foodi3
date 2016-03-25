<?php

?>

<!DOCTYPE html>

<html lang = "en">

	<head>

		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">

		<link rel = "shortcut icon" href = "">
		<link type = "text/css" rel = "stylesheet" href = "<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.min.css">
		<link type = "text/css" rel = "stylesheet" href = "<?php echo base_url(); ?>resources/flat_ui/dist/css/flat-ui.min.css">

		<script src = "<?php echo base_url(); ?>resources/js/jquery-1.12.0.min.js">  </script>

	</head>

	<body>

		<nav class = "navbar navbar-default navbar-fixed-top">

			<div class = "container-fluid">

				<div class = "navbar-header">

					<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navigate"> 
					
						<span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
					
					</button> <!-- Menu button for smaller devices -->

					<a class = "navbar-brand" href = "<?php echo base_url(); ?>foodie"> Foodi3 </a>

				</div>

				<div id = "navigate" class = "collapse navbar-collapse"> <!-- Start of navbar components -->

					<ul class = "nav navbar-nav">

						<li> <a href = "<?php echo base_url(); ?>foodie"> 
							<span class = "glyphicon glyphicon-home">  </span> Home </a> </li>

					</ul>

				</div>

			</div>

		</nav>