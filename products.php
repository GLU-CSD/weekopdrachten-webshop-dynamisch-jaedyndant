<!doctype html>
<html class="no-js" lang="">

<?php include 'Templates/header.php'; ?>

<body>

  <div class="small-container">


    <div class="row row-2">
      <h2>All Products</h2>
      <select>
        <option> Default sorting</option>
        <option> Sort by price </option>
        <option> Sort by popularity</option>
        <option> Sort by rating</option>
        <option> sort buy sale</option>
      </select>
    </div>


    <?php

    $all_products = array(
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product1.jpg',
        'name' => 'Nike SB Pigeon Dunks',
        'rating' => 4.5,
        'price' => 799.99,
        'id' => '101',
        'description' => 'The Nike SB Dunk Low "Black Pigeon" was released in 2017 to celebrate the 15th anniversary of the SB Dunk. 
                          Inspired by the original Pigeon colorway released in 2005, this sneaker was perhaps one of the wildest Nike 
                          drops in history.',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product2.jpg',
        'name' => 'Jordan 1 Low Travis Scott Black Phantom',
        'rating' => 5,
        'price' => 559.99,
        'id' => '102',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product3.jpg',
        'name' => 'Nike SB Dunk Low Mummy Halloween',
        'rating' => 4,
        'price' => 335.99,
        'id' => '103',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product4.jpg',
        'name' => 'Jordan 1 Low Travis Scott Reverse Mocha',
        'rating' => 4.5,
        'price' => 1099.99,
        'id' => '104',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product5.jpg',
        'name' => 'Jordan 4 Retro White Cement (2016)',
        'rating' => 4.5,
        'price' => 449.99,
        'id' => '105',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product6.jpg',
        'name' => 'Nike Everyday Plus Lightweight Crew Socks',
        'rating' => 4.5,
        'price' => 13.99,
        'id' => '106',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product8.jpg',
        'name' => 'G-Shock DW-5600BB-1ER - Black',
        'rating' => 4.5,
        'price' => 85.99,
        'id' => '107',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product7.jpg',
        'name' => 'Casio G-Shock Bluetooth Horloge GBD-200UU-1ER',
        'rating' => 4.5,
        'price' => 149.99,
        'id' => '108',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product9.jpg',
        'name' => 'Travis Scott x Air Jordan 1 Low "Tiffany"',
        'rating' => 4.5,
        'price' => 699.99,
        'id' => '109',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product10.jpg',
        'name' => 'CIRCUS MAXIMUS TRAVIS SCOTT',
        'rating' => 4.5,
        'price' => 29.99,
        'id' => '111',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product11.jpg',
        'name' => 'Darkbuck® Travis Scott Rapper Oversized T Shirt',
        'rating' => 4.5,
        'price' => 29.99,
        'id' => '112',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product12.jpg',
        'name' => 'Nike Air Jordan Travis Scott Flight SS Tee Black',
        'rating' => 4.5,
        'price' => 129.99,
        'id' => '113',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product14.jpg',
        'name' => 'Jordan 4 Retro Military Black',
        'rating' => 4.5,
        'price' => 431.99,
        'id' => '114',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product15.jpg',
        'name' => 'Jordan 4 Retro Bred (2019)',
        'rating' => 4.5,
        'price' => 463.99,
        'id' => '115',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product16.jpg',
        'name' => 'Jordan 1 x Travis Scott Low Mocha',
        'rating' => 4.5,
        'price' => 1957.99,
        'id' => '116',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product17.jpg',
        'name' => 'Jordan Jumpman Jack TR Travis Scott Sail',
        'rating' => 4.5,
        'price' => 199.99,
        'id' => '117',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product18.jpg',
        'name' => 'Nike SB Dunk Low Staple Panda Pigeon',
        'rating' => 4.5,
        'price' => 1156.99,
        'id' => '118',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product19.jpg',
        'name' => 'Jordan 4 Retro Off-White Sail',
        'rating' => 4.5,
        'price' => 1156.99,
        'id' => '119',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product20.jpg',
        'name' => 'Grey Carhartt WIP Regular Cargo Pants',
        'rating' => 4.5,
        'price' => 29.99,
        'id' => '120',
        'description' => '',
      ),
      array(
        'image' => 'assets/img/img/Shopee_Img/images/product21.jpg',
        'name' => 'Olive Carhartt WIP Regular Cargo Pants',
        'rating' => 4.5,
        'price' => 39.99,
        'id' => '121',
        'description' => '',
      ),

    );
    ?>


    <!----- products php---->
    <div class="row">
      <?php foreach ($all_products as $product) : ?>
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


  <div class="page-btn">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
    <span>&#8594;</span>
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
  </script>


</body>

</html>