<?php
use phpdemo\src\model\sdudentModel\StudentModel;
include '../models/studentModel.php';

$name = (!empty($_GET['name']) ? ($_GET['name']) : 'khong co name');
$studentModel = new StudentModel;
$data = $studentModel->find_id();
include '../views/studentView.php';




