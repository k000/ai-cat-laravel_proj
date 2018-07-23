<div class="serach-form">
  <h4>詳細検索</h4>
  <form action="{{url('/serachpost')}}">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="text" name="keyword" class="form-control" placeholder="キーワード">
    </div>

    <div class="form-group">
      <label for="category">カテゴリー</label>
      <select type="text" name="category" id="category" class="form-control">
          <option value="">カテゴリを選択してください</option>
          <option value="野良猫">野良猫</option>
          <option value="迷い猫">迷い猫</option>
          <option value="里親">里親</option>
          <option value="その他">その他</option>
      </select>
    </div>


    @include('post.select_val_serach')

    <div class="form-group">
      &nbsp;<button class="btn btn-info">検索する</button>&nbsp;
    </div>
  </form>
</div>
