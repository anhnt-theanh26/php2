<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Banner xóa mềm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Banner xóa mềm</li>
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
                    <h3 class="card-title">Banner xóa mềm</h3>

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
                                <th style="width: 20%">
                                    Tên
                                </th>
                                <th style="width: 20%">
                                    Ảnh
                                </th>
                                <th style="width: 20%">
                                    Link
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($banner as $bn) {
                                extract($bn);
                                $linkimg = '../../view/img/' . $img_banner;
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $ten_banner ?>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?= $linkimg ?>">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <?= $link ?>
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="index.php?act=restorebanner&&id=<?= $id ?>">
                                            <i class="fas fa-folder">
                                            </i>
                                            Restore
                                        </a>
                                        <a class="btn btn-info btn-sm" href="index.php?act=suabanner&&id=<?= $id ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a onclick="return confirm('xóa cứng banner')" class="btn btn-danger btn-sm" href="index.php?act=xoacungbanner&&id=<?= $id ?>">
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