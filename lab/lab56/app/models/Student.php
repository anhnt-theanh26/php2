<?php

namespace Anhnt\Lab56\models;

use Anhnt\Lab56\base\Person;
use Anhnt\Lab56\base\DBMySQL;

class Student extends Person
{
    // định nghĩa các thuộc tính của Student
    // và các câu lệnh truy vấn ngắn với bảng Student
    private $mssv;
    private $sdtPhuHuynh;
    private $idBangDiem;


    // public function login($username, $password)
    // {
    //     $query = "SELECT * FROM students where username='$username' and password='$password';";
    //     $db = new DBMySQL();
    //     return $db->getData($query, false);
    // }

    // public function login($username, $password)
    // {
    //     $kq = null;
    //     try {
    //         $query = "SELECT * FROM students where username = :username and password = :password;";
    //         $stmp = DBMySQL::getDBInstance()->prepare($query);
    //         $stmp->bindParam(':username', $username);
    //         $stmp->bindParam(':password', $password);
    //         $stmp->execute();
    //         $result = $stmp->fetchAll(\PDO::FETCH_ASSOC);
    //         if ($stmp->rowCount() > 0) {
    //             $first = $result[0];
    //             $username = $first['username'];
    //             $passwordC = $first['password'];
    //             if ($password == $passwordC) {
    //                 $kq = 1;
    //                 $_SESSION['user'] = $username;
    //             }
    //         }
    //     } catch (\PDOException $e) {
    //         echo $e->getMessage();
    //     }
    //     return $kq;
    // }


    public function login($username, $password)
    {
        $query = "SELECT * FROM students WHERE username=:username AND password=:password";
        $stmp = DBMySQL::getDBInstance()->prepare($query);
        $stmp->bindParam(":username", $username);
        $stmp->bindParam(":password", $password);
        $stmp->execute();
        $result = $stmp->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }


    public function sigup($username, $password, $img)
    {
        $query = "SELECT * FROM students WHERE username=:username";
        $stmp = DBMySQL::getDBInstance()->prepare($query);
        $stmp->bindParam(":username", $username);
        $stmp->execute();
        if ($stmp->rowCount() > 0) {
            echo "ten tai khoan da ton tai";
            return true;
        } else {
            $query = "INSERT INTO students(username, password, img) VALUES (:username, :password, :img);";
            $stmp = DBMySQL::getDBInstance()->prepare($query);
            $stmp->bindParam(":username", $username);
            $stmp->bindParam(":password", $password);
            $stmp->bindParam(":img", $img);
            $stmp->execute();
            return false;
        }
    }


    // function sigup($username, $password, $img)
    // {
    //     $query = "INSERT INTO students(username, password, img) VALUES ('$username','$password','$img');";
    //     $db = new DBMySQL();
    //     $_SESSION['username']= $this->login($username, $password);
    //     return $db->getData($query, false);
    // }


    public function profile()
    {
        echo 'profile';
    }

    public function logout()
    {
        unset($_SESSION['username']);
    }

    public function allAccount()
    {
        $query = 'SELECT * FROM students WHERE 1';
        $db = new DBMySQL();
        return $db->getData($query, true);
    }
}
