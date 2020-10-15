<?php
    // 送られてきたデータを受け取る
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];    
    $kodawari = $_POST['kodawari'];
    $know = $_POST['know'];
    $want = $_POST['want'];
    $fuman = $_POST['fuman'];

    $str = $name .' '. $sex .' '. $age .' '. $kodawari .' '. $know .' '. $want .' '. $fuman;

        function h($str)
    {
        return htmlspecialchars($str,ENT_QUOTES);
    }

?>

<html>

<head>
    <meta charset="utf-8">
    <title>送信内容の確認</title>
</head>

<body>
    <p>お名前：<?= $name ?> </p>
    <p>性別：<?= $sex ?> </p>
    <p>年齢：<?= $age ?> </p>
    <p>こだわり：<?= $kodawari ?> </p>
    <p>似合う色やファッションを知っているか：<?= $know ?> </p>
    <p>似合うファッションをしたいか：<?= $want ?> </p>
    <p>ファッションにおける不満：<?= $fuman ?> </p>

    <form action="write.php" method="post">
        <input type="hidden" name='str' value="<?php echo $str; ?>">
        <!-- <input type="hidden" name='name' value="<?php echo $name; ?>">
        <input type="hidden" name="sex" value="<?php echo $yourname; ?>">
        <input type="hidden" name="age" value="<?php echo $yourname; ?>">
        <input type="hidden" name="kodawari" value="<?php echo $yourname; ?>">
        <input type="hidden" name="know" value="<?php echo $yourname; ?>">
        <input type="hidden" name="want" value="<?php echo $yourname; ?>">
        <input type="hidden" name="yourname" value="<?php echo $yourname; ?>">
        <input type="hidden" name="yourname" value="<?php echo $yourname; ?>"> -->
        <input action ="write.php" type="submit" value="送信" style = 'margin: 1em 0;'>
    </form>
</body>

</html>
