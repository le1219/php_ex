<?php
echo "NAME:" . $_POST['myName'] . "<br>";
echo "AGE:" . $_POST['myAge'] . "<br>";
echo "HEIGHT:" . $_POST['myHeight'] . "<br>";
echo "WEIGHT:" . $_POST['myWeight'] . "<br>";
echo '<hr>';

if (isset($_POST['myName'])) {
    echo "YES";
} else {
    echo "NO";
}
