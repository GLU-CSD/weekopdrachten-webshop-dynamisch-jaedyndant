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

          
        }
    }
}
?>

<?php
// Calculate the subtotal for all products
$subtotal = 0;
foreach ($all_products as $product) {
    if (in_array($product['id'], $Items_in_cart)) {
        $product_subtotal = $product['price'] * $_SESSION['cart'][$product['id']]['quantity'];
        $subtotal += $product_subtotal;
    }
}
?>

<div class="total-price">
  
    <table>
        <tr>
            <td>Sub Total</td>
            <td id="sub-total">$<?php echo number_format($subtotal, 2);?></td>
        </tr>
        <tr>
            <td>Tax(21%)</td>
            <td id="tax">$<?php echo number_format($subtotal * 0.21, 2);?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td id="total">$<?php echo number_format($subtotal * 1.21, 2);?></td>
        </tr>
        <tr>
            <td colspan="2"><a href="shopee_form.php" class="btn">Check Out</a></td>
        </tr>
    </table>
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