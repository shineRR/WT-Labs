<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<?php include "logic/lang.php"?>
	<title><?php echo $langWords["TOP_FILMS"] ?></title>
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
				<div class="postbox">
					<div class="postcover"><img src="Assets/fzhh70.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">hercai (1967)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/1.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">capisma (1992)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/fzhh70.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">hercai (2000)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/2.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">better call saul (1972)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/3.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">daniel (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/4.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">ncis (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/7.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">The walking dead (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/2.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">Lincoln Rhyme (1941)</a></div>
				</div>

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