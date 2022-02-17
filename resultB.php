<?php
	$min = $_POST['MinValue'];
	$max = $_POST['MaxValue'];
	if(true == empty($min) || true == empty($max))
		header('location:search.php');
	$connect = new PDO("pgsql:host=ec2-44-193-188-118.compute-1.amazonaws.com;dbname=d7erkihhtp47qj;port=5432;user=qmrawnpgzlgoaj;password=7f6002961d656ccfd412cc505cf99d5dcbae300f98ce3cf152527d8b90ecc215");
    	$sql = "SELECT * FROM products WHERE price>=$min AND $max>=price";
    	$result = $connect->query($sql);
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