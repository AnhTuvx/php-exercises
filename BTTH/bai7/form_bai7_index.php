<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính trên hai số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 100px auto;
            padding: 20px;
            width: 300px;
            background-color: #f0f0f0;
            border-radius: 10px;
            text-align: center;
        }
        input[type="text"], select {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="form_bai7_result.php" method="POST">
    <h2>Phép tính trên 2 số</h2>
    <label for="num1">Nhập số thứ nhất:</label>
    <input type="text" id="num1" name="num1" required>

    <label for="num2">Nhập số thứ hai:</label>
    <input type="text" id="num2" name="num2" required>

    <label for="operation">Chọn phép tính:</label>
    <select id="operation" name="operation">
        <option value="add">Cộng</option>
        <option value="subtract">Trừ</option>
        <option value="multiply">Nhân</option>
        <option value="divide">Chia</option>
    </select>

    <input type="submit" value="Tính">
</form>

</body>
</html>
