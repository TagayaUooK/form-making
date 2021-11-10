<?php
function Ch_name(){$name=$_POST["name"]; return $name;}
function Ch_kana(){$kana=$_POST["kana"]; return $kana;}
function Ch_tel(){$tel=$_POST["tel"]; return $tel;}
function Ch_email(){$email=$_POST["Email"]; return $email;}
function Ch_body(){$body=$_POST["body"]; return $body;}
/*ページ移動をこちらで処理
function Ch_page(){
  if(){

  }else if(){

  }
}*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/substyle.css">
  <link rel="stylesheet" type="text/css" href="../css/sp.css">
  <link rel="stylesheet" type="text/php" herf="../PHP/contact.php">
  <title>confirm</title>
</head>
<body id="app">
<div class="contact">
<nav class="grand" style="position: relative">
  <?php require("../PHP/header.php"); ?>
</nav>
<section>
<div class="contact_box">
    <h2>お問い合わせ</h2>
  <form>
　<p>下記の内容をご確認の上送信ボタンを押してください。</p>
	<p>内容を訂正する場合は戻るを押してください。</p>
	<dl class="confirm">
	<dt>氏名</dt>
	    <dd><span id="re_name"><?php echo Ch_name(); ?></span></dd>
	<dt>フリガナ</dt>
	    <dd><span id="re_kana"><?php echo Ch_kana(); ?></span></dd>
	<dt>電話番号</dt>
	    <dd><span id="re_tel"><?php echo Ch_tel(); ?></span></dd>
	<dt>メールアドレス</dt>
	    <dd><span id="re_email"><?php echo Ch_email(); ?></span></dd>
	<dt>お問い合わせ内容</dt>
	    <dd><span id="re_body"><?php echo Ch_body(); ?></span></dd>
	</dl>
	<dd style="display: flex;">
    <button type="button" id="send_back">戻る</button>
    <button type="button" id="send_last">送信</button></dd>
</form></div>
</section>
<?php require("../PHP/footer.php"); ?>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.11.5/vue.min.js"></script>
  <script type="text/javascript" src="../javascript/Header.js"></script>
  <script type="text/javascript" src="../javascript/confirm.js"></script>
  <script tyep="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>
