<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<title>Watch Films! - Extension</title>
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
			<?php getCookies()?>
			<form action="" method="get" style="margin-top: 50px">
				Background color:
				<select name="background">
					<?php colorChoices()?>
				</select><br>
				Font color:
				<select name="fontcolor">
					<?php colorChoices()?>
				</select><br>
				Font size:<input type="number" name="fontsize" min="1"><br>
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