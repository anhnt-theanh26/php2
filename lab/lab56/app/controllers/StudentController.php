<?php

namespace Anhnt\Lab56\controllers;

use Anhnt\Lab56\base\DBMySQL;
use Anhnt\Lab56\models\Student;
use eftec\bladeone\BladeOne;

class StudentController
{

    // viết và xử lý logic liên quan Student
    public function index()
    {
        // echo  __DIR__ . '/../public/views';
        $views = './app/views';
        $cache = './app/cache';
        $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
        echo $blade->run(
            'index',
            array(
                'variable1' => 'value1',
                'varr' => '<h1>HELLO</h1>',
                'arr' => [3, 3, 5, 32, 4, 5, 3, 23, 5, 23]
            )
        );
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
            <form action="?url=login" method="post" enctype="application/x-www-form-urlencoded"><br>
                <input type="text" name="username" id="" placeholder="Nhap username....."><br>
                <input type="password" name="password" id="" placeholder="Nhap password....."><br>
                <button type="submit">Login</button>
            </form>
            ';
    }


    function showSigup()
    {
        echo '<form action="?url=sigup" method="post" enctype="multipart/form-data"><br>
                <input type="text" name="username" id="" placeholder="Nhap username....."><br>
                <input type="password" name="password" id="" placeholder="Nhap password....."><br>
                <input type="file" name="img" id="" placeholder="Nhap img....."><br>
                <button type="submit" name="sigup">SigUp</button>
            </form>
    ';
        if (isset($_SESSION['error']) && $_SESSION['error'] != "") {
            foreach ($_SESSION['error'] as $value) {
                foreach ($value as $error) {
                    echo '<p>' . $error . '</p>';
                }
            }
            unset($_SESSION['error']);
            // var_dump($_SESSION["error"]);
        }
        // include_once './public/views/students/signup.php';
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
                echo "<script>window.location.href='?url=/'</script>";
            } else {
                echo 'Vui long nhap username va password';
            }
        }
    }


    public function logout()
    {
        $student = new Student();
        $student->logout();
        echo "<script>window.location.href='?url=/'</script>";
    }

    public function sigup()
    {
        if (isset($_POST["sigup"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $img = $_FILES['img'];
            $student = new Student();
            $error = [];
            if (strlen($password) < 8) {
                $error['pass']['sokytu'] = 'pass phai co it nhat 8 ky tu';
            }
            if (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
                $error['pass']['khongdung'] = 'pass phai co chu thuong va chu hoa';
            }
            if (!preg_match('/\d/', $password)) {
                $error['pass']['number'] = 'pass phai co it nhat 1 chu so';
            }
            if (strlen($password) < 8) {
                $error['user']['sokytu'] = 'name phai co it nhat 8 ky tu';
            }
            if ($img['size'] > 4 * 1024 * 1024) {
                $error['img']['img'] = 'file anh qua lon';
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
                header('location:?url=showSigup');
            } else {
                $target_dir = 'public/img/';
                $target_file = $target_dir . $img['name'];
                if (move_uploaded_file($img['tmp_name'], $target_file)) {
                    $imgUrl = $target_file;
                } else {
                    $imgUrl = 'khong co anh';
                }
                $student->sigup($username, $password, $imgUrl);
                $check = $student->login($username, $password);
                if (is_array($check)) {
                    $_SESSION['username'] = $check;
                    header('location: ?url=/');
                }
            }
        }
    }


    public function allAccount()
    {
        // if (isset($_GET["allAccount"])) {
        $student = new Student();
        $list = $student->allAccount();
        // var_dump($list);
        include_once('app/views/students/list.php');
        // echo "<script>window.location.href = './app/views/students/list.php';</script>";
        // }
    }

    public function register()
    {
        echo 'register';
    }
}
