<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách bình luận sản phẩm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Danh sách bình luận sản phẩm</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách bình luận sản phẩm</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 4%">
                                    idbl
                                </th>
                                <th style="width: 20%">
                                    Nội dung
                                </th>
                                <th style="width: 20%">
                                    Tên khách hàng
                                </th>
                                <th style="width: 20%">
                                    Ngày bình luận
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($binhluan as $bl) {
                                extract($bl);
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <?= $idbl ?>
                                    </td>
                                    <td>
                                        <?= $noi_dung ?>
                                    </td>
                                    <td>
                                        <?= $ten_khach_hang ?>
                                    </td>
                                    <td>
                                        <?= date("d-m-Y", strtotime($ngay_binh_luan)) ?>
                                    </td>
                                    <td class="project-actions text-right">
                                        <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a> -->
                                        <a class="btn btn-info btn-sm" href="index.php?act=suabinhluan&&idbl=<?= $idbl ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a onclick="return confirm('xóa bình luận')" class="btn btn-danger btn-sm" href="index.php?act=xoabinhluan&&idbl=<?= $idbl ?>&&idsp=<?= $idsp ?>">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->