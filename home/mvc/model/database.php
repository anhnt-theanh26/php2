<?php
$dsn = 'mysql:host=localhost;dbname=shop2';
$u = 'root';
$p = '';
$options = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try{
    $db = new PDO($dsn, $u, $p,$options);
}catch(PDOException $e){
    $err = $e->getMessage();
    include('error/db_error_connect.php');
    exit();
}
?>