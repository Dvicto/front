<?php
	function auth($login, $passwd)
	{
		$array = [];
		
		
		if (!(file_exists("../ex01/private"))) {
			return (FALSE);
		}
		if (!($login) || !($passwd)) {
			return (FALSE);
		}
		if (!($array = unserialize(file_get_contents("../ex01/private/passwd")))) {
			return (FALSE);
		}
		foreach ($array as $value) {
			if ($value["login"] == $login) {
				if ($value["passwd"] == hash("whirlpool", $passwd)) {
					return (TRUE);
				} else {
					return (FALSE);
				}
			}
		}
		return (FALSE);
	}
	