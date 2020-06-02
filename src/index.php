<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<?php include "logic/lang.php"?>
	<title><?php echo $langWords["HOME"] ?></title>
</head>
<body>
	<header>
		<div class="grid-container">
			<?php langMenu()?>
			<nav class="header-menu">
				<?php include 'menu.php'?>
			</nav>
		</div>

	</header>

	<main>
		<div class="sidebar"><?php echo $langWords["CATEGORIES"] ?>: <br><br>
				<a href=""><?php echo $langWords["HORROR"] ?></a>
				<a href=""><?php echo $langWords["COMEDY"] ?></a>
				<a href=""><?php echo $langWords["DRAMA"] ?></a>
				<a href=""><?php echo $langWords["THRILLER"] ?></a>
		</div>
		<div class="main-content">
			<div class="films">
				<?php include "logic/agelimit.php";?>
			</div>
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