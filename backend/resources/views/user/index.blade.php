@extends('layouts.front')
 
@section('content')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ユーザー登録情報</div>
        <div class="card-body">
            <div class="form-group">
              <label for="name">
                名前
              </label>
              <div>
                {{ $user->name }}
              </div>
            </div>
            <div class="form-group">
              <label for="email">
                メールアドレス
              </label>
              <div>
                {{ $user->email }}
              </div>
            </div>
              <a href="{{ url('/') }}">
                <button class="user-btn">戻る</button>
              </a>
              <a href="{{ action('Admin\UserController@edit') }}">
                <button class="user-btn">編集する</button>
              </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection