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


    <?php include 'productsarray.php'; ?>




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