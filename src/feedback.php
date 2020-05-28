<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<?php include "logic/lang.php"?>
	<title><?php echo $langWords["FEEDBACK"] ?></title>
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
			<?php include "logic/mailHandler.php"?>
			<form action="" method="get" style="margin-top: 50px">
				<?php echo $langWords["NAME"] ?>: <input type="text" name="name" size="33" placeholder=<?php echo $langWords["NAME"] ?>><br>
				<?php echo $langWords["PHONE"] ?>: <input type="tel" name="tel" size="38" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
				<?php echo $langWords["EMAIL"] ?>: <input type="text" name="email" size="34" placeholder=<?php echo $langWords["PHONE"] ?>><br>
				<?php echo $langWords["SUBJECT"] ?>: <input type="text" name="subject" size="34" placeholder=<?php echo $langWords["SUBJECT"] ?>><br>
				<?php echo $langWords["MESSAGE"] ?>: <input type="text" name="text" style="height: 25px" size="34" placeholder=<?php echo $langWords["MESSAGE"] ?>><br>
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