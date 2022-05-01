<?php
require('db_connect.php');

$stmt = $db->query('SELECT * FROM prefectures');
$prefectures = $stmt->fetchAll();
// var_dump($prefectures);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quizy</title>
</head>
<body>
    <?php foreach ($prefectures as $prefecture) : ?>
        <p>
            <a href="/quiz?question_id=<?php echo $prefecture['id']; ?>"><?php echo $prefecture['id'] . '：' . $prefecture['name']; ?></a>
        </p>
    <?php endforeach; ?>
</body>
</html>