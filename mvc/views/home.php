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
<!-- category products -->
<?php foreach ($data['CateList'] as $item) { ?>
    <section class="section category">
        <div class="title">
            <h2><span>/</span><?php echo $item ?></h2>
        </div>
        <div class="category-center section-center">
            <h2 class="section-loading">
                loading...
            </h2>
            <?php foreach($data['ProductList'] as $item1){
                if ($item == $item1['category']){
            ?>
            <!-- single product -->
            <article class="product">
                <div class="product-container">
                    <img src="<?= ROOT?>/upload/ProductImages/<?= $item1['image1']?>" class="product-img img" alt="" />
                    <div class="product-icons">
                        <a href="<?= ROOT ?>detailproduct/<?= $item1['product_url']?>" class="product-icon">
                            <i class="fas fa-search"></i>
                        </a>
                        <button class="product-cart-btn product-icon" data-id="1">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
                <div class="infor">
                    <p class="product-name"><?= $item1['product_name']?></p>
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
                    <h4 class="product-price"><?= $item1['price']?><span>đ</span></h4>
                </div>
            </article>
            <?php }}?>
        </div>
    </section>
<?php } ?>
<?php require_once "./mvc/views/include/footer.php" ?>