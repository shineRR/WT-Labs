<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<?php include "logic/lang.php"?>
	<title><?php echo $langWords["SET_STYLES"] ?></title>
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
			<?php getCookies()?>
			<form action="" method="get" style="margin-top: 50px">
				<?php echo $langWords["BACKGROUND_COLOR"] ?>:
				<select name="background">
					<?php colorChoices()?>
				</select><br>
				<?php echo $langWords["FONT_COLOR"] ?>:
				<select name="fontcolor">
					<?php colorChoices()?>
				</select><br>
				<?php echo $langWords["FONT_SIZE"] ?>:<input type="number" name="fontsize" min="1"><br>
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