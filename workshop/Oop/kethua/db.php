<?php
class Db
{
    function getConnect()
    {
        $connect = new PDO(
            "mysql:host=" . '127.0.0.1'
                . ";dbname=" . 'demo_mvc'
                . ";charset=" . 'utf8',
            'root',
            ''
        );
        return $connect;
    }



    // nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
    //sẽ chạy được các câi truy vấn như thêm sửa xóa
    function getData($query, $getAll = true)
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
}
