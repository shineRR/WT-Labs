<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<title>Document</title>
</head>
<body>
	<header>
		<div class="register">
			<a href="signup.php">Register</a>	
			<a href="login.php">Log In</a>
		</div>

		<div class="grid-container">
			<nav class="header-menu">
				<a href="films.php"> <span>Top Films </span></a>
				<a href="serials.php"> <span>Serials </span></a>
				<a href="profile.php"> <span>Profile </span></a>
			</nav>
		</div>
		
	</header>

	<div id="popup1" class="overlay">
		<div class="popup">
			<h2>login</h2>
			<a class="close" href="index.php">&times;</a>
			<div class="content">
				<span>Email:</span><input type="email">
				<span>Password</span><input type="password">
			</div>
			<div class="act"><a class="enterBtn" href="index.php">Enter</a></div>
		</div>
	</div>

	<main>
		<div class="sidebar">categories: <br><br>
			<a href="">Horror</a> <a href="">Comedy</a> <a href="">Drama</a> <a href="">Thriller</a></div>
		<div class="main-content">
			<div class="films">
				<div class="postbox">
					<div class="postcover"><img src="src/fzhh70.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Bonnie and Clyde (1967)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="src/1.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Reservoir Dogs (1992)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="src/fzhh70.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Memento (2000)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="src/2.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">The Godfather (1972)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="src/3.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Citizen Kane (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="src/4.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Citizen Kane (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="src/7.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Citizen Kane (1941)</a></div>
				</div>
				<div class="postbox">
					<div class="postcover"><img src="src/8.jpg" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="post.php">Citizen Kane (1941)</a></div>
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