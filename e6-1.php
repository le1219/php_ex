<?php
$arr = ['AA', 'BB', 'CC', 'DD'];
echo "print:{$arr[3]}";

echo "<hr>";

$arr[] = "EE";
$arr[] = "FF<br>";

echo "{$arr[4]} and {$arr[5]}";

echo "<hr>";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "&nbsp;";
}
