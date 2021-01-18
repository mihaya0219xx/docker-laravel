@extends('layouts.front')

@section('content')
<div class="container">
    <div data-w-ff="1200">
        <div class="card text-center text-white ff_edit_mode"  style="text-shadow: black 1px 0 10px;">
            <img class="img-fluid w-100" src="img/top_pic.jpg" alt="top画像">
            <div class="cover-text card-img-overlay" style="font-family: 'Vollkorn', serif;">
                <h1 class="ff" data-fs="120">mochiup</h1>
                <span class="ff" data-fs="26">~エンジニアになりたいを応援！モチベーションが上がるそんな場所に~</span>
            </div>
        </div>
        <div class="my-3">
            <p style="font-family: 'Vollkorn', serif;">mochiupとは💡</p>
        </div>
        <div class="card text-center" style="font-family: 'Vollkorn', serif;">
            <div class="mt-3">
                <div class="row mx-auto">
                    <p class="col-md-auto ml-auto p-0 mb-0">「集中して作業に取り組みたい!!」</p>
                    <p class="col-md-auto mr-auto p-0 mb-0">「身近にエンジニアの仲間が欲しい!!」</p>
                </div>
                <div class="row mx-auto">
                    <p class="col-md-12 p-0 mb-0">そんな想いを叶えた貸しスペース提供いたします！<p>
                    <p class="col-md-auto ml-auto p-0 mb-0">エンジニアになりたい又は</p>
                    <p class="col-md-auto mr-auto p-0 mb-0">エンジニア・プログラマー様向けのサイトです。</p>
                    <p class="col-md-12 p-0">もくもくと勉強するも有り。身近にいる仲間とモチベーションを高めていけるそんな場所です。</p>
                </div>
            </div>
        </div>
        <p class="my-3 text-center">\ 都内で随時開催されています！検索はこちらから /</p>
        <form action="{{ action('Ticket\TicketController@index') }}" method="get">
            <div class="form-group row mx-auto">
                <div class="col-md-8 ml-auto">
                    <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}" placeholder="チケット名：例）新宿">
                </div>
                <div class="col-md-auto mr-auto text-right">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-outline-secondary" value="検索">
                </div>
            </div>
        </form>
    </div>
    <div class="card-group">

        @foreach($posts as $ticket)
            <div class="card mx-auto" style="width: 14.2rem;">
                <img class="img-fluid card-img-top" src="img/cafepic_1.jpg" alt="画像">
                <div class="card-title text-center">
                    <lavel>開催地：{{$ticket->ticket_title}}</lavel><br>
                    <lavel>金額：{{$ticket->price}}円</lavel>
                </div>
                <form action="/confirm" class="text-center" method="post">
                {{ csrf_field() }}
                    <input type="hidden" value="{{$ticket->ticket_title}}" name="ticket_title">
                    <input type="hidden" value="{{$ticket->price}}" name="price">
                    <input type="submit" class="btn btn-primary w-100" value="予約に進む">
                </form>
            </div>
        @endforeach

    </div>
</div>
@endsection