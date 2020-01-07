<?php

$id = $_POST['user_id'];
$pwd = $_POST['user_pwd'];
$pwd2 = $_POST['user_pwd2'];
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
                    <?php 
                        if (!empty($_POST['gender']))
                            echo $_POST['gender']; 
                        else
                            echo "선택 안 함";
                    ?>
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
                    <?php
                        if (empty($_POST['hobby']))
                            echo "취미 없음";
                        else {
                            for ($i = 0; $i < count($_POST['hobby']); $i++) {
                                echo $hobby[$i] . " ";
                            }
                        }
                    ?>
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
        </table>
    </div>
</body>
</html>