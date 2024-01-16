<?php

// require_once("./BaseBank.php");
// require_once("./TpBank.php");
// $acount = new BaseBank('anhnt', '0987654321', '0');
// $acount1 = new TpBank('nta', '1234567890', '1000000');
// $acount1->thongTinTK();
// $acount1->chuyenTien(100000, $acount);
// $acount->thongTinTK();

include("./kethua/User.php");
$user = new User();
var_dump($user->getUser());
