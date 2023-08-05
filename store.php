<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn = mysqli_connect('localhost', 'root', '', 'dbms');
$sql = "INSERT INTO students VALUES(NULL,'$name', '$email', '$subject','$message')";
if (mysqli_query($conn, $sql)) {
  header("Location: index.php");
} else {
  echo "Not inserted";
}
