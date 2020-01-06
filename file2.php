<?php

$file_name = './data.txt';

// 1. fgetc() 로 파일 읽어오기
$fp = fopen($file_name, 'r');
while ($char = fgetc($fp)) {
    echo $char . "<br>";
}
fclose($fp);

echo "<br>" . "---" . "<br>";

// 2. fgets() 로 파일 읽어오기
$fp = fopen($file_name, 'r');
while ($string = fgets($fp)) {
    echo $string . "<br>";
}
fclose($fp);

echo "<br>" . "---" . "<br>";

// 3. fread() 로 파일 읽어오기
$fp = fopen($file_name, 'r');
$contents = fread($fp, filesize($file_name));
echo $contents;
fclose($fp);

echo "<br>" . "---" . "<br>";

// 4. file_get_contents
echo file_get_contents($file_name);

?>