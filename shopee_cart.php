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
                href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/shopee_front.php"><img
                  src="assets/img/img/Shopee_Img/images/logoblack.png" width="200" alt="logo"></a></li>
          </ul>
        </nav>
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a
              href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/shopee_front.php">Home</a>
          </li>
          <li><a
              href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/products.php">Products</a>
          </li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Account</a></li>
        </ul>
      </nav>
      <img src="assets/img/img/Shopee_Img/images/cart.png" width="30" height="30">
      <img src="assets/img/img/Shopee_Img/images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
  </div>




  <!-----------cart items------->
  <div class="small-container cart-page">

    <table>
      <tr>
        <th>Products</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td>

          <div class="cart-info">
            <img src="assets/img/img/Shopee_Img/images/product1.jpg" alt="Nike SB Pigeon Dunks" width="400"
              height="450">
            <div>
              <p>Nike SB Pigeon Dunks</p>
              <small>Price: $799.99</small>
              <br>
              <a href="">Remove</a>
            </div>
          </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$799.99</td>
      </tr>
      <tr>
        <td>

          <div class="cart-info">
            <img src="assets/img/img/Shopee_Img/images/product2.jpg" alt="Jordan 1 Low Travis Scott Black Phantom"
              width="400" height="450">
            <div>
              <p>Jordan 1 Low Travis Scott Black Phantom</p>
              <small>Price: $559.99</small>
              <br>
              <a href="">Remove</a>
            </div>
          </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$559.99</td>
      </tr>
      <tr>
        <td>

          <div class="cart-info">
            <img src="assets/img/img/Shopee_Img/images/product3.jpg" alt="Nike SB Dunk Low Mummy Halloween" width="400"
              height="450">
            <div>
              <p>Nike SB Dunk Low Mummy Halloween</p>
              <small>Price: $335.99</small>
              <br>
              <a href="">Remove</a>
            </div>
          </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$335.99</td>
      </tr>
    </table>

    <div class="total-price">

      <table>
        <tr>
          <td>Sub Total</td>
          <td>$1669.99</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$35.00</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>$1731.00</td>
        </tr>
        <tr>
          <td><a
              href="http://127.0.0.1:5500/eindopdrachten-webshop-overzicht-bestelformulier-jaedyndant-main/shopee_form.php"
              Class="btn"> Check Out</a></td>
        </tr>
      </table>

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