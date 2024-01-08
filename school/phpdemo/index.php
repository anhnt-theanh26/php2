<?php

// khởi tạo 1 instance của studentMoldel
include './models/studentModel.php';
// $StudentModel = new StudentModel;
// $name = (!empty($_GET['name']) ? ($_GET['name']) : 'khong co name');
// $data = $StudentModel->find_id($name);
$sv = new \model\sdudentModel\StudentModel('anhnt', 20, '0348022004', 'chương mỹ');
$sv1 = new \model\sdudentModel\StudentModel('anhnt', 20, '0348022004', 'chương mỹ');
$sv2 = new \model\sdudentModel\StudentModel('linhdth', 20, '0348022004', 'đại thành');
echo $sv1->name;
// echo $sv1->address;
// echo $sv1->email;
echo '<br>';
$sv->displayInfo();
echo '<br>';
echo $sv->find_id('anhnt');
echo '<br>';

if ($sv == $sv1) { // bằng nhau khi: sv và sv1 có cùng value và cùng là instance studenModel
    echo "sv = sv1";
} else {
    echo "sv != sv1";
}
echo '<br>';

if ($sv === $sv1) { // không bằng vì 2 thằng là 2 instance riêng
    echo "sv === sv1";
} else {
    echo "sv !== sv1";
}
echo '<br>';

// class ẩn danh anonymous
// khi cần khai báo ẩn danh 1 lớp - 1 object
$sinhVienHocLai = new class('anonymous class'){
    public $x = 100;
    public function disPlayX(){
        echo $this->x;
    }
};
echo $sinhVienHocLai->disPlayX();
// include './views/studentView.php';


