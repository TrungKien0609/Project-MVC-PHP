
<?php require_once "./mvc/views/include/header.php" ?>
<?php require_once "./mvc/views/include/sidebar.php" ?>
<!-- cart -->
<?php require_once "./mvc/views/include/cart.php" ?>
<main>
    <div class="log signup">
        <div class="text">
            <h1>Signup</h1>
            <p>Have Account? <a href="<?= ROOT ?>login">Login</a></p>
        </div>
        <div class="box">
            <form class="form" method="post" enctype ="multipart/form-data">
                <div class="item">
                    <i class="fas fa-check"></i>
                    <input type="text" class="input name" placeholder="Name" required name="name">
                    <span class="validate name"><?php if (isset($data['error_name'])) echo $data['error_name'] ?></span>
                    <span class="instruction">Bạn có thể sử dụng chữ cái, chữ số, gạch dưới và dấu chấm. Chiều dài từ 1 - 10 ký tự</span>
                </div>
                <div class="item">
                    <i class="fas fa-check"></i>
                    <input type="email" class="input email" placeholder="someone@abc.com" required name="email">
                    <span class="validate email"><?php if (isset($data['error_email'])) echo $data['error_email'] ?></span>
                    <span class="instruction">Điền vào email bạn muốn sử dụng cho tài khoản này</span>
                </div>

                <div class="item">
                    <i class="fas fa-check"></i>
                    <input type="password" class="input password" placeholder="Password" required name="password">
                    <span class="validate password"><?php if (isset($data['error_password'])) echo $data['error_password'] ?></span>
                    <span class="instruction">Chiều dài từ 4 đến 30 kí tự</span>
                </div>
                <div class="item">
                    <i class="fas fa-check"></i>
                    <input type="password" class="input retype_pass" placeholder="Retype Password" required name="password2">
                    <span class="validate retype_pass"><?php if (isset($data['error_retype_password'])) echo $data['error_retype_password'] ?></span>
                    <span class="instruction">Mật khẩu phải giống mật khẩu ở trên</span>
                </div>
                <input type="submit" class="button" value="Signup">
            </form>
        </div>
    </div>
</main>
<script src="<?= ASSETS ?>signup.js"></script>
<?php require_once "./mvc/views/include/footer.php"?>
<script type="module">
    <?php if (isset($data['result'])) { ?>
        if (!alert('Đăng kí thành công')) {
            window.location = window.location.protocol + "//" + window.location.host + "/MVC_Kien/Login";
        }
    <?php } ?>
</script>