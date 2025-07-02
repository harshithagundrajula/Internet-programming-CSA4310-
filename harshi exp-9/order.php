<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $product = htmlspecialchars($_POST['product']);
  $quantity = (int) $_POST['quantity'];
  $address = htmlspecialchars($_POST['address']);

  // Prices
  $prices = [
    'Smartphone' => 499,
    'Wireless Earbuds' => 89,
    'Smartwatch' => 199
  ];
  $price = $prices[$product] ?? 0;
  $total = $quantity * $price;
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
  <h1>Order Confirmation</h1>
</header>

<main>
  <section class="confirmation">
    <h2>Thank you, <?= $name ?>!</h2>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Product:</strong> <?= $product ?></p>
    <p><strong>Quantity:</strong> <?= $quantity ?></p>
    <p><strong>Total:</strong> $<?= number_format($total, 2) ?></p>
    <p><strong>Shipping Address:</strong><br><?= nl2br($address) ?></p>
    <a href="index.html">Shop More</a>
  </section>
</main>

<footer>
  <p>&copy; 2025 GadgetZone</p>
</footer>

</body>
</html>
