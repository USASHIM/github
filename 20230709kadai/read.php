<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<table border="1">
<?php
$fp = fopen('<data>data.txt', 'r');

while ($line = fgets($fp)) {
    $data = explode(',', $line);
    if (count($data) >= ４) {
        $fname = $data[0];
        $name = $data[1];
        $mail = $data[2];
        $age = $data[3];

        echo "<tr>";
        echo "<td>$fname</td>";
        echo "<td>$name</td>";
        echo "<td>$mail</td>";
        echo "<td>$age</td>";
        echo "</tr>";
    }
}

fclose($fp);
?>
</table>

