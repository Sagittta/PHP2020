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
    <form method="post" action="delete.php?idx=<?=$re[0]?>">
        <div>
            <table width=600>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="passwd"></td>
                </tr>
                <tr>
                    <td colspan=2 class="mkCenter"><input type="submit" value="삭제하기" onclick="ckPwd(event)"></td>
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