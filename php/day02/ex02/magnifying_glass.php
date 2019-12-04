#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = file_get_contents($argv[1]);
		$titles = '#<a .+title(?<titles>=".+)".+/a>#';
		$inside = '#<a.*?(?<inside>>[\w\s]+<).*?/a>#';
		$result1 = preg_match_all($titles, $str, $match1);
		$result2 = preg_match_all($inside, $str, $match2);
		//$match = array($match1, $match2);
		$i = 0;
		while ($match1["titles"][$i])
		{
			$str = str_replace($match1["titles"][$i], strtoupper($match1["titles"][$i]), ($str));
			$i++;
		}
		$i = 0;
		while ($match2["inside"][$i])
		{
			$str = str_replace($match2["inside"][$i], strtoupper($match2["inside"][$i]), ($str));
			$i++;
		}
		echo $str.PHP_EOL;
	}
?>