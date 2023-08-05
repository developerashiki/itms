<?php
$id = $_GET['id'];
 $conn = mysqli_connect('localhost','root','','dbms');

$sql = "DELETE FROM students WHERE id = $id";
if(mysqli_query($conn, $sql)){
    header("Location: admin.php");
}   
else {
    echo "No Deleted";
}
