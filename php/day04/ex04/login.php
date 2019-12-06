<?php
//	session_start();
//	if ($_SESSION["login"])
//		header("Location: chat.php");
//	if (!(file_exists("private")))
//	{
//		mkdir("private", 0777);
//		file_put_contents("private/passwd", "");
//	}
//
//		$str = unserialize(file_get_contents("private/passwd"))
//	if ($_POST["login"] )
$arr = [];
$arr = (unserialize(serialize([3443,4343,4343])));

foreach ($arr as $value)
{
	if ($value == $_POST["login"])
	
}
