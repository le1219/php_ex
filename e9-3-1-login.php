<?php
$username = 'test';
$pwd = sha1('test');

//username and pwd 
if (isset($_POST['username']) && isset($_POST['pwd'])) {
    if ($_POST['username'] === $username && sha1($_POST['pwd']) === $pwd) {
        //
        header("refresh: 3;url = ./e9-3-2-admin.php");

        session_start();

        $_SESSION['username'] = $_POST['username'];
        echo "sucess";
    } else {
        header('Refresh:3 url = ./e9-3.php');

        echo "FAIL 3s";
    }
} else {
    header('Refresh:3 url = ./e9-3.php');
    echo "INCORRECT 3s";
}
