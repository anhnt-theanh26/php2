<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="conten">
        <h1>category</h1>
        <table id='category_table'>
            <?php
            foreach ($categories as $category) :
            ?>
                <tr>
                    <form action="#" method="post">
                        <td>
                            <input type="text" name="categoryName" value="<?= $category['categoryName'] ?>">
                        </td>
                        <td>
                            <input type="hidden" name="action" value="update_category">
                            <input type="hidden" name="categoryID" value="<?= $category['categoryID'] ?>">
                            <input type="submit" value="update">
                        </td>
                    </form>
                    <td>
                        <?php if ($category['productCount'] == 0) : ?>
                            <form action="#" method="post">
                                <input type="hidden" name="action" value="delete_category">
                                <input type="hidden" name="categoryID" value="<?= $category['categoryID'] ?>">
                                <input type="submit" value="delete">
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h2>add category</h2>
        <form action="#" method="post" id="add_category_form">
            <input type="hidden" name="action" value="add_category">
            <input type="text" name="categoryName" placeholder="name">
            <input type="submit" value="add">
        </form>
    </div>
</body>

</html>