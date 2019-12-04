#!/usr/bin/php
<?PHP

function replace_title($match){
    $str = 'title="'.strtoupper($match[1]).'"';
    return $str;
}

function replace($match){
    $str = strtoupper($match[0]);
    return $str;
}

function replace_link($match){
    $str = preg_replace_callback('/>.*</siU', "replace", $match[0]);
    return $str;
}

if ($argc == 1)
    return ;
$content = file_get_contents($argv[1]);

$content = preg_replace_callback('/title="(.*?)"/', "replace_title", $content);

$content = preg_replace_callback('/<a [^>]+.*<\/a>/siU', "replace_link", $content);
print $content;
?>