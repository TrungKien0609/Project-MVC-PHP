<?php
require_once "./mvc/views/include/header.php";
?>
  <!-- hero -->
  <section class="page-hero">
    <div class="section-center">
      <h3 class="page-hero-title">Home / Product / Database</h3>
    </div>
  </section>
  <!-- sidebar -->
  <?php require_once "./mvc/views/include/sidebar.php" ?>
  <!-- cart -->
  <?php require_once "./mvc/views/include/cart.php" ?>
  <!-- single products -->
  <section class="single-product">
    <div class="section-center single-product-center">
      <div class="product-img">
        <img src="<?= ASSETS?>images/homeimage.jpg" class="single-product-img img" alt="" />
        <div class="more-images">
          <img src="<?= ASSETS?>images/homeimage.jpg" alt="" />
          <img src="<?= ASSETS?>images/72426911_583190945552033_625267081322954752_n.jpg" alt="" />
          <img src="<?= ASSETS?>images/homeimage.jpg" alt="" />
          <img src="<?= ASSETS?>images/72426911_583190945552033_625267081322954752_n.jpg" alt="" />
        </div>
      </div>
      <article class="single-product-info">
        <div>
          <h2 class="single-product-title">couch</h2>
          <p class="single-product-company text-slanted">
            by marcos
          </p>
          <p class="single-product-price">200.000 đ</p>
          <div class="single-product-colors">
            <span class="product-color" style="background-color: rgb(241, 80, 37);"></span>
            <span class="product-color" style="background-color: rgb(34, 34, 34);"></span>
          </div>
          <p class="single-product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id,
            modi? Minima libero doloremque necessitatibus! Praesentium
            recusandae quod nesciunt animi voluptatem!
          </p>
          <div class="rating-area detail_rate">
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
              <p class="number-ratting"><a href="#">( xem 606 đánh giá )</a></p>
            </div>
          </div>
          <button class="addToCartBtn btn" data-id="id">
            add to cart
          </button>
        </div>
      </article>
    </div>
  </section>
  <section class="section-center user_comments">
    <h3 class="page-hero-title subtitle">Đánh giá nhận xét từ khách hàng</h3>
    <div class="rate_container">
      <div class="common_rate">
        <div class="common_rate_header">
          <b>4.6</b>
          <div class="common_stars">
            <div class="rating-area ">
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
            </div>
            <div class="rating-amout">
              <p class="number-ratting">606 nhận xét</p>
            </div>
          </div>
        </div>
        <div class="common_rate_body">
          <div class="block_rate">
            <div class="rating-area ">
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
                <div class="avarage-rate" style="width: 100%;">
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
            </div>
            <div class="chart">
              <div class="average_chart" style="width:75%;">
              </div>
            </div>
            <p class="number_rate">457</p>
          </div>
          <div class="block_rate">
            <div class="rating-area ">
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
                <div class="avarage-rate" style="width: 80%;">
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
            </div>
            <div class="chart">
              <div class="average_chart" style="width:17%;">
              </div>
            </div>
            <p class="number_rate">102</p>
          </div>
          <div class="block_rate">
            <div class="rating-area ">
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
                <div class="avarage-rate" style="width: 60%;">
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
            </div>
            <div class="chart">
              <div class="average_chart" style="width:5%;">
              </div>
            </div>
            <p class="number_rate">29</p>
          </div>
          <div class="block_rate">
            <div class="rating-area ">
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
                <div class="avarage-rate" style="width: 40%;">
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
            </div>
            <div class="chart">
              <div class="average_chart" style="width:3%;">
              </div>
            </div>
            <p class="number_rate">10</p>
          </div>
          <div class="block_rate">
            <div class="rating-area ">
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
                <div class="avarage-rate" style="width: 20%;">
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
            </div>
            <div class="chart">
              <div class="average_chart" style="width:4%;">
              </div>
            </div>
            <p class="number_rate">15</p>
          </div>
        </div>
      </div>
      <div class="users_rate">
        <div class="user_rate">
          <div class="user_rate_header">
            <img src="<?= ASSETS?>images/homeimage.jpg" alt="">
            <div class="infor">
              <p>Phạm Trung Kiên</p>
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
              </div>
              <p>Cực kì hài lòng</p>
            </div>
          </div>
          <p class="user_rate_body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique ut hic
            repellat eum quas dolore praesentium harum recusandae delectus. Autem dolorem fugiat voluptatum quis!</p>
        </div>
        <div class="user_rate">
          <div class="user_rate_header">
            <img src="<?= ASSETS?>images/homeimage.jpg" alt="">
            <div class="infor">
              <p>Phạm Trung Kiên</p>
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
              </div>
              <p>Cực kì hài lòng</p>
            </div>
          </div>
          <p class="user_rate_body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique ut hic
            repellat eum quas dolore praesentium harum recusandae delectus. Autem dolorem fugiat voluptatum quis!</p>
        </div>
        <div class="user_rate">
          <div class="user_rate_header">
            <img src="<?= ASSETS?>images/homeimage.jpg" alt="">
            <div class="infor">
              <p>Phạm Trung Kiên</p>
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
              </div>
              <p>Cực kì hài lòng</p>
            </div>
          </div>
          <p class="user_rate_body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique ut hic
            repellat eum quas dolore praesentium harum recusandae delectus. Autem dolorem fugiat voluptatum quis!</p>
        </div>
        <div class="user_rate">
          <div class="user_rate_header">
            <img src="<?= ASSETS?>images/homeimage.jpg" alt="">
            <div class="infor">
              <p>Phạm Trung Kiên</p>
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
              </div>
              <p>Cực kì hài lòng</p>
            </div>
          </div>
          <p class="user_rate_body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique ut hic
            repellat eum quas dolore praesentium harum recusandae delectus. Autem dolorem fugiat voluptatum quis!</p>
        </div>
        <div class="user_rate">
          <div class="user_rate_header">
            <img src="<?= ASSETS?>images/homeimage.jpg" alt="">
            <div class="infor">
              <p>Phạm Trung Kiên</p>
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
              </div>
              <p>Cực kì hài lòng</p>
            </div>
          </div>
          <p class="user_rate_body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique ut hic
            repellat eum quas dolore praesentium harum recusandae delectus. Autem dolorem fugiat voluptatum quis!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- page loading -->
  <div class="page-loading">
    <h2>Loading...</h2>
  </div>
  <div class="footer1">
    <p>Best experience for you</p>
    <p>&copy; 2021</p>
  </div>
  <script src="<?= ASSETS?>src/pages/product1.js"></script>
</body>

</html>