<!DOCTYPE html>
<html >
<head>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            color: red;
        }
    </style>
</head>
<body>
     <?php 
     $username=$_POST["name"];
     $password=$_POST["password"];
     if($username == "admin" && $password == 12345){
            echo"Welcome to, ". $username;
     }
     else {
        echo" Khong nhap dung dinh dang username hoac password ";
     }

     ?>
</body>
</html>