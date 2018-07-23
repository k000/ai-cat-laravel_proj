@include('common.header')
<div class="catin-image mb-4">
  <img src="{{ Config::get('fpath.catin_image') }}" />
  <div class="textarea">
    <h1>当サイトについて</h1>
  </div>
</div>


<div class="container mb-5">
  <div class="row">
    <div class="col-md-8">
      <div class="container mt-5">

          <h2>当サイトについて</h2>
          <P>
            当サイトは猫の情報を共有し猫を助けるためのサイトです。猫に関する雑談なども投稿できます<br />
            掲示板の利用は全て自己責任でご利用ください。<br />
            また個人情報に関する書き込みは禁止しております。<br />
            迷い猫に関する情報などは自分のTwitterアカウントなどを介してやり取りするようにしてください。
          </P>
          <P>
            また、管理者が不適切と判断した書き込み等は、予告なく削除する場合があります。ご了承ください。
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
