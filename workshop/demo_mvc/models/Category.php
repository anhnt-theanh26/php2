<?php
// require_once("db.php");
require_once("db.php");

function getAllCategory() {
    $sql = "SELECT * FROM category WHERE 1";
    return getData($sql);
}