<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Handling</title>
    <style>
        .bold-text {
            color: #00008B;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$text = "";
$array = array();
$kq = "";       

if (isset($_POST['submit'])) {
    $text = $_POST['dayso'];
    $mang = xuat_mang(array());
    $array = explode(",", $text);
    $giatri = $_POST['giatri'];
    $timkiem_result = tim_kiem($array, $giatri);
    $kq = $timkiem_result ? "Đã tìm thấy $giatri tại vị trí thứ " . array_search($giatri, $array) +1 . " của mảng" : "Không tìm thấy $giatri trong mảng";
}

function tim_kiem($array, $giatri) {
    foreach ($array as $index => $value) {
        if ($value == $giatri) {
            return 1;
        }
    }
    return 0;
}
function xuat_mang($array) {
    foreach ($array as $value) {
        echo $value .",";
    }
}
?>

<form method="POST" action="">
    <table align="center" bgcolor="#7fffd4">
        <tr>
            <td colspan="3" align="center" class="bold-text"> <h1> Nhập và Tìm kiếm trên dãy số</h1> </td>
        </tr>
        <tr>
            <td class="bold-text">Nhập dãy số</td>
            <td><input type="text" name="dayso" size="50" value="<?php echo $text; ?>"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td class="bold-text">Nhập giá trị tìm kiếm</td>
            <td><input type="text" name="giatri" size="50"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Tìm kiếm">
            </td>
        </tr>
          <tr>
            <td>Mảng</td>
            <td><input type="text" name="mang" value="<?php echo isset($array) ? xuat_mang($array) : ''; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td class="bold-text">Kết quả tìm kiếm</td>
            <td><input type="text" name="ketqua" value="<?php echo $kq; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center" class="bold-text"> (*) Các số được nhập cách nhau bằng dấu "," </td>
        </tr>
    </table>
</form>

</body>
</html>