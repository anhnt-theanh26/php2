<?php

namespace Anhnt\Demo\models;

use Anhnt\Demo\base\DBMySQL;

class Product
{
    public function listSP()
    {
        $query = "SELECT * FROM products WHERE trangthai = '0';";
        $db = new DBMySQL;
        return $db->getData($query, true);
    }
}
