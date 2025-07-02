<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $department = htmlspecialchars($_POST['department']);
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
  <meta charset="UTF-8" />
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
    <p><strong>Department:</strong> <?= $department ?></p>
    <p><strong>Date:</strong> <?= $date ?></p>
    <p><strong>Time:</strong> <?= $time ?></p>
    <a href="index.html">Book Another Appointment</a>
  </section>
</main>

<footer>
  <p>&copy; 2025 CityCare Hospital</p>
</footer>

</body>
</html>
