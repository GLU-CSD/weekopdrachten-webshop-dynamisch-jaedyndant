<form action="place_order.php" method="post">
    <div class="cart-items">
        <h2>Cart Items</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if (isset($_SESSION['cart'])) { 
                    foreach ($_SESSION['cart'] as $product_id => $cart_item) { 
                        $product = $all_products[$product_id];
                ?>
                <tr>
                    <td><?php echo $product['name'];?></td>
                    <td><?php echo $cart_item['quantity'];?></td>
                    <td><?php echo $product['price'];?></td>
                </tr>
                <?php 
                    } 
                } 
                ?>
            </tbody>
        </table>
    </div>
   