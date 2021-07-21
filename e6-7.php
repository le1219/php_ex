<?php
//isset ()可判斷是否初始化
$myVar01 = 10;
if (isset($myVar01)) {
    echo "myVar01初始化";
} else {
    echo "myVar02尚未初始化";
}
echo "<hr>";
if (isset($myVar02)) {
    echo "myVar02初始化";
} else {
    echo "myVar02尚未初始化";
}
echo "<hr>";

//
$arr = ['spring', 'summer', 'autumn', 'winter'];
if (isset($arr[0])) {
    echo "arr[0]    {$arr[0]}已初始化";
} else {
    echo "arr[0]尚未初始化";
}

echo "<hr>";
if (isset($arr[4])) {
    echo "arr[4]尚未初始化";
}

echo "<hr>";
