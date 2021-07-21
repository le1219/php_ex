<?php
for ($i = 0; $i < count($_POST['myFAV']); $i++) {
    echo "animals: " . $_POST['myFAV'][$i] . "<br>";
}
