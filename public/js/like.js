$(function() {


  // ─── お気に入り（投稿） ────────────────────────
  $('.likePost').on('click', function (){
    var postId = $(this).data('post-id');
    var count = $('.likeCounter').data('count');

    //通信
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: '/like',
      method: 'POST',
      data: { 'post_id': postId },
    })

    //ajax処理スタート
    .done(function (data) {
      $('#likeId' + postId).toggleClass('liked');

      // いいね済み
      if ($('#likeId' + postId).hasClass('liked')) {
        if ($('.likeCounter').text() == count) {
          $('.likeCounter').text(count + 1);
        }
        else {
          $('.likeCounter').text(count);
        }
      }

      // いいね未だ
      else {
        if ($('.likeCounter').text() == count) {
          $('.likeCounter').text(count - 1);
        }
        else {
          $('.likeCounter').text(count);
        }
      }

      // 419なのでリダイレクト
      if(xhr.status == 419) {
        location.href = location.href;
      }

    })

    //通信失敗した時の処理
    .fail(function () {
      console.log('fail');

      // 419なのでリダイレクト
        if(xhr.status == 419) {
            location.href = location.href;
        }
    });
  });

});
