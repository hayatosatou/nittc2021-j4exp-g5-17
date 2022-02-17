<!DOCTYPE html>
<html lang = "ja>
  <head>
    <meta charset = "UTF-8">
    <title>登録画面</title>
  </head>
  <h1>登録情報を入力してください<h1>
  <form method="post" action="emptycheck.php">
    名称:<input type="text" name="name">
    <br>
    価格:<input type="integer" name="price">
    <input type="submit" value="決定">
  </form>
  <br>
  <button onclick="location.href='search.php'">トップ画面へ戻る</button>
</html>