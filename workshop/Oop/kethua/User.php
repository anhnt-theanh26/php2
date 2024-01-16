<?php
require_once('db.php');

class User extends Db{
    public function getUser() {
        $sql = "SELECT * FROM `product` WHERE 1";
        return $this->getData($sql);
    }
}