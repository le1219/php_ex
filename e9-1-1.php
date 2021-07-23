<?php
header("refresh: 3; url=./e9-1.php");
echo "cookie[username] 已設定 3秒後刷新";
setcookie("username", "charley", time() + (86400 * 15), "/");
