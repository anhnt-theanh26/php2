<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Logo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Logo</li>
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
                    <h3 class="card-title">Logo</h3>

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
                                    id
                                </th>
                                <th style="width: 15%">
                                    Ảnh
                                </th>
                                <th style="width: 15%">
                                    Giới thiệu
                                </th>
                                <th style="width: 15%">
                                    Địa chỉ
                                </th>
                                <th style="width: 15%">
                                    SĐT
                                </th>
                                <th style="width: 15%">
                                    Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            extract($logo);
                            $linkimg = '../../view/img/' . $img;
                            ?>
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <?= $id ?>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar" src="<?= $linkimg ?>">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <?= $gioi_thieu ?>
                                </td>
                                <td>
                                    <?= $dia_chi ?>
                                </td>
                                <td>
                                    <?= $sdt ?>
                                </td>
                                <td>
                                    <?= $email ?>
                                </td>
                                <td class="project-actions text-right">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a> -->
                                    <a class="btn btn-info btn-sm" href="index.php?act=sualogo&&id=<?= $id ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <!-- <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a> -->
                                </td>
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