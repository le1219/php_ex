<?php
//session start
session_start();

//close
session_destroy();
header("refresh: 3;url = ./e9-3.php");
echo "LOGIN ED ....3second byebye";
