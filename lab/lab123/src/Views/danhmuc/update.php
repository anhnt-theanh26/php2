<?php
extract($suadm);
$linkimg = '../../view/img/';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa danh mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa danh mục</h3>
            </div>
            <!-- index.php?act=updatedm -->
            <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input type="hidden" name="id" id="" value="<?= $id ?>">
                        <input name="tendanhmuc" type="text" class="form-control" id="exampleInputEmail1" value="<?= $ten_danh_muc ?>">
                    </div>
                    <div class="form-group">
                        <label for="img_danh_muc">Ảnh danh mục</label><br>
                        <img src="<?= $linkimg . $img_danh_muc ?>" alt="" width="100px">
                        <input type="file" name="img_danh_muc" id="img_danh_muc">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="suadm" id="" value="Sửa danh mục">
                </div>
                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo $thongbao;
                }
                ?>
            </form>
    </section>
    <!-- /.content -->
</div>