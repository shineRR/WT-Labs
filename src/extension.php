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
			<div class="content-child">
				<span>
					<form action="extension.php" method="get">
						id: <input name="id" type="text" size="50"><br>
						name: <input name="name" type="text" size="50"><br>
						price: <input name="price" type="number" step="0.01"><br>
						description: <input name="description" type="text" size="50"><br>
						<input type="Submit"><br>
						<span class= "php-output">
							<?php outputFile(openFile());?>
							<br>
						</span>
					</form>
				</span>
				<div class="item-info">
					<?php showList($list)?>
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