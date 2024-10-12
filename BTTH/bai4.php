<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $toan = null;
        $ly = null;
        $hoa = null;
        $goal = null;
        $total = null;
        $result = null;
        if(isset($_POST["Toan"]) and isset($_POST["Ly"]) and isset($_POST["Hoa"]) and isset($_POST["Diemchuan"])){
            $toan = $_POST["Toan"];
            $ly = $_POST["Ly"];
            $hoa = $_POST["Hoa"];
            $goal = $_POST["Diemchuan"];
            $total = $_POST["TongDiem"];
            $result = $_POST["ketqua"];
            if(is_numeric($_POST["Toan"]) and is_numeric($_POST["Ly"]) and is_numeric($_POST["Hoa"]) and is_numeric($_POST["Diemchuan"]) and $_POST["Toan"]>=0 and $_POST["Ly"]>=0 and $_POST["Hoa"]>=0 and $_POST["Diemchuan"]>=0){
                $total = $toan + $ly + $hoa;
                if($total >= $goal and $_POST["Toan"] != 0 and $_POST["Ly"] != 0 and $_POST["Hoa"] != 0){
                    $result = "Đậu";
                } else $result = "Rớt";
            }
            else {
                $total = "khong khop du lieu";
            }
        }
    ?>  



    <form action="" name="MyForm_RECT" method="post">
        <table style= "background-color:lightpink" align="center">
            <tr>
                <td style="background-color:DeepPink" align="center" colspan="2"><h3>KET QUA THI DAI HOC</h3></td>
            </tr>
                <td>Toan</td>
                <td>
                    <input type="text" name="Toan" value="<?php echo $toan; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td>Ly</td>
                <td>
                    <input type="text" name="Ly" value="<?php echo $ly; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td>Hoa</td>
                <td>
                    <input type="text" name="Hoa" value="<?php echo $hoa; ?>" size="30">
                </td>
            </tr>
            <tr>
                <td>Diem chuan</td>
                <td>
                    <input type="text" name="Diemchuan" value="<?php echo $goal; ?>" color: size="30"  >
                </td>
            </tr>
            <tr>
                <td>Tong diem</td>
                <td>
                    <input type="text" name="TongDiem" value="<?php echo $total; ?>" size="30" style="background-color: antiquewhite;" readonly>
                </td>
            </tr>
            <tr>
                <td>Ket Qua</td>
                <td>
                    <input type="text" name="ketqua" value="<?php echo $result; ?>" size="30" style="background-color: antiquewhite;" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" value="Xem Ket Qua">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>