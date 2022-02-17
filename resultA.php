<?php
	include "connect_to_db.php";
	$name = $_POST['ProductsName'];
	if(true == empty($name))
		header('location:search.php');
	$sql = "SELECT * FROM products WHERE name LIKE '%$name%'";
    $result = connect_to_db($sql);
	$row_count = $result->rowCount();
	foreach($result as $row)
	{
		$rows[] = $row;
	}
	$connect = null;
?>
<!DOCTYPE html>
<html> 
	<head> 
	<meta charset="UTF-8">
		<title> 
		<?php 
			print("検索結果");
		?>
		</title> 
	</head> 
	<body>
		<h1>検索結果</h1>
       		<table border='1'>
			<tr>
				<td>商品名</td>
				<td>価格</td>
				<td>登録日</td>
			</tr>
		<?php
			foreach($rows as $row)
			{
		?>
			<tr>
				<td><? echo $row['name'];?></td>
				<td><? echo $row['price'];?></td>
				<td><? echo $row['date'];?></td>
			</tr>
		<?php	
			}
		?>
		</table>
	</body>
	<br>
	<button onclick="location.href='./search.php'">トップ画面へ戻る</button>
</html>