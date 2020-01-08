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

$type = $_POST['search_type'];
$word = $_POST['search_word'];

include('db_conn.php');

if ($type == "제목") {
    $sql = "SELECT id, user_id, title, content, reg_date, view_count FROM bbs WHERE title LIKE '%$word%'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        echo "글이 없습니다.";
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
} else if ($type == "작성자") {
    $sql = "SELECT id, user_id, title, content, reg_date, view_count FROM bbs WHERE user_id LIKE '%$word%'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        echo "글이 없습니다.";
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
} else if ($type == "내용") {
    $sql = "SELECT id, user_id, title, content, reg_date, view_count FROM bbs WHERE content LIKE '%$word%'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        echo "글이 없습니다.";
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
} else {
    $sql = "SELECT id, user_id, title, content, reg_date, view_count FROM bbs WHERE title LIKE '%$word%' OR user_id LIKE '%$word%' OR content LIKE '%$word%'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        echo "글이 없습니다.";
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
}

mysqli_close($conn);

?>

            <tr>
                <td colspan=5 class="mkCenter">
                    <input type="button" value="글쓰기" onclick="location.href='http://localhost/bbs/write.html'">
                    <input type="button" value="목록" onclick="location.href='http://localhost/bbs/list.php'">
                </td>
            </tr>
        </table>
    </div>
</body>
</html>