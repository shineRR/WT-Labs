<?php
require 'databaselab.php';
require 'processLogin.php';

function getRightFunc($index) {
	switch ($index) {
	case '0':
		addMenu();
		break;
	case '1':
		editMenu();
		break;
	case '2':
		deleteMenu();
		break;
	case '3':
		getFilmsTable();
		break;
	}
}

function filmExists($id, $film) {
	$dbhandle = connToDB();
	$sql = "SELECT * FROM films";
	$result = mysqli_query($dbhandle, $sql);
	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			if ($row['film'] == $film || $row['id'] == $id) {
				mysqli_free_result($result);
				mysqli_close($dbhandle);
				return $row;
			}
		}
		mysqli_free_result($result);
	}
	mysqli_close($dbhandle);
	return null;
}

function addRecord($film, $about, $limit) {
	$dbhandle = connToDB();
	$sql = "INSERT INTO films
                VALUES ('', '$film', '$about', '$limit')";
	mysqli_set_charset($dbhandle, 'UTF8');
	if (mysqli_query($dbhandle, $sql)) {
		$error = "Records added successfully.";
	} else {
		$error = "ERROR: Could not able to execute $sql. " . mysqli_error($dbhandle);
	}

	mysqli_close($dbhandle);
}

function editRecord($id, $toEdit) {
	$dbhandle = connToDB();
	$sql = "UPDATE films $toEdit WHERE id=$id";
	if (mysqli_query($dbhandle, $sql)) {
		$error = "Record updated successfully";
	} else {
		$error = "Error updating record: " . mysqli_error($dbhandle);
	}
	mysqli_close($dbhandle);
}

function deleteRecord($toDelete) {
	$dbhandle = connToDB();
	$sql = "DELETE FROM films WHERE $toDelete";

	if (mysqli_query($dbhandle, $sql)) {
		$error = "Record deleted successfully";
	} else {
		$error = "Error deleting record: " . mysqli_error($dbhandle);
	}
	mysqli_close($dbhandle);
}

function editMenu() {
	echo 'Edit field(enter id of element to change and fill fields that you want to edit):<br><form action="" method="get">';
	echo 'Id to edit: <input name="id" type="number" placeholder="Id" size="50"><br>
		Film: <input name="film" type="text" placeholder="Film" size="50"><br>
		About Film: <input name="about-film" type="text" placeholder="Description" size="50"><br>
		Age limit: <input name="age" type="number" placeholder="Age limit" min="0" size="50"><br>
		<input name="submit-edit" type="Submit"><br></form>';
}

function deleteMenu() {
	echo 'Delete by field:
		<form action="" method="get">
			<select name="field">
				<option value="id">ID</option>
				<option value="film">Film</option>
				<option value="age">Age limit</option>
			</select>
		<input name="value" type="text" placeholder="Enter value" size="50"><br>
		<input name="submit" type="Submit"><br></form>';
}

function addMenu() {
	echo 'Add new film:<br><form action="" method="get">';
	echo 'Film: <input name="film" type="text" placeholder="Film" size="50"><br>
		About Film: <input name="about-film" type="text" placeholder="Description" size="50"><br>
		Age limit: <input name="age" type="number" placeholder="Age limit" min="0" size="50"><br>
		<input name="submit" type="Submit"><br></form>';
}

$ind = 3;
$error = '';

if (isset($_GET['submit-act'])) {
	switch ($_GET['act']) {
	case 'New':
		$ind = 0;
		break;
	case 'Edit':
		$ind = 1;
		break;
	case 'Delete':
		$ind = 2;
		break;
	case 'Show';
		$ind = 3;
		break;
	}
}

if (isset($_GET['submit'])) {
	if (isset($_GET['film']) && isset($_GET['about-film']) && isset($_GET['age'])) {
		$film = trim($_GET['film']);
		$about = trim($_GET['about-film']);
		$age = trim($_GET['age']);
		if (filmExists('-1', $film) != null) {
			$error = "Film already exists in DB";
		} else {
			if (validateFieldsLength($film, $about)) {
				addRecord($film, $about, $age);
			}
		}
	} elseif (isset($_GET['field']) && strlen($_GET['value']) > 0) {
		$toDelete = $_GET['field'] . "='" . $_GET['value'] . "'";
		deleteRecord($toDelete);
	} else {
		$error = 'All field lengths must be greater than 0.';
	}
}

if (isset($_GET['submit-edit'])) {
	if (isset($_GET['film']) && isset($_GET['about-film']) && isset($_GET['age']) && isset($_GET['id'])) {
		if (strlen($_GET['id']) > 0) {
			$element = filmExists($_GET['id'], "");
			$film = trim($_GET['film']);
			$about = trim($_GET['about-film']);
			$age = trim($_GET['age']);
			$newFilm = filmExists("-1", $film);
			if ($element != null && $newFilm == null) {
				$toEdit = 'SET';
				$toEdit .= strlen($film) > 0 ? " film='$film'" : " film='" . $element["film"] . "'";
				$toEdit .= strlen($about) > 0 ? ", about='$about'" : ", about='" . $element["about"] . "'";
				$toEdit .= strlen($age) > 0 ? ", age=$age" : ", age=" . $element["age"];
				editRecord($_GET['id'], $toEdit);
			}
		} else {
			$error = 'Enter id of existing element.';
		}
	}
}