<style>
    /* th {
    padding: 0 20px;
  } */
</style>
<?php


?>

<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>IDSM</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>IMG</th>
                        <th>QUANTITY</th>
                        <th>DELETE</th>
                    </tr>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $sp) {
                            extract($sp);
                    ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $id ?></td>
                                <td><?= $name ?></td>
                                <td><?= $price ?></td>
                                <td><img src="<?= $img ?>" alt="" style="width: 100px;"></td>
                                <td><?= $quantity ?></td>

                                <td>
                                    <a onclick="return confirm('xóa sản phẩm khỏi giỏ hàng')" href="?url=xoaMotSpCart&&id=<?= $id ?>"><input type="button" value="Xóa khỏi giỏ hàng" name="xoa"></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<p>Không có sản phẩm nào trong giỏ hàng</p>';
                    }
                    ?>
                </table>

            </div>
            <div class="row mb10 ">
                <a onclick="return confirm('xóa giỏ hàng')" href="?url=unsetCart"><input class="mr20" type="button" value="XÓA GIỎ HÀNG"></a>
            </div>
            <?php
            if (isset($thongbao) && isset($thongbao) != '') {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>