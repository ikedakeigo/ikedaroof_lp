$(function () {
  // タイトルをクリックすると
  $(".js-accordion_title").on("click", function () {
    // クリックした次の要素を開閉
    $(this).next().slideToggle(300);
    // タイトルにopenクラスを付け外しして矢印の向きを変更
    $(this).toggleClass("open", 300);
  });
  });

$('.inviewfadeInUp').on('inview', function (event, isInView) {
  if (isInView) {
    $(this).stop().addClass('fadeInUp');
  } else {
    //$(this).stop().removeClass('fadeInUp');
    $(this).stop().removeClass('');
  }

   // form validation
   (function() {
    var requireFlg = false;
    var privacyFlg = false;
    var $require = $( '#js-contactForm .js-require' );
    var fillCount = 0;

    function setSubmitProp() {
      if( requireFlg && privacyFlg ) {
        $( '#form-submit' ).prop( 'disabled', false );
      } else {
        $( '#form-submit' ).prop( 'disabled', true );
      }
    }

    // 必須項目
    $require.on( 'blur', function() {
      if( $( this ).attr( 'id' ) === 'js-formKana' && !$( this ).val().match( /^([ァ-ン]|ー)+$/ ) ) {
        $( this ).val( '' );
        alert( '全角カタカナで入力してください。' )
      }

      $require.each( function() {
        var value = $( this ).val();

        if( ( value !== '' && value.match( /[^\s\t]/ ) ) ) {
          fillCount++;
        }
      });

      requireFlg = ( fillCount === $require.length ? true : false );

      setSubmitProp();
      fillCount = 0;
    });

    // プライバシーポリシー
    $( '#form-privacy' ).on( 'change', function() {
      privacyFlg =  ( $( this ).prop( 'checked' ) ? true : false );
      setSubmitProp();
    });

    // 送信時
    $( '#js-contactForm' ).on( 'submit', function() {
      if( !( requireFlg && privacyFlg ) ) {
        alert( '入力に誤りがあります。' );
        return false;
      }
    });
  })();
  
});
