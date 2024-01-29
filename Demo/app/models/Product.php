<?php
namespace Anhnt\Demo\models;

use Anhnt\Demo\base\DBMySQL;

class Product
{
    public function listSP()
    {
        $query = "SELECT * FROM products WHERE status = '0';";
        $db = new DBMySQL;
        $db->getData($query, true);
    }
}