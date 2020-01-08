<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>write</title>
    <link rel="stylesheet" type="text/css" href="./write.css"/>
</head>
<script>
    function move(id) {
        location.href='http://localhost/bbs/read.php';
    }
</script>
<body>
    <div>
        <table width=600>
            <tr>
                <td colspan=5 class="mkCenter"><h1> 응죠미 게시판 </h1></td>
            </tr>

<?php

include('db_conn.php');

$sql = "SELECT id, user_id, title, content, reg_date, view_count FROM bbs ORDER BY id DESC";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo "데이터가 없습니다.";
} else {
    echo "<tr>
        <td>" . "ID" . "</td>
        <td>" . "TITLE" . "</td>
        <td>" . "CONTENT" . "</td>
        <td>" . "DATE" . "</td>
        <td>" . "VIEW COUNT" . "</td>
        </tr>";
    for ($i = 0; $i < $num; $i++) {
        $re = mysqli_fetch_array($result);
        echo "<tr>
            <td>" . $re[1] . "</td>
            <td><a href='read.php? idx=$re[0]'>" . $re[2] . "</span></td>
            <td>" . $re[3] . "</td>
            <td>" . $re[4] . "</td>
            <td>" . $re[5] . "</td>
            </tr>";
    }
}

mysqli_close($conn);

?>
    
            <tr>
                <td colspan=5 class="mkCenter"><input type="button" value="글쓰기" onclick="location.href='http://localhost/bbs/write.html'"></td>
            </tr>
        </table>
    </div>
</body>
</html>