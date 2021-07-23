<?php
//session start
session_start();

if (!isset($_SESSION['username'])) {
    session_destroy();

    header("refresh:3:url=./9-3.php");
    echo "LOGIN AGAIN";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    這裡是後端管理頁面 - <a href="./9-3-3-logout.php">登出</a>
    <hr>
    <img src="https://www.dora- world.com.tw/upload/2020_02_12_1744480.jpg">
</body>

</html>