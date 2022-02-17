<?php
  session_start();
  $name = $_SESSION['name'];
  $price = $_SESSION['price'];
  $date = $_SESSION['date'];
  $sql = "INSERT INTO products VALUES('$name','$price','$date')";
  $result = connect_to_db($sql);
  header('location:add.php');
?>