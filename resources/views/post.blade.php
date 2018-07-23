@extends('layouts.app')
@section('content')

<div class="container">

  <form action="{{ url('/post') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="post" class="col-sm-3 control-label">新規投稿</label>
      <div class="col-sm-6">
        <input type="text" name="name" id="post-name" class="form-control">
        <input type="text" name="ken" id="post-name" class="form-control">
        <input type="text" name="shi" id="post-name" class="form-control">
        <input type="text" name="map" id="post-name" class="form-control">
        <input type="text" name="comment" id="post-name" class="form-control">


      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-info">
          <i class="fa fa-plus"></i>タスク追加
        </button>
      </div>
    </div>

  </form>
</div>

@endsection
