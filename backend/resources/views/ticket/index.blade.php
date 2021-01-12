@extends('layouts.front')

@section('content')
<div class="container">
    <div class="ff" date-fs="30">
        <div class="card text-center text-white" style="text-shadow: black 1px 0 10px;">
            <img class="img-fluid w-100" src="img/top_pic.jpg" alt="top画像">
            <div class="cover-text card-img-overlay">
                <h1 data-w-ff="1200" style="font-size: 60px; font-family: 'Vollkorn', serif;">mochiup</h1>
                <span data-w-ff="1200" style="font-family: 'Vollkorn', serif;">モチベーションが上がるそんな場所に...</span>
            </div>
        </div>
        <div class="my-3">
            <p style="font-family: 'Vollkorn', serif;">場所はこちら...</p>
        </div>
            <form action="{{ action('Ticket\TicketController@index') }}" method="get">
                <div class="form-group row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}" placeholder="チケット名：例）新宿">
                    </div>
                    <div class="col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn" value="検索">
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
</div>
@endsection