$(function(){


  var $children = $('.children');
  var original = $children.html();



//県を操作したら発火
$('.parent').change(function() {

  //関東地方などが取得される
  var val1 = $(this).val();

  //削除された要素をもとに戻すため.html(original)を入れておく
  $children.html(original).find('option').each(function() {
    var val2 = $(this).data('val'); //data-valの値を取得

    //valueと異なるdata-valを持つ要素を削除
    if (val1 != val2) {
      $(this).not(':first-child').remove();
    }

  });

  //地方側のselect要素が未選択の場合、都道府県をdisabledにする
  if ($(this).val() == "") {
    $children.attr('disabled', 'disabled');
  } else {
    $children.removeAttr('disabled');
  }

});



//ボタンの有効化
//チェックボックスにチェックが入っている時のみボタンが押下できる
  $("#store_post").submit(function(){

    if($("#agree:checked").val()){
      return true;
    }else{
      alert("チェックボックスにチェックがありません");
      return false;
    }
  });







})
