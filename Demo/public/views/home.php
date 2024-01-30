<style>
    .btnCart {
        background: darkred;
        color: #fff;
        padding: 10px 12px;
        border: 1px solid darkred;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }



    .btnCart:hover {
        background: #fff;
        color: darkred;
        transition: .2s ease-in-out;
    }
</style>
<main class="catalog  mb ">

    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./public/img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>

        <div class="items">
            <?php
            if (isset($kq)) {
                foreach ($kq as $product) {
                    extract($product);
            ?>
                    <div class="box_items">
                        <div class="box_items_img">
                            <img src="<?= $img ?>" alt="">
                            <form action="?url=addtocart" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="img" value="<?= $img ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                <!-- <button class="add" type="submit">ADD TO CART</button> -->
                                <!-- <div class="add" href="">ADD TO CART</div> -->
                                <div>
                                    <button type="submit" name="addtocart" class="btnCart">Thêm vào giỏ hàng</button>
                                </div>
                                <!-- <input class="add" type="submit" name="" id="" placeholder="ADD TO CART"> -->
                            </form>
                        </div>
                        <a class="item_name" href=""><?= $name ?></a>
                        <p class="price"><?= number_format($price, 0, '', '.') ?> đ</p>

                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
    <?php include 'boxright.php'; ?>

</main>
<!-- BANNER 2 -->