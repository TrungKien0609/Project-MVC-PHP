<?php
require_once "./mvc/views/include/header.php";
?>
<!-- hero -->
<section class="page-hero">
    <div class="section-center">
        <h3 class="page-hero-title">Home / Products</h3>
    </div>
</section>
<!-- sidebar -->
<?php require_once "./mvc/views/include/sidebar.php"?>
<!-- cart -->
<?php require_once "./mvc/views/include/cart.php"?>
<!-- products -->
<section class="products">
    <!-- filters -->
    <div class="filters">
        <div class="filters-container">
            <!-- search -->
            <form class="input-form">
                <input type="text" class="search-input" placeholder="search..." />
            </form>
            <!-- categories -->
            <h4>Company</h4>
            <article class="companies">
                <button class="company-btn">all</button>
                <button class="company-btn">ikea</button>
            </article>
            <!-- price -->
            <h4>Price</h4>
            <form class="price-form">
                <input type="range" class="price-filter" min="0" value="50" max="100" />
            </form>
            <p class="price-value"></p>
        </div>
    </div>
    <!-- products -->
    <div class="products-container">
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
        <article class="product">
            <div class="product-container">
                <img src="<?= ASSETS ?>images/homeimage.jpg" class="product-img img" alt="" />

                <div class="product-icons">
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
                    <a href="product.html?id=1" class="product-icon">
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
<div class="page-loading">
    <h2>Loading...</h2>
</div>
<!-- page loading -->
<?php require_once "./mvc/views/include/footer.php"?>