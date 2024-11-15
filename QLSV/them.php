<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .error { color: red; }
    </style>
</head>
<?php
require_once 'ketnoi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoten = $_POST['hoten'];
    $masv = $_POST['masv'];
    $lop = $_POST['lop'];

    // Kiểm tra các ràng buộc
    $errors = array();

    // Ràng buộc họ và tên
    if (empty($hoten)) {
        $errors['hoten'] = "Họ và Tên must not be blank.";
    } elseif (preg_match("/\d/", $hoten)) {
        $errors['hoten'] = "Numbers are not allowed in Họ và Tên.";
    } elseif (preg_match("/[^\p{L}\s'-]/u", $hoten)) {
        $errors['hoten'] = "Special characters are not allowed in Họ và Tên.";
    }

    // Ràng buộc MSSV

    // Ràng buộc lớp
    if (empty($lop)) {
        $errors['lop'] = "Lớp must not be blank.";
    } elseif (preg_match("/[^a-zA-Z0-9\s]/", $lop)) {
        $errors['lop'] = "Special characters are not allowed in Lớp.";
    }

    if (empty($errors)) {
        // Chèn dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO sinhvien (hoten, masv, lop) VALUES ('$hoten', '$masv', '$lop')";
        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success'>Thêm sinh viên thành công!</div>";
            header("Location: lietke.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Lỗi: " . mysqli_error($conn) . "</div>";
            header("Location: lietke.php");
            exit();
        }

        // Đóng kết nối
        mysqli_close($conn);
    }
}
?>

<body>
    <div class="container">
        <h1>Form thêm sinh viên</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo isset($_POST['hoten']) ? $_POST['hoten'] : ''; ?>" required>
                <span class="error"><?php echo isset($errors['hoten']) ? $errors['hoten'] : ''; ?></span>
            </div>
            <div class="form-group">
                <label for="masv">Mã sinh viên</label>
                <input type="text" id="masv" class="form-control" name="masv" value="<?php echo isset($_POST['masv']) ? $_POST['masv'] : ''; ?>" required>
                <span class="error"><?php echo isset($errors['masv']) ? $errors['masv'] : ''; ?></span>
            </div>
            <div class="form-group">
                <label for="lop">Lớp</label>
                <input type="text" id="lop" class="form-control" name="lop" value="<?php echo isset($_POST['lop']) ? $_POST['lop'] : ''; ?>" required>
                <span class="error"><?php echo isset($errors['lop']) ? $errors['lop'] : ''; ?></span>
            </div>
            <button type="submit" class="btn btn-success">Thêm sinh viên</button>
        </form>
    </div>
</body>
</html>
