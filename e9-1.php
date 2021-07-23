<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./e9-1-1.php">建立cookie</a>
    <a href="./e9-1-2.php">刪除cookie</a>
    <hr>
    <?php
    if (!isset($_COOKIE['username'])) {
        echo "COOKIE [username]未設定";
    } else {
        echo "COOKIE [username] is {$_COOKIE['username']}";
    }
    ?>
</body>

</html>