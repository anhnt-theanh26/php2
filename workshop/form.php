<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="a">so a:</label>
        <input type="number" name="a" id="a"><br>
        <label for="b">so b:</label>
        <input type="number" name="b" id="b"><br>
        <button type='submit' name='gui'>gui</button>
    </form>
</body>

</html>
<?php
if (isset($_GET['gui'])) {
    if (isset($_GET["a"]) && $_GET['a'] != "" || isset($_GET["b"]) && $_GET['b'] != "") {
        if ($_GET['a'] != "") {
            $a = $_GET['a'];
            echo 'a = ' . $a .'<br>';
        }
        if ($_GET['b'] != "") {
            $b = $_GET['b'];
            echo 'b = ' . $b .'<br>';
        }
        if ($_GET['a'] != '' && $_GET['b'] != '') {
            echo 'a x b = '. $a * $b .'<br>';
        }
    }
}
?>