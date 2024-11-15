<?php 
$ht = $_POST["hoten"];
$masv = $_POST["masv"];
$lop = $_POST["lop"];
$id = $_POST["sid"];
require_once 'ketnoi.php';

// Kiểm tra các ràng buộc
$errors = array();

// Ràng buộc họ và tên
if (empty($ht)) {
    $errors['hoten'] = "Họ và Tên must not be blank.";
} elseif (preg_match("/\d/", $ht)) {
    $errors['hoten'] = "Numbers are not allowed";
} elseif (preg_match("/[^\p{L}\s'-]/u", $ht)) {
    $errors['hoten'] = "Special characters are not allowed ";
}

// Ràng buộc MSSV
if (empty($masv)) {
    $errors['masv'] = "MSSV must not be blank.";
} elseif (!preg_match("/^[a-zA-Z0-9\s]+$/", $masv)) {
    $errors['masv'] = "Special characters are not allowed";
}

// Ràng buộc lớp
if (empty($lop)) {
    $errors['lop'] = "Lớp must not be blank.";
} elseif (!preg_match("/^[a-zA-Z0-9\s]+$/", $lop)) {
    $errors['lop'] = "Special characters are not allowed";
}

// Nếu không có lỗi, thực hiện cập nhật vào cơ sở dữ liệu
if (empty($errors)) {
    $update_sql = "UPDATE sinhvien SET masv='$masv', hoten='$ht', lop='$lop' WHERE id = $id";
    if (mysqli_query($conn, $update_sql)) {
        header("Location: lietke.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Lỗi: " . mysqli_error($conn) . "</div>";
    }

    // Đóng kết nối
    mysqli_close($conn);
} else {
    // Hiển thị lỗi
    foreach ($errors as $field => $error) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
}
?>
