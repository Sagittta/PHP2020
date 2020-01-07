<?php

$host = 'localhost';
$user = 'test';
$pwd = '1111';
$dbName = 'testdb';
$conn = mysqli_connect($host, $user, $pwd, $dbName);
if (!$conn)
    echo "연결 실패하였습니다.";

// post 방식으로 넘어온 사용자 입력값을 받는 변수
$user_id = $_POST['user_id'];
$passwd = $_POST['user_passwd'];

$sql = "SELECT * FROM login order by id desc";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="./join.css"/>
</head>
<body>
    <div>
        <h1 class="mkCenter"> 로그인 목록 </h1>
        <table width=600 class="mkCenter">
            <tr>
                <td>번호</td>
                <td>아이디</td>
                <td>패스워드</td>
            </tr>
            <?php
                for ($i = 0; $i < $num; $i++) {
                    echo "<tr>";
                    $re = mysqli_fetch_array($result);
                    echo "<td>" . $re[0] . "</td>";
                    echo "<td>" . $re[1] . "</td>";
                    echo "<td>" . $re[2] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
                
            ?>
        </table>
    </div>
</body>
</html>