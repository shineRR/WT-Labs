<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<title>Watch Films! - Extension</title>
</head>
<body>
	<header>
		<div class="grid-container">
			<nav class="header-menu">
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
		<div class="main-content">
			<?php include "logic/mailHandler.php"?>
			<form action="" method="get" style="margin-top: 50px">
				Name: <input type="text" name="name" size="33" placeholder="Name"><br>
				Phone: <input type="tel" name="tel" size="38" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
				Email: <input type="text" name="email" size="34" placeholder="Email"><br>
				Subject: <input type="text" name="subject" size="34" placeholder="Subject"><br>
				Message: <input type="text" name="text" style="height: 25px" size="34" placeholder="Message"><br>
				<input type="submit">
			</form>
			<span style="color: white"><?=$error?></span>
		</div>
	</main>

	<footer>
		<span>Hidden</span>
		<div class="bottom">
			<section>GIVE ME A MOMENT</section>
		</div>
	</footer>

</body>
</html>