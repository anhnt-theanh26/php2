<?php
extract($banner);
$linkimg = '../../view/img/' . $img_banner;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa banner</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa banner</h3>
            </div>
            <!-- index.php?act=updatesp -->
            <form action="index.php?act=updatebanner" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <input name="id" type="hidden" value="<?= $id ?>">
                    <div class="form-group">
                        <label for="tenbanner">Tên banner</label>
                        <input name="tenbanner" type="text" class="form-control" id="tenbanner" placeholder="Tên banner" value="<?= $ten_banner ?>">
                    </div>
                    <div class="form-group">
                        <label for="linkbanner">Link banner</label>
                        <input name="linkbanner" type="text" class="form-control" id="linkbanner" placeholder="Link banner" value="<?= $link ?>">
                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh banner</label><br>
                        <img src="<?= $linkimg ?>" alt="" width="100px">
                        <input type="file" name="img" id="img">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="suabn" id="" value="Sửa banner">
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