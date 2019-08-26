<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>老人ホーム・介護施設・デイサービス向け 無料ホームページテンプレート tp_home4</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/slide.css">
<link rel="alternate stylesheet" href="/css/change.css" title="change">
<script src="js/openclose.js"></script>
<script src="js/fixmenu_pagetop.js"></script>
<script src="js/styleswitcher.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div id="container">

<header>
<h1 id="logo"><a href="/"><img src="images/logo.png" alt="サンプルホーム"></a></h1>
<ul id="headermenu">
<li><a href="/contact/" class="btn1">資料請求・お問い合わせ</a></li>
<li><a href="/contact2/" class="btn1">見学のお申し込み</a></li>
</ul>
<!--文字サイズ変更ボタン-->
<div id="fsize">
<p>文字サイズ</p>
<ul>
<li id="small"><a href="/#" onclick="setActiveStyleSheet('default'); return false;" title="文字サイズ「小」"></a></li>
<li id="large"><a href="/#" onclick="setActiveStyleSheet('change'); return false;" title="文字サイズ「大」"></a></li>
</ul>
</div>
</header>

<aside id="subimg">
<img src="images/subimg.jpg" alt="">
</aside>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li><a href="/">ホーム<span>Home</span></a></li>
<li><a href="/info/">施設のご案内<span>Information</span></a></li>
<li><a href="/service/">サービスのご案内<span>Service</span></a></li>
<li><a href="/charge/">ご利用料金<span>Charge</span></a></li>
<li><a href="/access/">アクセス<span>Access</span></a></li>
<li><a href="/faq/">よく頂く質問<span>Faq</span></a></li>
</ul>
</nav>

<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="/">ホーム<span>Home</span></a></li>
<li><a href="/info/">施設のご案内<span>Information</span></a></li>
<li><a href="/service/">サービスのご案内<span>Service</span></a></li>
<li><a href="/charge/">ご利用料金<span>Charge</span></a></li>
<li><a href="/access/">アクセス<span>Access</span></a></li>
<li><a href="/faq/">よく頂く質問<span>Faq</span></a></li>
</ul>
</nav>

<div id="contents">

<section>

<h2>確認画面</h2>

<!-- フォームの情報はここからです -->
<form name="form1" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER["REQUEST_URI"];?>">
<input type="hidden" name="mode" value="confirm">
<table class="ta1">
<!--<tr><td colspan="2" class="auto"><strong>確認画面</strong></td></tr>-->
<!-- 入力／確認 -->
<!--<tr><th class="tamidashi" colspan="2">お問い合わせフォーム</th></tr>-->
<tr>
<th width="150">お名前<span style="color:red">※</span></th>
<td>
<input type="hidden" name="item1" value="<?php echo $form["item1"];?>">
<?php echo $form["item1"];?>
</td>
</tr>
<tr>
<th width="150">メールアドレス<span style="color:red">※</span></th>
<td>
<input type="hidden" name="item2" value="<?php echo $form["item2"];?>">
<?php echo $form["item2"];?>
</td>
</tr>
<tr>
<th>お問い合わせ内容<span style="color:red">※</span></th>
<td>
<input type="hidden" name="item3" value="<?php echo $form["item3"]; ?>">
<?php echo nl2br($form["item3"]);?>
</td>
</tr>
</table>
<div class="c">
<input type="submit" value="送信する">
&nbsp;
<input type="button" value="戻る" onClick="document.form1.mode.value='reinput';document.form1.submit()">
</div>
</form>
<!-- フォームの情報はここまでです -->

</section>

</div>
<!--/#contents-->

</div>
<!--/#container-->

<footer>

<div id="footermenu">
<ul>
<li><a href="/">ホーム</a></li>
<li><a href="/company/">会社概要</a></li>
<li><a href="/info/">施設のご案内</a></li>
<li><a href="/service/">サービスのご案内</a></li>
<li><a href="/charge/">ご利用料金</a></li>
<li><a href="/access/">アクセス</a></li>
<li><a href="/faq/">よく頂く質問</a></li>
<li><a href="/recruit/">採用情報</a></li>
</ul>
<ul>
<li class="title"><a href="/#">メニューのタイトル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
</ul>
<ul>
<li class="title"><a href="/#">メニューのタイトル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
</ul>
<ul>
<li class="title"><a href="/#">メニューのタイトル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
<li><a href="/#">メニューサンプル</a></li>
</ul>
</div>
<!--/footermenu-->

<div id="copyright">
<small>Copyright&copy; <a href="/">サンプルホーム</a> All Rights Reserved.</small>
<span class="pr"><a href="/http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</div>

</footer>

<p class="nav-fix-pos-pagetop"><a href="/#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>
<!--メニューの開閉処理条件設定　800px以下-->
<script>
if (OCwindowWidth() <= 800) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

</body>
</html>
