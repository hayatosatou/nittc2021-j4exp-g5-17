<?php
  session_start();
  $name = $_SESSION['name'];
  $price = $_SESSION['price'];
  $date = $_SESSION['date'];
  try{
    $connect = new PDO("pgsql:host=ec2-44-193-188-118.compute-1.amazonaws.com;dbname=d7erkihhtp47qj;port=5432;user=qmrawnpgzlgoaj;password=7f6002961d656ccfd412cc505cf99d5dcbae300f98ce3cf152527d8b90ecc215");
    $sql = "INSERT INTO products VALUES('$name','$price','$date')";
    $result = $connect->query($sql);
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
    die();
  }
  header('location:PageA.php');
?>