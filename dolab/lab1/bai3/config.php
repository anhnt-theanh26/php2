<?php
$dsn = 'mysql:host=localhost;dbname=lab1';
$u = 'root';
$p = '';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $connection = new PDO($dsn, $u, $p, $options);
} catch (PDOException $e) {
    $err = $e->getMessage();
    include('error/db_error_connect.php');
    exit();
}
?>
<?php
// $dsn = 'mysql:host=localhost;dbname=lab1';
// $u = 'root';
// $p = '';
// $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
// try {
//     $connection = new PDO($dsn, $u, $p, $options);
// } catch (PDOException $e) {
//     $err = $e->getMessage();
//     echo "Database connection failed: " . $err;
//     exit();
// }
?>