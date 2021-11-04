<?php
function Ch_name(){
$name="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["name"])){$name= "この項目は入力必須です";}
  else if(mb_strlen($_POST["name"])>10){$name= "10文字以内で入力してください";}
}}
function Ch_kana(){
$kana="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["kana"])){print "この項目は入力必須です";}
  else if(mb_strlen($_POST["kana"])>10){print "10文字以内で入力してください";}
}}
function Ch_tel(){
$tel="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["tel"])){print "この項目は入力必須です";}
  else if(mb_strlen($_POST["tel"])>10){print "10文字以内で入力してください";}
}}
function Ch_email(){
$email="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["body"])){print "この項目は入力必須です";}
}}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/substyle.css">
  <link rel="stylesheet" type="text/css" href="../css/sp.css">
  <title>contact</title>
</head>
<body id="app">
<div class="contact">
<nav class="grand" style="position: relative">
<?php require("../PHP/header.php"); ?>
</nav>
<section>
<div class="contact_box">
<h2>お問い合わせ</h2>
<form method="post">
  <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
  <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
  <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
  <p><span class="required">*</span>は必須項目となります。</p>
  <dl>
    <dt><label for="name">氏名</label>
      <span class="required">*<?php echo Ch_name(); ?></span></dt>
      <dd><input type="text" id="In_name" placeholder="山田太郎"></dd>
    <dd><label for="kana">フリガナ</label>
      <span class="required">*</span></dt>
      <dd><input type="text" id="In_kana" placeholder="ヤマダタロウ"></dd>
    <dd><label for="tel">電話番号</label>
      <span class="required">*</span></dt>
	    <dd><input type="text" id="In_tel" placeholder="09012345678"></dd>
    <dd><label for="email">メールアドレス</label>
	    <span class="required">*</span></dt>
	  <dd><input type="text" id="In_email" placeholder="test@test.co.jp"></dd>
  </dl>
  <h3><label for="body">お問い合わせ内容をご記入ください。
  <span class="required">*</span></label></h3>
  <dl class="body">
	  <dd><textarea id="In_body"></textarea></dd>
	  <dd><button type="button" id="send_check">送信</button></dd>
  </dl>
</form></div>
</section>
<?php require("../PHP/footer.php"); ?>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.11.5/vue.min.js"></script>
  <script type="text/javascript" src="../javascript/Header.js"></script>
  <script type="text/javascript" src="../javascript/contact.js"></script>
  <script tyep="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>
