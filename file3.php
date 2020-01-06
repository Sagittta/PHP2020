<?php

// data.txt 파일을 data1.txt 파일로 복사
$file_name = './data.txt';
$new_file_name = './data1.txt';

if (!copy ($file_name, $new_file_name))
    echo "복사 실패했습니다.";
else
    echo "복사 성공했습니다.";

?>