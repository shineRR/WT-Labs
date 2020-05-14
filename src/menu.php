<?php

$page = basename($_SERVER['PHP_SELF']);

$headerMenu = array('index.php' => 'Home', 'profile.php' => 'Profile', 'serials.php' => 'Serials', 'films.php' => 'Top Films',
	'extension.php' => 'Extension', 'loginLabPage.php' => 'Changeable Table', 'dbpage.php' => 'DB Lab');

foreach ($headerMenu as $key => $item) {
	echo $key == $page ? '<a id="php-button" href="#">' . '<span>' . $item . '</span>' . '</a>' : '<a href="/' . $key . '">' . '<span>' . $item . '</span>' . '</a>';
}
