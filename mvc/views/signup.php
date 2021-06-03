<?php require_once "./mvc/views/include/header.php"?>
<?php require_once "./mvc/views/include/sidebar.php" ?>
<!-- cart -->
<?php require_once "./mvc/views/include/cart.php" ?>
    <main>
        <div class="log">
            <div class="text">
                <h1>Signup</h1>
                <p>Have Account? <a href="<?= ROOT?>login">Login</a></p>
            </div>
            <div class="box">
                <form class="form" method="post">
                    <input type="text" class="fullname" placeholder="Name" required name="name">
                    <input type="email" class="email" placeholder="someone@abc.com" required name="email">
                    <input type="password" class="password" placeholder="Password" required name="password">
                    <input type="password2" class="password" placeholder="Retype Password" required name="password">
                    <input type="submit" class="button" value="Signup">
                </form>
            </div>
        </div>
    </main>
<?php require_once "./mvc/views/include/footer.php"?>