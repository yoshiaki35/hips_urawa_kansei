<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    
    
</head>
<body>
    @yield('content')
    <div class="contact sp-none">
        <h2>
            ご不明点等がございましたらお気軽にお問い合わせください。
            <br>
            ホームページからの御予約もかのです
        </h2>
        <ul>
            <li>
                <div class="detail">
                    <p class="title">ご予約フォーム</p>
                    メール御予約は当店１回以上ご利用された会員様に限ります。
                    <br>
                    御予約日の一週間前の深夜０時から受付開始となります。
                    <div class="loading-panel-wrap">
                        <a href="reserve">
                            <div class="loading-panel">
                                <span>
                                    <h3>
                                        <i class="fa fa-file-text-o"></i>
                                        ご予約はコチラ
                                    </h3>
                                </span>
                            </div>
                        </a>
                        <div class="shadow"></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="detail">
                    <p class="title">お電話でのお問い合わせ</p>
                    お急ぎやの方や詳しい話を聞きたい方はお電話ください
                    <br>
                    非通知設定の場合は解除お願いします。
                    <div class="loading-panel-wrap">
                        <div class="loading-panel">
                            <span>
                                <h3 x-ms-format-detection="none"></h3>
                                <h4>10:00～23:00(電話受付9:30～21:00)</h4>
                            </span>
                        </div>
                        <div class="shadow"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="sp-f-contents pc-none">
        <h2 class="none">
            Contents
            <span>メニュー項目</span>
        </h2>
        <ul>
            <li>
                <a href="information">
                    <img data-src="img/f-nav-news.png" alt="最新情報"　class="lazyload" src="img/dummy.png">
                </a>
            </li>
            <li class="sub">
                <a href="{{ url('cast') }}">
                    <img data-src="img/f-nav-girls.png" alt="在籍女性" class="lazyload" src="img/dummy.png">
                </a>
            </li>
            <li>
                <a href="schedule">
                    <img data-src="img/f-nav-schedule.png" alt="出勤情報" class="lazyload" src="img/dummy.png">
                </a>
            </li>
        </ul>

    </div>
    <div class="shoplist sp-none">
    <div class="shoplist sp-none">
        <div class="saitama">
            <h3 class="area">
                <i class="fa fa-building"></i>
                埼玉エリア
            </h3>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips.jp" target="_blank">越谷本店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips-nishikawa.jp" target="_blank">西川口店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hipskumagaya.com" target="_blank">熊谷店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hipssm.blog.fc2.com" target="_blank">高級派遣SM倶楽部・越谷店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hipssm.blog.fc2.com" target="_blank">高級派遣SM倶楽部・西川口店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips.jp" target="_blank">越谷本店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips.jp" target="_blank">越谷本店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips.jp" target="_blank">越谷本店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips.jp" target="_blank">越谷本店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips.jp" target="_blank">越谷本店</a>
            </p>
            <p>
                <i class="fa fa-dot-cirecle-o"></i>
                <a href="https://hips.jp" target="_blank">越谷本店</a>
            </p>
        </div>
    </div>
</body>
</html>
