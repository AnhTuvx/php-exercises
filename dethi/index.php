<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$name = $tinh = $quocgia = $msg = "";
require "config.php";

if(isset($_POST["gui"])) {
    $name = $_POST["name"];
    $tinh = $_POST["tinh"];
    $quocgia = $_POST["quocgia"];
    $query = "INSERT INTO `thanhpho`(`tenthanhpho`, `tinh`, `maquocgia`) VALUES ('$name','$tinh','$quocgia')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("\n Query failed: " . mysqli_error($conn));
    } else {
        $msg = "Ghi dữ liệu thành công";
    }
}

if(isset($_POST["xoa"])) {
    $name = $tinh = $quocgia = $msg = "";
}

if(isset($_POST["xem"])) {
    header("Location:./view.php");
    exit();
}
?>
<body>
<form name="StudentInfor" action="" method="post">
   <table align="center" bgcolor="#faebd7">
        <tr>
            <td colspan="2" align="center">
                <h4 style="color: darkblue;">Nhap Thong Tin TP</h4>
            </td>
        </tr>
        <tr>
            <td>Ten TP</td>
             <td>
                <input type="text" name="name" size="40" value="<?php echo $name;?>">  
             </td>   
        </tr>
        <tr>
            <td>Tinh</td>
             <td>
                <input type="text" name="tinh" size="40" value="<?php echo $tinh;?>">  
             </td>   
        </tr>      
        <tr>
            <td>Quoc Gia</td>
            <td>
                <label for="quocgia">Chon Quoc Gia</label>
                <select name="quocgia" id="quocgia">
                    <?php
                    // 2. Chuan bi cau truy van
                        $query = "SELECT * FROM `quocgia`";
                        // 3. Thuc thi cau truy van
                        $result = mysqli_query($conn, $query);
                        // 4.Xu ly du lieu tra ve
                        if(mysqli_num_rows($result)!=0){
                            while ($row = mysqli_fetch_array($result)){
                                $str = "<option value='".$row["maquocgia"]."'>".$row["tenquocgia"]."</option>";
                                echo $str;
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="gui" value="Gui">
                <input type="submit" name="xoa" value = "Xoa">
                <input type="submit" name="xem" value ="Xem Ket Qua">
            </td>  
        </tr>
        <tr>
            <td colspan="2" align="center">
              <?php
               echo "<h5 style=\"color:red\">$msg</h5>" 
              ?>
            </td>  
        </tr>
    </table>
   </form>
</body>
</html>