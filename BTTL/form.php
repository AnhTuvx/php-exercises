<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $s = null;
        if(isset($_POST["width"]) and isset($_POST["heigh"])){
            $width = $_POST["width"];
            $heigh = $_POST["heigh"];
            if( is_numeric($_POST["width"]) and is_numeric($_POST["heigh"]) and $_POST["width"] > $_POST["heigh"] and $_POST["width"]>0 and $_POST["heigh"]>0){
                $s =$width * $heigh;
            }
            else {
                $s = "khong khop du lieu";
            }
        }
        if(isset($_POST["xoa"])){
            $S=$width=$heigh =null;
        }
    ?>
    <form action="" name="MyForn_RECT" method="post">
        <table style="background-color: antiquewhite;" align="center">
            <tr>
                <td style=" background-color: orange;" colspan="2"><h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3></td>
            </tr>
            <tr>
                <td>Chiều dài</td>
                <td>
                    <input type="text" name="width" value="<?php echo $width;?>" size="30">
                </td>
            </tr>
            <tr>
                <td>Chiều rộng</td>
                <td>
                    <input type="text" name="heigh" value="<?php echo $heigh;?>" size="30">
                </td>
            </tr>
            <tr>
                <td>Diện tích</td>
                <td>
                    <input type="text" name="area" value="<?php echo $s;?>" size="30" style="background-color: lightpink;" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" value="Tinh">
                    <input type="submit" name="xoa" value="xoa">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>