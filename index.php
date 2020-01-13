<?php 
$title = '勝敗を予想しよう！何問当たるかな？';

$question = array(); // 配列
$question = array('朝倉未来', '矢地祐介'); // 2択問題 

$answer = $question[0]; //正解

shuffle($question); // 配列の中身をシャッフル
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RIZIN勝敗予想</title>
</head>
<body>

<!-- *************************
        参考サイト
https://kinocolog.com/quizprogram/
******************************  -->

  <form action="answer.php" method="post">
  
    <!-- <input type="radio" name="question" value="<?php //echo $question[0]; ?>"><?php //echo $question[0]; ?><br>
    <input type="radio" name="question" value="<?php //echo $question[0]; ?>"><?php //echo $question[1]; ?><br> -->

    <?php foreach($question as $value) { ?>
    <?php //var_dump($value); ?>
      <input type="radio" name="question" value="<?php echo $value; ?>"><?php echo $value; ?><br>
    <?php } ?>
    <input type="hidden" name="answer" value="<?php echo $answer ?>">
    <input type="submit" value="回答する">
  </form>
</body>
</html>
