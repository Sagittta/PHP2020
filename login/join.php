<?php

$id = $_POST['user_id'];
$pwd = $_POST['user_passwd'];
$pwd2 = $_POST['user_passwd2'];
$name = $_POST['user_name'];
$t_phone = $_POST['telephone'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$cause = $_POST['cause'];
$postal = $_POST['postal'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$add3 = $_POST['add3'];
$add4 = $_POST['add4'];
$addr = $postal . " / " . $add1 . " / " . $add2 . " / " . $add4 . " / " . $add3;
if (!empty($_POST['gender']))
    $gender = $_POST['gender']; 
else
    $gender = "선택 안 함";

$hobby = "";
if (empty($_POST['hobby'])) {
    $hobby = "취미 없음";
} else {
    $hobby1 = $_POST['hobby'];
    for ($i = 0; $i < count($hobby1); $i++) {
        $hobby = $hobby . $hobby1[$i] . ", ";
    }
}

$host = 'localhost';
$user = 'test';
$pwd = '1111';
$dbName = 'testdb';
$conn = mysqli_connect($host, $user, $pwd, $dbName);
if (!$conn)
    echo "연결 실패하였습니다.";

$sql = "INSERT INTO join1(user_id, passwd, name, gender, hp, email, addr, hobby, cause) VALUES('$id', '$pwd', '$name', '$gender', '$phone', '$email', '$addr', '$hobby', '$cause')";
$result = mysqli_query($conn, $sql);
if ($result === false)
    echo mysqli_error($conn);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>join check</title>
    <link rel="stylesheet" type="text/css" href="./join.css"/>
</head>
<body>
    <div>
        <table width=800>
            <tr>
                <td colspan=2 class="mkCenter"><h2>회원가입</h2></td>
            </tr>
            <tr>
                <td width=200>아이디</td>
                <td><?php echo $id ?></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><?php echo $pwd ?></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td>성별</td>
                <td>
                    <?php echo $gender ?>
                </td>
            </tr>
            <tr>
                <td>집 전화</td>
                <td><?php echo $t_phone ?></td>
            </tr>
            <tr>
                <td>휴대전화</td>
                <td><?php echo $phone ?></td>
            </tr>
            <tr>
                <td>이메일</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>취미</td>
                <td>
                    <?php echo $hobby ?>
                </td>
            </tr>
            <tr>
                <td>알게 된 계기</td>
                <td><?php echo $cause ?></td>
            </tr>
            <tr>
                <td>주소</td>
                <td>
                    <?php echo $postal . "<br>" . $add1 . "<br>" . $add2 . "<br>" . $add3 . $add4; ?>
                </td>
            </tr>
            <tr>
                <td colspan=2 class="mkCenter">
                    <input type="button" value="테이블 보기" onclick="location.href='http://localhost/login/show.php'">
                </td>
            </tr>
        </table>
    </div>
</body>
</html>