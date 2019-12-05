#!/usr/bin/php
<?php
if ($argc != 2)
    return ;
$url = $argv[1];
$dir = basename($url);
mkdir("{$dir}", 0777, true);
if (!($fd = curl_init($url))){
    echo "Connection error";
    rmdir($dir);
    return ;
}

curl_setopt($fd, CURLOPT_RETURNTRANSFER, 1);
$str = curl_exec($fd);
curl_close($fd);
preg_match_all ("/<[iI][mM][gG].*?[Ss][Rr][Cc].*?=\"(.*?)\"/", $str, $matches);
$i = 0;
foreach($matches[1] as &$value) {
    if ($value[0] == "/")
        $array[$i] = $url . $value;
    else
    	$array[$i] = $value;
    $i++;
}
foreach ($array as $value)
{
    $img_name = basename($value);
    $path_name = $dir."/".$img_name;
    $filed = fopen($path_name, 'wb');
    $fd = curl_init($value);
    curl_setopt($fd, CURLOPT_FILE, $filed);
    curl_setopt($fd, CURLOPT_HEADER, 0);
    curl_exec($fd);
    curl_close($fd);
    fclose($filed);
}

?>