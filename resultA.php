<?php
	include "connect_to_db.php";
	$name = $_POST['ProductsName'];
	$sort = $_POST['sort'];
	if(true == empty($name))
		header('location:search.php');
	if($sort == "true")
	{
		$sql = "SELECT * FROM products WHERE name LIKE '%$name%' ORDER BY date DESC";
	}
	else
	{
		$sql = "SELECT * FROM products WHERE name LIKE '%$name%'";
	}
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
		<input type = "hidden" name = "ProductsName" value = <?php echo $name;?>>
		<button onclick="location.href='./resultA.php'" name = "sort" value = "true">登録日で降順にソート</button>
       		<table border='1'>
			<tr>
				<th>商品名</th>
				<th>価格</th>
				<th>登録日</th>
			</tr>
		<?php
			foreach($rows as $row)
			{
		?>
			<tr>
				<td><? echo $row['name'];?></td>
				<td align = "right"><? echo $row['price'];?></td>
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