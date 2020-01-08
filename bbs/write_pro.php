<?php

include('db_conn.php');

$id = $_POST['user_id'];
$pwd = $_POST['passwd'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO bbs(
    user_id, passwd, title, content, reg_date) VALUES(
        '$id', '$pwd', '$title', '$content', now())";
mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>write</title>
    <link rel="stylesheet" type="text/css" href="./write.css"/>
</head>
<body>
    <script>
        alert("등록되었습니다.");
    </script>
    <meta http-equiv='refresh' content='0; url=list.php'>
</body>
</html>