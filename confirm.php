<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>確認画面</title>
</head>
<body>
  <h1>以下の内容で登録しますか？</h1>
<?php
  session_start();
  $name = $_SESSION['name'];
  $price = $_SESSION['price'];
  $date = date("Y-m-d");
  $_SESSION['date'] = $date;
  $_SESSION['name'] = $name;
  $_SESSION['price'] = $price;
  print("商品名:".$name);
  echo '<br>';
  print("価格:".$price);
  echo '<br>';
  print("登録日:".$date);
  echo '<br>';
?>
  <form action="regist.php">
    <input type="submit" value="はい">
  </form>
  <form action="add.php">
    <input type="submit" value="いいえ">
  </form>
</body>
</html>