<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/sp.css">
  <title>sample site</title>
</head>

<body id="app">
<div class="alert">
<a href="#">新型コロナウィルスに対する取り組みの最新情報をご案内</a></div>

<header>
<h1 class="concept">あなたの<br>好きな空間を作る。</h1>
<nav class="grand">
<?php require("../PHP/header.php"); ?>
</nav>
</header>

  <!-- v-component-->
<section>
<div class="cafe_intro" id="cafe_intro">
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/cafe1.jpg" alt="東京　カフェ"></div>
        <div class="access">
            <p class="area">東京</p>
            <p class="distance">車で15分</p></div>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/cafe2.jpg" alt="神奈川　カフェ"></div>
        <div class="access">
            <p class="area">神奈川</p>
            <p class="distance">車で30分</p></div>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/cafe3.jpg" alt="愛知　カフェ"></div>
        <div class="access">
            <p class="area">愛知</p>
            <p class="distance">車で1時間</p></div>
    </div></div>
    <div class="box">
        <div class="info">
        <div class="photo">
            <img src="../cafe/img/cafe4.jpg" alt="京都　カフェ"></div>
        <div class="access">
            <p class="area">京都</p>
            <p class="distance">車で40分</p></div>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/cafe5.jpg" alt="岡山　カフェ"></div>
        <div class="access">
            <p class="area">岡山</p>
            <p class="distance">車で1.5時間</p></div>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/cafe6.jpg" alt="鹿児島　カフェ"></div>
        <div class="access">
            <p class="area">鹿児島</p>
            <p class="distance">車で50分</p></div>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/cafe7.jpg" alt="沖縄　カフェ"></div>
        <div class="access">
            <p class="area">沖縄</p>
            <p class="distance">車で2時間</p></div>
    </div></div>
</div>
</section>

<main>
<section class="bg_white">
    <h2>好きなロケーションを選ぼう</h2>
    <div class="cafe_local">
    <div class="box">
        <div class="photo">
            <img src="../cafe/img/intro1.jpg" alt="クラシック"></div>
    <div class="text">クラシック</div></div>
    <div class="box">
        <div class="photo">
            <img src="../cafe/img/intro2.jpg" alt="バー"></div>
    <div class="text">バー</div></div>
    <div class="box">
        <div class="photo">
            <img src="../cafe/img/intro3.jpg" alt="キャンプ"></div>
    <div class="text">キャンプ</div></div>
    <div class="box">
        <div class="photo">
            <img src="../cafe/img/intro4.jpg" alt="リゾート"></div>
    <div class="text">リゾート</div></div>
    </div>
    <div class="goto">
        <div class="goto_text"><h3>Go To Eats</h3>
            <p>キャンペーンを利用して、全国で食事しよう。<br>
               いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
            </p></div>
        <img src="../cafe/img/goto.jpg" style="width:100%;border-radius:16px;">
    </div>
</section>
<section class="bg_black" id="cafe_exp">
    <h2>カフェ作りを体験しよう</h2>
    <p>お店のエキスパートが案内するユニークな体験
       (直接対面型またはオンライン)。</p>
    <div class="cafe_exp">
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/exp1.jpg" alt="ジョブ"></div>
        <div class="text">ジョブ体験</div>
            <p>カフェカウンターを体験しよう。</p>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/exp2.jpg" alt="レシピ"></div>
        <div class="text">レシピ体験</div>
            <p>美味しいレシピを考えてみよう。</p>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/exp3.jpg" alt="プロモーション"></div>
        <div class="text">プロモーション体験</div>
            <p>お店の宣伝を手伝ってみよう。</p>
    </div></div>
    </div>
</section>
<section class="cafe_host">
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/host1.jpg" alt="ビジネス"></div>
        <div class="text">ビジネス</div>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/host2.jpg" alt="コミュニティ"></div>
        <div class="text">コミュニティ</div>
    </div></div>
    <div class="box"><div class="info">
        <div class="photo">
            <img src="../cafe/img/host3.jpg" alt="食べ歩き"></div>
        <div class="text">食べ歩き</div>
    </div></div>
</section>
</main>
<?php require("../PHP/footer.php"); ?>


  <!--v-if-start-->
  <div class="jump" id="jump">Jump To Top</div>



  <script type="text/javascript" src="../javascript/Header.js"></script>
  <script type="text/javascript" src="../javascript/Top_Move.js"></script>
  <script tyep="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>
