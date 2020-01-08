<?php

$idx = $_GET['idx'];
$pwd1 = $_POST['passwd'];
$title = $_POST['title'];
$content = $_POST['content'];

include('db_conn.php');

$sql = "SELECT passwd FROM bbs WHERE id = $idx";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo "값이 없습니다.";
} else {
    for ($i = 0; $i < $num; $i++) {
        $re = mysqli_fetch_array($result);
        $passwd = $re[0];

        if ($pwd1 === $passwd) {
            $sql2 = "UPDATE bbs SET title='$title', content='$content' WHERE id = $idx";
            mysqli_query($conn, $sql2);

            echo "<script>alert('수정되었습니다.');</script>";
            echo "<meta http-equiv='refresh' content='0; url=list.php'>";
        } else {
            echo "<script>alert('비밀번호가 틀립니다.');</script>";
            echo "<meta http-equiv='refresh' content='0; url=update_form.php?idx=$idx'>";
        }
    }
}

mysqli_close($conn);

?>