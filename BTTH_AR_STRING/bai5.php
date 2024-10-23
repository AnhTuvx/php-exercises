<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Replacement</title>
    <style>
        .bold-text {
            color: #00008B; /* DarkBlue */
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$text = "";
$newText = "";
$array = array();
$newArray = array();
$mangcu = "";
if (isset($_POST['submit'])) {
    $text = $_POST['dayso'];
    $giatriCu = $_POST['giatriCu'];
    $giatriMoi = $_POST['giatriMoi'];
    $array = explode(",", $text);
    $mangcu = xuat_mang($array);
    $newArray = thay_the_mang($array, $giatriCu, $giatriMoi);
    $newText = xuat_mang($newArray);
}

function xuat_mang($array) {
    return implode(" ", $array);
}

function thay_the_mang($array, $giatriCu, $giatriMoi) {
    foreach ($array as $index => $value) {
        if ($value == $giatriCu) {
            $array[$index] = $giatriMoi;
        }
    }
    return $array;
}
?>

<form method="POST" action="">
    <table align="center" bgcolor="#7fffd4">
        <tr>
            <td colspan="3" align="center" class="bold-text"> <h1> Thay Thế Mảng </h1> </td>
        </tr>
        <tr>
            <td class="bold-text">Nhập dãy số</td>
            <td><input type="text" name="dayso" size="50" value="<?php echo $text; ?>"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td class="bold-text">Giá trị cũ</td>
            <td><input type="text" name="giatriCu" size="20"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td class="bold-text">Giá trị mới</td>
            <td><input type="text" name="giatriMoi" size="20"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Thay thế">
            </td>
        </tr>
        <tr>
            <td class="bold-text">Mảng cũ</td>
            <td><input type="text" name="mangCu" value="<?php echo $mangcu; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td class="bold-text">Mảng mới</td>
            <td><input type="text" name="mangMoi" value="<?php echo $newText; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center" class="bold-text"> (*) Các số được nhập cách nhau bằng dấu "," </td>
        </tr>
    </table>
</form>

</body>
</html>