@include('common.header')
<div class="top-image mb-4">
  <img src="{{ Config::get('fpath.topimage') }}" />

  <div class="text-area">
    <h1>全ての猫に愛を</h1>
    <P>日本全国の野良猫、迷い猫、里親募集猫、の情報共有して全ての猫を守る</P>

  </div>
</div>

  <div class="container">
    <h2>猫の情報を共有する</h2>
    <P>
      日本全国の野良猫、迷い猫、里親募集猫、の情報共有できます。<br />
      猫に関する質問や雑談や日記などまで猫に関することは何でも書き込めます<br />
      猫マップからその場所の情報を探せます。また検索フォームから詳細検索も行えます
    </P>
  </div>

<div class="container mb-5">
  <div class="row">
    <div class="col-md-8">
      <div class="container mt-5">
        <div class="sidebar-content">
          @include('map')
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

<div class="container mb-5">
  <div class="section-three-area text-center">
    <div class="p2">
      <a href="{{ url("/noraneko") }}"><h4>野良猫について</h4></a>
      <img src="{{ Config::get('fpath.img_folder') }}/section1.png">
    </div>

    <div class="p2">
      <a href="{{ url("/usebbs") }}"><h4>掲示板の使い方</h4></a>
      <img src="{{ Config::get('fpath.img_folder') }}/section2.png">
    </div>

    <div class="p2">
      <h4>準備中</h4>
      <img src="{{ Config::get('fpath.img_folder') }}/section3.png">
    </div>

  </div>
</div>

@include('common.footer_top')
