<?php
require 'logic/changeStyle.php';

setStyles();

$page = basename($_SERVER['PHP_SELF']);

$headerMenu = array('index.php' => $langWords['HOME'], 'profile.php' => $langWords['PROFILE'], 'serials.php' => $langWords['SERIALS'], 'films.php' => $langWords['TOP_FILMS'], 'dbpage.php' => 'DB Lab', 'pagestyles.php' => $langWords['SET_STYLES']);

foreach ($headerMenu as $key => $item) {
	echo $key == $page ? '<a id="php-button" href="#">' . '<span>' . $item . '</span>' . '</a>' : '<a href="/' . $key . '">' . '<span>' . $item . '</span>' . '</a>';
}
