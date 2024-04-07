<?php include 'Templates/header.php'; ?>

<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id'];
    $product_quantity = $_POST['amount'];
    $product_size = $_POST['size'];
    
    // Add product to cart
    $_SESSION['cart'][$product_id] = array(
        'id' => $product_id,
        'quantity' => $product_quantity,
        'size' => $product_size,
    );
}




$Items_in_cart = array_keys($_SESSION['cart']);

// session_destroy();

?>
<div class="small-container cart-page">
  <table style="width:100%">
    <tr>
      <th>    </th>
      <th>Products</th>
      <th>Quantity</th>
      <th>price</th>
      <th>Subtotal</th>
    </tr>

    
    <?php
include_once 'productsarray.php';

// Check if a product needs to be removed
if(isset($_GET['remove']) && isset($_SESSION['cart'][$_GET['remove']])) {
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Check if the cart is empty
if(empty($_SESSION['cart'])) {
    echo '<tr><td colspan="5">Cart is empty</td></tr>';
} else {
  foreach ($all_products as $product) {
    if (in_array($product['id'], $Items_in_cart)) {
        echo '<tr>  
            <td>
                <img src=" '. $product['image']. '" alt="'. $product['name']. '">
            </td>
            <td>'. $product['name']. '<br>'; 

            // Check if the product exists in the cart before accessing its attributes
            if(isset($_SESSION['cart'][$product['id']])) {
                echo $_SESSION['cart'][$product['id']]['size']. '<br>';
                echo '<a href="?remove='. $product['id']. '">Remove</a>';
            }
            
            echo '</td>';
    
            // Check if the product exists in the cart before accessing its quantity
            if(isset($_SESSION['cart'][$product['id']])) {
                echo '<td>'. $_SESSION['cart'][$product['id']]['quantity']. '</td>';
                echo '<td>'. $product['price']. '</td>';
                echo '<td>$'. ($product['price'] * $_SESSION['cart'][$product['id']]['quantity']). '</td>';
            } else {
                echo '<td colspan="3">Product removed from cart</td>';
            }
    
            echo '</tr>';

            // Call the calculateTotalPrice function after the cart items are displayed
            echo "<script>calculateTotalPrice();</script>";
        }
    }
}
?>

  </table>

  <div class="total-price">
    <table style="width:100%">
      <tr>
        <td style="width:50%">Sub Total</td>
        <td style="width:50%" id="sub-total"></td>
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


<?php include 'productsarray.php'; ?>


<!--------------------product random 4---------->
<h2>Products you might be interested in !</h2>
<div class="row">
  <?php
  $random_keys = array_rand($all_products, 4); 
  foreach ($random_keys as $key) {
    $product = $all_products[$key]; 
  ?>
    <a href="ProductDetails.php?id=<?php echo $product['id']; ?>">
      <div class="col-4">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h4><?php echo $product['name']; ?></h4>
        <div class="rating">
          <?php for ($i = 0; $i < $product['rating']; $i++) : ?>
            <i class="fa-solid fa-star"></i>
          <?php endfor; ?>
        </div>
        <p>$<?php echo $product['price']; ?></p>
      </div>
    </a>
  <?php } ?>
</div>


<?php include 'Templates/footer.php'; ?> 

<script>
  function calculateTotalPrice() {
    var subTotal = 0;
    var tax = 0;
    var total = 0;

    var cartItems = document.querySelectorAll('.cart-info');

    for (var i = 0; i < cartItems.length; i++) {
      var cartItem = cartItems[i];
      var price = parseFloat(cartItem.querySelector('.price span').innerText.replace('$', ''));
      var quantity = parseFloat(cartItem.querySelector('input[type="number"]').value);
      subTotal += price * quantity;
    }

    tax = subTotal * 0.21;
    total = subTotal + tax;

    document.getElementById('sub-total').innerText = '$' + subTotal.toFixed(2);
    document.getElementById('tax').innerText = '$' + tax.toFixed(2);
    document.getElementById('total').innerText = '$' + total.toFixed(2);
  }

  // Call the calculateTotalPrice function when the page is loaded
  window.onload = function() {
    calculateTotalPrice();
  };

  // Call the calculateTotalPrice function when there is a change in the quantity input
  var quantityInputs = document.querySelectorAll('input[type="number"]');

  for (var i = 0; i < quantityInputs.length; i++) {
    quantityInputs[i].addEventListener('change', function() {
      calculateTotalPrice();
    });
  }

  
  function addToCart() {
    

    // After adding the product, recalculate total price
    calculateTotalPrice();
  }

  // Function to toggle menu
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