<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shopee | StoreFront</title>
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1232e6a3df.js" crossorigin="anonymous"></script>
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">


  <link rel="apple-touch-icon" href="icon.png">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <?php include 'Templates/header.php'; ?>

  <img href="shopee_cart.php" src="assets/img/img/Shopee_Img/images/cart.png" width="30" height="30">
  <img src="assets/img/img/Shopee/images/menu.png" class="menu-icon" onclick="togglemenu()"> <!--docent vraag-->
  </div>
  <div class="row">
    <div class="col-2">
      <h1>Infuse New Life <br> into Your Wardrobe!</h1>
      <p>Embrace Your Style Evolution<br> Transform Your Wardrobe for Inspired Self-Expression!</p>
      <a href="" class="btn">Explore Now &#8594;</a>
    </div>
    <div class="col-2">
      <img src="assets/img/img/Shopee_Img/images/dunk.jpg">
    </div>
  </div>
  </div>
  </div>


  <!----------------side bar-->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="price-range">
      <label for="minPrice">Min Price:</label>
      <input type="number" id="minPrice" name="minPrice" min="0" max="1200" value="25">
      <label for="maxPrice">Max Price:</label>
      <input type="number" id="maxPrice" name="maxPrice" min="0" max="1200" value="1200">
      <button onclick="applyPriceRange()">Apply</button>
    </div>
  </div>

  <div id="main">
    <button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</button>
  </div>







  <!-- ------------------------------categories------------------------------------------------------------- -->
  <div class="Categories">
    <div class="small-container">
      <div class="row">
        <div class="col3">
          <img src="assets/img/img/Shopee_Img/images/category1.jpg" width="400" height="500">
        </div>
        <div class="col3">
          <img src="assets/img/img/Shopee_Img/images/category2.jpg" width="400" height="500">
        </div>
        <div class="col3">
          <img src="assets/img/img/Shopee_Img/images/category3.jpg" width="400" height="500">
        </div>
      </div>
    </div>
  </div>



  <!--------------------------featured products--------------------------------->

  <?php

  $featured_products = array(
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product1.jpg',
      'name' => 'Nike SB Pigeon Dunks',
      'rating' => 4.5,
      'price' => 799.99,
      'id' => '101',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product2.jpg',
      'name' => 'Jordan 1 Low Travis Scott Black Phantom',
      'rating' => 5,
      'price' => 559.99,
      'id' => '102',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product3.jpg',
      'name' => 'Nike SB Dunk Low Mummy Halloween',
      'rating' => 4,
      'price' => 335.99,
      'id' => '103',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product4.jpg',
      'name' => 'Jordan 1 Low Travis Scott Reverse Mocha',
      'rating' => 4.5,
      'price' => 1099.99,
      'id' => '104',
    )
  );

  $latest_products = array(
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product5.jpg',
      'name' => 'Jordan 4 Retro White Cement (2016)',
      'rating' => 4.5,
      'price' => 449.99,
      'id' => '105',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product6.jpg',
      'name' => 'Nike Everyday Plus Lightweight Crew Socks',
      'rating' => 5,
      'price' => 13.99,
      'id' => '106',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product8.jpg',
      'name' => 'G-Shock DW-5600BB-1ER - Black',
      'rating' => 4,
      'price' => 85.99,
      'id' => '107',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product7.jpg',
      'name' => 'Casio G-Shock Bluetooth Horloge GBD-200UU-1ER',
      'rating' => 4.5,
      'price' => 149.99,
      'id' => '108',
      
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product9.jpg',
      'name' => 'Travis Scott x Air Jordan 1 Low "Tiffany"',
      'rating' => 4.5,
      'price' => 699.99,
      'id' => '109',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product10.jpg',
      'name' => 'CIRCUS MAXIMUS TRAVIS SCOTT',
      'rating' => 5,
      'price' => 29.99,
      'id' => '110',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product11.jpg',
      'name' => 'Darkbuck® Travis Scott Rapper Oversized T Shirt',
      'rating' => 4,
      'price' => 29.99,
      'id' => '111',
    ),
    array(
      'image' => 'assets/img/img/Shopee_Img/images/product12.jpg',
      'name' => 'Nike Air Jordan Travis Scott Flight SS Tee Black',
      'rating' => 4.5,
      'price' => 129.99,
      'id' => '112',
    )
  );

  ?>
  
<!--------   products php   ------>
  <div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <?php foreach ($featured_products as $product) : ?>
        <a href="ProductDetails.php?id=<?php echo $product['id'] ?>">
          <div class="col-4">
            <img src="<?php echo $product['image']; ?>">
            <h4><?php echo $product['name']; ?></h4>
            <div class="rating">
              <?php for ($i = 0; $i < $product['rating']; $i++) : ?>
                <i class="fa-solid fa-star"></i>
              <?php endfor; ?>
            </div>
            <p>$<?php echo $product['price']; ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="small-container">
    <h2 class="title">Latest Products</h2>
    <div class="row">
      <?php foreach ($latest_products as $product) : ?>
        <a href="ProductDetails.php?id=<?php echo $product['id'] ?>">
          <div class="col-4">
            <img src="<?php echo $product['image']; ?>">
            <h4><?php echo $product['name']; ?></h4>
            <div class="rating">
              <?php for ($i = 0; $i < $product['rating']; $i++) : ?>
                <i class="fa-solid fa-star"></i>
              <?php endfor; ?>
            </div>
            <p>$<?php echo $product['price']; ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!----------------------------------------------------------------offer--------------------------------------------------------------->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="assets/img/img/Shopee_Img/images/band-8.png" class="offer-img">
        </div>
        <div class="col-2">
          <p>Exclusively Available on Shopee</p>
          <h1>MI Band 8</h1>
          <small>
            The Xiaomi Smart Band 8, released by Xiaomi Inc., is an activity tracker launched in China on April 18,
            2023,
            and globally on October 26, 2023. Featuring a 1.62-inch screen with 490 x 192 pixels resolution, it includes
            a 24/7 heart rate monitor, SpO2 sensor, and an optional NFC variant.
          </small>
          <br>
          <a href="" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>

  <!----------------- testimonial------------------------------------------->
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa-solid fa-quote-left"></i>
          <p>Shopee.com offers a diverse range of products including shoes, smart bands, and t-shirts.
            Their website is user-friendly, with stylish designs and quality items.
            Worth exploring for trendy essentials!</p>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <img src="assets/img/img/Shopee_Img/images/user1.jpg">
          <h3>Ken Carson</h3>
        </div>
        <div class="col-3">
          <i class="fa-solid fa-quote-left"></i>
          <p>Shopee.com provides an extensive assortment of shoes, smart bands, and t-shirts.
            While the website layout is intuitive, product descriptions lack detail,
            Average quality.</p>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half"></i>
          </div>
          <img src="assets/img/img/Shopee_Img/images/user2.jpg">
          <h3>YEAT</h3>
        </div>
        <div class="col-3">
          <i class="fa-solid fa-quote-left"></i>
          <p>Shopee.com stands out with its wide array of shoes, smart bands, and t-shirts. The website is a breeze to
            navigate,
            offering top-notch products with exceptional quality.
            A definite 5-star experience!</p>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <img src="assets/img/img/Shopee_Img/images/user3.jpg">
          <h3>Sexy Red</h3>
        </div>
      </div>
    </div>
  </div>

  <!-------------------------------branding---------------->
  <div id="branding">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="assets/img/img/Shopee_Img/images/logo-godrej.png">
        </div>
        <div class="col-5">
          <img src="assets/img/img/Shopee_Img/images/logo-coca-cola.png">
        </div>
        <div class="col-5">
          <img src="assets/img/img/Shopee_Img/images/logo-oppo.png">
        </div>
        <div class="col-5">
          <img src="assets/img/img/Shopee_Img/images/logo-paypal.png">
        </div>
        <div class="col-5">
          <img src="assets/img/img/Shopee_Img/images/logo-philips.png">
        </div>
      </div>
    </div>
  </div>


  <!--------------------footer---------->
  <?php include 'Templates/footer.php'; ?>


  <!----------------------------------------------------------------js Toggle menu--------------->
  <script>
    function menutoggle() {
      var MenuItems = document.getElementById("MenuItems");
      console.log("menutoggle")
      if (MenuItems.style.maxHeight == "0") {
        MenuItems.style.maxHeight = "200";
      } else {
        MenuItems.style.maxHeight = "0";
      }

    }
    //sidebar javascript

    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>


</body>

</html>