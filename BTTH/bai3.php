<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        define("dongia",2000);
        $chisocu=null;
        $chisomoi=null;
        $dongia = null;
        $sotienthanhtoan = null;
        $name=null;
        if(isset($_POST["chisocu"])and $_POST["chisomoi"]){
         $chisocu=$_POST["chisocu"];
         $chisomoi=$_POST["chisomoi"];
         $dongia = dongia;
         $sotienthanhtoan = $_POST["sotienthanhtoan"];
            if( is_numeric($_POST["chisocu"]) and $_POST["chisocu"] < $_POST["chisomoi"] and $_POST["chisocu"]>0 and $_POST["chisomoi"] and $_POST["chisomoi"]>0 ){
                $sotienthanhtoan = ($chisomoi - $chisocu)*$dongia;
            }
            else {
                $chisocu = "khong khop du lieu";
                $chisomoi = "khong khop du lieu";
            }
        }
    ?>
    
    <form action="" name="MyForn_RECT" method="post">
        <table style="background-color: antiquewhite;" align="center">
            <tr>
                <td style=" background-color: orange;" colspan="2"><h3>DIEN TICH va CHU VI HINH TRON</h3></td>
            </tr>
            <tr>
                <td>Ten chu ho</td>
                <td>
                    <input type="text" name="ten" value="<?php echo $name; ?>" size="30" placeholder="cac phan tu khong duoc de trong">
                </td>
            </tr>
            <tr>
                <td>Chi so cu</td>
                <td>
                    <input type="text" name="chisocu" value="<?php echo $chisocu; ?>" size="30" placeholder="cac phan tu khong duoc de trong">
                </td>
            </tr>
            <tr>
                <td>Chi so moi</td>
                <td>
                    <input type="text" name="chisomoi" value="<?php echo $chisomoi; ?>" size="30" placeholder="cac phan tu khong duoc de trong">
                </td>
            </tr>
            <tr>
                <td>Don gia</td>
                <td>
                    <input type="text" name="dongia" value="2000" size="30" >
                </td>
            </tr>
            <tr>
                <td>So tien can thanh toan</td>
                <td>
                    <input type="text" name="sotienthanhtoan" value="<?php echo $sotienthanhtoan; ?>" size="30" style="background-color: lightpink;" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" value="Tinh">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>