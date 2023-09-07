<?php require '../questionnaire-header.php'; ?>
<form action="process_question1.php" method="post">
    <p>あなたの旅行の趣味はどれですか？（複数選択可）</p>
    <?php
    $hobbies = [
        'アドベンチャー・アクティビティ', 'ビーチリゾート', '文化・歴史巡り',
        '自然・アウトドア', '食べ歩き'
    ];
    foreach ($hobbies as $hobby) {
        echo '<input type="checkbox" name="hobbies[]" value="' . $hobby . '"> ' . $hobby . '<br>';
    }
    ?>
    <input type="submit" value="次へ">
</form>
<?php require '../questionnaire-footer.php'; ?>