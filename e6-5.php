<?php
$arr = ['spring', 'summer', 'autumn', 'winter'];
echo "FOURSEASONS:";
foreach ($arr as $value) {
    echo $value . "&nbsp;";
}
echo "<hr>";
$arrStudents = [
    '學號' => '101',
    '姓名' =>  '阿土伯',
    '性別' => '男',
    '生日' => '2000/03/14',
    '手機號碼' => '0912345678'
];


foreach ($arrStudents as $key => $value) {
    echo $key . ":" . $value . "<br>";
}
echo "<hr>";

$arr1[] = [];
$arr1[] = ['name' => "AA", "age" => 12];
$arr1[] = ['name' => "BB", "age" => 32];
$arr1[] = ['name' => "BB", "age" => 32];
$arr1[] = ['name' => "DD", "age" => 31];

foreach ($arr1 as $key => $obj) {
    echo "{$obj['name']} {$obj['age']}years old.<br>";
}
