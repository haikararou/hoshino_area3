document.addEventListener('DOMContentLoaded', (e)=> {
   $('.js-loading').fadeOut();
});

$(function() {
  let headerTop = $('#js-fixed-header-sp').innerHeight();
  let headerTop_Menu = $('#js-fixed-header-pc').innerHeight() +  + $('#js-fixed-header-sp').innerHeight();

  setMainContsTop();
  
  
  //ハンバーガーメニュー
  $('#js-hamburger').on('click', function() {
    $(this).toggleClass('-open');
    
    if($(this).hasClass('-open')) {
      globalMenuOpen();
    }
    
    else {
      globalMenuClose();
    }
  });
  
  document.addEventListener('click', (e) => {
  if(!e.target.closest('.l-header')) {
      globalMenuClose();
    $('#js-hamburger').removeClass('-open');
  }
})
  
  function globalMenuOpen() {
      $('#js-header').addClass('-open');
      $('#js-body').addClass('-gmenu-open');
      $('#js-drawer').slideDown();
      
      if(isTab()) {
        $('#js-fixed-header-sp').slideDown();
      } 
      
      if(!isLap()) {
        $('#js-header-menu-primary').slideDown();
      }
  }
  
  
  
  function globalMenuClose() {
      $('#js-body').removeClass('-gmenu-open');
      $('#js-drawer').slideUp();
      
      if(isTab()) {
        if($('#js-fixed-header-pc').hasClass('-fixed')) {
          $('#js-fixed-header-sp').slideUp();
        }
      } 
      if(!isLap()) {
        $('#js-header-menu-primary').slideUp();
      }
      
      setTimeout(function(){
        $('#js-header').removeClass('-open');
      }, 500);
  }
  
  
  //(SP) Language Menu
  $('.js-lang-button.-head-drawer').on('click', function() {
    $(this).toggleClass('-open');
    if($(this).hasClass('-open')) {
      $(this).next('.js-lang-select').slideDown();
    } else {
      $(this).next('.js-lang-select').slideUp();
    }
  });
  
  var lastInnerWidth = window.innerWidth ;
  $(window).resize(function() {
    if(lastInnerWidth != window.innerWidth) {
    // 960px以上
      if(isLap()) {
        $('#js-header-menu-primary').css('display', 'flex');
      }
    // 960px未満
      else {
        $('#js-header-menu-primary').css('display', 'none');
        headerTop = $('.l-header__top').innerHeight();
      }
      setMainContsTop()
    
      lastInnerWidth = window.innerWidth ;
    }
  });
  
  
  $(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    
    // 右下エリアマップ
    if(scrollTop > 0) {
      $('#js-areamap').fadeOut();
    } else {
      $('#js-areamap').fadeIn();
    }
    
    
    //ヘッダー周りの処理
    // 768px以上
    if(isTab()) {
      if(scrollTop > headerTop) {
        $('#js-fixed-header-pc').addClass('-fixed');
      } else {
        $('#js-fixed-header-pc').removeClass('-fixed');
        $('#js-fixed-header-sp').show();
      }
      setMainContsTop();
    }
    // 768px未満
    else {
    }
  });
  
  function setMainContsTop() {
    $('#js-main').css('padding-top', headerTop_Menu);
  }
  
	function isLap() {
		var ret;
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if(width >= 960) { ret = true;}
		else { ret= false;}
		return ret;
	}
	function isTab() {
		var ret;
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if(width >= 768) { ret = true;}
		else { ret= false;}
		return ret;
	}
  
  // tab
  $('.js-tab-button').on('click', function() {
    parent = $(this).parents('.js-tab-parent');
    
    parent.find('.js-tab-button').removeClass('-active');
    $(this).addClass('-active');
    
    parent.find('.c-tab-contents').removeClass('-active');
    $('#'+$(this).data('target')).addClass('-active');
  });
  


$(window).on("load resize",function(){
    if(window.matchMedia("(max-width:768px)").matches){
    }else{
      $('.facility-tab .c-tab-control__button.-white').addClass('-active');
      $('.facility-tab .c-tab-control__button.-green').removeClass('-active');
      $('#tab-list').addClass('-active');
      $('#tab-map').removeClass('-active');
    }
});//end load resize



  //タブを指定してページを開いた場合
  $(function() {
    var urlHash = location.hash;
    // URLにアンカーが存在し、タブの場合
    if(urlHash){
      if($(urlHash).hasClass('c-tab-contents')) {
        parent = $(urlHash).parents('.js-tab-parent');
        
        parent.find('.js-tab-button').removeClass('-active');
        parent.find('.js-tab-button[data-target="'+urlHash.substr(1)+'"]').addClass('-active');

        parent.find('.c-tab-contents').removeClass('-active');
        $(urlHash).addClass('-active');
        
        setTimeout(function() {
        console.log(parent.offset().top - $('#js-header').innerHeight());
        $(window).scrollTop(parent.offset().top - $('#js-header').innerHeight());
        }, 500);
      }
    }
  });


    // facility-tab
    $('.js-tab-button').on('click', function() {
      parent = $(this).parents('.js-tab-parent');
      
      parent.find('.js-tab-button').removeClass('-active');
      $(this).addClass('-active');
      
      parent.find('.c-tab-contents').removeClass('-active');
      $('#'+$(this).data('target')).addClass('-active');
    });
  
  
  // FAQ
  $('.p-faq-list__item').on('click', function() {
    $(this).toggleClass('-open');
    
    if($(this).hasClass('-open')) {
      $(this).find('.p-faq-list__answer').slideDown();
    } else {
      $(this).find('.p-faq-list__answer').slideUp();
    }
  });


  // facility
  $('.facility-acd').on('click', function() {
    $(this).toggleClass('-open');
    
    if($(this).hasClass('-open')) {
      $(this).next('.p-facility-list__dd').slideDown();
    } else {
      $(this).next('.p-facility-list__dd').slideUp();
    }
  });

  // RECRUIT
  $('.p-recruit-list__item').on('click', function() {
    $(this).toggleClass('-open');

    if($(this).hasClass('-open')) {
      $(this).find('.p-recruit-list__txt').slideDown();
    } else {
      $(this).find('.p-recruit-list__txt').slideUp();
    }
  });


  //スライダー
  if($('.js-gallery-slider').length > 0) {
    gallerySlider = new Swiper('.js-gallery-slider', {
      speed: 12000,
      loop: true,
      spaceBetween: 12,
      slidesPerView:1.6,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      breakpoints: {
        768 : {
          spaceBetween: 32,
          slidesPerView: 2.4,
        }
      }
    });
  }
});




//トップページアコーディオン
$(window).on("load resize",function(){
  if(window.matchMedia("(max-width:768px)").matches){
    $('.accordion_area .-block .-body').css({display:'none',width:'90%',height:'auto'});
    $('.accordion_area .-block .-header.-open + .-body').css({display:'block'});
    $('.accordion_area .-block .-header').on('click', function() {
      $(this).next().animate({height:'toggle'});
      $(this).toggleClass("-open");
      $('.accordion_area .-block .-header').not($(this)).next().animate({height:'hide'});
      $('.accordion_area .-block .-header').not($(this)).removeClass("-open");
    });
  }else{
    $(function(){
      $('.accordion_area .-block .-body').css({display:'block',width:'calc(100% - (126px * 1))',height:'600px'});
      $('.accordion_area .-block1 .-header').click(function(){
        $('.accordion_area .-block1 .-header').addClass('-open');
        $('.accordion_area .-block2 .-header').removeClass('-open');
        $('.accordion_area .-block3 .-header').removeClass('-open');
        $('.accordion_area .-block2').css({left:'calc(100% - 252px)'});
        $('.accordion_area .-block3').css({left:'calc(100% - 126px)'});
      });
      $('.accordion_area .-block2 .-header').click(function(){
        $('.accordion_area .-block1 .-header').removeClass('-open');
        $('.accordion_area .-block2 .-header').addClass('-open');
        $('.accordion_area .-block3 .-header').removeClass('-open');
        $('.accordion_area .-block2').css({left:'126px'});
        $('.accordion_area .-block3').css({left:'calc(100% - 126px)'});
      });
      $('.accordion_area .-block3 .-header').click(function(){
        $('.accordion_area .-block1 .-header').removeClass('-open');
        $('.accordion_area .-block2 .-header').removeClass('-open');
        $('.accordion_area .-block3 .-header').addClass('-open');
        $('.accordion_area .-block2').css({left:'126px'});
        $('.accordion_area .-block3').css({left:'252px'});
      });
    });
  }
});





//ショップ＆レストラン　絞り込み
document.addEventListener("DOMContentLoaded", function() {
  const filterItems = document.querySelectorAll('.c-list-std__item');

  filterItems.forEach(function(filterItem) {
      filterItem.addEventListener('click', function() {
          // クリックされたフィルター項目にis-activeクラスを追加し、それ以外の項目からis-activeクラスを削除する
          filterItems.forEach(function(item) {
              if (item === filterItem) {
                  item.classList.add('active');
              } else {
                  item.classList.remove('active');
              }
          });
          const filterValue = filterItem.getAttribute('data-filter');
          const items = document.querySelectorAll('.p-restaurant-list > li');
          items.forEach(function(item) {
              if (filterValue === 'all' || item.getAttribute('data-item').includes(filterValue)) {
                  fadeOut(item, function() {
                      fadeIn(item);
                  });
              } else {
                  fadeOut(item);
              }
          });
      });
  });

  function fadeIn(element) {
      element.style.display = 'block';
      setTimeout(function() {
          element.classList.add('fade-in');
      }, 50);
  }

  function fadeOut(element, callback) {
      element.classList.remove('fade-in');
      setTimeout(function() {
          element.style.display = 'none';
          if (typeof callback === 'function') {
              callback();
          }
      }, 500); // タイマーを使用してフェードアウト完了後に非表示にする
  }
});


//動画表示
$(function(){
  const videoPc = document.querySelector("#js-video-pc"); //pc版のビデオタグ
  const videPcSrc = videoPc.getAttribute("data-src"); //pc版のビデオタグのdata-src

  const videoSp = document.querySelector("#js-video-sp"); //sp版のビデオタグ
  const videoSpSrc = videoSp.getAttribute("data-src"); //sp版のビデオタグのdata-src

  let pcVideoBool = false;
  let spVideoBool = false;

  if (768 <= window.innerWidth) {
    //画面幅768pxより大きければpc版読み込み
    videoPc.src = videPcSrc;
    pcVideoBool = true;
  } else {
    //それ以外の場合sp版読み込み
    videoSp.src = videoSpSrc;
    spVideoBool = true;
  }
  window.addEventListener("resize", () => {
    //画面をresize時
    if (768 <= window.innerWidth && !pcVideoBool) {
      //画面幅768pxより大きいかつ、pc版の動画をまだ読み込んでいない場合
      videoPc.src = videPcSrc;
      pcVideoBool = true;
    }

    if (768 > window.innerWidth && !spVideoBool) {
      //画面幅768px未満かつ、sp版の動画をまだ読み込んでいない場合
      videoSp.src = videoSpSrc;
      spVideoBool = true;
    }
  });
});