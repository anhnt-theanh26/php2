<?php
extract($tintuc);
$linkimg = '../../view/img/' . $img_tin_tuc;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa tin tức</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa tin tức</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa tin tức</h3>
            </div>
            <!-- index.php?act=updatetintuc -->
            <form action="index.php?act=updatetintuc" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="" value="<?= $id ?>">
                        <label for="exampleInputEmail1">Tiêu đề</label>
                        <input name="tieude" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề" value="<?= $tieu_de ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung</label>
                        <textarea name="mota" id="mota" cols="30" rows="10"><?= $noi_dung ?></textarea>

                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh tin tức</label><br>
                        <img src="<?= $linkimg ?>" alt="" width="100px">
                        <input type="file" name="img" id="img">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Danh mục tin tức</label><br>
                        <select name="iddm" id="iddm">
                            <?php
                            foreach ($danhmuc as $dm) {
                                extract($dm);
                                if ($iddm == $id) {
                                    $dm_old = "selected";
                            ?>
                                    <option value="<?= $id ?>" <?= $dm_old ?>><?= $ten_danh_muc ?></option>
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



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="suanews" id="" value="Sửa tin tức">
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