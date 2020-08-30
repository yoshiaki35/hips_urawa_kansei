@extends('layouts.app')

@section('content')

    <div class="main">
        <div class="photo">
            <a href="{{ Storage::disk('s3')->url("{$cast->image_url3}") }}">
                <img src="{{ Storage::disk('s3')->url("{$cast->image_url3}") }}" alt="{{ $cast->name}}">
            </a>
        </div>
        <div class="icon pc-none">
            <img src="{{ asset('strorage/img/search.png') }}" alt="">
        </div>
        <div class="center">
            <div class="prof clearfix">
                <div class="new"></div>
                <div class="image">
                    <img src="{{ Storage::disk('s3')->url("{$cast->image_url3}") }}" alt="{{ $cast->name }}">
                </div>
                <dl class="detail">
                    <dt class="name">{{ $cast->name }}</dt>
                    <dd class="size">AEG{{ $cast->age }} {{ $cast->size1 }} {{ $cast->size2 }}</dd>
                    <dt class="type">TYPE</dt>
                    <dd class="type">{{ $cast->icon1->name }}</dd>
                    <dt class="type">TYPE</dt>
                    <dd class="type"> {{ $cast->icon2->name }}</dd>
                </dl>
            </div>
            <div class="prof-btn">
                <ul>
                    <li>
                        <section class="myModal">
                            <input id="myModal_open" type="radio" name="myModal_switch">
                            <label for="myModal_open">
                                <div class="container">
                                    <div class="btn btn-prof">
                                        <span>ご予約</span>
                                        <br>
                                        ご予約フォーム申し込み
                                    </div>
                                </div>
                            </label>
                            <input id="myModal_close-overlay" type="radio" name="myModal_switch">
                            <label for="myModal_close-overlay">オーバーレイで閉じる</label>
                            <input id="myModal_close-button" type="radio" name="myModal_switch">
                            <label for="myModal_close-button"></label>
                            <div class="myModal_popUp">
                                <div class="myModal_popUp-content">
                                    <p class="text">
                                        メールご予約は当店一回以上ご利用された会員様に限ります<br>
                                    インターネット予約では、ご予約日の1週間前の深夜0時から受付開始となります。
                                    <br>
                                    <span>※キャンセル不可、当日のご予約は電話のみになります</span>
                                    <br>
                                    24時間以内に返信ない場合は、お電話でのご確認をお願いいたします。<br>
                                    
                                    ご利用の携帯電話によっては特定のドメインからのメールの受信を拒否する機能(ドメイン指定受信) が設定されている場合がありますので、[hips-urawa.jp]を受信可能にしてから、ご登録下さいませ。
                                    <br>
                                    </p>
                                    {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
                                    <div class="hope-content">
                                        <div class="detail">
                                            <div class="left">
                                                <h4>御予約女性</h4>
                                            </div>
                                            <div class="right">
                                                {{ Form::text('cast', $cast['name'] ) }}
                                            </div>
                                        </div>

                                        <div class="detail">
                                            <div class="left">
                                                <h4>希望日</h4>
                                            </div>
                                            <div class="right">
                                                <div class="icon">
                                                    <p><img src="{{asset('storage/img/schedule.png') }}" alt=""></p>
                                                </div>
                                                {{ Form::text('kiboubi', null, ['class' => 'form_text-small hasDatepicker', 'id' => 'datepicker']) }}
                                                {{ Form::text('time', null, ['setp' => '900'] )}} 
                                            </div>
                                        </div>

                                        <div class="detail">
                                            <div class="left">
                                                <h4>お名前</h4>
                                            </div>
                                            <div class="right">
                                            {{ Form::text('name', null, ['class' => 'form_text-big']) }}
                                            </div>
                                        </div>

                                        <div class="detail">
                                            <div class="left">
                                                <h4>電話番号</h4>
                                            </div>
                                            <div class="right">
                                                {{ Form::tel('tel', null, ['class' => 'form_text-big']) }}
                                            </div>
                                        </div>

                                        <div class="detail">
                                            <div class="left">
                                                <h4>メールアドレス</h4>
                                            </div>
                                            <div class="right">
                                            {{ Form::text('email', null, ['class' => 'form_text-big']) }}
                                            </div>
                                        </div>

                                        <div class="detail">
                                            <div class="left">
                                                <h4>ご利用コース</h4>
                                            </div>
                                            <div class="right">
                                            {{ Form::select('course', ['90分' => '90分', '120分' => '120分', '150分' => '150分', '180分' => '180分', '210分' => '210分', '240分' => '240分', '270分' => '270分', '300分' => '300分', '360分' => '360分']) }}
                                            </div>
                                        </div>

                                        <div class="detail">
                                            <div class="left">
                                                <h4>ご利用場所</h4>
                                            </div>
                                            <div class="right">
                                                ホテル名or自宅の場合は住所を入力してください
                                                <br>
                                                {{ Form::text('basyo', null, ['class' => 'form_text-big']) }}
                                                <br>
                                                駅名をご入力ください
                                                <br>
                                                {{ Form::text('ekimei', null, ['class' => 'form_text-big']) }}
                                            </div>
                                        </div>
                                        
                                        <div class="detail">
                                            <div class="left">
                                                <h4>備考欄</h4>
                                            </div>
                                            <div class="right">
                                            {{ Form::textarea('contacts', null, ['class' => 'form_text-big']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hop-sent">
                                    {{ Form::submit('確認画面へ', ['class' => 'btn btn-primary']) }}
                                    </div>
                                    {!! Form::close() !!}
                                </div>    
                            </div>                             
                        </section>
                    </li>
                    <li>
                        <div class="container">
                            <a href="#weekly." class="btn btn-prof">
                                <span>{{ \Carbon\Carbon::now()->isoFormat('MM月DD日') }}</span>
                                <br>
                                {{ $cast->schedule1 }}
                            </a>
                        </div>
                    </li>
                </ul>
            </div>  
            <div class="comment sp-none">
                <div class="grad-wrap">
                    <input id="trigger1" class="grad-trigger" type="checbox">
                    <label class="grad-btn" for="trigger1"></label>
                    <div class="grad-item">
                        <div style="background-image: repeating-linear-gradient(to right, rgb(255, 255, 255), rgb(255, 255, 255) 10px, rgb(255, 229, 255) 10px, rgb(255, 229, 255) 20px); background-position: 0% 0%; background-size: 15px 15px; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 10px 0px 0px; padding: 12px; border-radius: 12px; border: 3px solid rgb(255, 163, 255); text-align: center; line-height: normal; font-stretch: normal; box-shadow: rgb(126, 126, 126) -3px -3px 5px;">
                            <div style="background-color: initial; font-family: arial, Meiryo; padding: 10px; border-radius: 3px; text-align: center; color: rgb(51, 51, 51); margin-bottom: 10px; box-shadow: rgba(0, 0, 0, 0.5) 0px 2px 2px, rgb(255, 255, 255) 0px 1px 1px inset; text-shadow: rgba(255, 255, 255, 0.5) 0px 1px 0px;">
                                <b>{{ $cast->coment1}} </b>
                            </div>
                            <div style="margin: 0px; padding: 10px; border-radius: 10px; font-stretch: normal; box-shadow: rgb(126, 126, 126) 2px 2px 2px;">
                            <div style="background: rgb(245, 38, 124); padding: 8px 10px; border-radius: 10px; border: 4px dotted rgb(17, 17, 17);">
                            <div style="text-align: left">
                                <span style="color: #FFF;">
                                    {!!nl2br(e($cast->coment2)) !!}
                                </span>
                            </div>
                            <div style="text-align: left">
                                <hr style="color: rgb(255, 255 ,255); font-family: Arial, helvetica, sans-serif;">
                                &nbsp;&nbsp;
                                <span style="border-width: 0px; border-style: solid; margin: 0px; padding: 0px; text-align: left; color: rgb(255, 255, 255); text-transform: none; line-height: inherit; text-indent: 0px; letter-spacing: normal; font-family: Arial,Helvetica,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; text-decoration: none; background-repeat: no-repeat; word-spacing: 0px; white-space: normal; box-sizing: border-box; orphans: 2; -webkit-text-stroke-width: 0px;">
                                <b>☆↓↓</b>
                                </span>
                                <span style="border-width: 0px; border-style: solid; margin: 0px; padding: 0px; text-align: left; color: rgb(102, 255, 0); text-transform: none; line-height: inherit; text-indent: 0px; letter-spacing: normal; font-family: Arial,Helvetica,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; text-decoration: none; background-repeat: no-repeat; word-spacing: 0px; white-space: normal; box-sizing: border-box; orphans: 2; -webkit-text-stroke-width: 0px;">
                                    <b>埼玉最強コンセプト</b>
                                    <span style="display: inline !important; float: none; background-color: rgb(245, 38, 124); color: rgb(255, 255, 255); font-family: Arial,Helvetica,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 700; letter-spacing: normal; line-height: inherit; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">↓↓</span>
                                    </span>
                                    <span style="border-width: 0px; border-style: solid; margin: 0px; padding: 0px; text-align: left; color: rgb(255, 255, 255); text-transform: none; line-height: inherit; text-indent: 0px; letter-spacing: normal; font-family: Arial,Helvetica,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; text-decoration: none; background-repeat: no-repeat; word-spacing: 0px; white-space: normal; box-sizing: border-box; orphans: 2; -webkit-text-stroke-width: 0px;">
                                            <b>☆★☆</b>
                                            </span>
                                            <hr style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">
                                            <p style="font-family: Arial, Helvetica, sans-serif;">
                                                <span style="font-family: Arial, Helvetica, sans-serif;">
                                                    <span>
                                                        <span style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">
                                                            <b>ご新規様必見！風俗を100倍楽しく</b>
                                                        </span>
                                                    </span>
                                                </span>
                                            </p>
                                            <p style="color: rgb(255, 255, 255);">
                                                <span style="font-family: Arial, Helvetica, sans-serif;">
                                                    <span>
                                                        <span style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">
                                                            <b>マル秘【虎の巻】はコチラ</b>
                                                        </span>
                                                    </span>
                                                    <br>
                                                    <br>
                                                    <a href="https://www.hips-urawa.jp/profile.html?uid=940" target="_blank">
                                                        <span style="color: rgb(0, 0, 0);">◆</span>
                                                        <span style="color: rgb(255, 230, 0);">click！</span>
                                                        <span style="color: rgb(128, 255, 0);">click！</span>
                                                        <span style="color: rgb(0, 255, 255);">click</span>
                                                        <span style="color: rgb(0, 0, 0);">◆</span>
                                                    </a>
                                                </span>
                                            </p>
                                            <p style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">
                                                <span style="font-family: Arial, Helvetica, sans-serif;">&nbsp;</span>
                                            </p>
                                            <p style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">
                                                <span style="font-family: Arial, Helvetica, sans-serif;">
                                                    <b>■ちょい！ぽちゃ萌えっ娘倶楽部</b>
                                                </span>
                                            </p>
                                            <p style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">
                                                <span style="font-family: Arial, Helvetica, sans-serif;">
                                                    <strong>
                                                        <span>営業時間:10:00～21:00(電話受付)　</span>
                                                    </strong>
                                                </span>
                                            </p>
                                            <p style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">
                                                <span style="font-family: Arial, Helvetica, sans-serif;">
                                                    <strong>
                                                        <span>TEL: 048-452-4738</span>
                                                    </strong>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script charset="utf-8" src="https://platform.twitter.com/widgets.js" async=""></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="clearfix" pc-none></div>
        <div class="sp-comment pc-none"></div>
        <div class="main-sp-photo pc-none">
            <div class="detail">
                <div class="image">
                    <<a href="{{ Storage::disk('s3')->url("{$cast->image_url4}") }}">
                        <img src="{{ Storage::disk('s3')->url("{$cast->image_url4}") }}">
                        <div class="icon pc-none">
                            <img src="{{ asset('storage/img/search.png') }}" alt="拡大表示">
                        </div>
                    </a>
                </div>
                <div class="img">
                    <a href="{{ Storage::disk('s3')->url("{$cast->image_url5}") }}">
                        <img src="{{ Storage::disk('s3')->url("{cast->image_url5}") }}">
                        <div class="icon pc-none">
                            <img src="{{ asset('strage/img/search') }}" alt="拡大表示">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="photo sp-none">
            <img src="{{ Storage::disk('s3')->url("{$cast->image_url3}") }}">

        </div>
        <div class="content">
            <ul>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                        "血液型"
                    </p>
                    <p class="faq-a">{{ $cast->bloodltype->name}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                        "出勤"
                    </p>
                    <p class="faq-a">{{ $cast->goingtowork}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            性格
                    </p>
                    <p class="faq-a">{{ $cast->personality}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            SorM
                    </p>
                    <p class="faq-a">{{ $cast->sorm}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            タバコ
                    </p>
                    <p class="faq-a">{{ $cast->cigarettes}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            出身地
                    </p>
                    <p class="faq-a">{{ $cast->kenmei->name}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            得意プレイ
                    </p>
                    <p class="faq-a">{{ $cast->goodplay}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            チャームポイント
                    </p>
                    <p class="faq-a">{{ $cast->charmpoint}}</p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            趣味・特技
                    </p>
                    <p class="faq-a">{{ $cast->hobbies_skills}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            好きな異性のタイプ
                    </p>
                    <p class="faq-a">{{ $cast->favoriteoppositesextype}} </p>
                </li>
                <li>
                    <p class="faq-q">
                        <i class="fa fa-angle-right"></i>
                            今一番欲しいもの
                    </p>
                    <p class="faq-a">{{ $cast->whatIwantmostnow}} </p>
                </li>

            </ul>
        </div>
        <div class="main-sub">
            <div class="option">
                <div class="sp-none">
                    <h2>
                        <span>S</span>
                        elf
                        <span>M</span>
                        ovie
                    </h2>
                    <h3>自撮り動画</h3>
                </div>
                {{--<div class="selfmovie">
                    <video muted controls width="100%">
                        <source src="{{ Storage::disk('s3')->url("{$cast->movie}") }}" type="video/mp4">
                    </video>
                </div>--}}
                <h2>
                    <span>O</span>
                    ption
                    <span>L</span>
                    ist
                </h2>
                <h3>オプションリスト</h3>
                <ul>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p>{{ $cast->option1->name }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>ぴんくろ～た～</p>
                            </div>
                            <div class="right">
                                <p>{{ $cast->option2->name }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="option-list">
                            <div class="left">
                                <p>あいますく</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
</div>    
        
    
@endsection