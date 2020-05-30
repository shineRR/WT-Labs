 <?php

function connToDB() {
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$DBName = "customdb";
	$dbhandle = mysqli_connect($hostname, $username, $password, $DBName) or die("Unable to connect to MySQL");
	mysqli_set_charset($dbhandle, 'UTF8');
	return $dbhandle;
}

function getInfoDB() {
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$DBName = "customdb";
	$dbhandle = mysqli_connect($hostname, $username, $password, $DBName) or die("Unable to connect to MySQL");
	mysqli_set_charset($dbhandle, 'UTF8');
	$sql = "SELECT * FROM users";
	$result = mysqli_query($dbhandle, $sql);
	if ($result) {
		echo "<table border='1'>";
		while ($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>' . 'ID: ' . $row['id'] . ' </td>';
			echo '<td>' . 'Email: ' . $row['email'] . ' </td>';
			echo '<td>' . 'Password: ' . $row['password'] . ' </td>';
			echo '<br>';
			echo '</tr>';
		}
		echo "</table>";
		mysqli_free_result($result);
	}
	$sql = "SELECT * FROM films";
	$result = mysqli_query($dbhandle, $sql);
	if ($result) {
		echo "<table border='1'>";
		while ($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>' . 'ID: ' . $row['id'] . ' </td>';
			echo '<td>' . 'film: ' . $row['film'] . ' </td>';
			echo '<td>' . 'about Film: ' . $row['about'] . ' </td>';
			echo '<td>' . 'age-limit: ' . $row['age'] . ' </td>';
			echo '<br>';
			echo '</tr>';
		}
		echo "</table>";
		mysqli_free_result($result);
	}
	mysqli_close($dbhandle);
}