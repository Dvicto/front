#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$str = trim($str);
		$array=explode(" ", $str);
		$j = count($array);
		$new_str = " ";
		for ($i = 0; $i < $j; $i++){
			if (!($array[$i][0] == "" || $array[$i][0] == "\t" ||  $array[$i][0] == "\n"
				|| $array[$i][0] == "\r" || $array[$i][0] == " ")) {
				$new_str .= $array[$i];
				$new_str .= " ";
			}
		}
		$new_str = trim($new_str);
		$array = explode(" ", $new_str);
		return $array;
	}
	
	if ($argc < 2)
		return ;
	$array = ft_split($argv[1]);
	$i = 0;
	while ($array[$i])
		$i++;
	$i--;
	$tmp = $array[0];
	$i = 0;
	while ($array[$i]) {
		echo $array[$i];
		$i++;
		if ($array[$i])
			echo " ";
	}
	echo "\n";
?>