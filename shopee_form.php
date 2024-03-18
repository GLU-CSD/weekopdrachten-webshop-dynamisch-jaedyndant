<!doctype html>
<html class="no-js" lang="en">

<?php include 'Templates/header.php'; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Form</title>
        <style>


        </style>
    </head>

    <body>

        <div class="container">
            <h2>Order Form</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="Gender">Gender</label>
                    <select id="Gender" name="Gender">
                        <option value=""></option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Other">Other.</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div class="form-group">
                    <label for="insertion">Insertion</label>
                    <input type="text" id="insertion" name="insertion">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div class="form-group">
                    <label for="street">Street Name</label>
                    <input type="text" id="street" name="street">
                </div>
                <div class="form-group">
                    <label for="housenumber">House Number</label>
                    <input type="number" id="housenumber" name="housenumber">
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" id="postcode" name="postcode">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="birthdate">Date of Birth</label>
                    <input type="date" id="birthdate" name="birthdate">
                </div>
                <div class="form-group">
                    <label>Payment Method</label><br>
                    <input type="radio" id="ideal" name="payment" value="Ideal">
                    <!-- <label for="ideal">Ideal</label> -->
                    <img src="assets/img/img/Shopee_Img/images/ideal.png" alt="iDeal logo" width="50" height="50"><br>
                    <input type="radio" id="visa" name="payment" value="Visa">
                    <!-- <label for="visa">Visa</label> -->
                    <img src="assets/img/img/Shopee_Img/images/visa_payment.png" alt="" width="50" height="50"><br>
                    <input type="radio" id="paypal" name="payment" value="PayPal">
                    <!-- <label for="paypal">PayPal</label> -->
                    <img src="assets/img/img/Shopee_Img/images/paypalpay.png" alt="" width="50" height="50"><br>
                    <input type="radio" id="mastercard" name="payment" value="Mastercard">
                    <!-- <label for="mastercard">Mastercard</label> -->
                    <img src="assets/img/img/Shopee_Img/images/Master_Card_Payment.png" alt="" width="50"
                        height="50"><br>
                    <div class="form-group">
                        <input type="checkbox" id="terms" name="terms">
                        <label for="terms">I agree to the terms and conditions</label>
                    </div>
                    <input type="submit" value="Submit">
            </form>
        </div>

    </body>

    </html>







    <!-- ----foooter------------------------------>

    <?php include 'Templates/footer.php'; ?>
   
    
    
     <!------java scripts------------------------------>

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