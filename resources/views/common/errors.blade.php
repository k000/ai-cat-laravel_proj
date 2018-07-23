/*
$errors変数は全てのLaravelビューの中で参照できます。バリデーションエラーが存在しない場合は、ViewErrorBagの空のインスタンスです。
*/

@if(count($errors) > 0)
  <!-- フォームのエラーリスト -->
  <div class="alert alert-danger">
    <strong>エラーアリ</strong>
    <br><br>

    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
