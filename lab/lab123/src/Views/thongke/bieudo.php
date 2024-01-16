<?php
$daban = 0;
$tien = 0;
foreach ($thongke as $tk) {
    extract($tk);
    $daban += $so_luong_da_ban;
    $tien += $thanh_tien;
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biểu đồ thống kê</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Biểu đồ thống kê</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card-body p-0">

                <div id="piechart"></div>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script type="text/javascript">
                    // Load google charts
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    // Draw the chart and set the chart values
                    function drawChart() {
                        const data = google.visualization.arrayToDataTable([
                            ['Danh mục', 'Số lượng'],
                            <?php
                            foreach ($thongke as $tk) {
                                extract($tk);
                                echo "['$ten_san_pham', $so_luong_da_ban],";
                            }
                            ?>
                        ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {
                            'title': 'Biểu đồ thống kê sản phẩm',
                            'width': 1000,
                            'height': 500,
                        };

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
    </div>
</div>