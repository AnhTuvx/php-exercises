<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$dayso = "";
$tinhtong = "";
if(isset($_POST["submit"])) {
 $dayso = $_POST["dayso"];
 $arr= explode(",",$dayso);
 $tinhtong = Sumary($arr);
}
function Sumary($arr){
    $sum =0;
    foreach ($arr as $value) {
        $sum += $value;
     }
     return $sum;
}
?>
<body>
    <form method="POST" action="" >
      <table align="center" style="background-color:cornflowerblue;" align="center">
        <tr>
            <td style="text-align: center;background-color:forestgreen" colspan="3">
                <h2>Nhap va tinh day so</h2>
            </td>
        </tr>
        <tr>
            <td>Nhap day so</td>
            <td><input type="text" name="dayso" value="<?php echo $dayso; ?>"></td>
            <td style="color: red;">(*)</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Tong day so"></td>
        </tr>
        <tr>
            <td>Tong day so</td>
            <td><input type="text" name="ketqua" value="<?php echo isset($tinhtong) ? $tinhtong : ''; ?>" readonly></td>
        </tr>
        <tr>
            <td></td>
            <td>(*) Cac so duoc nhap cach nhau bang dau ","</td>
        </tr>       
      </table>
    </form>
</body>
</html>