<?php

namespace App;

use Core\Database;

class Login extends Database
{
    public $email;
    public $pwd;
    public function login()
    {
        if (isset($_SESSION['user'])) {
            $fname = $_SESSION['user']['firsrname'];
            $lname = $_SESSION['user']['lastname'];
            return '{$lname} {$fname} <a href="/logout">Logout</a>';
        } else {
            return '
            <form action="/login" method="post">
                <div class="form-groud">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="">
                </div>
                <div class="form-groud">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="">
                </div>
                <button type="submit" name="submit" class="btn btn-primaty" id="" value="Submit">Submit</button>
            </form>
            ';
        }
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header('location:/register?error=emptyInput');
            exit();
        }

        if ($this->invalidEmail() == false) {
            header('location:/register?error=email');
            exit();
        }

        $this->getUser($this->email, $this->pwd);
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('location:/');
    }

    protected function getUser($email, $pwd)
    {
        $stmt = $this->connect()->query("select * from user where email='{$email}'");
        if ($stmt->num_rows == 0) {
            $stmt = null;
            header("location:login?error=usernotfound");
            exit();
        }

        $user = $stmt->fetch_array(MYSQLI_ASSOC);

        $checkpwd = password_verify($pwd, $user["password"]);

        if ($checkpwd == false) {
            $stmt = null;
            header("location:login?error=wrongpassword");
            exit();
        } else if ($checkpwd == true) {
            $_SERVER['user'] = $user;
        }
    }

    
}
