<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh mục</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
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
                    <h3 class="card-title">Danh mục</h3>

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
                                    id
                                </th>
                                <th style="width: 30%">
                                    Tên sản phẩm
                                </th>
                                <th style="width: 10%">
                                    Số lượng
                                </th>
                                <th style="width: 10%">
                                    Đơn giá
                                </th>
                                <th style="width: 10%">
                                    Thành tiền
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tongtien = 0;
                            foreach ($hoadon as $hd) {
                                extract($hd);
                                $tongtien += $thanh_tien;
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $ten_san_pham ?>
                                    </td>
                                    <td>
                                        <?= $so_luong ?>
                                    </td>
                                    <td>
                                        <?= number_format($don_gia, 0, ',', '.') ?>
                                    </td>
                                    <td>
                                        <?= number_format($thanh_tien, 0, ',', '.') ?>
                                    </td>
                                    <!-- <td class="project-actions text-right"> -->
                                    <!-- <a class="btn btn-primary btn-sm" href="index.php?act=dangchuanbi&&id=<?= $id ?>">
                                            <i class="fas fa-folder">
                                            </i>
                                            Chuẩn bị
                                        </a> -->
                                    <!-- <a class="btn btn-info btn-sm" href="index.php?act=suadanhmuc&&id=">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a onclick="return confirm('xóa mềm danh mục')" class="btn btn-danger btn-sm" href="index.php?act=xoadanhmuc&&id=">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a> -->
                                    <!-- </td> -->
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td colspan="3" style="text-align: center;">Tổng tiền:</td>
                                <td colspan="3" style="text-align: center;"><?= number_format($tongtien, 0, ',', '.') ?> đ</td>
                            </tr>
                        </tbody>

                    </table>
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>Tên người nhận</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Trạng thái</th>
                                <th>Ngày đặt</th>
                            </tr>
                        </thead>
                        <?php
                        if ($trang_thai == 0) {
                            $trangthai = 'Chờ xác nhận';
                        }
                        if ($trang_thai == 1) {
                            $trangthai = 'Đang chuẩn bị';
                        }
                        if ($trang_thai == 2) {
                            $trangthai = 'Đang giao';
                        }
                        if ($trang_thai == 3) {
                            $trangthai = 'Đã giao';
                        }
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $ten_kh ?></td>
                                <td><?= $dia_chi ?></td>
                                <td><?= $sdt ?></td>
                                <td><?= $email ?></td>
                                <td><?= $trangthai ?></td>
                                <td><?= date("d/m/Y", strtotime($ngay_dat)) ?></td>
                            </tr>
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