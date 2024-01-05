<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 1</title>
</head>

<body>
    <form action="" method="get" enctype="">
        <label for="x">nhap chieu dai</label>
        <input type="number" name="x" id="x" min="1"><br>
        <label for="y">nhap chieu rong</label>
        <input type="number" name="y" id="y" min="1"><br>
        <input type="submit" name="" id="">
    </form>
</body>

</html>
<?php
if (isset($_GET['x']) && isset($_GET['y'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    echo 'Diện tích của hình chữ nhật là: ' . $x * $y;
}
?>

<!-- Bài 1 : Viết một chương trình PHP để tính diện tích của hình chữ nhật. Sử dụng hai biến để lưu chiều dài và chiều rộng.
In kết quả ra màn hình theo định dạng: "Diện tích của hình chữ nhật là: [kết quả]".
Bài tập về Mảng: -->