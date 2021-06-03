<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";
?>
<?php
require_once "./mvc/views/include/header.php";
?>
<!-- hero -->
<section class="hero">
    <div class="hero-container">
        <h1 class="text-slanted">
            For your best
        </h1>
        <h3>Embrace your choices - we do</h3>
        <a href="<?= ROOT ?>products.php" class="hero-btn">
            show now
        </a>
    </div>
</section>
<!-- sidebar -->
<?php require_once "./mvc/views/include/sidebar.php" ?>
<!-- cart -->
<?php require_once "./mvc/views/include/cart.php" ?>
<!-- featured products -->
<section class="section featured">
    <div class="title">
        <h2><span>/</span> featured</h2>
    </div>
    <div class="featured-center section-center">
        <h2 class="section-loading">
            loading...
        </h2>
        <!-- single product -->
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>/images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="<?=ROOT?>detailproduct" class="product-icon">
                        <i class="fas fa-search"></i>
                    </a>
                    <button class="product-cart-btn product-icon" data-id="1">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <footer>
                <p class="product-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    aperiam!</p>
                <div class="rating-area">
                    <div class="rate">
                        <div class="total-rate">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                        <div class="avarage-rate" style="width: 95%;">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                    </div>
                    <div class="rating-amout">
                        <p class="number-ratting">( 606 )</p>
                    </div>
                </div>
                <h4 class="product-price">200.000<span>đ</span></h4>
            </footer>
        </article>
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="#" class="product-icon">
                        <i class="fas fa-search"></i>
                    </a>
                    <button class="product-cart-btn product-icon" data-id="1">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <footer>
                <p class="product-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    aperiam!</p>
                <div class="rating-area">
                    <div class="rate">
                        <div class="total-rate">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                        <div class="avarage-rate" style="width: 45%;">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                    </div>
                    <div class="rating-amout">
                        <p class="number-ratting">( 606 )</p>
                    </div>
                </div>
                <h4 class="product-price">200.000<span>đ</span></h4>
            </footer>
        </article>
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="#" class="product-icon">
                        <i class="fas fa-search"></i>
                    </a>
                    <button class="product-cart-btn product-icon" data-id="1">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <footer>
                <p class="product-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    aperiam!</p>
                <div class="rating-area">
                    <div class="rate">
                        <div class="total-rate">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                        <div class="avarage-rate" style="width: 70%;">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                    </div>
                    <div class="rating-amout">
                        <p class="number-ratting">( 606 )</p>
                    </div>
                </div>
                <h4 class="product-price">200.000<span>đ</span></h4>
            </footer>
        </article>

    </div>
</section>
<section class="section featured">
    <div class="title">
        <h2><span>/</span>Best seller</h2>
    </div>
    <div class="featured-center section-center">
        <h2 class="section-loading">
            loading...
        </h2>
        <!-- single product -->
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="#" class="product-icon">
                        <i class="fas fa-search"></i>
                    </a>
                    <button class="product-cart-btn product-icon" data-id="1">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <footer>
                <p class="product-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    aperiam!</p>
                <div class="rating-area">
                    <div class="rate">
                        <div class="total-rate">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                        <div class="avarage-rate" style="width: 95%;">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                    </div>
                    <div class="rating-amout">
                        <p class="number-ratting">( 606 )</p>
                    </div>
                </div>
                <h4 class="product-price">200.000<span>đ</span></h4>
            </footer>
        </article>
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="#" class="product-icon">
                        <i class="fas fa-search"></i>
                    </a>
                    <button class="product-cart-btn product-icon" data-id="1">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <footer>
                <p class="product-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    aperiam!</p>
                <div class="rating-area">
                    <div class="rate">
                        <div class="total-rate">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                        <div class="avarage-rate" style="width: 45%;">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                    </div>
                    <div class="rating-amout">
                        <p class="number-ratting">( 606 )</p>
                    </div>
                </div>
                <h4 class="product-price">200.000<span>đ</span></h4>
            </footer>
        </article>
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="#" class="product-icon">
                        <i class="fas fa-search"></i>
                    </a>
                    <button class="product-cart-btn product-icon" data-id="1">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <footer>
                <p class="product-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    aperiam!</p>
                <div class="rating-area">
                    <div class="rate">
                        <div class="total-rate">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                        <div class="avarage-rate" style="width: 70%;">
                            <input type="radio" name="rate" id="rate1">
                            <label for="rate1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate2">
                            <label for="rate2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate3">
                            <label for="rate3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate4">
                            <label for="rate4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate5">
                            <label for="rate5" class="fas fa-star"></label>
                        </div>
                    </div>
                    <div class="rating-amout">
                        <p class="number-ratting">( 606 )</p>
                    </div>
                </div>
                <h4 class="product-price">200.000<span>đ</span></h4>
            </footer>
        </article>
    </div>
    <a href="products.php" class="btn ">
        all products
    </a>
</section>
<?php require_once "./mvc/views/include/footer.php"?>