<?php


// new 
// error handling kiem soat loi
// throw - nem ra ngoaij leej

// $number = 1001;
// if ($number == 100) {
//     echo 'number = 100';
// } else {
//     throw new \Exception( 'number != 100');
// }


// trong dự án 
try {
    $x = 10;
    $y = 0;
    if ($y == 0 || $x == 0)
        throw new Exception();
    $tong = $x / $y;
} catch (\Exception $e) {
    echo 'có lỗi xảy ra';
} finally {
    echo '<br>home<br>';
}




// class datetime  dùng sử lý các dữ liệu dạng thời gian 
// 1 số format phổ biến được sử dụng trong php
// Y year, m month, d day, h hour, m minutes, s second : định nghĩa thời gian
// YYYY-mm-d hh:mm:ss
// hh:mm:ss YYYY-mm-d
$dateTime = new DateTime;
// chuyển đổi qua lại giữa các format thời gian khác nhau
$correntDate = date("Y-m-d"); // lấy thời gian hiện tại
// với format tự  định nghĩa
echo $correntDate;
echo '<br>';
$date = DateTime::createFromFormat("Y-m-d", $correntDate);
$dateNew = $date->format('d/m/Y');
echo $dateNew;


// toán tử so sánh ngày tháng
// khởi tạo 2 biến thời gian
$date1 = new DateTime('2024-01-12');
$date2 = new DateTime('2024-01-01');

echo '<br>';
var_dump($date1 < $date2);
echo '<br>';
var_dump($date1 > $date2);
echo '<br>';
var_dump($date1 == $date2);
echo '<br>';
// trả về giá trị 1, 0 hoặc -1
var_dump($date1 <=> $date2);
// hàm +, - datetime
echo '<br>';
$khoangThoiGian = $date1->diff($date2);
// echo $khoangThoiGian . '<br>';
var_dump($khoangThoiGian);
// cộng 5 ngày vào date1
// P từ khóa
// 5D == 5 ngày
$date1 = $date1->add(new DateInterval('P5D'));
$date2 = $date2->sub(new DateInterval('P10Y'));
var_dump($date1);
echo '<br>';
var_dump($date2);
// tạo chuỗi thời gian trong php

// $arrTime = new DatePeriod($date1, 'P1D', $date2);
$arrTime = new DatePeriod($date1, new DateInterval('P1D'), $date2);


// foreach ($arrTime as $key) {
//     echo $key->format('Y-m-d') . '<br>';
// }

foreach ($arrTime as $date) {
    echo $date->format('Y-m-d') . PHP_EOL;
}

