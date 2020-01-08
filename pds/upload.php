<?php

// 우리가 등록하는 파일의 이름이 들어감
$user_file = $_FILES['user_file']['name'];

// 파일 저장할 경로
$upload_dir = '../pds/files/';
// 원래 이름으로 저장 (basename())
$upload_file = $upload_dir.basename($_FILES['user_file']['name']);

// 원하는 위치로 이동
if (move_uploaded_file($_FILES['user_file']['tmp_name'], $upload_file));
echo "등록되었습니다.";

?>