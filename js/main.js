$(function () {
  var state = false;
  var pos;
  $('.openbtn').click(function () {
    if (state == false) {
      pos = $(window).scrollTop();
      $('body').addClass('fixed').css({ 'top': -pos });
      state = true;
    } else {
      $('body').removeClass('fixed').css({ 'top': 0 });
      window.scrollTo(0, pos);
      state = false;
    }
  });
});

$(".openbtn").click(function () {//ボタンがクリックされたら
  $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
  $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
  $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
  $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});