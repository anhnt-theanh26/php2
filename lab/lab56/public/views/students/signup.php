<form action="?url=sigup" method="post" enctype="multipart/form-data"><br>
    <input type="text" name="username" id="" placeholder="Nhap username....."><br>
    <input type="password" name="password" id="" placeholder="Nhap password....."><br>
    <input type="file" name="img" id="" placeholder="Nhap img....."><br>
    <button type="submit" name="sigup">SigUp</button>
</form>
<?php
if (isset($_SESSION['error']) && $_SESSION['error'] != "") {
    foreach ($_SESSION['error'] as $value) {
        foreach ($value as $error) {
            echo '<p>' . $error . '</p>';
        }
    }
    unset($_SESSION['error']);
    // var_dump($_SESSION["error"]);
} 

