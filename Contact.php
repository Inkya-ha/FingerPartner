<?php
$error = NULL;
if(isset($_POST['submit'])) {
  // POSTされたデータの取得
  $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
  $body = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
  $ipaddress = $_SERVER['REMOTE_ADDR'];
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  $sendtime = date('Y-m-d H:i:s');

  // 入力項目のバリデーション
  if(empty($name) || empty($email) || empty($title) || empty($body)) {
    $error = '<p class="error">申し訳ございません。お問い合わせの送信に失敗しました。</p>';
    exit($error);
  }

  // 管理者へのメール送信
  $to = array('baruziiak@gmail.com', 'support@finger-partner.jp');
  $subject = 'FingerPartner｜新規お問い合わせのお知らせ';
  $message = <<<EOM
スタッフ各位

お客様より新規のお問い合わせが届きました。
サポートの方は support@finger-partner.jp にログインし、メールに返信してください。

尚、サポートを施す必要性が無い場合は無視してください。
事件性のあるものであれば速やかに行政機関に通報してください。

お問い合わせ送信者の名前 : {$name}
お問い合わせ送信者のメールアドレス : {$email}
お問い合わせ送信者の件名 : {$title}
お問い合わせ送信者の本文 : {$body}
お問い合わせ送信者のIPアドレス :  {$ipaddress}
お問い合わせ送信者のユーザーエージェント : {$useragent}
お問い合わせ送信者の送信時刻 : {$sendtime}

FingerPartner
EOM;

  $headers = 'From: info@finger-partner.jp' . "\r\n" .
    'Reply-To: info@finger-partner.jp' . "\r\n" .
    'Content-Type: text/plain; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if(!mail(implode(',', $to), $subject, $message, $headers)) {
    $error = '<p class="error">申し訳ございません。お問い合わせの送信に失敗しました。</p>';
    exit($error);
  }

  // お問い合わせ送信者への自動返信メールの送信
$to = $email;
$subject = "【自動案内メール】お問い合わせありがとうございます｜FingerPartner";
$message = <<<EOM
{$name}様

平素よりFingerPartnerのサービスをご愛顧賜りまして誠にありがとうございます。
先ほどお客様が送信したお問い合わせ内容を正常に受け付けました。

通常24時間以内にお返事を行っておりますが、社会情勢やサポートの対応人数により返信が遅れる可能性があります。

お問い合わせ対応までしばらくお待ちくださいませ。

FingerPartner
EOM;
$headers = "From: info@finger-partner.jp";

// メール送信
if (mb_send_mail($to, $subject, $message, $headers)) {
    $error = "<p class='success'>お問い合わせありがとうございます。お問い合わせを受け付けました。</p>";
} else {
    $error = "<p class='error'>申し訳ございません。お問い合わせの送信に失敗しました。</p>";
    exit($error);
}
}
?>


<!DOCTYPE html>
<html lang="ja">
    <?php include_once __DIR__ . "/static/head/head.php"; ?>
    <title>お問い合わせ｜FingerPartner</title>
    <style>
		.container {
			max-width: 500px;
			margin: 0 auto;
			background-color: #FFFFFF;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.1);
		}

		h2 {
			text-align: center;
			font-size: 30px;
			font-weight: 600;
			color: #555555;
			margin-top: 0;
		}

		input, textarea {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin: 8px 0;
			box-sizing: border-box;
			font-size: 16px;
			color: #555555;
			background-color: #F5F5F5;
			resize: none;
		}

		input:focus, textarea:focus {
			outline: none;
			background-color: #FFFFFF;
			box-shadow: 0 0 3px 0 #FFA0A0;
		}

		.submit-btn {
			background-color: #FFA0A0;
			color: #FFFFFF;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 16px;
			font-weight: 500;
			transition: background-color 0.3s ease;
		}

		.submit-btn:hover {
			background-color: #FF7070;
		}

		.error {
			color: red;
			font-size: 14px;
			margin-bottom: 10px;
		}

		.success {
			color: green;
			font-size: 14px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
    <?php include_once __DIR__ . "/static/header/header.php"; ?>

    <main>
        <p class="fs-1 label1">お問い合わせ</p>
        <div class="mg-1 text-left">
            <p class="fs-5">
                <span class="load-fade-50ms">ご不明な点やお困りごとがございましたら</span><br>
                <span class="load-fade-100ms">お気軽にお問い合わせくださいませ</span><br>
                <span class="load-fade-150ms">FingerPartnerカスタマーができる限り早急に対応いたします</span><br>
            </p>
        </div>
        <div style="margin-bottom: 10vh;"></div>
            <div class="container">
            <h2>お問い合わせフォーム</h2>
            <form action="" method="post">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" required>
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" required>
                <label for="title">件名</label>
                <input type="text" id="title" name="title" required>
                <label for="message">本文</label>
                <textarea id="message" name="message" rows="8" required></textarea>
                <div class="btn-wrap">
                    <input type="submit" value="送信" name="submit" class="submit-btn">
                </div>
                <?php echo $error;?>
            </form>
        </div>

        <img class="anim-box poyoyon3 is-animated" src="./image/source/contact.svg" alt="Contact" height="150">
    </main>

    <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>
</html>