<?php
session_start();
include_once 'productsarray.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee Form</title>
</head>

<body>
    <div class="wrapper">
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
    </div>
    <?php
    // Calculate the subtotal for all products
    $subtotal = 0;
    foreach ($all_products as $product) {
        if (isset($_SESSION['cart'][$product['id']])) { // Check if product is in cart
            $product_subtotal = $product['price'] * $_SESSION['cart'][$product['id']]['quantity'];
            $subtotal += $product_subtotal;
        }
    }
    ?>

    <div class="total-price">
        <table>
            <tr>
                <td>Sub Total</td>
                <td id="sub-total">$<?php echo number_format($subtotal, 2); ?></td>
            </tr>
            <tr>
                <td>Tax (21%)</td>
                <td id="tax">$<?php echo number_format($subtotal * 0.21, 2); ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td id="total">$<?php echo number_format($subtotal * 1.21, 2); ?></td>
            </tr>
        </table>
    </div>

</body>

</html>