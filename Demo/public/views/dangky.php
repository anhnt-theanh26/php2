<main class="catalog  mb ">

  <div class="boxleft">

    <div class="box_title">Đăng ký thành viên</div>
    <div class="box_content form_account">
      <form action="?url=dangky" method="post" enctype="multipart/form-data">
        <div>
          <p>Email</p>
          <input type="email" name="email" placeholder="email">
        </div>
        <div>
          Tên đăng nhập
          <input type="text" name="username" placeholder="username">
        </div>
        Mật khẩu
        <div>
          <input type="password" name="password" placeholder="password">
        </div>
        IMG
        <div>
          <input type="file" name="img" placeholder="img">
        </div><br>
        <input type="submit" value="Đăng ký" name="dangky">
        <!-- <button type="submit">SigUp</button> -->
        <button></button>
        <input type="reset" value="Nhập lại">
      </form>
      <?php
      if (isset($_SESSION['error']) && $_SESSION['error'] != "") {
        foreach ($_SESSION['error'] as $value) {
          foreach ($value as $error) {
            echo '<p>'.$error.'</p>';
          }
        }
        unset($_SESSION['error']);
        // var_dump($_SESSION["error"]);
      }
      ?>
    </div>

  </div>
  <?php include 'boxright.php'; ?>

</main>
