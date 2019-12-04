#!/usr/bin/php
<?php
	if ($argc < 2)
		return ;
	if ($argc != 2) {
		echo "Wrong Format\n";
		return ;
	}
	date_default_timezone_set('Europe/Paris');
	$array = explode(" ", $argv[1]);
	if (count($array) != 5) {
		echo "Wrong Format\n";
		return ;
	}
	$array[0] = strtolower($array[0]);
	if ($array[0] != "lundi" && $array[0] != "mardi" && $array[0] != "mercredi" && $array[0] != "jeudi" &&
		 $array[0] != "vendredi" && $array[0] != "samedi" && $array[0] != "dimanche") {
		echo "Wrong Format\n";
		return ;
	}
	$str .= $array[1];
	$array[2] = strtolower($array[2]);
	if ($array[2] == "janvier")
		$str .= " January";
	else if ($array[2] == "fevrier")
		$str .= " February";
	else if ($array[2] == "mars")
		$str .= " March";
	else if ($array[2] == "avril")
		$str .= " April";
	else if ($array[2] == "mai")
		$str .= " May";
	else if ($array[2] == "juin")
		$str .= " June";
	else if ($array[2] == "juillet")
		$str .= " July";
	else if ($array[2] == "aout")
		$str .= " August";
	else if ($array[2] == "septembre")
		$str .= " September";
	else if ($array[2] == "octobre")
		$str .= " October";
	else if ($array[2] == "novembre")
		$str .= " November";
	else if ($array[2] == "decembre")
		$str .= " December";
	else
		$str .= " qweerryerdrgdrgdgsr";
	$str .= " $array[3]";
	$str .= " $array[4]";
	$time = strtotime($str);
	if (!($time))
		echo "Wrong Format\n";
	else
		echo "$time\n";
	?>