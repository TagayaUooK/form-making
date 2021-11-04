<!DOUCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>サンプルページ</title>
</head>
<body>

<p>今日の火付けを表示します</p>

<?php
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s");
?>

</body>
</html>