<?php
extract($binhluan);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa bình luận</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa bình luận</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa bình luận</h3>
            </div>
            <!-- index.php?act=updatedm -->
            <form action="index.php?act=updatebl" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung bình luận</label>
                        <input name="id" type="hidden" id="" value="<?= $id ?>">
                        <input name="noidung" type="text" class="form-control" id="exampleInputEmail1" value="<?= $noi_dung ?>">
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="suabl" id="" value="Sửa bình luận">
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