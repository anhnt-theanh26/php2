<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm bình luận</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thêm bình luận</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Thêm bình luận</h3>
            </div>
            <!-- index.php?act=addsp -->
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung bình luận</label>
                        <input name="noidung" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nội dung bình luận">
                    </div>
                    <div class="form-group">
                        <label for="idsp">Sản phẩm</label><br>
                        <select name="idsp" id="idsp">
                            <?php
                            foreach ($sanpham as $sp) {
                                extract($sp);
                            ?>
                                <option value="<?= $id ?>"><?= $ten_san_pham ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idkh">Khách hàng</label><br>
                        <select name="idkh" id="idkh">
                            <?php
                            foreach ($khachhang as $kh) {
                                extract($kh);
                            ?>
                                <option value="<?= $id ?>"><?= $ten_khach_hang ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="thembinhluan" id="" value="Thêm bình luận">
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