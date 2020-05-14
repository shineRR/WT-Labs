<?php
function openFile() {
	$list = array();
	if (file_exists("list.csv")) {
		$handle = fopen("list.csv", "r") or die("gg");
		while (($data = fgetcsv($handle, 1000, ",")) !== false) {
			$num = count($data);
			$item = array();
			for ($c = 0; $c < $num; $c++) {
				array_push($item, $data[$c]);
			}
			array_push($list, $item);
		}
		fclose($handle);
	}
	return $list;
}

function writeFile($list) {
	$fp = fopen('list.csv', 'w');
	foreach ($list as $line) {
		fputcsv($fp, $line);
	}
	fclose($fp);
}

function outputList(&$list) {
	foreach ($list as $key => $value) {
		if (count($value) == 4) {
			echo '<li><a href="?id=' . $value[0] . '" style="color: white">' . $value[0] . '</a></li><br>';
		}
	}
}

function validateFieds($info, $list) {
	if (IDExists($info[0], $list)) {
		return 'ID Exists';
	}

	foreach ($info as $key => $item) {
		if (strlen((string) $item) == 0) {
			return 'All field lengths must be greater than 0';
		}
	}

	if ($info[2] == 0) {
		return 'Enter price';
	}
	return '';
}

function IDExists($ID, $list) {
	return (getElementIndex($list, $ID, 0) == -1) ? false : true;
}

function getElementIndex($list, $elementID, $index) {
	foreach ($list as $key => $value) {
		if ($value[$index] == $elementID) {
			return $key;
		}
	}
	return -1;
}

function showItem(&$list) {
	if (isset($_GET['id'])) {
		$elementID = $_GET['id'];
		$elementIndex = getElementIndex($list, $elementID, 0);
		if ($elementIndex != -1) {
			$element = $list[$elementIndex];
			if (count($element) == 4) {
				echo "ID: $elementID<br>";
				echo "Name: $element[1]<br>";
				echo "Description: $element[3]<br>";
				echo "Price: $element[2]<br>";
				echo "Price with 15% discount: " . round($element[2] * 0.85, 2);
			}
		} else {
			echo 'Choose one of items';
		}
	} else if (count($list) == 0) {
		echo 'No items found';
	} else {
		echo 'Choose one of items';
	}
}

$error = '';
$list = array();
$list = openFile();

if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price']) && isset($_GET['description'])) {
	$id = !empty($_GET['id']) ? $_GET['id'] : '';
	$id = preg_replace('/\D/', '', $id);
	$name = !empty($_GET['name']) ? $_GET['name'] : '';
	$price = !empty($_GET['price']) ? $_GET['price'] : '';
	$price = round($price, 2);
	$description = !empty($_GET['description']) ? $_GET['description'] : '';
	$info = array($id, $name, $price, $description);
	$error = validateFieds($info, $list);
	if (strlen($error) == 0) {
		array_push($list, $info);
		writeFile($list);
	}
}
