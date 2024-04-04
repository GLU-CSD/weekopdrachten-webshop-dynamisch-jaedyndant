<?php include 'Templates/header.php'; ?>

<?php

session_start();
if (isset($_POST['add_to_cart'])) {
  $product_id = $_POST['id'];
  $product_quantity = $_POST['amount'];
  $product_size = $_POST['size'];
}
// Add product to cart
$_SESSION['cart'][$product_id] = array(
  'id' => $product_id,
  'quantity' => $product_quantity,
  'size' => $product_size,
);

// echo '<pre>';
// print_r($_SESSION['cart']);
// echo '</pre>';

$Items_in_cart = array_keys($_SESSION['cart']);

// session_destroy();

?>
<div class="small-container cart-page">
  <table>
    <tr>
      <th>image</th>
      <th>Products</th>
      <th>Quantity</th>
      <th>price</th>
      <th>Subtotal</th>
    </tr>
    <?php
    include_once 'productsarray.php';
    foreach ($all_products as $product) {
      if (in_array($product['id'], $Items_in_cart)) {

        echo '<tr>
                  <td>
      
                      <img src="assets/img/img/Shopee_Img/images/' . $product['image'] . '" alt="' . $product['name'] . '" width="150" height="100">
                  </td>
                  <td>'.$product['name']. '<br>'.$_SESSION ['cart'][$product['id']]['size'].'
                  </td>
                  <td>'.$_SESSION ['cart'][$product['id']]['quantity'].'
                  </td>
                  <td>'.$product['price'].'
                  </td>
                  <td>$' . ($product['price'] * $_SESSION['cart'][$product['id']]['quantity']) . 
                  '</td>  
                  <br>
                 <a href="?remove=' . $product['id'] . '">Remove</a> 
                </tr>';
                

      }
    }


    // if (isset($_GET['remove'])) {
    //   $index = $_GET['remove'];
    //   unset($_SESSION['cart'][$index]);
    //   header('Location: cart.php');
    //   exit;
    // }
    // ?>
  </table>

  <div class="total-price">
    <table>
      <tr>
        <td>Sub Total</td>
        <td id="sub-total"></td>
      </tr>
      <tr>
        <td>Tax</td>
        <td id="tax"></td>
      </tr>
      <tr>
        <td>Total</td>
        <td id="total"></td>
      </tr>
      <tr>
        <td><a href="shopee_form.php" Class="btn"> Check Out</a></td>
      </tr>
    </table>
  </div>
</div>

<?php
// include_once 'productsarray.php';
// foreach ($all_products as $product) {
//   if (in_array($product['id'], $Items_in_cart)) {

//     echo '<tr>
//                     <td>
//                       <div class="cart-info">
//                         <img src="assets/img/img/Shopee_Img/images/' . $product['image'] . '" alt="' . $product['name'] . '" width="150" height="100">
//                         <div>
//                           <p>' . $product['name'] . '</p>
//                           <small>Price: $' . $product['price'] . '</small>
//                           <br>
//                           Quantity: <input type="number" value="' . $_SESSION['cart'][$product['id']]['quantity'] . '">
//                           <br>
//                           <a href="?remove=' . $product['id'] . '">Remove</a>
//                         </div>
//                       </div>
//                     </td>
//                     <td></td>
//                     <td>$' . ($product['price'] * $_SESSION['cart'][$product['id']]['quantity']) . '</td>
//                   </tr>';
//   }
// }


// Display message when cart is empty
if (empty($Items_in_cart)) {
  echo '<tr><td colspan="5">Your cart is empty.</td></tr>';
}
?>

<!doctype html>
<html class="no-js" lang="en">

<script>
  function menutoggle() {
    var MenuItems = document.getElementById("MenuItems")

    if (MenuItems.style.maxHeight === "0px") {
      MenuItems.style.maxHeight = "200px"
    } else {
      MenuItems.style.maxHeight = "0px"
    }
  }
</script>

< <?php include 'Templates/footer.php'; ?> <script>
  function calculateTotalPrice() {
  var subTotal = 0;
  var tax = 0;
  var total = 0;

  var cartItems = document.querySelectorAll('.cart-info');

  for (var i = 0; i < cartItems.length; i++) { var cartItem=cartItems[i]; var price=parseFloat(cartItem.querySelector('.price span').innerText.replace('$', '' )); 
      var quantity=parseFloat(cartItem.querySelector('input[type="number" ]').value); subTotal +=price * quantity; } tax=subTotal * 0.07; total=subTotal + tax; 
      document.getElementById('sub-total').innerText='$' + subTotal.toFixed(2); document.getElementById('tax').innerText='$' + tax.toFixed(2); document.getElementById
      ('total').innerText='$' + total.toFixed(2); } calculateTotalPrice(); </script>

    </body>

</html>