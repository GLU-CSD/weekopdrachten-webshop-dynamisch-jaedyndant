<!doctype html>
<html class="no-js" lang="">

<?php include 'Templates/header.php'; ?>

<!---------------------single product details-->

<div class="small-container single-product">
  <div class="row">
    <?php
    $id = $_GET['id'];
    include 'productsarray.php';
    foreach ($all_products as $product) :
      if ($product["id"] == $id) {
    ?>
        <div class="col-2 image-col">
          <div class="smallimg">
            <?php foreach ($product['images'] as $smallimg) : ?>
              <img class='smimg' src="<?php echo $smallimg; ?>" alt="Small Image">
            <?php endforeach; ?>
          </div>
          <img src="<?php echo $product['image']; ?>" alt="Product Image">
        </div>
        <div class="col-2">
          <h1><?php echo $product['name']; ?></h1>
          <a href="ProductDetails.php?id=<?php echo $product['id'] ?>">
            <div class="col-2">
              <div class="rating">
                <?php for ($i = 0; $i < $product['rating']; $i++) : ?>
                  <i class="fa-solid fa-star"></i>
                <?php endfor; ?>
              </div>
              <p>$<?php echo $product['price']; ?></p>
              <div class="description">
                <?php echo  $product['description']; ?>
              </div>
            </div>
          </a>
          <form action="shopee_cart.php" method="post">

      <select name= 'size'> 
        
        <option>35 EU</option>
        <option>36 EU</option>
        <option>37 EU</option>
        <option>38 EU</option>
        <option>39 EU</option>
        <option>40 EU</option>
        <option>41 EU</option>
        <option>42 EU</option>
        <option>43 EU</option>
      </select>
      <input type="number" value="1" name='amount'>
      <input type="submit" value="Add To Cart" class='order-btn' name='add_to_cart'>
      <input type="hidden" name= 'id' value='<?php echo $product['id'] ?>'>
        </div>
        </form>

        <?php } ?>
      <?php endforeach; ?>

      

  </div>
</div>
</div>

<?php

$all_products = array(

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
  ),
  array(
    'image' => 'assets/img/img/Shopee_Img/images/product8.jpg',
    'name' => 'G-Shock DW-5600BB-1ER - Black',
    'rating' => 4.5,
    'price' => 85.99,
    'id' => '107',
  ),
);
?>

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
    } else {
      MenuItems.style.maxHeight = "0";
    }

  }
</script>


</body>

</html>