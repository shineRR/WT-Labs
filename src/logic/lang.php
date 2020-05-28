<?php

function langMenu() {
	echo '<form method="POST" action="' . $_SERVER['PHP_SELF'] . '">
			<h4>Choose language/Выберите язык:</h4>
			<select name="lang">
				<option value="en">English</option>
				<option value="ru">Русский</option>
			</select>
			<input type="submit">
		</form>';
}

if (isset($_POST['lang'])) {
	$lang = $_POST['lang'];
	setcookie("_lang", $_POST['lang']);
} elseif (isset($_COOKIE['_lang'])) {
	$lang = $_COOKIE['_lang'];
}

if (isset($lang)) {
	$langWords = parse_ini_file("./lang/" . $lang . ".ini");
} else {
	echo '<form class="lang" method="POST" action="' . $_SERVER['PHP_SELF'] . '">
			<h1>Choose language/Выберите язык:</h1>
			<select name="lang">
				<option value="en">English</option>
				<option value="ru">Русский</option>
			</select>
			<input type="submit">
		</form>';
}