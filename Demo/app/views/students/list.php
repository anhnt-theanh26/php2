<table border="1">
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>IMG</th>
    </tr>
    <?php
    foreach ($list as $key) {
        extract($key);

    ?>
        <tbody>
            <td><?= $id ?></td>
            <td><?= $username ?></td>
            <td><?= $password ?></td>
            <td><img src="<?= $img ?>" alt="" width="100px"></td>
        </tbody>
    <?php
    }
    ?>
</table>