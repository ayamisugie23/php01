<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
    <form action = "post_confirm.php" method = "post">
        <div>
            1. お名前:<input type = "text" name = "name">
        </div>
        <div>
            2. 性別: 男<input type = "radio" name = "sex" value="男">女<input type = "radio" name = "sex" value="女">
        </div>
        <div>
            3. 年齢:<input type = "number" name = "age" min = 0 max = 120>
        </div>
        <div>
            4. あなたのファッションのこだわりを教えてください
            <div><input type = "text" name = "kodawari" style = 'width:400px; margin-left:30px;'></div>
        </div>
        <div>
            5. 自分に似合う色やファッションをなんとなくでも知っている: はい<input type = "radio" name = "know" value="はい">いいえ<input type = "radio" name = "know" value="いいえ">
        </div>
        <div>
            6. 自分に似合うファッションをしたいですか: はい<input type = "radio" name = "want" value="はい">いいえ<input type = "radio" name = "want" value="いいえ">
        </div>
        <div>
            7. 服を選ぶ時の不満を教えてください
            <div><input type = "text" name = "fuman" style = 'width:400px; margin-left:30px;'></div>
        </div>
        <input type="submit" value="確認する" style = 'margin: 1em 0;'>
    </form>
    <div style = 'margin: 1em 0;'>ご協力ありがとうございました。</div>
</body>
</>