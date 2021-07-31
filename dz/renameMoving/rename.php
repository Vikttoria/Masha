<?php
//rename('old.txt','index.txt');
//rename('index.txt','folder/index.txt');
rename('folder/index.txt','folder2/index.txt');
$d=file_get_contents('index.txt');
echo $d;
?>