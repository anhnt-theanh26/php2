<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Số lượng bình luận của sản phẩm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Số lượng bình luận của sản phẩm</li>
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
                    <h3 class="card-title">Số lượng bình luận của sản phẩm</h3>

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
                                    IDSP
                                </th>
                                <th style="width: 20%">
                                    Tên sản phẩm
                                </th>
                                <th style="width: 20%">
                                    IMG
                                </th>
                                <th style="width: 15%">
                                    Số bình luận
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($binhluan as $bl) {
                                extract($bl);
                                $linkimg = '../../view/img/' . $img_dai_dien;
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <?= $idsp ?>
                                    </td>

                                    <td>
                                        <?= $ten_san_pham ?>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?= $linkimg ?>">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <?= $sobinhluan ?>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="index.php?act=binhluansanpham&&idsp=<?= $idsp ?>">
                                            <i class="fas fa-folder">
                                            </i>
                                            Danh sách
                                        </a>
                                        <!-- <a class="btn btn-info btn-sm" href="index.php?act=suasanpham&&id=<?= 'id' ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a onclick="return confirm('xóa sản phẩm')" class="btn btn-danger btn-sm" href="index.php?act=xoamemsanpham&&id=<?= $id ?>">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a> -->
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