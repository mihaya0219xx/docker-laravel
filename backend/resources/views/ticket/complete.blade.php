@extends('layouts.front')
 
@section('content')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">予約完了しました！</div>
        <div class="card-body">
            <div class="form-group">
              <label for="name">
                お名前
              </label>
              <div>
                  {{ $user['name'] }} 様
              </div>
            </div>
            <div class="form-group">
              <label for="name">
                選択チケット
              </label>
              <div>
                  開催地：{{ $form['ticket_title'] }}
              </div>
            </div>
            <div class="form-group">
              <label for="name">
                金額
              </label>
              <div>
                {{ $form['price'] }}円
              </div>
            </div>
              <a href="{{ url('/') }}" class="btn btn-primary">戻る</a>
              <a href="{{ url('/history') }}" class="btn btn-primary">履歴確認</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection