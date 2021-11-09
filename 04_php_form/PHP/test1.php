<?php
function Ba_name(){
$deck="";
if(isset($_POST["sendback"])){
$deck=$_POST["sendname"];
}}
 ?>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>

<h1>POST送信</h1>
<form method="post" action="test2.php">
<input type="text" name="sitename" size="15" value="TRYPHP">
<input type="submit" name="sendin" value="送信">
</br><?php echo Ba_name();?>
</form>

</body></html>
