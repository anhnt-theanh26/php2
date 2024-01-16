<?php
extract($khuyenmai);

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa khuyến mại</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa khuyến mại</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa khuyến mại</h3>
            </div>
            <!-- index.php?act=addsp -->
            <form action="index.php?act=updatekhuyenmai" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <input name="id" type="hidden" class="form-control" id="id" placeholder="ID khuyến mại" value="<?= $id ?>">
                    <div class="form-group">
                        <label for="makm">Mã khuyến mại</label>
                        <input name="makm" type="text" class="form-control" id="makm" placeholder="Mã khuyến mại" value="<?= $ma_khuyen_mai ?>">
                    </div>
                    <div class="form-group">
                        <label for="phantram">% khuyến mại</label>
                        <input name="phantram" type="number" class="form-control" id="phantram" placeholder="% khuyến mại" value="<?= $phan_tram_phuyen_mai ?>">
                    </div>
                    <div class="form-group">
                        <label for="batdau">Ngày bắt đầu khuyến mại</label>
                        <input name="batdau" type="date" class="form-control" id="batdau" placeholder="Ngày bắt đầu khuyến mại" value="<?= $ngay_bat_dau ?>">
                    </div>
                    <div class="form-group">
                        <label for="ketthuc">Ngày kết thúc khuyến mại</label>
                        <input name="ketthuc" type="date" class="form-control" id="ketthuc" placeholder="Ngày kết thúc khuyến mại" value="<?= $ngay_ket_thuc ?>">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="suakhuyenmai" id="" value="Sửa khuyến mại">
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