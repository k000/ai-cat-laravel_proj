@include('common.header')
<div class="catin-image mb-4">
  <img src="{{ Config::get('fpath.catin_image') }}" />
  <div class="textarea">
    <h1>新規投稿</h1>
  </div>
</div>
  <div class="container">

    <P>日本全国の野良猫、迷い猫、里親募集猫、の情報共有して猫を大切にするサイト</P>
    <P class="text-danger"><strong>里親は個人での書き込みは禁止しております。会場や駅前などでの活動告知などの書き込みだけに制限しています。</strong></P>
  </div>
  <div class="container mt-3">

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
    @elseif($message = Session::get('maperror'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$message}}</strong>
      </div>
    @endif


    <div class="post-area">
      <small><strong>*のついた項目は必須項目です</strong></small>
      <form action="{{url('/post')}}" enctype="multipart/form-data" method="post" id="store_post">
        {{ csrf_field() }}

        <div class="col-sm-6 form-group">
          <label for="category">*カテゴリー</label>
          <select type="text" name="category" id="category" class="form-control">
              <option value="">カテゴリを選択してください</option>
              <option value="野良猫">野良猫</option>
              <option value="迷い猫">迷い猫</option>
              <option value="里親">里親</option>
              <option value="その他">その他</option>
          </select>
        </div>

        <div class="col-sm-7 form-group">
          <div class="form-inline">
            <!--都道府県データの読み込み -->
            @include('post.select_val');
          </div>
        </div>

        <div class="col-sm-12 form-group">
          <label for="map">グーグルマップ情報(グーグルマップ「共有」の「地図を埋め込む」タグをコピーして貼り付け)</label>
          <input type="text" class="form-control" id="map" name="map">
        </div>

        <div class="col-sm-6 form-group">
          <label for="name">*タイトル</label>
          <input type="text" class="form-control" id="first_name" name="name">
        </div>

        <div class="col-sm-12 form-group">
          <label for="comment">*コメント(2000文字以内)</label>
          <textarea class="form-control" id="comment" name="comment" rows="5"></textarea>
        </div>

        <div class="col-sm-6 form-group">
          <label for="first_name">画像ファイル(3000kbまで)</label>
          <input type="file" name="select_file" value="" class="form-control">

        </div>


        <div class="col-sm-6 form-group">
          <input id="agree" name="agree" type="checkbox" value="1"> <label for="agree">不適切な投稿ではありません</label>
          <button type="submit" class="btn btn-info">
            <i class="fas fa-plus fa-fw"></i>新規投稿
          </button>
        </div>

      </form>
    </div>
  </div>

@include('common.footer')
