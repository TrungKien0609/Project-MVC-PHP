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
                <form class="form">
                    <input type="text" class="username" placeholder="Username" required>
                    <input type="password" class="password" placeholder="Password" required>
                    <input type="submit" class="button" value="Login">
                </form>
            </div>
        </div>
    </main>
<?php require_once "./mvc/views/include/footer.php"?>