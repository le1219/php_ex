<?php
//判斷上傳成功（error== 0）
if ($_FILES['fileUpload']['error'] === 0) {
    //if success move url
    $isSuccess = move_uploaded_file(
        $_FILES['fileUpload']['tmp_name'],
        'tmp/' . $_FILES['fileUpload']['name']
    );
    if ($isSuccess) {
        echo "SUCCESS<br>";
        echo "FILENAME:" . $_FILES['fileUpload']['name'] . "<br>";
        echo "FILETYPE:" . $_FILES['fileUpload']['type'] . "<br>";
        echo "FILESIZE:" . $_FILES['fileUpload']['size'] . "<br>";
    } else {
        echo "FAIL";
        echo "<a href='javascript:window.history.back();'>BACK</a>";
    }
}
