<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dự án mẫu</title>
   <link rel="stylesheet" href="./public/css/css.css">
   <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
   <style>
      #totalProduct {
         color: #fff;
         background-color: red;
         font-size: 12px;
         padding: 5px;
         border-radius: 50%;
      }
   </style>
</head>

<body>
   <div class="boxcenter">
      <!-- BIGIN HEADER -->
      <header>
         <div class="row mb header">
            <h1>SIÊU THỊ TRỰC TUYẾN</h1>
         </div>
         <div class="row mb menu">
            <ul>

               <li class="dropdown">
                  <a class="dropdownbtn" href="?url=home">Trang chủ</a>
                  <!-- <div class="dropdown_content">
                     <a href="">Đồng hồ</a>
                     <a href="">Điện thoại</a>
                     <a href="">Laptop</a>
                  </div> -->
               <li class="dropdown">
                  <a class="dropdownbtn" href="?url=news">Tin tức</a>
                  <!-- <div class="dropdown_content">
                     <a href="">Đồng hồ</a>
                     <a href="">Điện thoại</a>
                     <a href="">Laptop</a>
                  </div> -->
               <li class="dropdown">
                  <a class="dropdownbtn" href="?url=product">Sản Phẩm</a>
                  <!-- <div class="dropdown_content">
                     <a href="">Đồng hồ</a>
                     <a href="">Điện thoại</a>
                     <a href="">Laptop</a>
                  </div> -->
               <li class="dropdown">
                  <a class="dropdownbtn" href="?url=product">Bình luận</a>
                  <!-- <div class="dropdown_content">
                     <a href="">Đồng hồ</a>
                     <a href="">Điện thoại</a>
                     <a href="">Laptop</a>
                  </div> -->
               </li>
               <!-- <li class="dropdown">
                  <a class="dropdownbtn" href="?url=cart">Giỏ hàng <span>2</span></a>
                  <div class="dropdown_content">
                     <a href="">Đồng hồ</a>
                     <a href="">Điện thoại</a>
                     <a href="">Laptop</a>
                  </div>
               </li> -->
               <li class="dropdown">
                  <a class="dropdownbtn" href="?url=cart">Giỏ hàng</a>
                  <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
               </li>
            </ul>
         </div>
      </header>