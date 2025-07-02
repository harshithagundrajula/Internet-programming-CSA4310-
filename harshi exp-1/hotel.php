<?php
$conn = new mysqli("localhost", "root", "", "hotel_booking");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST["fullname"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $room_type = $_POST["room_type"];
  $checkin = $_POST["checkin"];
  $checkout = $_POST["checkout"];

  $sql = "INSERT INTO bookings (fullname, email, phone, room_type, checkin, checkout) 
          VALUES ('$name', '$email', '$phone', '$room_type', '$checkin', '$checkout')";

  if ($conn->query($sql) === TRUE) {
    echo "<h2>Booking Successful!</h2>";
  } else {
    echo "Error: " . $conn->error;
  }
  $conn->close();
}
?>
