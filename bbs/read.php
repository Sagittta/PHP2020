<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>write</title>
    <link rel="stylesheet" type="text/css" href="./write.css"/>
</head>
<body>
    <div>
        <table width=600>
<?php

include('db_conn.php');

$idx = $_GET['idx'];

$sql = "SELECT user_id, passwd, title, content, view_count, reg_date FROM bbs WHERE id=$idx";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num == 0) {
    echo "값이 없습니다.";
} else {
    for ($i = 0; $i < $num; $i++) {
        $re = mysqli_fetch_array($result);
    

?>

            <tr>
                <td class="mkCenter" colspan=3><?php echo $re[2] ?></td>
            </tr>
            <tr>
                <td>글쓴이 <?php echo $re[0] ?></td>
                <td>날짜 <?php echo $re[5] ?></td>
                <td>조회수 <?php echo $re[4]+1 ?></td>
            </tr>
            <tr>
                <td colspan=3><?php echo $re[3] ?></td>
            </tr>
            <tr>
                <td colspan=3 class="mkRight"><?php echo $_SERVER['REMOTE_ADDR'] ?></td>
            </tr>

<?php

$view_count = $re[4] + 1;
$sql2 = "UPDATE bbs SET view_count=$view_count WHERE id = $idx";
mysqli_query($conn, $sql2);

mysqli_close($conn);

?>

            <tr>
                <td colspan=3 class="mkRight">
                    <a href=update_form.php?idx=<?=$idx?>>수정</a>&nbsp;&nbsp;&nbsp;
                    <a href=delete_form.php?idx=<?=$idx?>>삭제</a>&nbsp;&nbsp;&nbsp;
                    <a href=list.php>목록</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php
    }
}


?>