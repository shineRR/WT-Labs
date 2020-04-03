	<?php
		function outputNoRepeatArray($array) {

			$norepeat = [];
			foreach ($array as $key => $value) {
				$value = ucwords($value);
				if (in_array($value, $norepeat) == false) {
					array_push($norepeat, $value);
				}
			}
			print_r($norepeat);
		}

		function stringToArrayOfCities($string) {
			$array = [];
			$chars = str_split($string);
			$alphas = array_merge(range('A', 'Z'), range('a', 'z'), range('а', 'я'), range('А', 'Я'));
			$str = "";
			foreach ($chars as $key => $a) {
				if (($a == ',') || ($key == strlen($string) - 1)) {
					$str .= (in_array($a, $alphas)) ? $a : "";
					if (strlen($str) > 0) {
						array_push($array, $str);
					} 
					$str = "";
				} else {
					$str .= (in_array($a, $alphas)) ? $a : "";
				}
			}
			return $array;
		}

		$string = !empty($_GET['cities']) ? $_GET['cities'] : '';
		$string = mb_strtolower($string);
		// $string = preg_replace("#\[(,[a-zA-Z\x{0430}-\x{044F}\x{0410}-\x{042F}])]#u", "", $string);
		$string = preg_replace("/[^a-zA-Z,]/", "", $string);
		$cities = stringToArrayOfCities($string);
		sort($cities);
	?>
