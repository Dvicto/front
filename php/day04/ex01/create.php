<?php
	$array = [];
	
	
	if (!(file_exists("./private"))) {
		mkdir("./private", 0777);
		file_put_contents("private/passwd", "");
	}
	if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK')) {
		exit("Error\n");
	}
	if (!($array = unserialize(file_get_contents("private/passwd")))){
		$array[] = [
			"login" => $_POST['login'],
			"passwd" => hash("whirlpool", $_POST['passwod'])
		];
		file_put_contents("private/passwd", serialize($array));
		echo "OK\n";
		exit();
	}
	foreach ($array as $value)
	{
		if ($value["login"] == $_POST["login"]) {
			echo "ERROR\n";
			exit ();
		}
	}
	$array[] = [
		"login" => $_POST['login'],
		"passwd" => hash("whirlpool", $_POST['passwod'])
	];
	file_put_contents("private/passwd", serialize($array));
	echo "OK\n";