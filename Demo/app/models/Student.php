<?php
namespace Anhnt\Demo\models;

use Anhnt\Demo\base\Person;
use DBMySQL;

class Student extends Person
{
    // định nghĩa các thuộc tính của Student
    // và các câu lệnh truy vấn ngắn với bảng Student
    private $mssv;
    private $sdtPhuHuynh;
    private $idBangDiem;

    public function login($username, $password)
    {
        $kq = null;
        try {
            $query = "SELECT * FROM students where username='$username' and password='$password';";
            $stmp = DBMySQL::getDBInstance()->prepare($query);
            $stmp->bindParam('username', $username);
            $stmp->execute();
            $result = $stmp->fetchAll(\PDO::FETCH_ASSOC);
            if ($stmp->rowCount() > 0) {
                $first = $result[0];
                $username = $first['username'];
                $passwordC = $first['password'];
                session_start();
                if ($password == $passwordC) {
                    $kq = 1;
                    $_SESSION['user'] = $username;
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return $kq;
    }

    public function profile()
    {
        echo 'profile';
    }

    public function logout()
    {
        session_destroy();
    }

}