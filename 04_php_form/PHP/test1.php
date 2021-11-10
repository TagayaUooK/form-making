<?php
function Ch_name(){
if(isset($_POST["sendin"])){  $log="";
if(empty($_POST["sitename"])){
  $log= "この項目は入力必須です";
}else if(mb_strlen($_POST["sitename"])>10){
  $log= "10文字以内で入力してください";
}else if(!in_array($_POST["sitename"],["TRYPHP"])){
  header("Location:test2.php", true, 307); exit();
}else{$log="error";}
return $log;}
}
?>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>

<h1>POST送信</h1>
<form method="post" action="test1.php">
<input type="text" name="sitename" size="15" value="TRYPHP">
<input type="submit" name="sendin" value="送信">
</br><?php echo Ch_name();?>
</form>

</body></html>
