<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo $i . "&nbsp;"; //1
    } else {
        break; //2就跳出了
    }
}
echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo $i . "&nbsp;"; //1 3 5 7 9
    } else {
        continue; //跳過雙數
    }
}
