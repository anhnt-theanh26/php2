<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm khuyến mại</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thêm khuyến mại</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Thêm khuyến mại</h3>
            </div>
            <!-- index.php?act=addsp -->
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="makm">Mã khuyến mại</label>
                        <input name="makm" type="text" class="form-control" id="makm" placeholder="Mã khuyến mại">
                    </div>
                    <div class="form-group">
                        <label for="phantram">% khuyến mại</label>
                        <input name="phantram" type="number" class="form-control" id="phantram" placeholder="% khuyến mại">
                    </div>
                    <div class="form-group">
                        <label for="batdau">Ngày bắt đầu khuyến mại</label>
                        <input name="batdau" type="date" value="1" class="form-control" id="batdau" placeholder="Ngày bắt đầu khuyến mại">
                    </div>
                    <div class="form-group">
                        <label for="ketthuc">Ngày kết thúc khuyến mại</label>
                        <input name="ketthuc" type="date" value="1" class="form-control" id="ketthuc" placeholder="Ngày kết thúc khuyến mại">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="addkm" id="" value="Thêm khuyến mại">
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