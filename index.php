<?php 
$title = '勝敗を予想しよう！何問当たるかな？';

$question1 = array();
$question1 = array('朝倉未来', '矢地祐介');
$answer = $question1[0];


$question2 = array();
$question2 = array('朝倉海', 'マネル・ケイプ');
$answer = $question2[0];
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

<h2><?php echo $title ?></h2>
<?php foreach ($question1 as $value) { ?>
  <input type="radio" name="question1" value="<?php echo $value; ?>"><?php echo $value; ?><br>
<?php } ?>
  <input type="hidden" name="answer1" value="<?php echo $answer1; ?>">
  <input type="submit" value="回答する">

<?php foreach ($question2 as $value) { ?>
  <input type="radio" name="question2" value="<?php echo $value; ?>"><?php echo $value; ?><br>
<?php } ?>

  <input type="hidden" name="answer" value="<?php echo $answer; ?>">
  <input type="submit" value="回答する">

</form>

</body>
</html>
