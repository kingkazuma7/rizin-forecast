<?php 
// answer.php

$question = $_POST['question']; // ラジオボタンの内容を受け取る
$answer1 = $_POST['answer1']; // hiddenで送られた正解を受け取る

// 結果の判定
if ($question1 == $answer1) {
  $result = "正解！";
} else {
  $result = "不正解...";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RIZIN勝敗予想 | 結果</title>
</head>
<body>
  <h2>勝敗予想の結果</h2>
  <?php echo $result ?>
</body>
</html>
