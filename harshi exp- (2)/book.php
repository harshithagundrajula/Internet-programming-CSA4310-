<?php include("db.php"); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $room = $_POST["room"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    $sql = "INSERT INTO bookings (name, room, checkin, checkout) VALUES ('$name', '$room', '$checkin', '$checkout')";
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Room</title>
</head>
<body>
  <h2>Book a Room</h2>
  <form method="post">
    <input type="hidden" name="room" value="<?php echo $_GET['room']; ?>">
    Name: <input type="text" name="name" required><br>
    Check-in: <input type="date" name="checkin" required><br>
    Check-out: <input type="date" name="checkout" required><br>
    <input type="submit" value="Confirm Booking">
  </form>
</body>
</html>
