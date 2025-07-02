<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $service = htmlspecialchars($_POST['service']);
  $date = htmlspecialchars($_POST['date']);
  $time = htmlspecialchars($_POST['time']);
} else {
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Appointment Confirmed</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
  <h1>Appointment Confirmed</h1>
</header>

<main>
  <section class="confirmation">
    <h2>Your Appointment Details</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Service:</strong> <?= $service ?></p>
    <p><strong>Date:</strong> <?= $date ?></p>
    <p><strong>Time:</strong> <?= $time ?></p>
    <a href="index.html">Book Another Appointment</a>
  </section>
</main>

<footer>
  <p>&copy; 2025 Glamour Touch Beauty Parlor</p>
</footer>

</body>
</html>
