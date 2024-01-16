<?php
extract($sanpham);
$linkimg = '../../view/img/';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
            </div>
            <!-- index.php?act=updatesp -->
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <input name="id" type="hidden" value="<?= $id ?>">
                    <input name="iddm" type="hidden" value="<?= $iddm ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input name="tensanpham" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="<?= $ten_san_pham ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                        <input name="giasanpham" type="text" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm" value="<?= $gia_san_pham ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                        <input name="soluongsanpham" type="number" class="form-control" id="exampleInputEmail1" placeholder="Số lượng sản phẩm" value="<?= $so_luong ?>">
                    </div>

                    <div class="form-group">
                        <label for="anhdaidien">Ảnh đại diện sản phẩm</label><br>
                        <img src="<?= $linkimg . $img_dai_dien ?>" alt="" width="100px">
                        <input type="file" name="anhdaidien" id="anhdaidien">
                    </div>
                    <div class="form-group">
                        <label for="anh1">Ảnh 1</label><br>
                        <img src="<?= $linkimg . $img_san_pham1 ?>" alt="" width="100px">
                        <input type="file" name="anh1" id="anh1">
                    </div>
                    <div class="form-group">
                        <label for="anh2">Ảnh 2</label><br>
                        <img src="<?= $linkimg . $img_san_pham2 ?>" alt="" width="100px">
                        <input type="file" name="anh2" id="anh2">
                    </div>
                    <div class="form-group">
                        <label for="anh3">Ảnh 3</label><br>
                        <img src="<?= $linkimg . $img_san_pham3 ?>" alt="" width="100px">
                        <input type="file" name="anh3" id="anh3">
                    </div>
                    <div class="form-group">
                        <label for="iddm">Danh mục sản phẩm</label><br>
                        <select name="iddm" id="iddm">
                            <?php
                            foreach ($danhmuc as $dm) {
                                extract($dm);
                                if ($iddm == $id) {
                                    $iddm_old = "selected";
                            ?>
                                    <option value="<?= $id ?>" <?= $iddm_old ?>><?= $ten_danh_muc ?></option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?= $id ?>"><?= $ten_danh_muc ?></option>
                            <?php
                                }
                            }

                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                        <textarea name="mota" id="mota" cols="30" rows="10"><?= $mo_ta_san_pham ?></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="updatesanpham" id="" value="Sửa sản phẩm">
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