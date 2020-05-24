<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stylePHP.css">
	<?php include "logic/lang.php"?>
	<title><?php echo $langWords["EXTENSION"] ?></title>
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
			<div class="content-child">
				<?php include "logic/processLogin.php"?>
				<span>
					<form action="loginLabPage.php" method="get">
						<?php echo $langWords["EMAIL"] ?>: <input name="email" type="text" placeholder="<?php echo $langWords["EMAIL"] ?>" size="50"><br>
						<?php echo $langWords["PASSWORD"] ?>: <input name="password" type="text" placeholder="<?php echo $langWords["PASSWORD"] ?>" size="50"><br>
						<input type="Submit"><br>
						<span style="color: red"><?=$error?></span>
					</form>
				</span>
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