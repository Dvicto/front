<?php
	date_default_timezone_set('Europe/Moscow');
	$fd = fopen("/var/run/utmpx", "r");
	while ($str = fread($fd, 256))
	{
	
	}