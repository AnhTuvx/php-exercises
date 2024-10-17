<?php

if(empty($_POST['username']) || empty($_POST['password'])) {
    echo "Vui lòng nhập đầy đủ thông tin!";
    exit();
}
setcookie("user", $_POST['username'], time() + (86400 * 30), "/"); // Lưu trong 30 ngày

header("Location: index.php");
exit();