<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}
$fname = $_POST["fname"];
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
//文字作成
$str = date("Y-m-d H:i:s").",".$fname.",".$name.",".$mail.",".$age;
//File書き込み
$file = fopen("<data>data.txt","a"); // ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>
​
​
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
​
<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
​
<ul>
<li><a href="post.php">戻る</a></li>
<li><a href="read.php">結果を見る</a></li>
</ul>
</body>
</html>