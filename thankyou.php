<?php include 'Templates/header.php'; ?>


<?php include 'productsarray.php';?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['Gender'];
    $firstname = $_POST['firstname'];
    $insertion = $_POST['insertion'];
    $lastname = $_POST['lastname'];
    $street = $_POST['street'];
    $housenumber = $_POST['housenumber'];
    $postcode = $_POST['postcode'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $payment = $_POST['payment'];
    $order_id = uniqid(); // Generate a random Order ID


    echo "<h1>Thank You for shopping with Shopee!</h1>";
    echo "<p>Gender: $gender</p>";
    echo "<p>First Name: $firstname</p>";
    echo "<p>Insertion: $insertion</p>";
    echo "<p>Last Name: $lastname</p>";
    echo "<p>Street Name: $street</p>";
    echo "<p>House Number: $housenumber</p>";
    echo "<p>Postcode: $postcode</p>";
    echo "<p>Country: $country</p>";
    echo "<p>Email Address: $email</p>";
    echo "<p>Phone Number: $phone</p>";
    echo "<p>Date of Birth: $birthdate</p>";
    echo "<p>Payment Method: $payment</p>";
    echo "<p>Order ID: $order_id</p>"; 
    
} else {
    echo "<h2>No Form Data Submitted!</h2>";
}
?>

<div class="cart-container">
    <?php
    foreach ($_SESSION['cart'] as $cart_product_id => $cart_product) {
        foreach ($all_products as $product) {
            if ($product['id'] == $cart_product_id) {
                echo '<div class="cart-product">';
                echo '<img class="cart-product-image" src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '<p>' . $product['name'] . '<br>';
                echo 'Size: ' . $cart_product['size'] . '<br>';
                echo 'Quantity: ' . $cart_product['quantity'] . '</p>';
                echo '</div>';
            }
        }
    }
    ?>
</div>

<?php include 'thankyoucart.php'; ?>



<!-- Footer Section -->
<?php include 'Templates/footer.php'; ?>

<!------ JavaScript Section ------>
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
