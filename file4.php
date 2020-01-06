<?php

$file_name = 'data1.txt';

unlink($file_name);

if (!$file_name)
    echo "파일 삭제 완료했습니다.";

?>