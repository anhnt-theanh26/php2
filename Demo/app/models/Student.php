<?php

namespace Anhnt\Demo\models;

use Anhnt\Demo\base\Person;
use Anhnt\Demo\base\DBMySQL;

class Student extends Person
{
    // định nghĩa các thuộc tính của Student
    // và các câu lệnh truy vấn ngắn với bảng Student
    private $mssv;
    private $sdtPhuHuynh;
    private $idBangDiem;


    public function login($username, $password)
    {
        $query = "SELECT * FROM students where username='$username' and password='$password';";
        $db = new DBMySQL();
        return $db->getData($query, false);
    }

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


    // public function dangnhap($username, $password)
    // {
    //     $kq = null;
    //     try {
    //         $query = "select * from students where username = :username and password = :password;";
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
    //                 $_SESSION['username'] = $username;
    //             }
    //         }
    //     } catch (\PDOException $th) {
    //         echo $th->getMessage();
    //     }
    // }


    // public function dangky($username, $password, $img){
    //     $query = "insert into students(username, password, img) values(:username, :password, :img)";
    //     $img['name'];
    // }


    function sigup($username, $password, $img)
    {
        $query = "INSERT INTO students(username, password, img) VALUES ('$username','$password','$img');";
        $db = new DBMySQL();
        return $db->getData($query, false);
    }
    public function profile()
    {
        echo 'profile';
    }

    public function logout()
    {
        // session_unset();
        session_destroy();
    }

    public function allAccount()
    {
        $query = 'SELECT * FROM students WHERE 1';
        $db = new DBMySQL();
        return $db->getData($query, true);
    }

    // asm
    public function dangky($username, $password, $img, $email)
    {
        try {
            $queryCheck = "SELECT username FROM `students` WHERE username = '$username'";
            $db = new DBMySQL();
            $check = $db->getData($queryCheck, false);
            if ($check) {
                echo 'Ten dang nhap da ton tai';
                return -1;
            } else {
                $query = "INSERT INTO students(username, password, img, email) VALUES ('$username','$password','$img', '$email');";
                return $db->getData($query, false);
            }
        } catch (\PDOException $th) {
            echo $th->getMessage();
        }
    }
}