<?php
use Admin\Lab2\Database;
// use Core\Database;
// require_once("./Database.php");
// sql_autoload_register(function($class){
//     var_dump($class);   
// });
// use Core\Database as DB;
// $db = new DB();
require_once("./vendor/autoload.php");
$db = new Database();
$db->HelloWorld();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Home Page
</body>
</html>