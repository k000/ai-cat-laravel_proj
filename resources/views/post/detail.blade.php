@include('common.header')




<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      <div class="container mt-5">

        <div class="ad mb-5">
          <a href="https://px.a8.net/svt/ejp?a8mat=2ZLJH3+1RPEIA+3SGS+5Z6WX" target="_blank" rel="nofollow">
          <img border="0" width="468" height="60" alt="" src="https://www24.a8.net/svt/bgt?aid=180723927107&wid=001&eno=01&mid=s00000017686001004000&mc=1"></a>
          <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=2ZLJH3+1RPEIA+3SGS+5Z6WX" alt="">
        </div>


        @if(empty($post))
          <P class="text-danger">該当する投稿が見つかりませんでした</P>
          <P><a href="{{url('/')}}"><i class="fas fa-angle-double-left"></i>トップへ戻る</a></P>
        @endif


          <div class="post-container mb-5">
            <h2>{{$post->name}}</h2>
            <div class="text-center">
                <i class="fas fa-tag fa-fw"></i>{{$post->category}}
                <i class="fas fa-map-marker-alt fa-fw"></i>{{$post->prefecture}}{{$post->city}}
                <i class="fas fa-clock fa-fw"></i>{{$post->created_at}}
            </div>
            <hr>

            <P>{!! nl2br(e($post->comment)) !!}</P>

            <hr>

            @if(!empty($post->image))
            <h5>画像<h5>
            <img src="../images/{{ e($post->image) }}" />
            @endif


            @if(!empty($post->map))
            <h5>マップ<h5>
            <iframe src="{{ e($post->map) }}"></iframe>
            @endif



        <hr>


        <h5>コメント一覧</h5>
        @if(!$comments->isEmpty())
          @foreach($comments as $comment)
            <small>{{ e($comment->created_at) }}</small>
            <P>{{ e($comment->comment) }}</P>

            @if(!empty($comment->image))
            <img src="../images/{{ e($comment->image) }}" />
            @endif

            <hr>
          @endforeach
        @else
          <P><small>まだコメントがありません</small></P>
        @endif

        <P>この投稿にコメントする</P>


        @if(count($errors) > 0)
          <div class="alert alert-danger">
            エラーがあります。
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{$message}}</strong>
          </div>
        @endif



        <form action="{{url('/sotre_comment')}}" enctype="multipart/form-data" method="post" id="store_post">
          {{ csrf_field() }}

          <div class="col-sm-12 form-group">
            <label for="comment">コメント(2000文字以内)</label>
            <textarea class="form-control" id="comment" name="comment" rows="5"></textarea>
          </div>

          <div class="col-sm-6 form-group">
            <label for="first_name">画像ファイル(3000kbまで)</label>
            <input type="file" name="select_file" value="" class="form-control">
          </div>

          <input type="hidden" name="parent_id" value="{{$post->id}}">

          <div class="col-sm-6 form-group">
            <input id="agree" name="agree" type="checkbox" value="1"> <label for="agree">不適切な投稿ではありません</label>
            <button type="submit" class="btn btn-info">
              <i class="fas fa-plus fa-fw"></i>コメントする
            </button>
          </div>

        </form>
      </div>

      <div class="ad mb-5">
        <a href="https://px.a8.net/svt/ejp?a8mat=2ZLJH3+1RPEIA+3SGS+5Z6WX" target="_blank" rel="nofollow">
        <img border="0" width="468" height="60" alt="" src="https://www24.a8.net/svt/bgt?aid=180723927107&wid=001&eno=01&mid=s00000017686001004000&mc=1"></a>
        <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=2ZLJH3+1RPEIA+3SGS+5Z6WX" alt="">
      </div>

      </div>
    </div>

    <div class="col-md-4">
      <div class="container mt-5">
        <div class="sidebar-content mb-3">
          @include('post.serach_form')
        </div>

        <a href="https://px.a8.net/svt/ejp?a8mat=2ZLJH3+1SW9PU+2T0E+BXYE9" target="_blank" rel="nofollow">
        <img border="0" width="300" height="250" alt="" src="https://www26.a8.net/svt/bgt?aid=180723927109&wid=001&eno=01&mid=s00000013091002006000&mc=1"></a>
        <img border="0" width="1" height="1" src="https://www14.a8.net/0.gif?a8mat=2ZLJH3+1SW9PU+2T0E+BXYE9" alt="">

      </div>
    </div>

  </div>
</div>





@include('common.footer')
