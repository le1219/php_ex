<?php
session_start();
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
    <?php
    // save to session
    $_SESSION['myName'] = "CHARLEY! ";
    //get session
    $myName = $_SESSION['myName'];

    echo "MY NAME：" . $_SESSION['myName'] . "from session<br>";
    echo "MY NAME:" . $myName . "[from var]<br>";
    $_SESSION['student']['name'] = "ELAINE";
    $_SESSION['student']['age'] = 3;
    $_SESSION['student']['height'] = 83;
    $_SESSION['student']['weight'] = 13;

    echo "NAME " . $_SESSION['student']['name'] . '<br>';
    echo "NAME " . $_SESSION['student']['age'] . '<br>';
    echo "NAME " . $_SESSION['student']['height'] . '<br>';
    echo "NAME " . $_SESSION['student']['weight'] . '<br>';

    ?>
</body>

</html>