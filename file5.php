<?php

$file_name = './newfile.txt';
$fp = fopen($file_name, 'w');
fwrite($fp, 'Johe Doe');
fwrite($fp, 'Jane Doe');
fclose($fp);

?>