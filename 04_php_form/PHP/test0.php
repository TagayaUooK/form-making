<?php
function Ch_name(){
$log="";
if(isset($_POST["sendin"])){
$error=0;
if(empty($_POST["sitename"])){
  $log= "この項目は入力必須です";
}else if(mb_strlen($_POST["sitename"])>10){
  $log= "10文字以内で入力してください";
}else{$error=1;  print $error; /*結果：１ */}
} print $log;}

function Ch_na(){
$log="";
if(isset($_POST["sendin"])){
$error=0;
if(empty($_POST["sitename"])){
  $log= "この項目は入力必須です";
}else if(mb_strlen($_POST["sitename"])>10){
  $log= "10文字以内で入力してください";
}else{$error=1;  print $error; /*結果：１ */}
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
<?php echo Ch_name();?></br>
<?php echo Ch_name();?></br>
<?php echo Ch_na();?>
</form>

</body></html>
