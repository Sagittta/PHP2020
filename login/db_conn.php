<?php

$host = 'localhost';
$user = 'test';
$pwd = '1111';
$dbName = 'testdb';
$conn = mysqli_connect($host, $user, $pwd, $dbName);
if (!$conn)
    echo "연결 실패하였습니다.";

?>