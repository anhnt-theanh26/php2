<?php

use Admin\Phpdemo\models\StudentModel;
use Admin\Phpdemo\People;
require_once("./../../vendor/autoload.php");

$people = new People();
$people->name = "anhnt";
$people->address = "Binh nguyen vo tan";
$people->print();
$sv = new StudentModel('anhnt', 20, '0348022004', 'chương mỹ');
$sv1 = new StudentModel('anhnt', 20, '0348022004', 'chương mỹ');
$sv2 = new StudentModel('linhdth', 20, '0348022004', 'đại thành');
echo $sv1->name;
// echo $sv1->address;
// echo $sv1->email;
echo '<br>';
$sv->displayInfo();
echo '<br>';
echo $sv->find_id('anhnt');
echo '<br>';