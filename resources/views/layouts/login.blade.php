<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->

    <!-- <script src="https://code.jqueqy.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/login.js"></script> -->
</head>
<body>
    <header>
        <div id = "head">
        <h1><a href="/top"><img src="images/logo.png"></a></h1>
            <div class="accordion">
                <input type="checkbox" id="menu-bar">
                <label for="menu-bar" class="menu-bar01">
                    さん<img src="images/arrow.png">
                </label>
                <ul id="link01">
                    <li class="bar-menu"><a href="/top">ホーム</a></li>
                    <li class="bar-menu"><a href="/profile">プロフィール</a></li>
                    <li class="bar-menu"><a href="/login">ログアウト</a></li>
                </ul>
            </>
        </label>
    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>〇〇さんの</p>
                <div>
                <p>フォロー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a href="">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>

</body>
</html>
