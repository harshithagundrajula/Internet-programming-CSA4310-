<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $passport = htmlspecialchars($_POST['passport']);
  $flight = htmlspecialchars($_POST['flight']);
  $seat = htmlspecialchars($_POST['seat']);
} else {
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Booking Confirmed</h1>
</header>

<main>
  <section class="confirmation">
    <h2>Ticket Details</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Passport No:</strong> <?= $passport ?></p>
    <p><strong>Flight:</strong> <?= $flight ?></p>
    <p><strong>Seat:</strong> <?= $seat ?></p>
    <a href="index.html">Book Another</a>
  </section>
</main>

<footer>
  <p>&copy; 2025 Flight Reservation System</p>
</footer>

</body>
</html>
