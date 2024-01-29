<?php

namespace Anhnt\Lab56\controllers;

use Anhnt\Lab56\base\DBMySQL;
use Anhnt\Lab56\models\Student;

class StudentController
{

    // viết và xử lý logic liên quan Student
    public function index()
    {
        echo 'Welcome index student controller. <br>';
    }

    public function edit()
    {
        echo 'hello file eidt';
    }
    public function delete()
    {
        echo 'hello file delete';
    }
    public function show()
    {
        echo 'hello file show';
    }


    public function showRegister()
    {
        echo 'show register';
    }

    public function news()
    {
        echo 'news';
    }


    public function product()
    {
        echo 'product';
    }



    public function showLogin()
    {
        echo '
            <form action="/php2/lab/lab56/?login" method="post" enctype="application/x-www-form-urlencoded"><br>
                <input type="text" name="username" id="" placeholder="Nhap username....."><br>
                <input type="password" name="password" id="" placeholder="Nhap password....."><br>
                <button type="submit">Login</button>
            </form>
            ';
    }


    function showSigup()
    {
        echo '
            <form action="/php2/lab/lab56/?sigup" method="post" enctype="multipart/form-data"><br>
                <input type="text" name="username" id="" placeholder="Nhap username....."><br>
                <input type="password" name="password" id="" placeholder="Nhap password....."><br>
                <input type="file" name="img" id="" placeholder="Nhap img....."><br>
                <button type="submit">SigUp</button>
            </form>
            ';
    }



    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $student = new Student();
            $kq = $student->login($username, $password);
            if (isset($kq)) {
                $_SESSION['username'] = $username;
                echo 'Login thanh cong';
                echo "<script>window.location.href='/php2/Demo/index.php'</script>";
            } else {
                echo 'Vui long nhap username va password';
            }
        }
    }


    public function logout()
    {
        if (isset($_GET['logout'])) {
            $student = new Student();
            $student->logout();
            // echo "<script>window.location.href='/php2/Demo/?logout'</script>";
        }
    }



    public function sigup()
    {
        if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_FILES['img'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $img = $_FILES['img'];
            $student = new Student();
            if($img['size'] >0){
                $target_dir = 'public/img/';
                $target_file = $target_dir . $img['name'];
                if (move_uploaded_file($img['tmp_name'], $target_file)) {
                    $imgUrl = $target_file;
                }
            }else{
                $imgUrl = '';
            }
            $check = $student->sigup($username, $password, $imgUrl);
            if (!$check) {
                $_SESSION['username']=$username;
                echo "<script>alert('them thanh cong')</script>";
            }
        }
    }


    public function allAccount()
    {
        if (isset($_GET["allAccount"])) {
            $student = new Student();
            $list = $student->allAccount();
            // var_dump($list);
            include_once('app/views/students/list.php');
            // echo "<script>window.location.href = './app/views/students/list.php';</script>";
        }
    }

    public function register()
    {
        echo 'register';
    }
}
?>
