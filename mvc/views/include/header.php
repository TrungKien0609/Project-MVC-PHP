<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- font-awesome -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <!-- styles css -->
        <link rel="stylesheet" href="<?= ASSETS ?>styles.css" />
        <title><?= $data['title']?></title>
        <?php if($data['title'] == "Login" || $data['title'] == "Signup" ): ?>
         <link rel="stylesheet" href="<?= ASSETS ?>log.css">
        <?php endif;?>
        
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar <?php if($data['title']=="Products") echo "page"?>">
            <div class="nav-center">
                <!-- links -->
                <button class="toggle-nav">
                    <i class="fas fa-bars"></i>
                </button>
                <img src="<?= ASSETS ?>/images/logo.png" class="nav-logo" alt="logo" style="width:100px;" />
                <ul class="nav-links">
                    <li>
                        <a href="<?= ROOT ?>home" class="nav-link">
                            home
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT ?>products" class="nav-link">
                            products
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT ?>about" class="nav-link">
                            about
                        </a>
                    </li>
                </ul>
                <!-- logo -->
                <!-- cart icon -->

                <div class="user">
                    <div class="accout">
                        <a href="<?= ROOT?>login" class="acc-logo">
                            <img src="<?= ASSETS ?>images/user.PNG" alt="">
                            <p>Đăng nhập</p>
                        </a>
                        <div class="useraction">
                        
                        </div>
                    </div>
                    <div class="toggle-container">
                        <button class="toggle-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <p>Giỏ hàng</p>
                        </button>
                        <span class="cart-item-count">1</span>
                    </div>
                </div>
            </div>
        </nav>