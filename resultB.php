<?php
	include "connect_to_db.php";
	$min = $_POST['MinValue'];
	$max = $_POST['MaxValue'];
	$sort = $_POST['sort'];
	if(true == empty($min) || true == empty($max))
		header('location:search.php');
	if($sort == "true")
	{
		$sql = "SELECT * FROM products WHERE price>=$min AND $max>=price ORDER BY date DESC";
	}
	else
	{
		$sql = "SELECT * FROM products WHERE price>=$min AND $max>=price";
	}
	$sql = "SELECT * FROM products WHERE price>=$min AND $max>=price";
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
		<?php
			if($sort != "true")
			{
			?>
			<form method = "post" action = "resultB.php">
			<button>登録日で降順にソート</button>
			<input type = "hidden" name = "ProductsName" value = <?php echo $name;?>>
			<input type = "hidden" name = "sort" value = "true">
		<?php
			}
			else
			{
			?>
			<form method = "post" action = "resultB.php">
			<button>ソート解除</button>
			<input type = "hidden" name = "ProductsName" value = <?php echo $name;?>>
			<input type = "hidden" name = "sort" value = "false">
		<?php
		}
		?>
		</form>
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