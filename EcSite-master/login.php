<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>ログイン</title>
</head>

<body>
        <h1>ログイン</h1>

        <form action="login_act.php" method="post">
    <div>
        <label>メールアドレス：<label>
        <input type="text" name="mail" >
    </div>
    <div>
        <label>パスワード：<label>
        <input type="password" name="pass">
    </div>
        <button type="submit" class="btn next-btn">ログイン</button>
    </div>

    </form>
    <br>
    <br>
    <h2>新規登録の方は<a href="entry.php">こちら</a></h2>

</body>

</html>
