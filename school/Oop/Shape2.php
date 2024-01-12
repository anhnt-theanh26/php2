<?php

// thay vì dùng interface thì sử dụng trait
trait Shape2{
    function disPlay()
    {
        echo 'anc';
    }
    function infoMenu()
    {
        echo   'menu ';
    }
}