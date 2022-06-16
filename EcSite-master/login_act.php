<?php
session_start();
require("./dbconnect.php");
// $db = db_conn();

//POST値を受け取る
$mail = $_POST['mail'];
$pass = $_POST['pass'];

//データ登録SQL作成
 //mailアドレスがあるか確認
$stmt = $db->prepare("SELECT * FROM members WHERE mail = :mail");
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$status = $stmt->execute();


//抽出データ数を取得
$member = $stmt->fetch();

//指定したハッシュがパスワードにマッチしているかチェック
if (password_verify($pass, $member['pass'])) {
    //DBのユーザー情報をセッションに保存
    $_SESSION['id'] = $member['id'];
    $_SESSION['name'] = $member['name'];
    $msg = 'ログインしました。';
    header('Location: index.php');
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="login.php">戻る</a>';
}
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
