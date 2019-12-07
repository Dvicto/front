<?php
	$array = [];
	
	
	if (!(file_exists("../ex01/private"))) {
		exit("ERROR\n");
	}
	if (!($_POST['newpasswd']) || !($_POST['login']) || !($_POST['submit'] == 'OK') || !($_POST['oldpasswd'])) {
		exit("Error\n");
	}
	if (!($array = unserialize(file_get_contents("../ex01/private/passwd")))){
		exit("ERROR\n");
	}
	foreach ($array as &$value)
	{
		if ($value["login"] == $_POST["login"]) {
			if ($value["passwd"] == hash("whirlpool",$_POST["oldpasswd"])) {
				$value["passwd"] = hash("whirlpool",$_POST["newpasswd"]);
				file_put_contents("../ex01/private/passwd", serialize($array));
				exit("OK\n");
			} else {
				echo "ERROR\n";
				exit ();
			}
		}
	}
	exit("ERROR\n");
