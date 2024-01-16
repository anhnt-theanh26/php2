<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Thêm danh mục</h3>
            </div>
            <!-- index.php?act= -->
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input name="tendanhmuc" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                    </div>

                    <div class="form-group">
                        <label for="img_danh_muc">Ảnh danh mục</label><br>
                        <input type="file" name="img_danh_muc" id="img_danh_muc">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="themsanpham" id="" value="Thêm danh mục">
                </div>
                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo '<p>' . $thongbao . '</p>';
                }
                ?>

            </form>

    </section>
    <!-- /.content -->
</div>