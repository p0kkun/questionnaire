<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hobbies = $_POST['hobbies'];
    if (!empty($hobbies)) {
        foreach ($hobbies as $hobby) {
            echo $hobby . "<br>";
        }
        echo '<a href="question2.php">次へ</a>';
    } else {
        echo "趣味が選択されていません。<br>";
        echo '<a href="question.php">戻る</a>';
    }
}
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     header("Location: question2.php");
//     exit;
// }
?>
