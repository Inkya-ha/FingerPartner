<?php
session_start(); // セッション開始宣言

// ログイン済みかを確認
if (isset($_SESSION['USER'])) {
    header('Location: index.php'); // ログインしていればindex.phpへリダイレクトする
    exit; // 処理終了
}
// ログイン機能
$error_message = '';
if(isset($_POST['login'])) { // name="login"と対応している
    if($_POST['password'] == 'FingerPartner1234') { // パスワード
        $_SESSION['USER'] = 'user'; // 
        header('Location: index.php');
        exit;
    } else {
        $error_message = 'パスワードが間違っています';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login｜FingerPartner</title>
</head>
<body>
    <div>
        <p style="color:red;"><?php echo $error_message ?></p>
        <form id="memberLogin" method="post" action="login.php">
            <p>パスワードを入力してください。</p>
            <p>
                <input type="password" id="password" name="password" size="20" />
            </p>
            <p>
                <button type="submit" name="login" size="" value="">送信</button>
            </p>
        </form>
        </div>
</body>
</html>