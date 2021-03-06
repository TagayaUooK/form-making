<?php
function Ch_name(){
  if(isset($_POST["send_check"])){   $name="";
  if(empty($_POST["name"])){$name= "この項目は入力必須です";}
  else if(mb_strlen($_POST["name"])>10){$name= "10文字以内で入力してください";}
  else if(!in_array($_POST["name"],["山田太郎"])){$name="_";}
  else{$name= "この項目は入力必須です";}
  return $name;}
}
function Ch_kana(){
  if(isset($_POST["send_check"])){   $kana="";
  if(empty($_POST["kana"])){$kana= "この項目は入力必須です";}
  else if(mb_strlen($_POST["kana"])>10){$kana= "10文字以内で入力してください";}
  else if(!in_array($_POST["kana"],["ヤマダタロウ"])){$kana="_";}
  else{$kana= "この項目は入力必須です";}
  return $kana;}
}
function Ch_tel(){
  if(isset($_POST["send_check"])){    $tel="";
  if(empty($_POST["tel"])){$tel= "この項目は入力必須です";}
  else if(!in_array($_POST["tel"],["09012345678"])){
    if(preg_match("/[0-9]{10,11}/",$_POST["tel"])){  $tel="_";}
    else{$tel= "10～11文字以内でハイフンを入れないで入力してください";}}
  else{$tel= "この項目は入力必須です";}
  return $tel;}
}
function Ch_email(){
  if(isset($_POST["send_check"])){   $email="";
  if(empty($_POST["Email"])){$email= "この項目は入力必須です";}
  else if(!in_array($_POST,["test@test.co.jp"])){
      if(false !== filter_var($email, FILTER_VALIDATE_EMAIL))
      {$email= "正しいEメールアドレスを入力してください";}else{$email="_";}}
  else{$email= "この項目は入力必須です";}
  return $email;}
}
function Ch_body(){
  if(isset($_POST["send_check"])){   $body="";
  if(empty($_POST["body"])){$body= "この項目は入力必須です";}else{$body="_";}
  return $body;}
}
function Ch_page(){
  $n=Ch_name(); $k=Ch_kana(); $t=Ch_tel(); $m=Ch_email(); $b=Ch_body();
  if($n=="_" && $k=="_" && $t=="_" && $m=="_" && $b=="_")
    {header("Location:confirm.php",true,307); exit();}
}

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
<form method="post" action="contact.php">
  <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
  <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
  <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
  <p><span class="required">*</span>は必須項目となります。</p>
  <dl>
    <dt><label for="name">氏名</label>
      <span class="required">*<?php echo Ch_name();?></span></dt>
      <dd>
        <input type="text" name="name" id="In_name" placeholder="山田太郎">
      </dd>
    <dd><label for="kana">フリガナ</label>
      <span class="required">*<?php echo Ch_kana();?></span></dt>
      <dd>
        <input type="text" name="kana" id="In_kana" placeholder="ヤマダタロウ">
      </dd>
    <dd><label for="tel">電話番号</label>
      <span class="required">*<?PHP echo Ch_tel();?></span></dt>
	    <dd>
        <input type="text" name="tel" id="In_tel" placeholder="09012345678">
      </dd>
    <dd><label for="email">メールアドレス</label>
	    <span class="required">*<?php echo Ch_email();?></span></dt>
	  <dd>
      <input type="text" name="Email" id="In_email" placeholder="test@test.co.jp">
    </dd>
  </dl>
  <h3><label for="body">お問い合わせ内容をご記入ください。
  <span class="required">*<?php echo Ch_body();?></span></label></h3>
  <dl class="body">
	  <dd><textarea name="body" id="In_body"></textarea></dd>
	  <dd>
      <button type="submit" name="send_check" id="send_check">送信</button>
      <?php Ch_page(); ?>
    </dd>
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
