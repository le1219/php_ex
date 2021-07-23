<?php
function sayHi()
{
    echo "HI~";
}
sayHi();

echo "<br>";

function getA($strName)
{
    $str = "yo~.{$strName}";
    return $str;
}
$strName = "CHARLEY";
$strResult = getA($strName);
echo $strResult;

echo "<hr>";

function timeXy($a, $b)
{
    return $a * $b;
}
$x = 3;
$y = 4;
echo timeXy($x, $y);
