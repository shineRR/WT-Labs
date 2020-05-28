<?php
function setStyles() {
	echo '<style> body {';
	echo 'background: ' . $_COOKIE["_background"] . ';';
	echo 'color: ' . $_COOKIE["_fontcolor"] . ';';
	echo 'font-size: ' . $_COOKIE["_fontsize"] . 'px;';
	echo '> </style>';
}

function colorChoices() {
	echo '<option value="blue">Blue</option>
			<option value="green">Green</option>
			<option value="black">Black</option>
			<option value="white">White</option>';
}

function getCookies() {
	$background = isset($_COOKIE["_background"]) ? $_COOKIE["_background"] : "";
	$fonts = isset($_COOKIE["_fontcolor"]) ? $_COOKIE["_fontcolor"] : "";
	$fontsize = isset($_COOKIE["_fontsize"]) ? $_COOKIE["_fontsize"] : "";
}

$error = '';

if (isset($_GET['background']) && isset($_GET['fontcolor'])) {
	if (strlen($_GET['fontsize']) > 0) {
		$cookie_duration = time() + 3600; // 1 hour
		setcookie("_background", $_GET['background'], $cookie_duration);
		setcookie("_fontcolor", $_GET['fontcolor'], $cookie_duration);
		setcookie("_fontsize", $_GET['fontsize'], $cookie_duration);
		$error = '';
		header("refresh: 0; url = http://localhost/pagestyles.php");
	} else {
		$error = 'All field lengths must be greater than 0.';
	}

}