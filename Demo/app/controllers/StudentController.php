<?php

namespace Anhnt\Demo\controllers;

use Anhnt\Demo\models\Student;

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
        // echo 'hello file show';
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
            <form action="?url=login" method="post" enctype="application/x-www-form-urlencoded"><br>
                <input type="text" name="username" id="" placeholder="Nhap username....."><br>
                <input type="password" name="password" id="" placeholder="Nhap password....."><br>
                <button type="submit">Login</button>
            </form>
            ';
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            echo $error;
        }
    }


    function showSigup()
    {
        echo '
            <form action="?url=sigup" method="post" enctype="multipart/form-data"><br>
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
            if (empty($_POST['username']) || empty($_POST['password'])) {
                $message = urldecode('Vui lòng nhập đủ thông tin');
                header('location: index.php?url=showLogin&&error=' . $message);
            } else {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $student = new Student();
                $kq = $student->login($username, $password);
                if (is_array($kq) > 0) {
                    $_SESSION['username'] = $username;
                    echo 'Login thanh cong';
                    echo "<script>window.location.href='/php2/Demo/index.php'</script>";
                } else {
                    echo 'Login that bai';
                }
            }
        } else {
            echo 'Vui lòng nhập username và password';
        }
    }


    public function logout()
    {
        $student = new Student();
        $student->logout();
        echo "<script>window.location.href='index.php?url=home'</script>";
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
            if ($img['size'] > 0) {
                $target_dir = 'public/img/';
                $target_file = $target_dir . $img['name'];
                if (move_uploaded_file($img['tmp_name'], $target_file)) {
                    $imgUrl = $target_file;
                }
            } else {
                $imgUrl = '';
            }
            $check = $student->sigup($username, $password, $imgUrl);
            if (!$check) {
                $_SESSION['username'] = $username;
                echo "<script>alert('them thanh cong')</script>";
            }
        }
    }


    public function allAccount()
    {
        $student = new Student();
        $list = $student->allAccount();
        // var_dump($list);
        include "./public/views/students/list.php";
        // echo "<script>window.location.href = './app/views/students/list.php';</script>";
    }

    public function register()
    {
        echo 'register';
    }


    // asm
    function formdangky()
    {
        include_once('./public/views/dangky.php');
    }
    public function dangky()
    {
        if (isset($_POST["dangky"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $img = $_FILES['img'];
            $error = [];

            if (strlen($password) < 8) {
                $error['pass']['sokytu'] = 'pass phai co it nhat 8 ky tu';
            }
            if (!preg_match('/[a-z]/', $password)) {
                $error['pass']['khongdung'] = 'pass phai co chu thuong';
            }
            if (!preg_match('/[A-Z]/', $password)) {
                $error['pass']['khongdung'] = 'pass phai co chu hoa';
            }
            if (!preg_match('/\d/', $password)) {
                $error['pass']['number'] = 'pass phai co it nhat 1 chu so';
            }
            if ($img['size'] > 4 * 1024 * 1024) {
                $error['img']['img'] = 'file anh qua lon';
            }
            if (strlen($username) < 8) {
                $error['user']['sokytu'] = 'name phai co it nhat 8 ky tu';
            }
            if (!preg_match('/[a-z]/', $username)) {
                $error['user']['wordLower'] = 'name phai co it nhat  1 chu thuong';
            }
            if (!preg_match('/[A-Z]/', $username)) {
                $error['user']['wordUpper'] = 'name phai co it nhat 1 chu hoa';
            }
            if (!preg_match('/\d/', $username)) {
                $error['user']['number'] = 'name phai co it nhat 1 chu co';
            }
            if (!empty($error)) {
                $_SESSION['error'] = $error;
                header('location: ?url=formdangky');
            } else {
                $target_dir = 'public/img/';
                $target_file = $target_dir . $img['name'];
                if (move_uploaded_file($img['tmp_name'], $target_file)) {
                    $imgURL = $target_file;
                } else {
                    $imgURL = 'khong co anh';
                }
                $student = new Student();
                $student->dangky($username, $password, $imgURL, $email);
                $loginMess = $student->login($username, $password);
                if (is_array($loginMess)) {
                    $_SESSION['username'] = $loginMess;
                    header('location: ?url=home');
                }
            }
        }
    }

    function dangnhap()
    {
        if (isset($_POST['dangnhap'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $student = new Student();
            $loginMess = $student->login($username, $password);
            if (is_array($loginMess)) {
                $_SESSION['username'] = $loginMess;
                header('location: ?url=home');
            } else {
                $message = urldecode('tai khoan khong ton tai <br> vui long dang ky tai khoan');
                header('location: ?url=formdangky&&error=' . $message);

            }
        }
    }


    function dangxuat()
    {
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
            header('location: ?url=home');
        }
    }
}