<?php
function calculate($num1, $num2, $operation) {
    switch($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Không thể chia cho 0";
            }
        default:
            return "Phép tính không hợp lệ";
    }
}

$num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
$num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
$operation = isset($_POST['operation']) ? $_POST['operation'] : 'add';

$result = calculate($num1, $num2, $operation);
$operationText = '';

switch($operation) {
    case 'add':
        $operationText = 'Cộng';
        break;
    case 'subtract':
        $operationText = 'Trừ';
        break;
    case 'multiply':
        $operationText = 'Nhân';
        break;
    case 'divide':
        $operationText = 'Chia';
        break;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả phép tính</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        .result-box {
            display: inline-block;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        a {
            text-decoration: none;
            color: #007BFF;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="result-box">
    <h2>Kết quả phép tính</h2>
    <p>Phép tính: <strong><?php echo $operationText; ?></strong></p>
    <p>Số thứ nhất: <strong><?php echo $num1; ?></strong></p>
    <p>Số thứ hai: <strong><?php echo $num2; ?></strong></p>
    <p>Kết quả: <strong><?php echo $result; ?></strong></p>
    <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
</div>

</body>
</html>

