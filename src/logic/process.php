<?php
function strSplitUnicode($str, $l = 0)
{
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}

function outputNoRepeatArray($array)
{
    $norepeat = [];
    foreach ($array as $key => $value) {
        $value = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
        if (in_array($value, $norepeat) == false) {
            array_push($norepeat, $value);
        }
    }
    print_r($norepeat);
}

function stringToArrayOfCities($string)
{
    $array = [];
    $chars = strSplitUnicode($string);
    $alphas = array_merge(range('A', 'Z'), range('a', 'z'));
    $letters = array("а", "б", "в", "г", "д", 'е', "ё", "ж", "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ы", "ь", "э", "ю", "я");
    $str = "";
    foreach ($chars as $key => $a) {
        if (($a == ',') || ($key == count($chars) - 1)) {
            $str .= (in_array($a, $alphas) || in_array($a, $letters)) ? $a : "";
            if (strlen($str) > 0) {
                array_push($array, $str);
            }
            $str = "";
        } else {
            $str .= (in_array($a, $alphas) || in_array($a, $letters)) ? $a : "";
        }
    }
    return $array;
}

$string = !empty($_GET['cities']) ? $_GET['cities'] : '';
$string = mb_strtolower($string);
$string = preg_replace("#\[(,[a-zA-Z\x{0430}-\x{044F}\x{0410}-\x{042F}])]#u", "", $string);
$cities = stringToArrayOfCities($string);
sort($cities);