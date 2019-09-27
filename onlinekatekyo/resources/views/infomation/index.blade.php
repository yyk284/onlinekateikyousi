<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>オンスタ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="家庭教師をオンラインで">
<meta name="keywords" content="オンライン家庭教師,オンライン,家庭教師,オンスタ,沖縄">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slide.css">
<link rel="alternate stylesheet" href="css/change.css" title="change">
<script src="js/openclose.js"></script>
<script src="js/fixmenu_pagetop.js"></script>
<script src="js/styleswitcher.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<style>
.slide1,.slide2,.slide3 {display:none;}
#mainimg {position: absolute;}
</style>
<![endif]-->
</head>

<body class="home">

<div id="container">

<header>
<h1 id="logo"><a href="/"><img src="images/logo.png" alt="サンプルホーム"></a></h1>
<ul id="headermenu">
<li><a href="/contact" class="btn1">資料請求・お問い合わせ</a></li>
<li><a href="/contact2" class="btn1">見学のお申し込み</a></li>
</ul>
<!--文字サイズ変更ボタン-->
<div id="fsize">
<p>文字サイズ</p>
<ul>
<li id="small"><a href="#" onclick="setActiveStyleSheet('default'); return false;" title="文字サイズ「小」"></a></li>
<li id="large"><a href="#" onclick="setActiveStyleSheet('change'); return false;" title="文字サイズ「大」"></a></li>
</ul>
</div>
</header>

<!--スライドショー-->
<aside id="mainimg">
<img src="images/0.jpg" alt="" class="slide0">
<img src="images/1.jpg" alt="" class="slide1">
<img src="images/2.jpg" alt="" class="slide2">
<img src="images/3.jpg" alt="" class="slide3">
</aside>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li class="current"><a href="/">ホーム<span>Home</span></a></li>
<li><a href="/info">施設のご案内<span>Information</span></a></li>
<li><a href="/service">サービスのご案内<span>Service</span></a></li>
<li><a href="/charge">ご利用料金<span>Charge</span></a></li>
<li><a href="/access">アクセス<span>Access</span></a></li>
<li><a href="/faq">よく頂く質問<span>Faq</span></a></li>
</ul>
</nav>

<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li class="current"><a href="/">ホーム<span>Home</span></a></li>
<li><a href="/info">施設のご案内<span>Information</span></a></li>
<li><a href="/service">サービスのご案内<span>Service</span></a></li>
<li><a href="/charge">ご利用料金<span>Charge</span></a></li>
<li><a href="/access">アクセス<span>Access</span></a></li>
<li><a href="/faq">よく頂く質問<span>Faq</span></a></li>
</ul>
</nav>

<div id="contents">

<section class="ofh">

<h2>オンライン家庭教師のオンスタ<span>Home</span></h2>

<div class="list2">
<figure><a href="/charm"><img src="images/sample1.jpg" alt="サービス名"></a></figure>
<h4>オンスタの魅力</h4>
<p><a href="/charm" class="btn1">詳細をみる</a></p>
</div>

<div class="list2">
<figure><a href="/tuors"><img src="images/sample1.jpg" alt="サービス名"></a></figure>
<h4>講師一覧</h4>
<p><a href="/tutors" class="btn1">詳細をみる</a></p>
</div>

<div class="list2">
<figure><a href="/faq"><img src="images/sample1.jpg" alt="サービス名"></a></figure>
<h4>お申込み</h4>
<p><a href="/faq" class="btn1">詳細をみる</a></p>
</div>

</section>

<section id="new">
<h2>更新情報・お知らせ<span>What's New</span></h2>
<dl>
<dt>2019/9/28</dt>
<dd>オンスタ公式HP公開。<span class="newicon">NEW</span></dd>
<dt></dt>
<dd></dd>
<dt></dt>
<dd></dd>
<dt></dt>
<dd></dd>
<dt></dt>
<dd></dd>
<dt></dt>
<dd></dd>
<dt></dt>
<dd></dd>
</dl>
<p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
</section>


   <footer>
    <div id="footermenu">
	<ul>
		<li class="current"><a href="index.blade.php">ホーム<span></span></a></li>
		<li><a href="info.blade.php">オンライン家庭教師とは？？<span></span></a></li>
		<li><a href="service.blade.php">オンスタの魅力<span></span></a></li>
        <li><a href="step.blade.php">指導までの流れ<span></span></a></li>
		<li><a href="charge.blade.php">料金システム<span></span></a></li>
		<li><a href="access.blade.php">講師一覧<span></span></a></li>
		<li><a href="faq.blade.php">お問い合わせ・お申込み<span></span></a></li>
	</ul>
	
	</div>
        <!--/footermenu-->

        <div id="copyright">
        <small>Copyright&copy; <a href="/">サンプルホーム</a> All Rights Reserved.</small>
        <span class="pr"><a href="/http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
        </div>
    </footer>

    <p class="nav-fix-pos-pagetop"><a href="/#">↑</a></p>

    <!--メニューの開閉処理条件設定　800px以下-->
    <script>
        if (OCwindowWidth() <= 800) {
            open_close("menubar_hdr", "menubar-s");
        }
    </script>
</html>

