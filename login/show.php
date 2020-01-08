<?php

$host = 'localhost';
$user = 'test';
$pwd = '1111';
$dbName = 'testdb';
$conn = mysqli_connect($host, $user, $pwd, $dbName);
if (!$conn)
    echo "연결 실패하였습니다.";

$sql = "SELECT id, user_id, passwd, gender, hp, email, hobby, cause, addr FROM join1";
$result = mysqli_query($conn, $sql);

if ($result === false)
    echo mysqli_error($conn);

$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="./show.css"/>
</head>
<body>
    <div>
        <h1 class="mkCenter"> 회원 목록 </h1>
        <table width=800 class="mkCenter">
            <tr>
                <td width=50>번호</td>
                <td width=50>아이디</td>
                <td width=80>패스워드</td>
                <td width=50>성별</td>
                <td width=150>휴대전화</td>
                <td width=100>이메일</td>
                <td width=50>취미</td>
                <td width=100>알게 된 계기</td>
                <td width=170>주소</td>
            </tr>
            <?php
                for ($i = 0; $i < $num; $i++) {
                    echo "<tr>";
                    $re = mysqli_fetch_array($result);
                    echo "<td>" . $re[0] . "</td>";
                    echo "<td>" . $re[1] . "</td>";
                    echo "<td>" . $re[2] . "</td>";
                    echo "<td>" . $re[3] . "</td>";
                    echo "<td>" . $re[4] . "</td>";
                    echo "<td>" . $re[5] . "</td>";
                    echo "<td>" . $re[6] . "</td>";
                    echo "<td>" . $re[7] . "</td>";
                    echo "<td>" . $re[8] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
                
            ?>
        </table>
    </div>
</body>
</html>