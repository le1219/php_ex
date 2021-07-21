<?php
//array_unique()byebye重複的值
$arr = [2, 2, 3, 4, 2, 1, 5];
echo "<pre>";
print_r(array_unique($arr));
echo "</pre>";

//arrat_values():把array重新設定索引
$arr = [2, 2, 3, 4, 2, 1, 5];
$arrNotInOrder = array_unique($arr);
echo "<pre>";
print_r($arrNotInOrder);
echo "</pre>";

echo "<pre>";
print_r(array_values($arrNotInOrder));
echo "</pre>";
