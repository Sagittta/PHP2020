<?php

include('db_conn.php');

$idx = $_GET['idx'];
$sql = "SELECT * FROM bbs WHERE id = $idx";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo "값이 없음";
} else {
    $re = mysqli_fetch_array($result);
    $pwd = $re[2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>write</title>
    <link rel="stylesheet" type="text/css" href="./write.css"/>
</head>
<body>
    <form method="post" action="update.php?idx=<?=$re[0]?>">
        <div>
            <table width=600>
                <tr>
                    <td class="mkCenter" colspan=2><h1>응죠미 게시판 글 쓰기</h1></td>
                </tr>
                <tr>
                    <td>ID : </td>
                    <td><input type="text" name="user_id" value=<?=$re[1]?> readonly></td>
                </tr>
                <tr>
                    <td>title : </td>
                    <td><input type="text" name="title" value=<?=$re[3]?>></td>
                </tr>
                <tr>
                    <td>Content: </td>
                    <td>
                        <textarea name="content" rows=20 cols=50><?=$re[4]?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="passwd"></td>
                </tr>
                <tr>
                    <td colspan=2 class="mkCenter"><input type="submit" value="수정하기" onclick="ckPwd(event)"></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>

<?php

}
mysqli_close($conn);

?>