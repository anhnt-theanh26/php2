<?php
namespace Anhnt\Demo\controllers;
use Anhnt\Demo\models\Student;

require_once('../base/DBMySQL.php');
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

    // public function login($name, $pass)
    // {
    //     $student = new Student();
    //     $kq = $student->login($username, $password);
    //     if(isset($kq))
    //         echo 
    // }

}