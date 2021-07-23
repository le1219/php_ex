<?php
header("refresh: 3; url=./e9-1.php");
echo "cookie[username] 已刪除 3秒後刷新";
setcookie("username", "charley", time() - 3600, "/");
