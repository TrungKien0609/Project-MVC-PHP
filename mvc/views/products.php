<?php
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
require_once "./mvc/views/include/header.php";
?>
<!-- hero -->
<section class="page-hero">
    <div class="section-center">
        <h3 class="page-hero-title">Home / Products/<?= $data['page']['category']?></h3>
    </div>
</section>
<!-- sidebar -->
<?php require_once "./mvc/views/include/sidebar.php" ?>
<!-- cart -->
<?php require_once "./mvc/views/include/cart.php" ?>
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
            <h4>Category</h4>
            <article class="categories">
                <a class="category-btn  <?php if($data['page']['category'] == "all") echo "active"?>" href="<?= ROOT ?>products/category/all">All</a>
                <?php foreach ($data['CateList'] as $item) { ?>
                    <a class="category-btn <?php if($item == $data['page']['category']) echo "active"?>" href="<?= ROOT ?>products/category/<?= $item ?>"><?= $item ?></a>
                <?php } ?>
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
        <?php foreach ($data['productList'] as $item) { ?>
            <article class="product">
                <div class="product-container">
                    <img src="<?= ROOT ?>upload/ProductImages/<?= $item['image1'] ?>" class="product-img img" alt="" />

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
                    <p class="product-name"> <?= $item['product_name'] ?></p>
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
                    <p class="product-price"><?= $item['price'] ?><span>đ</span></p>
                </footer>
            </article>
        <?php } ?>
        <div class="pagination">
            <a href="<?= $data['page']['link'] . '1' ?>">Start</a>
            <a href="<?= $data['page']['link'] . $data['page']['prevpage'] ?>" class="prev"><i class="fas fa-chevron-left"></i></a>
            <?php for ($i = 1; $i <= $data['page']['totalpage']; $i++) { ?>
                <a href="<?= $data['page']['link'] . $i ?>" class="<?php if($data['page']['currentpage'] == $i) echo "active"?>"><?= $i ?></a>
                <!-- <a href="#" class="active">2</a> -->
            <?php } ?>
            <a href="<?= $data['page']['link'] . $data['page']['nextpage'] ?>" class="next"><i class="fas fa-chevron-right"></i></a>
            <a href="<?= $data['page']['link'] . $data['page']['totalpage'] ?>">End</a>
        </div>
    </div>
</section>
<div class="page-loading">
    <h2>Loading...</h2>
</div>
<!-- page loading -->
<?php require_once "./mvc/views/include/footer.php" ?>