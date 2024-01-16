<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Khuyến mại chưa hết hạn</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Khuyến mại chưa hết hạn</li>
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
                    <h3 class="card-title">Khuyến mại chưa hết hạn</h3>

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
                                    ID
                                </th>
                                <th style="width: 15%">
                                    Mã khuyến mại
                                </th>
                                <th style="width: 15%">
                                    % khuyến mại
                                </th>
                                <th style="width: 15%">
                                    Ngày bắt đầu
                                </th>
                                <th style="width: 15%">
                                    Ngày kết thúc
                                </th>
                                <th style="width: 15%">
                                    Ngày hôm nay
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($khuyenmai as $km) {
                                extract($km);
                                $date = getdate();
                                $ngayhomnay = $date['year'] . '/' . $date['mon'] . '/' . $date['mday'];
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $ma_khuyen_mai ?>
                                    </td>
                                    <td>
                                        <?= $phan_tram_phuyen_mai ?>
                                    </td>
                                    <td>
                                        <?= date("d-m-Y", strtotime($ngay_bat_dau)) ?>
                                    </td>
                                    <td>
                                        <?= date("d-m-Y", strtotime($ngay_ket_thuc)) ?>
                                    </td>
                                    <td>
                                        <?= date("d-m-Y", strtotime($ngayhomnay)) ?>
                                    </td>
                                    <td class="project-actions text-right">
                                        <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a> -->
                                        <a class="btn btn-info btn-sm" href="index.php?act=suakhuyenmai&&id=<?= $id ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a onclick="return confirm('xóa mềm khuyến mại')" class="btn btn-danger btn-sm" href="index.php?act=xoamemkhuyenmai&&id=<?= $id ?>">
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