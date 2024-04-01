<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO registration (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>


?>

<?php include 'Templates/header.php'; ?>

<style>
  /* Center the login form */
  .login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 100px);
    /* Adjust for header height */
  }

  /* Style the login form */
  .login-form {
    width: 300px;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  /* Style the form elements */
  .login-form input[type="text"],
  .login-form input[type="password"],
  .login-form input[type="submit"] {
    width: 100%;
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .login-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }

  .login-form input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<div class="login-container">
  <div class="login-form">
    <h2>Login</h2>
    <form action="shopee_account.php" method="post">
      <label for="username_email">Username/Email:</label><br>
      <input type="text" id="username_email" name="username_email" placeholder="Enter username or email" name='username' required><br>

      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" placeholder="Enter password" name='password' required><br>

      <input type="submit" value="Login">
    </form>

    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
  </div>
</div>


<footer>
  <?php include 'Templates/footer.php'; ?>
</footer>

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