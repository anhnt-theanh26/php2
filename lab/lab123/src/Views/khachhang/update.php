<?php
extract($khachhang);
$linkimg = '../../view/img/' . $img_khach_hang;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa khách hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa khách hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa khách hàng</h3>
            </div>
            <!-- index.php?act=addnguoidung -->
            <form action="index.php?act=updatekhachhang" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <input name="id" type="hidden" value="<?= $id ?>">
                        <label for="ten">Tên khách hàng</label>
                        <input name="ten" type="text" class="form-control" id="ten" placeholder="Tên khách hàng" value="<?= $ten_khach_hang ?>">
                    </div>
                    <div class="form-group">
                        <label for="tendangnhap">Tên đăng nhập khách hàng</label>
                        <input name="tendangnhap" type="text" class="form-control" id="tendangnhap" placeholder="Tên đăng nhập khách hàng" value="<?= $ten_dang_nhap ?>">
                    </div>
                    <div class="form-group">
                        <label for="matkhau">Mật khẩu mới</label>
                        <input name="matkhaucu" type="hidden" class="form-control" id="matkhaucu" placeholder="Mật khẩu cu" value="<?= $mat_khau ?>">
                        <input name="matkhau" type="password" class="form-control" id="matkhau" placeholder="Mật khẩu mới">
                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh đại diện khách hàng</label><br>
                        <img src="<?= $linkimg ?>" alt="" width="100px">
                        <input name="img" type="file">
                    </div>
                    <div class="form-group">
                        <label for="email">Email khách hàng</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email khách hàng" value="<?= $email_khach_hang ?>">
                    </div>
                    <div class="form-group">
                        <label for="sdt">Sdt khách hàng</label>
                        <input name="sdt" type="number" class="form-control" id="sdt" placeholder="Sdt khách hàng" value="<?= $sdt_khach_hang ?>">
                    </div>
                    <div class="form-group">
                        <label for="diachi">Địa chỉ khách hàng</label>
                        <input name="diachi" type="text" class="form-control" id="diachi" placeholder="Địa chỉ khách hàng" value="<?= $dia_chi_khach_hang ?>">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="suakh" id="" value="Sửa khách hàng">
                </div>
                <?php
                if (isset($thongbao) && ($thongbao) != "") {
                    echo $thongbao;
                }
                ?>
            </form>

    </section>
    <!-- /.content -->
</div>