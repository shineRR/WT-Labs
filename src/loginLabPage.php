<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<title>Watch Films! - Extension</title>
	<?php include "logic/DBLabTable.php"?>
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
				<span>
					<form action="" method="get">
						<select name="act">
							<option value="New">New</option>
							<option value="Edit">Edit</option>
							<option value="Delete">Delete</option>
							<option value="Show">Show Table</option>
						</select>
						<input name="submit-act" type="Submit"><br>
					</form>
				</span>
				<?php getRightFunc($ind)?>
				<span style="color: red"><?=$error?></span>
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