<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $cake = htmlspecialchars($_POST['cake']);
  $quantity = intval($_POST['quantity']);
  $address = htmlspecialchars($_POST['address']);
  $total = $quantity * 25; // Assume each cake is $25
} else {
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Order Confirmation</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
  <h1>Thank You for Your Order!</h1>
</header>

<main>
  <section class="confirmation">
    <h2>Order Details</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Cake:</strong> <?= $cake ?></p>
    <p><strong>Quantity:</strong> <?= $quantity ?></p>
    <p><strong>Total Cost:</strong> $<?= number_format($total, 2) ?></p>
    <p><strong>Delivery Address:</strong> <?= nl2br($address) ?></p>
    <a href="index.html">Order Another Cake</a>
  </section>
</main>

<footer>
  <p>&copy; 2025 SweetBite Cakes</p>
</footer>

</body>
</html>
