<?php

namespace app;

use app\core\Database;

class Login extends Database 
{
    public function login()
    {
        if (isset($_SESSION["user"])) {
            $fname = $_SESSION['user']['firstname'];
            $lname = $_SESSION['user']['lastname'];
            return '{$lname} {$fname} <a href="/logout">logout</a>';
        } else {
            return '
            <form action="/login" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" id="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="">
                </div>
                <button type="submit" name="submit" class="btn btn-primary" value="Submit">Submit</button>
            </form>
            ';
        }
    }

    protected function getUser($email, $pwd)
    {
        $stmt = $this->connect()->query("SELECT * FROM users WHERE email='{$email}'");

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
            $_SESSION["user"] = $user;
        }
    }

    public function loginUser()
    {
        if ($this->emtyInput() == false) {
            header('location:register?error=emtyInput');
            exit();
        }
        if ($this->invaliEmail() == false) {
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
}
