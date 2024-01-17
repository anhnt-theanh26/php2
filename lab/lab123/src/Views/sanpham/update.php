<?php
extract($car);
// var_dump($car);
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
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="<?= $name ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                        <input name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm" value="<?= $price ?>">
                    </div>

                    <div class="form-group">
                        <label for="img">Ảnh đại diện sản phẩm</label><br>
                        <img src="<?= $img ?>" alt="" width="100px"><br>
                        <input type="file" name="img" id="img">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                        <textarea name="mota" id="mota" cols="30" rows="10"><?= $description ?></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="updatesanpham" id="" value="Sửa sản phẩm">
                </div>
            </form>

    </section>
    <!-- /.content -->
</div>