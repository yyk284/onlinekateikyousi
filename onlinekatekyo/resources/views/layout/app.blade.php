<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>オンスタ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="家庭教師をオンラインで">
        <meta name="keywords" content="オンライン家庭教師,オンライン,家庭教師,オンスタ,沖縄">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/slide.css">
        <link rel="alternate stylesheet" href="/css/change.css" title="change">
        <script src="/js/openclose.js"></script>
        <script src="/js/fixmenu_pagetop.js"></script>
        <script src="/js/styleswitcher.js"></script>
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
                <li><a href="/">ホーム<span>Home</span></a></li>
                <li><a href="/info/">施設のご案内<span>Information</span></a></li>
                <li><a href="/tutors/">講師紹介<span>Tutor</span></a></li>
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
                <li><a href="/tutors/">講師紹介<span>Tutor</span></a></li>
                <li><a href="/charge/">ご利用料金<span>Charge</span></a></li>
                <li><a href="/access/">アクセス<span>Access</span></a></li>
                <li><a href="/faq/">よく頂く質問<span>Faq</span></a></li>
            </ul>
        </nav>
        <!--メニュー開閉ボタン-->
        <div id="menubar_hdr" class="close"></div>

        @yield('body')
    </body>

    <footer>
        <div id="footermenu">
        <ul>
        <li><a href="/">ホーム</a></li>
        <li><a href="/company/">会社概要</a></li>
        <li><a href="/info/">施設のご案内</a></li>
        <li><a href="/tutors/">講師紹介</a></li>
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

    <!--メニューの開閉処理条件設定　800px以下-->
    <script>
        if (OCwindowWidth() <= 800) {
            open_close("menubar_hdr", "menubar-s");
        }
    </script>
</html>
