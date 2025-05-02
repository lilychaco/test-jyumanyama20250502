new WOW().init();



$( function() {
  // common
  (function() {
    var $header = $( '#js-header' );
    // navigation
    $( '#js-toggle' ).on( 'click', function() {
      $header.toggleClass( 'add-active' );
    });
    $( '.js-navLink, #js-overlay' ).on( 'click', function() {
      $header.removeClass( 'add-active' );
    });

    var pcWidth = window.matchMedia( 'screen and (min-width: 769px)' );
    function checkBreakPoint() {
      if( pcWidth.matches ) {
        $header.removeClass( 'add-active' );
      }
    }
    pcWidth.addListener( checkBreakPoint );
    checkBreakPoint();


    // smooth scroll
    $( 'a[href^="#"]' ).on( 'click', function(e){
      var speed = 500;
      var href= $( this ).attr( 'href' );
      var target = $( href === '#' || href === '' ? 'html' : href );
      var position = target.offset().top - $header.outerHeight();
      $( 'html, body' ).animate( { scrollTop:position }, speed, 'swing' );
      e.preventDefault();
    });

    // header
    $( window ).on( 'scroll', function() {
      if( $( this ).scrollTop() > $( '#js-mv' ).outerHeight() ) {
        $( 'body' ).addClass( 'add-scrolled' );
      } else {
        $( 'body' ).removeClass( 'add-scrolled' );
      }
    });
  })();
})




  $(window).on('load',function(){
    $("#splash").delay(100).fadeOut('slow',function(){//ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述
      $('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
      var h = $(window).height();//ブラウザの高さを取得
      $(".splashbg").css({
        "border-width":h,//ボーダーの太さにブラウザの高さを代入
        "animation-name":"backBoxAnime"//animation-nameを定義
      });
    });
    // $("#splash-logo").delay(1200).fadeOut('slow');//ロゴを1.2秒でフェードアウトする記述
  });



var splash_text = $.cookie('accessdate'); //キーが入っていれば年月日を取得
var myD = new Date();//日付データを取得
var myYear = String(myD.getFullYear());//年
var myMonth = String(myD.getMonth() + 1);//月
var myDate = String(myD.getDate());//日

if (splash_text != myYear + myMonth + myDate) {//cookieデータとアクセスした日付を比較↓
        $("#splash").css("display", "block");//１回目はローディングを表示
        setTimeout(function () {
            $("#splash-logo").fadeIn(1000, function () {//1000ミリ秒（1秒）かけてロゴがフェードイン
                setTimeout(function () {
            $("#splash-logo").fadeOut(1000);//1000ミリ秒（1秒）かけてロゴがフェードアウト
                }, 1000);//1000ミリ秒（1秒）後に処理を実行
        setTimeout(function () {
            $("#splash").fadeOut(1000, function () {//1000ミリ秒（1秒）かけて画面がフェードアウト
            var myD = new Date();
            var myYear = String(myD.getFullYear());
            var myMonth = String(myD.getMonth() + 1);
            var myDate = String(myD.getDate());
            $.cookie('accessdate', myYear + myMonth + myDate); //accessdateキーで年月日を記録
        });
        }, 1700);//1700ミリ秒（1.7秒）後に処理を実行
    });
}, 1000);//1000ミリ秒（1秒）後に処理を実行
}else {
    $("#splash").css("display", "none");//同日2回目のアクセスでローディング画面非表示
}
