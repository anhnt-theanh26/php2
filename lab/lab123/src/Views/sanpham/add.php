<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</h3>
            </div>
            <!-- index.php?act=addsp -->
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                        <input name="price" type="number" min="1" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh đại diện sản phẩm</label><br>
                        <input type="file" name="img" id="img">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                        <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="addsanpham" id="" value="Thêm sản phẩm">
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