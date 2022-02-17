<!DOCTYPE html>
<html> 
	<head> 
	<meta charset="UTF-8">
		<title> 
		<?php 
			print 'トップページ';
		?>
		</title> 
	</head>
	<body>
		<h1>商品検索</h1>
			<h2>商品名部分一致検索</h2>
				<form name = "ProdactsNameSerch" action = "resultA.php" method = "post">
					商品名:<input type = "text" name = "ProductsName">
					<input type = "submit" name = "NameSerch" value = "検索">
				</form>
			<h2>下限・上限価格検索</h2>
				<form name = "MinMaxSerch" action = "resultB.php" method = "post">
					下限値:<input type = "number" name = "MinValue">
					上限値:<input type = "number" name = "MaxValue">
					<input type = "submit" name = "ValueSerch" value = "検索">
				</form>
				<form action = "add.php">
					<input type="submit" value = "登録ページへ">
				</form>
	</body>
</html>