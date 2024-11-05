<?php
$svid = $_GET["sid"];
// echo $id
require_once 'ketnoi.php';
$edit_sql = "SELECT * FROM sinhvien WHERE id =$svid";
$result = mysqli_query($conn,$edit_sql);
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sinh Viên</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Form sửa thông tin sinh viên</h1>
        <form action="update.php" method="post">
        <input type="hidden" name="sid" value="<?php echo $svid;?>" id="">
            <div class="form-group">
                <label for="hoten"> Họ tên </label>
                <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten'] ?>">
            </div>
            <div class="form-group">
                <label for="masv">Mã sinh viên</label>
                <input type="text" id="masv" class="form-control" name="masv" value="<?php echo $row['masv'] ?>">
            </div>
            <div class="form-group">
                <label for="lop">Lớp</label>
                <input type="text" id="lop" class="form-control" name="lop" value="<?php echo $row['lop'] ?>">
            </div>
            <button class="btn btn-success">Chỉnh sửa thông tin</button>
        </form>
    </div>
</body>
</html>