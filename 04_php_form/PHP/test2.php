<?php
function Ch_name(){
$log= htmlspecialchars($_POST["sitename"], ENT_QUOTES, "UTF-8");
return $log;
}
?>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>

<h1>POST受信</h1>
<form method="post" action="test1.php">
<?php echo Ch_name();?></br>
<input type="submit" name="sendin" value="戻る">
</form>

</body></html>
