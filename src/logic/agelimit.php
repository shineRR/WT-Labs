<?php

require 'databaselab.php';

$dbhandle = connToDB();
$limit = $_COOKIE['_limit'];
if ($limit == "yes") {
	$sql = "SELECT * FROM films WHERE age >= 0";
} else {
	$sql = "SELECT * FROM films WHERE age >= 0 && age < 18";
}
$result = mysqli_query($dbhandle, $sql);
if ($result) {
	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="postbox">
					<div class="postcover"><img src="../Assets/' . $row['img'] . '" alt="" width="214" height="304"></div>
					<div class="posttitle"><a href="">' . $row['film'] . '</a></div>
			</div>';
	}
	mysqli_free_result($result);
}
mysqli_close($dbhandle);

?>