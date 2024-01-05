<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 2</title>
</head>

<body>
    <form action="" method="post" enctype="">
        <label for="x">nhap ten thanh vien so 6</label>
        <input type="text" name="name" id="name"><br>
        <input type="submit" name="" id="">
    </form>
</body>

</html>
<?php

$arr = ['tv1', 'tv2', 'tv3', 'tv4', 'tv5'];
for ($i = 0; $i < count($arr); $i++) {
    echo "name member: " . $arr[$i] . '<br>';
}

if (isset($_POST['name']) && $_POST['name'] != "") {
    $name = $_POST['name'];
    array_push($arr, $name);
    echo 'mang moi <br>';
    for ($i = 0; $i < count($arr); $i++) {
        echo "name member: " . $arr[$i] . '<br>';
    }
}

?>
<!-- Bài 2 : Tạo một mảng chứa tên của 5 người bạn. Sử dụng vòng lặp để in ra tên của từng người trên một dòng.
Sau đó, thêm một người bạn mới vào mảng và in lại danh sách sau khi thêm.
Bài tập về Hàm: -->