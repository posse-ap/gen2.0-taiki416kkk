<?php
require('../db_connect.php');
if (isset($_GET['question_id'])) {
  $question_id = htmlspecialchars($_GET['question_id']);
  // var_dump($question_id);
  $stmt = $db->prepare('SELECT * FROM questions WHERE prefecture_id = ?');
  $stmt->execute(array($question_id));
  $questions = $stmt->fetchAll();
  // var_dump($questions);
} else {
  header("Location: /");
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ガチで東京の人しか解けない！ #東京の難読地名クイズ</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="quizy.css">
</head>

<body>
  <!-- <div id="main" class="main"></div> -->

  <?php foreach ($questions as $index => $question) : ?>
    <?php
    $question_number = $index + 1;
    // $stmt = $db->prepare('SELECT * FROM questions WHERE question_id = ?');
    // $stmt->execute(array($question['id']));
    // $choices = $stmt->fetchAll();
    $stmt = $db->prepare('SELECT choice1 FROM questions WHERE question_id = ?');
    $stmt->execute(array($question['id']));
    $answer = $stmt->fetch();
    // var_dump($question);
    ?>

    <div class="quiz">
      <h1><?php echo $question_number; ?>. この地名はなんて読む？</h1>
      <img src="/img/<?php echo $question['img']; ?>">

      <ul>
        <li id="answerlist_<?php echo $question_number . '_' . ($index + 1); ?>" 
            name="answerlist_<?php echo $question_number . '_' . $choice['choice1']; ?>" 
            class="answerlist" 
            onclick="check(
                <?php echo $question_index; ?>,
                <?php echo ($index + 1); ?>,
                <?php echo $choice['valid']; ?>
              )">
          <?php echo $question['choice1']; ?>
        </li>
        <li id="answerlist_<?php echo $question_number . '_' . ($index + 1); ?>" 
            name="answerlist_<?php echo $question_number . '_' . $choice['choice1']; ?>" 
            class="answerlist" 
            onclick="check(
                <?php echo $question_index; ?>,
                <?php echo ($index + 1); ?>,
                <?php echo $choice['valid']; ?>
              )">
          <?php echo $question['choice2']; ?>
        </li>
        <li id="answerlist_<?php echo $question_number . '_' . ($index + 1); ?>" 
            name="answerlist_<?php echo $question_number . '_' . $choice['choice1']; ?>" 
            class="answerlist" 
            onclick="check(
                <?php echo $question_index; ?>,
                <?php echo ($index + 1); ?>,
                <?php echo $choice['valid']; ?>
              )">
          <?php echo $question['choice3']; ?>
        </li>

        <li id="answerbox_<?php echo $question_index; ?>" class="answerbox">
          <span id="answertext_<?php echo $question_index; ?>"></span><br>
          <span>
            正解は「
            <?php echo $question['choice1']; ?>
            」です！
          </span>
        </li>

      </ul>
    </div>
  <?php endforeach; ?>
  <script src="quizy.js"></script>
</body>

</html>