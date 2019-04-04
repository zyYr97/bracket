<?
$str = $argv[1];
if (substr_count($str, '(') == substr_count($str, ')')) {
	$length = strlen($str);
	for ($i = 0; $i < $length; $i++) {
		if($str[$i] == '('){
			$open_bracket = 1;
		}
		if($str[$i] == ')' and !$open_bracket) {
			$error = 1;
		}
	}
	if($error) {
		echo 'не верно';
	} else {
		echo 'верно';
	}
} else {
	echo 'не верно';
}
?>