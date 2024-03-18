<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopee | Product Details</title>
  <link rel="icon" href="./favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1232e6a3df.js" crossorigin="anonymous"></script>
  <meta name="description" content="">
  <link rel="apple-touch-icon" href="icon.png">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <nav>
          <ul>
            <li><a
                href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/shopee_front.html"><img
                  src="assets/img/img/Shopee_Img/images/logoblack.png" width="200" alt="logo"></a></li>
          </ul>
        </nav>
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a
              href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/shopee_front.html">Home</a>
          </li>
          <li><a
              href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/products.html">Products</a>
          </li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Account</a></li>
        </ul>
      </nav>
      <img
        href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/shopee_cart.html"
        src="assets/img/img/Shopee_Img/images/cart.png" width="30" height="30">
      <img src="assets/img/img/Shopee_Img/images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
  </div>






  <!-- ----foooter------------------------------>


  <?php include 'Templates/footer.php'; ?>

  <script>
    function menutoggle() {
      var MenuItems = document.getElementById("MenuItems");

      if (MenuItems.style.maxHeight === "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>
</body>

</html>