<!-- Bài 3 : Viết một hàm PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
Sử dụng hàm để kiểm tra xem các số từ 1 đến 10 có phải là số nguyên tố không và in ra kết quả. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="number">nhap vao so tu 1 den 10</label>
        <input type="number" name="number" id="number" min="1" max="10"><br>
        <input type="submit" name="" id="">
    </form>
</body>

</html>
<?php

if (isset($_POST['number'])) {
    $number = $_POST['number'];
    // echo $number;
    // echo $number % 3;
    $x = 0;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $x++;
        }
    }
    if ($x == 0) {
        echo "so $number la so   nguyen to";
    } else {
        echo "so $number khong phai so nguyen to";
    }
}

?>

<!-- 
Bài 3 : Viết một hàm PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
Sử dụng hàm để kiểm tra xem các số từ 1 đến 10 có phải là số nguyên tố không và in ra kết quả. -->