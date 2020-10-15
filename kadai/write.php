<?php
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];    
    $kodawari = $_POST['kodawari'];
    $know = $_POST['know'];
    $want = $_POST['want'];
    $fuman = $_POST['fuman'];


    $str = $name .' '. $sex .' '. $age .' '. $kodawari .' '. $know .' '. $want .' '. $fuman;   

    $file = fopen('./data/data.txt','a');
    fwrite($file,$str."\n"); // \nはテキストファイルの改行
    fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p><?= $str ?></p>
    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
