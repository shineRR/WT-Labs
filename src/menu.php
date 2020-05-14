<?php
require 'logic/changeStyle.php';

setStyles();

$page = basename($_SERVER['PHP_SELF']);
$headerMenu = array('index.php' => 'Home', 'profile.php' => 'Profile', 'serials.php' => 'Serials', 'films.php' => 'Top Films',
	'loginLabPage.php' => 'Log In', 'dbpage.php' => 'DB Lab', 'feedback.php' => 'Feedback', 'pagestyles.php' => 'Set styles');

foreach ($headerMenu as $key => $item) {
	echo $key == $page ? '<a id="php-button" href="#">' . '<span>' . $item . '</span>' . '</a>' : '<a href="/' . $key . '">' . '<span>' . $item . '</span>' . '</a>';
}
