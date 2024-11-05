<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin sinh vien</title>
</head>

<?php
$name=$family=$address=$msg="";
require "config.php";

if(isset($_POST["gui"])){
$name =$_POST["name"];
$address=$_POST["address"];
$family=$_POST["family"];
$class= $_POST["class"];
$query = "INSERT INTO `thongtinsv`(`Ho`, `Ten`, `DiaChi`, `MaLop`)
                        VALUE('$family', '$name' , '$address', '$class')";
$result = mysqli_query($conn,$query);
if(!$result) die("\n Query failed");
else $msg = "ghi du lieu thanh cong";


}
if(isset($_POST["Xoa"])){
    $name=$family=$address=$msg="";
}

if(isset($_POST["xem"])){
    header("Location:./view.php");
}
?>

<body>
   <form name="StudentInfor" action="" method="post">
   <table align="center" bgcolor="#faebd7">
        <tr>
            <td colspan="2" align="center">
                <h4 style="color: darkblue;">Nhap Thong Tin SV</h4>
            </td>
        </tr>
        <tr>
            <td>Ten</td>
             <td>
                <input type="text" name="name" size="40" value="<?php echo $name;?>">  
             </td>   
        </tr>
        <tr>
            <td>Ho</td>
             <td>
                <input type="text" name="family" size="40" value="<?php echo $family;?>">  
             </td>   
        </tr>
        <tr>
            <td>Dia chi</td>
             <td>
                <input type="text" name="address" size="40" value="<?php echo $address;?>">  
             </td>   
        </tr>
        <tr>
            <td>Lop</td>
            <td>
                <label for="class">Chon ten lop</label>
                <select name="class" id="class">
                    <?php
                    // 2. Chuan bi cau truy van
                        $query = "SELECT * FROM `ThongTinLop`;";
                        // 3. Thuc thi cau truy van
                        $result = mysqli_query($conn, $query);
                        // 4.Xu ly du lieu tra ve
                      if(mysqli_num_rows($result)!= 0){
                        while($row = mysqli_fetch_array($result)){
                            $str = "<option value='".$row["MaLop"]."'>".$row["TenLop"]."</option>";
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