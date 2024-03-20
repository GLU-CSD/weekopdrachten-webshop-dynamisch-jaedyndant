<!doctype html>
<html class="no-js" lang="">

<?php include 'Templates/header.php'; ?>
  <!---------------------single product details-->

  <div class="small-container single-product">
    <div class="row">
      <div class="col-2">
        <img src="assets/img/img/Shopee_Img/images/product1.jpg" width="100%">





      </div>
      <div class="col-2">
        <p> Home / Shoes</p>
        <h1>Nike SB Pigeon Dunks</h1>
        <h4>$799.99</h4>

        <select>
          <option>35 EUR</option>
          <option>36 EUR</option>
          <option>37 EUR</option>
          <option>38 EUR</option>
          <option>39 EUR</option>
          <option>40 EUR</option>
          <option>41 EUR</option>
          <option>42 EUR</option>
          <option>43 EUR</option>
        </select>
        <input type="number" value="1">
        <a href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/shopee_cart.php"
          Class="btn"> Add To Cart</a>

        <h3>Product Details <i class="fa fa-indent"></i></h3>
        <br>
        <p>The Nike SB Dunk Low "Black Pigeon" was released in 2017 to celebrate the 15th anniversary of the SB Dunk.
          Inspired by the original Pigeon colorway released in 2005,
          this sneaker was perhaps one of the wildest
          Nike drops in history. </p>
      </div>
    </div>
  </div>








  <div class="small-container">S
    <div class="row">
      <div class="col-4">
        <img src="assets/img/img/Shopee_Img/images/product8.jpg">
        <h4>G-Shock DW-5600BB-1ER - Black</h4>
        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <p>$85.99</p>
      </div>
      <div class="col-4">
        <img src="assets/img/img/Shopee_Img/images/product2.jpg">
        <h4>Jordan 1 Low Travis Scott Black Phantom</h4>
        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <p>$559.99</p>
      </div>

      <div class="col-4">
        <img src="assets/img/img/Shopee_Img/images/product3.jpg">
        <h4>Nike SB Dunk Low Mummy Halloween</h4>
        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <p>$335.99</p>
      </div>
      <div class="col-4">
        <img src="assets/img/img/Shopee_Img/images/product4.jpg">
        <h4>Jordan 1 Low Travis Scott Reverse Mocha</h4>
        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half"></i>
        </div>
        <p>$1099.99</p>
      </div>
    </div>
  </div>
  <!--------------------footer---------->
  <?php include 'Templates/footer.php'; ?>

  <!----------------------------------------------------------------js Toggle menu--------------->
  <script>
    var MenuItems = document.getElementById("menu-items");

    MenuItems.style.maxHeight = "0";

    function menutoggle() {
      if (MenuItems.style.maxHeight == "0") {
        MenuItems.style.maxHeight = "200";
      }
      else {
        MenuItems.style.maxHeight = "0";
      }

    }
  </script>


</body>

</html>