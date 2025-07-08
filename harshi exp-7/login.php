<?php
$host='localhost'; $db='library'; $user='root'; $pass='';

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error) die("DB Error: ".$conn->connect_error);

$email = $conn->real_escape_string($_POST['email']);
$pwd = $_POST['password'];

$res = $conn->query("SELECT password, name FROM users WHERE email='$email'");
if($res->num_rows === 1) {
  $row = $res->fetch_assoc();
  if(password_verify($pwd, $row['password'])) {
    session_start();
    $_SESSION['user'] = $row['name'];
    echo "<p>Welcome, ".htmlspecialchars($row['name'])."! You are logged in.</p>";
  } else {
    echo "<p>Invalid password. <a href='index.html'>Try again</a>.</p>";
  }
} else {
  echo "<p>No account found. <a href='index.html'>Register</a>.</p>";
}
$conn->close();
