<?php
//全域變數 和區域變數

$msg = "全域變數msg<br>";

function showMsg()
{
    // global
    global $msg;
    $msg = "區域變數<br>";
    echo $msg; //區
}
echo $msg; //全

showMsg();

echo $msg;//區 global已經影響了全域變數
