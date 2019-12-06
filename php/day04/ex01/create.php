<?php
if (!(file_exists("./private")))
    mkdir("./private", 0777);
if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK')){
    echo "Error\n";
    exit();
}