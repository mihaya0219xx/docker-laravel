@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ようこそ!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ホームに移動しています...
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<META http-equiv="Refresh" content="5;/"> <!--自動でトップページ-->
