<?php
// Kiểm tra nếu form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $study = isset($_POST['study']) ? implode(", ", $_POST['study']) : "None";
    $note = $_POST['note'];
} else {
    // Chuyển hướng về form nếu không có dữ liệu POST
    header("Location: form_bai8_index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
</head>
<body>
<h1>Information Confirmation</h1>
<p><strong>Full Name:</strong> <?php echo htmlspecialchars($fullname); ?></p>
<p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
<p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
<p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
<p><strong>Country:</strong> <?php echo htmlspecialchars($country); ?></p>
<p><strong>Study:</strong> <?php echo htmlspecialchars($study); ?></p>
<p><strong>Note:</strong> <?php echo htmlspecialchars($note); ?></p>

<form action="form_bai8_index.php">
    <input type="submit" value="Quay về">
</form>

<form action="form_bai8_index.php">
    <input type="reset" value="Hủy">
</form>
</body>
</html>
