<?php
// Database credentials
$host = "localhost"; // e.g., "localhost"
$dbname = "breif7";
$username = "root";
$password = "123";

try {
    // Establish a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  $name = name;
  $email = email;
  $password = password;
  $sql = "INSERT INTO users (name, email, password) VALUE(:name, :email, :password)";
$stmt = $pdo->prepare($sql);
  $stmt -> bindParm (':name',$name);
  $stmt -> bindParm (':email',$email);
  $stmt -> bindParm (':name',$password);

  $stmt->execute();
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Order Confirmation - Your Company Name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <!-- Customer Information Form -->
  <form method="post">
    <h2 class="mb-4">Enter Your Details</h2>
    <div class="form-group">
      <label for="fullName">Full Name:</label>
      <input name="name" type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input name="password" type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
    </div>

    <!-- Additional Address Fields can be added as needed -->

    <button type="submit" class="btn btn-primary">Complete Order</button>
  </form>

  <!-- Order Confirmation -->
  <div class="order-summary mt-4">
    <h3 class="mb-4">Order Summary</h3>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Product 1</td>
          <td>2</td>
          <td>$20.00</td>
          <td>$40.00</td>
        </tr>
        <tr>
          <td>Product 2</td>
          <td>1</td>
          <td>$15.00</td>
          <td>$15.00</td>
        </tr>
      </tbody>
    </table>

    <hr>

    <div class="text-right">
      <p class="font-weight-bold">Total: $55.00</p>
      <!-- Print Invoice Button -->
      <button class="btn btn-secondary mr-2" onclick="printInvoice()">Print Invoice</button>
      <!-- Pay Invoice Button -->
      <button class="btn btn-success" onclick="payInvoice()">Pay Invoice</button>
    </div>
  </div>
</div>

<!-- Bootstrap JS and jQuery (if needed) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript functions for buttons -->
<script>
  function printInvoice() {
    window.print();
  }

  function payInvoice() {
    // Add your payment logic here
    alert("Paying Invoice");
  }
</script>

</body>
</html>
