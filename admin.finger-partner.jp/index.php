<?php 
session_start();

//ログイン済みかを確認
if (!isset($_SESSION['USER'])) {
    header('Location: login.php');
    exit;
}

//ログアウト機能
if(isset($_POST['logout'])){
    $_SESSION = [];
    session_destroy(); // セッションを完全に破棄
    header('Location: index.php'); // ログインしていない人向け画面に遷移
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff｜FingerPartner</title>
    <link rel="stylesheet" href="https://finger-partner.jp/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div>
        <p class="fs-1 text-center">FingerPartner</p>
        <p class="fs-3 text-center">Staff Pages</p>
    </div>
    <div>
        <p class="fs-5">通話録音履歴</p>
        <a href="./callresult">確認する</a>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div>
      <form method="post" action="index.php">
        <input type="submit" name="logout" value="ログアウト"><br>
      </form>
    </div>

    <script src="https://finger-partner.jp/js/bundle.min.js"></script>
</body>
</html>