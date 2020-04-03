<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<title>Watch Films! - Home Page</title>
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
		<div class="sidebar">
			categories: <br><br>
			<a href="extension.php">Horror</a> <a href="">Comedy</a> <a href="">Drama</a> <a href="">Thriller</a>
		</div>
		<div class="mainContent">
			<div class="classOfFilms">
				<div class="postbox">
					<div class="postcover"><img src="Assets/ftwj751.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">hercai (1967)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/1.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Capisma (1992)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/fzhh70.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">hercai (2000)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/2.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Better Call saul (1972)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/3.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Daniel(1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/4.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">NCIS (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/7.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">the walking dead (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="Assets/2.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">lincoln rhyme (1941)</a></div>
				</div>

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