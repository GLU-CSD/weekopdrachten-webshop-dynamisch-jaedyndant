<!doctype html>
<html class="no-js" lang="en">

<?php include 'Templates/header.php'; ?>




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
              href="shopee_form.php"
              Class="btn"> Check Out</a></td>
        </tr>
      </table>

    </div>











  </div>

  <!-- ----foooter------------------------------>


  <?php include 'Templates/footer.php'; ?>


  <!--------------scripts------------->
 
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