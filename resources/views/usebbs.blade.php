@include('common.header')
<div class="catin-image mb-4">
  <img src="{{ Config::get('fpath.catin_image') }}" />
  <div class="textarea">
    <h1>掲示板の使い方</h1>
  </div>
</div>


<div class="container mb-5">
  <div class="row">
    <div class="col-md-8">
      <div class="container mt-5">


          <P>
            当サイトは誰でも投稿することができます。<br />
            迷い猫に関するやりとりは電話番号は掲載せず、メールアドレスやTwitterアカウントなどを介してやり取りするようお願いします<br />
            管理人の判断により不適切と判断した投稿は予告なく削除します。
          </P>
          <P>
            また、投稿の日付が古いものは予告なく削除します。
          </P>
          <P>
            投稿するには地域を市区町村まで選んでください。<br />
            またグーグルマップの情報を利用する場合は、グーグルマップの地図情報の共有から埋め込みタグを取得して、
            埋め込みタグをそのまま入力してください。
          </P>
          <P>
            里親カテゴリーは個人同士でやり取りすることは禁止です。<br />
            団体などが里親募集の行いをする際の告知にのみ、投稿可能です<br />
          </P>
          <P>
            その他カテゴリーでは、雑談や質問等の投稿が可能です。
          </P>

      </div>
    </div>

    <div class="col-md-4">
      <div class="container mt-5">

      </div>
    </div>

  </div>
</div>

@include('common.footer_top')
