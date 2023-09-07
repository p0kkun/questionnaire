<?php require '../questionnaire-header.php'; ?>
<form action="process_question1.php" method="post">
        <p>あなたの旅行の趣味はどれですか？（複数選択可）</p>
        <input type="checkbox" name="hobbies[]" value="アドベンチャー・アクティビティ"> アドベンチャー・アクティビティ<br>
        <input type="checkbox" name="hobbies[]" value="ビーチリゾート"> ビーチリゾート<br>
        <input type="checkbox" name="hobbies[]" value="文化・歴史巡り"> 文化・歴史巡り<br>
        <input type="checkbox" name="hobbies[]" value="自然・アウトドア"> 自然・アウトドア<br>
        <input type="checkbox" name="hobbies[]" value="食べ歩き"> 食べ歩き<br>
        <input type="submit" value="次へ">
    </form>
<?php require '../questionnaire-footer.php'; ?>