<?php
  session_start();
  $_SESSION['name'] = $_POST['name'];
  $name = $_SESSION['name'];
  $_SESSION['price'] = $_POST['price'];
  $price = $_SESSION['price'];
  if(true == empty($name) || true == empty($price))
  {
    header('location:error.php');
  }
  else
  {
    header('location:confirm.php');
  }
?>