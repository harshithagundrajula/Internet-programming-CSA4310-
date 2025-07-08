<?php
$host='localhost'; $db='library'; $user='root'; $pass='';

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error) die("DB Error: ".$conn->connect_error);

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$pwd')";
if($conn->query($sql)) {
  echo "<p>Registration successful. <a href='index.html'>Login here</a>.</p>";
} else {
  echo "<p>Error: ".$conn->error."</p>";
}
$conn->close();
