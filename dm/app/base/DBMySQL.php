<?php
namespace Anhnt\Demo\base;
require_once('env.php');

class DBMySQL
{
    // chứa thông tin kết nối

    static $db;
    static function getDBInstance()
    {
        if (!isset($db)) {
            //khởi tạo db
            $db = new \PDO(
                "mysql:host=" . DBHOST
                . ";dbname=" . DBNAME
                . ";charset=" . DBCHARSET,
                DBUSER,
                DBPASS
            );
        }
        return $db;
    }


    // nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
    //sẽ chạy được các câi truy vấn như thêm sửa xóa
    function getData($query, $getAll = true)
    {
        $conn = $this->getDBInstance();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }


}