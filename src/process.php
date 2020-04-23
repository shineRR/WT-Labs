<?php
// error_reporting(0);
function openFile()
{
    $list = array();
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
    return $list;
}

function writeFile($list)
{
    $fp = fopen('list.csv', 'w');
    foreach ($list as $line) {
        fputcsv($fp, $line);
    }
    fclose($fp);
}

function outputFile($list)
{
    foreach ($list as $key => $value) {
        echo '<a href="#">' . $value[0] . '</a><br>';
    }
}

function validateFieds($info)
{
    foreach ($info as $key => $item) {
        if (strlen((string) $item) == 0) {
            echo "net";
            return false;
        }
    }
    echo "da";
    return true;
}
function showItem(&$list): string
{
    if (isset($_GET['id'])) {
        $activeID = $_GET['id'];
        foreach ($list as $item) {
            if ($item['id'] == $activeID) {
                $itemArray = $item;
                $itemArray['priceSale'] = 'Цена со скидкой 15%: ' . round($item['price'] * 0.85, 2);
                $itemString = implode('<br>', $itemArray);
                return $itemString;
            }
        }
        if (empty($itemString)) {
            return 'Товар не найден!';
        }
    } else {
        return 'Выберите один из товаров';
    }
}

$id = !empty($_GET['id']) ? $_GET['id'] : '';
$name = !empty($_GET['name']) ? $_GET['name'] : '';
$price = !empty($_GET['price']) ? $_GET['price'] : '';
$description = !empty($_GET['description']) ? $_GET['description'] : '';
$info = array($id, $name, $price, $description);
$list = array();
print_r($info);
$list = openFile();
if (validateFieds($info)) {
    echo "string";
    array_push($list, $info);
    writeFile($list);
}

// print_r($list);
