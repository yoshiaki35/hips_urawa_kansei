@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
                                <div class="hope-content">
                                    <div class="detail">
                                        <div class="left">
                                            <h4>在籍女性</h4>
                                        </div>
                                        <div class="right">
                                           <p> 
                                           {{ $inputs['cast'] }}
                                           </p>
                                        </div>
                                    </div>
                                    <input type="hidden" name="cast" value="{{ $inputs['cast'] }}">
                                    
                                    <div class="detail">
                                        <div class="left">
                                            <h4>希望日</h4>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <p><img src="img/nav-schedule.png"></p>
                                            </div>
                                            {{ $inputs['kiboubi']}}
                                            {{ $inputs['time'] }}
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="kiboubi" value="{{ $inputs['kiboubi'] }}">        
                                    <input type="hidden" name="time" value="{{ $inputs['time'] }}">
                                    <div class="detail">
                                        <div class="left">
                                            <h4>お名前</h4>
                                            
                                        </div>
                                        <div class="right">
                                        {{ $inputs['name'] }}
                                        </div>
                                    </div>
                                    <input type="hidden" name="name" value="{{ $inputs['name'] }}">
                                    <div class="detail">
                                        <div class="left">
                                            <h4>電話番号</h4>
                                            
                                        </div>
                                        {{ $inputs['tel'] }}
                                        <div class="right">
                                        <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">    
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <div class="left">
                                            <h4>メールアドレス</h4>
                                        </div>
                                        {{ $inputs['email'] }}
                                        <div 
                                        class="right">
                                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                                        </div>
                                    </div>

                                    <div class="detail">
                                        <div class="left">
                                            <h4>ご利用コース</h4>
                                        </div>
                                        {{ $inputs['course'] }};
                                        <div class="right">
                                            <input type="hidden" name="course" value="{{ $inputs['course'] }}">    
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <div class="left">
                                            <h4>メールアドレス</h4>
                                        </div>
                                        {{ $inputs['email'] }}
                                        <div class="right">
                                            <input type="hidden" value="{{ $inputs['email'] }}">    
                                        </div>
                                    </div>
                                    
                                    <div class="detail">
                                        <div class="left">
                                            <h4>ご利用場所</h4>
                                        </div>
                                        {{ $inputs['basyo'] }}
                                        <br>
                                        {{ $inputs['ekimei'] }}
                                        <div class="right">
                                            ホテル名or自宅の場合は住所を入力してください
                                            <br>
                                            <br>
                                            <input type="hidden" name="basyo" value="{{ $inputs['basyo'] }}">
                                            <br>
                                            駅名をご入力ください
                                            <br>
                                            <input type="hidden" name="ekimei" value="{{ $inputs['ekimei'] }}">
                                        </div>
                                    </div>    
                                    <div class="detail">
                                            <div class="left">
                                                <h4>備考欄</h4>
                                            </div>
                                            {{ $inputs['contacts']}}
                                            <div class="right">
                                            <input type="hidden" name="contacts" value=" {{ $inputs['contacts'] }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="text-center">
                <button name="action" type="submit" value="return" class="btn btn-dark">入力画面に戻る</button>
                <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
            </div>
                                    
                                {!! Form::close() !!}
                            
@endsection