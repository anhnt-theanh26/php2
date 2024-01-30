<div class="boxright">

    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div><br>
        <?php
        if (isset($_SESSION['username']) && $_SESSION['username']) {
            // var_dump($_SESSION['username']);
            extract($_SESSION['username']);
            echo 'Xin chao: ' . $username . '<br>';
            echo '<img src="' . $img . '" alt=""  width="50px" style="border-radius: 50%;"> <br>';
        ?>
            <a href="?url=dangxuat">Dăng xuat</a>
        <?php
        } else {
        ?>

            <div class="box_content form_account">
                <form action="?url=dangnhap" method="POST">

                    <h4>Tên đăng nhập</h4><br>
                    <input type="text" name="username" id="">
                    <h4>Mật khẩu</h4><br>
                    <input type="password" name="password" id=""><br>
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                    <br><input type="submit" value="Đăng nhập" name="dangnhap">
                </form>
                <li class="form_li"><a href="#">Quên mật khẩu</a></li>
                <li class="form_li"><a href="?url=formdangky">Đăng kí thành viên</a></li>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <li><a href="">Đồng hồ </a></li>
                <li><a href="">Laptop</a></li>
                <li><a href="">Điện thoại</a></li>
                <li><a href="">Ipad</a></li>
                <li><a href="">Tivi</a></li>
            </ul>
        </div>
        <div class="box_search">
            <form action="#" method="POST">
                <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <div class="selling_products" style="width:100%;">
                <img src="./public/img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./public/img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./public/img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./public/img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./public/img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
        </div>
    </div>
</div>