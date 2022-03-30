$(window).on('load resize', function () {
  //ウィンドウの高さを取得する
  var targetY = $('.header').height();

  // スクロールをクリックするとウィンドウの高さ分、下にスクロールする
  $('.scrolldown').on('click', function () {
    $("html, body").stop().animate({ scrollTop: targetY }, 800, 'swing');
    return false;
  });
});

