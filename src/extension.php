<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<title>Watch Films! - Extension</title>
	<?php include "process.php"?>
</head>
<body>
	<header>
		<div class="grid-container">
			<nav class="headerMenu">
				<?php include 'menu.php'?>
			</nav>
		</div>
	</header>

	<main>
		<div class="sidebar">categories: <br><br>
				<a href="">Horror</a>
				<a href="">Comedy</a>
				<a href="">Drama</a>
				<a href="">Thriller</a>
		</div>
		<div class="mainContent">
			<div class="contentChild">
				<img src="Assets/php.jpg" alt="">
				<span>
					<form action="extension.php" method="get">
						Enter cities here:	<input type="text" name="cities" size="50">
						<input type="Submit">
						<br>
						<span class= "php-output">
							<?php
outputNorepeatArray($cities);
?>
							<br>
						</span>
					</form>
				</span>
			</div>
		</div>
	</main>

	<footer>
		<span>Hidden</span>
		<div class="foot">
			<section>GIVE ME A MOMENT</section>
		</div>
	</footer>

</body>
</html>