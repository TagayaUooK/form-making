<?php
$error=0;

function Ch_name(){
  if(empty($_POST["name"]))
      {print "この項目は入力必須です";}
  else if(mb_strlen($_POST["name"])>10)
      {print "10文字以内で入力してください";  }
}
function Ch_kana(){
  if(empty($_POST["kana"]))
    {print "この項目は入力必須です";}
  else if(mb_strlen($_POST["kana"])>10)
    {print "10文字以内で入力してください";  }
}
function Ch_tel(){
  if(empty($_POST["tel"]))
    {print "この項目は入力必須です";}
  else if(mb_strlen($_POST["tel"])>10)
    {print "10文字以内で入力してください";  }
}
function Ch_email(){
  if(empty($_POST["body"]))
    {print "この項目は入力必須です";}
}

?>
