<?php

interface Action
{
    function run($w, $h);
    function display($w, $h);
}