<table border="2">
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>IMG</th>
        <th>FIX</th>
        <th>DELETE</th>
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
            <td><a href="index.php?url=fix&&id=<?= $id ?>">fix</a></td>
            <td><a href="index.php?url=<?= $id ?>">delete</a></td>
        </tbody>
    <?php
    }
    ?>
</table>