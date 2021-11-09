<?php
function Ch_name(){
$log="";
if(isset($_POST["sendin"])){
$error=0;
if(empty($_POST["sitename"])){
  $log= "この項目は入力必須です";
}else if(mb_strlen($_POST["sitename"])>10){
  $log= "10文字以内で入力してください";
}else if(!in_array($_POST["sitename"],["TRYPHP"])){
  $log= "問題なし";
}else{$error=1; $log=$error; /*結果：１ */}
} print $log;}
?>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>

<h1>POST送信</h1>
<form method="post" action="test0.php">
<input type="text" name="sitename" size="15" value="TRYPHP">
<input type="submit" name="sendin" value="送信">
</br><?php echo Ch_name();?>
</br>
<?php
if(isset($_POST["sendin"])){
$error=0; $log="";
if(empty($_POST["sitename"])){
  $log= "この項目は入力必須です";
}else if(mb_strlen($_POST["sitename"])>10){
  $log= "10文字以内で入力してください";
}else if(!in_array($_POST["sitename"],["TRYPHP"])){
  $log= "問題なし";
}else{$error=2; /*結果：１ */}
} echo $log; print $error;
/* 初期、表示エラー起こるので注意   */
?>
</form>

</body></html>
