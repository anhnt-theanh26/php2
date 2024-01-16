<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Danh sách</li>
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
                    <h3 class="card-title">Danh sách</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool">
                            <form action="index.php?act=locdonhang" method="post">
                                <select name="id" id="" style="height: 26px;">
                                    <option value="0">Chờ xác nhận</option>
                                    <option value="1">Đang chuẩn bị</option>
                                    <option value="2">Đang giao</option>
                                    <option value="3">Giao thành công</option>
                                </select>
                                <input type="submit" name="loc" id="" value="Lọc" style="height: 26px;">
                            </form>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
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
                                    id
                                </th>
                                <th style="width: 14%">
                                    Tên khách hàng
                                </th>
                                <th style="width: 11%">
                                    Số điện thoại
                                </th>
                                <th style="width: 13%">
                                    Địa chỉ
                                </th>
                                <th style="width: 10%">
                                    Khuyến mại
                                </th>
                                <th style="width: 10%">
                                    Ngày đặt
                                </th>
                                <th style="width: 10%">
                                    Tổng tiền
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($hoadon as $hd) {
                                extract($hd);
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a href="index.php?act=chitiethoadon&&id=<?= $id ?>" style="color: black;">
                                            <?= $id ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?act=chitiethoadon&&id=<?= $id ?>" style="color: black;">
                                            <?= $ten_kh ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?act=chitiethoadon&&id=<?= $id ?>" style="color: black;">
                                            <?= $sdt ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?act=chitiethoadon&&id=<?= $id ?>" style="color: black;">
                                            <?= $dia_chi ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?act=chitiethoadon&&id=<?= $id ?>" style="color: black;">
                                            <?= $khuyen_mai ?> %
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?act=chitiethoadon&&id=<?= $id ?>" style="color: black;">
                                            <?= date("d-m-Y", strtotime($ngay_dat)) ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?act=chitiethoadon&&id=<?= $id ?>" style="color: black;">
                                            <?= number_format($tong_tien, 0, ',', '.') ?> đ
                                        </a>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="index.php?act=chitiethoadon&&id=<?= $id ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Chi tiết
                                        </a>
                                        <?php
                                        if ($trang_thai == 0) {
                                        ?>
                                            <a onclick="return confirm('Tiếp nhận đơn hàng')" class="btn btn-primary btn-sm" href="index.php?act=xacnhandonhang&&id=<?= $id ?>">
                                                <i class="fas fa-folder">
                                                </i>
                                                Tiếp nhận
                                            </a>
                                        <?php
                                        } else if ($trang_thai == 1) {
                                        ?>
                                            <a onclick="return confirm('đơn hàng đã chuẩn bị xong và đang giao')" class="btn btn-primary btn-sm" href="index.php?act=chuanbixong&&id=<?= $id ?>">
                                                <i class="fas fa-folder">
                                                </i>
                                                Chuẩn bị xong
                                            </a>
                                        <?php
                                        } else if ($trang_thai == 2) {
                                        ?>
                                            <a onclick="return confirm('đơn hàng đã giao thành công')" class="btn btn-primary btn-sm" href="index.php?act=giaohangthanhcong&&id=<?= $id ?>">
                                                <i class="fas fa-folder">
                                                </i>
                                                Giao thành công
                                            </a>

                                            <a onclick="return confirm('xóa đơn hàng')" class="btn btn-danger btn-sm" href="index.php?act=xoadonhang&&id=<?= $id ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        <?php
                                        }
                                        ?>
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