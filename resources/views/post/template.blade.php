@include('common.header')
<div class="catin-image mb-4">
  <img src="{{ Config::get('fpath.catin_image') }}" />
  <div class="textarea">
    <h1>@yield('title')</h1>
  </div>
</div>


<div class="container mt-5">

  <div class="row">
    <div class="col-md-8">
      <div class="container mt-5">
        @if($posts->isEmpty())
          <P class="text-danger">該当する投稿が見つかりませんでした</P>
          <P><a href="{{url('/')}}"><i class="fas fa-angle-double-left"></i>トップへ戻る</a></P>
        @endif

        @foreach($posts as $post)

          <div class="post-container mb-5">
            <span class="post-category">{{$post->category}}</span>
            <div class="post-date">
              <i class="far fa-calendar-alt fa-fw"></i>
                {{$post->created_at}}
                {{$post->prefecture}}
                {{$post->city}}
            </div>
            <h4 class="text-center"><strong>{{$post->name}}</strong></h4>
            <P class="mt-5 mb-5">{{ substr($post->comment,0,150) }}...</P>
            <span class="post-readmore"><a href="{{ action('PostController@detail',['id' => $post->id ]) }}">この投稿を読む</a></span>
          </div>
        @endforeach

        {{ $posts->links() }}


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
