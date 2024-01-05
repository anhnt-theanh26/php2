<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 5</title>
</head>

<body>
    <form action="" method="post" enctype="">
        <label for="text">nhap ten thanh vien so 6</label>
        <input type="text" name="text" id="text"><br>
        <input type="submit" name="" id="">
    </form>
</body>

</html>
<?php
if (isset($_POST['text']) && ($_POST['text'] != "")) {
    $text = $_POST['text'];
    echo 'độ dài: ';
    echo strlen($text) . '<br>';
    echo 'chuyển thành chữ thường: ';
    echo strtolower($text) . '<br>';
    echo 'Tách chuỗi thành một mảng từ: ';
    print_r(str_split($text)) . '<br>';
} else {
    echo 'nhap chuoi';
}
?>
<!-- Bài 5 : Bài tập về Xử lý Chuỗi:
Tạo một chuỗi bất kỳ và sau đó in ra độ dài của chuỗi đó.
Chuyển đổi chuỗi thành chữ thường và in ra kết quả.
Tách chuỗi thành một mảng từ các từ và in ra mảng đó. -->