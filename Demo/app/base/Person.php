<?php

namespace Anhnt\Demo\base;


abstract class  Person
{
    public $id;
    public $name;
    public $address;
    public $phone;
    abstract function login($username, $password);
    abstract function logout();
    abstract function profile();
}