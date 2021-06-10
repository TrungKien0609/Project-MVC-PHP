<?php require_once "./mvc/views/include/header.php"?>
<?php require_once "./mvc/views/include/sidebar.php" ?>
<!-- cart -->
<?php require_once "./mvc/views/include/cart.php" ?>
    <main>
        <div class="log">
            <div class="text">
                <h1>Login</h1>
                <p>No Account? <a href="<?= ROOT?>signup">Sign up</a></p>
            </div>
            <div class="box">
                <form class="form" method="POST">
                    <input type="email" class="useremail" placeholder="Email" required name="email">
                    <input type="password" class="password" placeholder="Password" required name="password">
                    <input type="submit" class="button login" value="Login">
                    <span style="font-size: 1rem; color:#f10000;"><?php if(isset($data['error'])) echo $data['error'] ?></span>
                </form>

            </div>
        </div>
    </main>
<?php require_once "./mvc/views/include/footer.php"?>