<?php
//列出所有 GET 變數的資訊 
echo $_GET['ro'];
echo "<hr>";
echo $_GET['jobcat'];
echo "<hr>";
echo $_GET['kwop'];
echo "<hr>";
echo $_GET['keyword'];
echo "<hr>";


//判斷某個 key 是否存在於 GET 變數當中 
if (isset($_GET['keyword'])) {
  echo '有 $_GET["keyword"]';
} else {
  echo '沒有 $_GET["keyword"]';
}
