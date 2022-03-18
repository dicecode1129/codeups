"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  var topBtn = $('.page-top');
  topBtn.hide(); // ボタンの表示設定

  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  }); // ボタンをクリックしたらスクロールして上に戻る

  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  }); // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(window).on('load', function () {
    // ページのURLを取得
    var url = $(location).attr('href'),
        // headerの高さを取得してそれに30px追加した値をheaderHeightに代入
    headerHeight = $('header').outerHeight(); // urlに「#」が含まれていれば

    if (url.indexOf("#") != -1) {
      // urlを#で分割して配列に格納
      var anchor = url.split("#"),
          // 分割した最後の文字列（#◯◯の部分）をtargetに代入
      target = $('#' + anchor[anchor.length - 1]),
          // リンク先の位置からheaderHeightの高さを引いた値をpositionに代入
      position = Math.floor(target.offset().top) - headerHeight; // positionの位置に移動

      $("html, body").animate({
        scrollTop: position
      }, 400, 'swing');
    }
  });
  var swiper1 = new Swiper('.swiper1', {
    // Optional parameters
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    speed: 2000
  });
  var swiper2 = new Swiper('.swiper2', {
    loop: true,
    effect: 'slide',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
  var slider = new Swiper('.works-detail__swiper-main', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: 8,
    //スライドの枚数と同じ値を指定
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  }); //サムネイル

  var thumbs = new Swiper('.works-detail__swiper-sub', {
    slidesPerView: 'auto',
    spaceBetween: 24,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
    breakpoints: {
      '768': {
        centeredSlides: false,
        spaceBetween: 8
      }
    },
    loopedSlides: 8
  }); //4系～
  //メインとサムネイルを紐づける

  slider.controller.control = thumbs;
  thumbs.controller.control = slider; //ドロワーメニュー

  $(".js-hamburger").click(function () {
    $(".js-hamburger").toggleClass("open");
    $(".sp-nav").toggleClass("open");
  });
  var mvHeight = $('.main-visual').height();
  $(window).scroll(function () {
    var top = $(window).scrollTop();

    if (mvHeight < top) {
      $('#js-header').addClass('black');
    } else {
      $('#js-header').removeClass('black');
    }
  }); //コンタクトフォームエラーの制御

  $(".error").prev('input,textarea').addClass("is-error");
  $('input,textarea').click(function () {
    $(this).removeClass('is-error');
  });

  var error = $('span').hasClass('error');

  if(error) {
   $('.error-content').addClass('error-content--active');
  } 
});