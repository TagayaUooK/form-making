<?php
function Ch_name(){   $name="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["name"])){$name= "この項目は入力必須です";}
  else if(mb_strlen($_POST["name"])>10){$name= "10文字以内で入力してください";}
  else if(!in_array($_POST,["山田太郎"])){}
  else{$name= "この項目は入力必須です";}
  print $name;}
}
function Ch_kana(){   $kana="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["kana"])){$kana= "この項目は入力必須です";}
  else if(mb_strlen($_POST["kana"])>10){$kana= "10文字以内で入力してください";}
  else if(!in_array($_POST,["ヤマダタロウ"])){}
  else{$kana= "この項目は入力必須です";}
  print $kana;}
}
function Ch_tel(){    $tel="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["tel"])){$tel= "この項目は入力必須です";}
  else if(mb_strlen($_POST["tel"])>10){$tel= "10文字以内で入力してください";}
  else if(!in_array($_POST,["09012345678"])){}
  else{$tel= "この項目は入力必須です";}
  print $tel;}
}
function Ch_email(){   $email="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["Email"])){$email= "この項目は入力必須です";}
  else if(!in_array($_POST,["test@test.co.jp"])){}
  else{$email= "この項目は入力必須です";}
  print $email;}
}
function Ch_body(){   $body="";
  if(isset($_POST["send_check"])){
  if(empty($_POST["body"])){$body= "この項目は入力必須です";}
  print $body;}
}
?>
