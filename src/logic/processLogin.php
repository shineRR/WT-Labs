	<?php

function writeFile($user) {
	$fp = fopen('users.csv', 'a');
	fputcsv($fp, $user);
	fclose($fp);
}

function valid_email($email) {
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? false : true;
}

function emailExists($email) {
	if (file_exists('users.csv')) {
		$handle = fopen('users.csv', 'r') or die("gg");
		while (($data = fgetcsv($handle, 1000, ",")) !== false) {
			$num = count($data);
			if (($num > 0) && ($data[0] == $email)) {
				fclose($handle);
				return true;
			}
		}
		fclose($handle);
	}
	return false;
}

function validateFieldsLength($email, $password) {
	return (strlen($email) > 0 && strlen($password) > 0) ? true : false;
}

function addEmailToDB($email, $pass) {
	$flag = false;
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$DBName = "customdb";
	$dbhandle = mysqli_connect($hostname, $username, $password, $DBName) or die("Unable to connect to MySQL");

	$sql = "SELECT * FROM users";
	$result = mysqli_query($dbhandle, $sql);
	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			if ($row['email'] == $email) {
				$flag = true;
			}
		}
		mysqli_free_result($result);
	}
	if ($flag == false) {
		$sql = "INSERT INTO users
                VALUES ('', '$email', '$pass')";
		mysqli_set_charset($dbhandle, 'UTF8');
		if (mysqli_query($dbhandle, $sql)) {
			echo "Records added successfully.";
		} else {
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbhandle);
		}
	} else {
		echo "Email already exists in DB";
	}
	mysqli_close($dbhandle);
}

$error = '';

if (isset($_GET['email']) && isset($_GET['password'])) {
	$email = $_GET['email'];
	$password = $_GET['password'];
	if (validateFieldsLength($email, $password)) {
		if (!valid_email($email)) {
			$error = "Invalid email address.";
		} else {
			if (!emailExists($email)) {
				$user = array($email, $password);
				// writeFile($user);
				// echo $password;
				addEmailToDB($email, $password);
				$error = 'Valid email address.';
			} else {
				$error = 'Email already exists.';
			}
		}
	} else {
		$error = 'All field lengths must be greater than 0.';
	}
}
