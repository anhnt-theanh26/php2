<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Cập nhật Sản Phẩm</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Cập nhật Sản Phẩm</h2>
        <?php
        if ($product) {
        ?>
            <form action="index.php?url=update-product" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" value="<?= $product['name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Giá</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm" value="<?= $product['price'] ?>">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Hình Ảnh</label>
                    <img src="<?= $product['image'] ?>" alt="" width="100px">
                    <input type="file" class="form-control" name="image" id="image">
                </div>

                <div class="mb-3">
                    <label for="id_category" class="form-label">Danh Mục</label>
                    <select class="form-select" id="id_category" name="id_category">
                        <?php foreach ($category as $key => $value) {
                            if ($value['id'] == $product['id_category']) {
                        ?>
                                <option value="<?= $value['id'] ?>" selected><?= $value['category_name'] ?></option>
                            <?php
                            } else {

                            ?>
                                <option value="<?= $value['id'] ?>"><?= $value['category_name'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="update">Cập nhật</button>
                <a href="index.php?url=/" class="btn btn-primary">Danh sách</a>
            </form>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>