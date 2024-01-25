<?php

namespace Anhnt\Demo\controllers;

use Anhnt\Demo\base\DBMySQL;
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
        echo 'hello file show';
    }

    public function showLogin()
    {
        echo '
            <form action="" method="post" enctype="application/x-www-form-urlencoded">
                <input type="text" name="username" id="" placeholder="Nhap usernam.....">
                <input type="password" name="password" id="" placeholder="Nhap password.....">
                <button type="submit">Login</button>
            </form>
            ';
    }


    public function showRegister() {
        echo 'show register';
    }

    public function login()
    {
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $student = new Student();
            $kq = $student->login($username, $password);
            if(isset($kq)){
                $_SESSION['username'] = $username;
                echo 'Login thanh cong';
            }else{
                echo 'Vui long nhap username va password';
            }
        }
            
    }

    public function register(){
        echo 'register';
    }
}
