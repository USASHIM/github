<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>BM登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="hwselect.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="hwinsert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>書籍名<input type="text" name="name"></label><br>
     <label>書籍URL<input type="text" name="url"></label><br>
     <label>書籍コメント<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
