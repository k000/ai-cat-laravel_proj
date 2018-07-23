@include('common.header')


<div class="container mt-5">
  @if(isset($prefecture_info))
    <h1>{{$prefecture_info}}一覧</h1>
  @else
    <h1>一覧</h1>
  @endif



@foreach($posts as $post)
  <div class="post-container mb-5">
    <P>{{$post->name}}</P>
    <P>{{$post->comment}}</P>
  </div>
@endforeach

</div>

@include('common.footer')
