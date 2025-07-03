<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
  
  if (mysqli_query($conn, $sql)) {
    echo "Message sent successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
