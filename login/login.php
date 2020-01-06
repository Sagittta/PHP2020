<?php

// id : test / pwd : 1234

// post 방식으로 넘어온 사용자 입력값을 받는 변수
$id = $_POST['user_id'];
$pwd = $_POST['user_pwd'];

if ($id == "test") {
    if ($pwd == "1234") {
        echo "로그인 완료 되었습니다.";
    } else {
        echo "비밀번호가 틀립니다.";
        echo("<meta http-equiv='refresh' content='2; url=http://localhost/login/login.html'>");
    }
} else {
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="./join.css"/>
    </head>
    <body>
        <form method="post" action="join.html">
            <div>
                <table width=300>
                    <tr>
                        <td>회원가입하러 가쟝</td>
                        <td><input type="submit" value="고고~"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td>다시 로그인하러 가쟝</td>
                        <td><input type="button" value="고고~" onclick="location.href='http://localhost/login/login.html'"></td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>

<?php
}

?>
