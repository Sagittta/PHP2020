<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="./join.css"/>
    </head>
    <body>
        <form method="post" action="join.html">
            <div>
                <table width=300 class="mkCenter">

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

$sql = "SELECT user_id, passwd FROM login WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 0) {
?>
    <tr><td>아이디가 없습니다.</td></tr>
    <tr><td><input type="submit" value="회원가입"></td></tr>
<?php
} else {
    for ($i = 0; $i < $num; $i++) {
        $re = mysqli_fetch_array($result);
        $pwd = $re[1];
        if ($pwd == $passwd) {
?>
            <tr><td>로그인 완료되었습니다.</td></tr>
<?php
        } else {
?>
            <tr><td>패스워드 오류입니다.</td></tr>
            <tr>
                <td>
                    <input type="button" value="로그인" onclick="location.href='http://localhost/login/login.html'">
                </td>
            </tr>
<?php
        }
    }
}
mysqli_close($conn);
?>
                </table>
            </div>
        </form>
    </body>
</html>