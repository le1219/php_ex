<?php
//判斷上傳成功（error== 0）
if ($_FILES['fileUpload']['error'] === 0) {
    /**
     * 上傳檔案有副檔名的情況下，可以用簡單的方法取得副檔名 */

    //1. 先取得完整的檔案名稱
    $fileName = $_FILES["fileUpload"]["name"];
    //2. 將完整檔案名稱依特定字元切割，轉為陣列
    $arr = explode(".", $fileName);
    //3. 特定字元切割後的陣列最後一個元素，即為副檔名 
    $extension = $arr[count($arr) - 1];
    /**
     * 取得副檔名，還有下面這種寫法:
     * $extension = pathinfo($_FILES["studentImg"]["name"], PATHINFO_EXTENSION);
     */
    /**
     * 使用時間函式，定義上傳檔案名稱
     * 用法 -> date("格式化字串")
     * 例如 -> date("Y-m-d H:i:s") -> 2021-12-31 13:14:00 * Y: 西元年
     * m: 兩位數的月份
     * d: 兩位數的日
     * H: 兩位數(24 小時制)的時
     * i: 兩位數(24 小時制)的分
     * s: 兩位數(24 小時制)的秒
     */
    //1. 建立時間字串
    $fileName = date("YmdHis");
    //2. 將時間字串結合副檔名
    $fileName = $fileName . "." . $extension;
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
