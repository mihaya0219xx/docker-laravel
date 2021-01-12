@extends('layouts.front')
 
@section('content')
<div class="container m-5">
<h4 class="text-center">{{ $user['name'] }}さんの申込履歴</h4><br/>
  <div class="row justify-content-center">

    @if( isset($resarvs) )
    <div class="col-md-8">
        @foreach($resarvs as $resarv)
        <div class="card">
          <div class="card-body">
              <div class="form-group">
                <div>
                  <label>申込日：{{ $resarv->created_at->format('Y年m月d日') }}</label><br>
                  <label>開催地：{{ $resarv->ticket_title }}</label><br>
                  <label>金額：{{ $resarv->price }}円</label><br>
                </div>
                <a href="{{ action('Ticket\TicketController@delete',['id' => $resarv->id]) }}">
                  <button class="user-btn">キャンセル</button>
                </a>
          </div>
        </div>
      </div>
      @endforeach
      {{ $resarvs->links() }}

    </div>
    @else
      <label>申込履歴はありません</label>
    @endif

</div>
@endsection