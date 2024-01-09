<?php

$a = 1;
$a = 6;

$arr = [1, 4, 'anhnt', 5];
echo '<pre>';
print_r($arr);

echo $arr[1] . '<br>';
echo 'foreach';
echo '<br>';
foreach ($arr as $k => $v) {
    echo 'vi tri: ' . $k . ' co gia tri la: ' . $v . '<br>';
}
echo 'for';
echo '<br>';
for ($i = 0; $i < count($arr); $i++) {
    echo 'vi tri: ' . $i . ' co gia tri la: ' . $arr[$i] . '<br>';
}

// mảng liên hợp
// mảng liên hợp thì key của phần tử do ta quyết định
echo '<br>';
echo 'mảng liên hợp';
echo '<br>';
$arr1 = [
    'ten' => 'anh',
    'tuoi' => '20',
    'dia chi' => 'ha noi',
    'noi sinh' => 'ha tay'
];
print_r($arr1);
echo $arr1['ten'] . '<br>';

foreach ($arr1 as $key => $value) {
    echo ''. $key . ': '. $value . ''.'<br>';
}
$color = ['red' => 'màu đỏ', 'yellow' => 'màu vàng', 'blue' => 'màu xanh', 'pink' => 'màu hồng'];
?>
<table border="1">
    <tr>
        <?php
        foreach ($color as $key => $value) {
            echo '<th style="background-color: ' . $key . ';">' . $key . '</th>';
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($color as $key => $value) {
            echo '<td style="color: ' . $key . ';">' . $value . '</td>';
        }
        ?>
    </tr>
</table>

<?php
//mảng đa chiều
$myName = [
    ['hoten' => 'anhnt', 'tuoi' => '20', 'diachi' => 'tienphuong',],
    ['hoten' => 'linhdth', 'tuoi' => '20', 'diachi' => 'daithanh',],
];
echo '<pre>';
print_r($myName);
print_r($myName[0]);
echo ($myName[0]['hoten']);
echo '<br>';
foreach( $myName as $key => $value) {
    foreach($value as $key2 => $value2) {
        echo ''. $key2 .': '. $value2.'<br>';
    }
}
?>