<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>オンスタ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="家庭教師をオンラインで">
        <meta name="keywords" content="オンライン家庭教師,オンライン,家庭教師,オンスタ,沖縄">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/slide.css">
        <link rel="alternate stylesheet" href="/css/change.css" title="change">
        <script src="/js/openclose.js"></script>
        <script src="/js/fixmenu_pagetop.js"></script>
    </head>

    <body>
        <header>
            <h1 id="logo"><a href="/"><img src="/images/logo.png" alt="サンプルホーム"></a></h1>
        </header>

        <aside id="subimg">
            <img src="/images/subimg.jpg" alt="">
        </aside>

        <!--PC用（801px以上端末）メニュー-->
        <nav id="menubar">
	<ul>
	<li class="current"><a href="index.blade.php">ホーム<span>Home</span></a></li>
	<li><a href="info.blade.php">オンライン家庭教師とは？？<span>About</span></a></li>
	<li><a href="service.blade.php">オンスタの魅力<span>Charm</span></a></li>
    <li><a href="step.blade.php">指導までの流れ<span>Step</span></a></li>
	<li><a href="charge.blade.php">料金システム<span>Charge</span></a></li>
	<li><a href="access.blade.php">講師一覧<span>List</span></a></li>
	<li><a href="faq.blade.php">お申込み<span>Faq</span></a></li>
	</ul>
	</nav>
	
	<!--小さな端末用（800px以下端末）メニュー-->
	<nav id="menubar-s">
	<ul>
	<li class="current"><a href="index.blade.php">ホーム<span>Home</span></a></li>
	<li><a href="info.blade.php">オンライン家庭教師とは？？<span>About</span></a></li>
	<li><a href="service.blade.php">オンスタの魅力<span>Charm</span></a></li>
    <li><a href="step.blade.php">指導までの流れ<span>Step</span></a></li>
	<li><a href="charge.blade.php">料金システム<span>Charge</span></a></li>
	<li><a href="access.blade.php">講師一覧<span>List</span></a></li>
	<li><a href="faq.blade.php">お問い合わせ・お申込み<span>Faq</span></a></li>
	</ul>
	</nav>
        <!--メニュー開閉ボタン-->
        <div id="menubar_hdr" class="close"></div>

        @yield('body')

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

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
