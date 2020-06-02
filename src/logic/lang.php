<?php

function langMenu() {
	echo '<form method="POST" action="' . $_SERVER['PHP_SELF'] . '">
			<h4>Choose language/Выберите язык:</h4>
			<select name="lang">
				<option value="en">English</option>
				<option value="ru">Русский</option>
			</select>
			<h4>Age/Возраст:</h4>
			  <select name="limit">
				<option value="yes">Yes/Да</option>
				<option value="no">No/Нет</option>
			</select>
			<input type="submit">
		</form>';
}

if (isset($_POST['lang'])) {
	$lang = $_POST['lang'];
	$limit = $_POST['limit'];
	setcookie("_lang", $_POST['lang']);
	setcookie("_limit", $_POST['limit']);
	header("refresh: 0; url = " . $_SERVER['REQUEST_URI']);
} elseif (isset($_COOKIE['_lang']) && isset($_COOKIE['_limit'])) {
	$lang = $_COOKIE['_lang'];
	$limit = $_COOKIE['_limit'];
}

if (isset($lang) && isset($limit)) {
	$langWords = parse_ini_file("./lang/" . $lang . ".ini");
} else {
	echo '<form class="lang" method="POST" action="' . $_SERVER['PHP_SELF'] . '">
			<h1>Choose language/Выберите язык:</h1>
			<select name="lang">
				<option value="en">English</option>
				<option value="ru">Русский</option>
			</select>
			<h4>Age/Возраст:</h4>
			  <select name="limit">
				<option value="yes">Yes/Да</option>
				<option value="no">No/Нет</option>
			</select>
			<input type="submit">
		</form>';
}