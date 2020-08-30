@extends('layouts.app')

@section('content')
<div class="girls">
    <h2>
        <span>G</span>
        irl
        <span>L</span>
        ist
        </h2>
        <h3>在籍一覧</h3>
        <div class="breadcrumb sp-none">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="https://www.hips-urawa.jp/">
                        <span itemprop="name">浦和 デリヘル【ヒップス】</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="https://www.hips-urawa.jp/top.html">
                        <span itemprop="name">トップページ</span>
                    </a>
                    <meta itemprop="position" content="2">    
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop=name>在籍一覧</span>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
        <ul>
            @foreach($casts as $cast)
            <li>
                <div class="detail">
                    <div class="image">
                        <a href="{{ route('cast.datail', ['id' => $cast->id]) }}">
                            <img src="{{ Storage::disk('s3')->url("{$cast->image_url1}") }}"  alt="{{ $cast->name}} " /onmouseover="this.src='{{ Storage::disk('s3')->url("{$cast->image_url2}") }}'" onmouseout="this.src='{{ Storage::disk('s3')->url("{$cast->image_url1}") }}'">
                        </a>
                    </div>
                    <div class="data">
                        <div class="time">
                            <div class="reserve">
                                {{ $cast->open_time->name}}
                                <br>
                                <span>▼</span>
                                {{ $cast->last_time->name}}    
                            </div>
                        </div>
                        <div class="video"></div>
                        <div class="name">{{ $cast->name }} {{ $cast->age }}　歳</div>
                        <div class="size">
                            {{ $cast->size1 }}
                            <br class="br-sp">
                            {{ $cast->size2 }}
                        </div>
                        <div class="icon-type clearfix">
                            <div class="box">
                                <div class="left">
                                    <div class="{{ $cast->tag1->name }}">
                                        <p>{{ $cast->icon1->name }}</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="{{ $cast->tag2->name }}">
                                        <p>{{ $cast->icon2->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
@endsection