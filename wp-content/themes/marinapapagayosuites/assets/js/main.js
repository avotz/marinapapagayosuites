;(function($){

  var Scrollbar = window.Scrollbar,
    $body = $('body');

    $("#activitiesModalLink").animatedModal();
  //Scrollbar.init(document.querySelector('.scroll-wrapper'));
   
  /*$('.slider-home').slick({
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      arrows:false,
      dots:true,
      cssEase: 'linear'
  });*/
  $('#fullpage').fullpage({
        sectionsColor: ['#f2f2f2', '#FFFFFF', '#F3F0E6', '#FFFFFF', '#454139'],
 
      });

    $('.menu-item a[data-goto]').on('click', function (e) {

        $.fn.fullpage.moveTo($(this).data('goto'));

        $body.removeClass('nav-is-open'); // para quitar el menu

        e.preventDefault();
    });

  $('.map')
  .click(function(){
      $(this).find('iframe').addClass('clicked')})
  .mouseleave(function(){
      $(this).find('iframe').removeClass('clicked')});

  function isHome(){
      return $('body').hasClass('home');
    }

    
    
    $(window).scroll(function () {

          if(isHome()){
            
              if ($(this).scrollTop() > 0) {
                  $('body').addClass("header--fixed");
              } else {
                  $('body').removeClass("header--fixed");
              }
        }

        /* if ($(this).scrollTop() > $('.banner').height()-200) {
                  $('.banner-title').addClass("inSection");
              } else {
                  $('.banner-title').removeClass("inSection");
              }*/

      });

    
$('.suites-popup-link').magnificPopup({
    type: 'inline',
    midClick: true,
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
        beforeOpen: function () {

            this.st.mainClass = 'mfp-zoom-out';
            $('body').addClass('mfp-open');
        },
        beforeClose: function () {


            $('body').removeClass('mfp-open');
        }

    }


});

    $('.services-item-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });


    $('.header-contact a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });

 
$(window).load(function() {
      
      resize();
     

});


$(window).resize(resize);

function resize () {
   responsive();
}

function responsive() {
           
                // var isResponsive = $('.main').hasClass('fp-responsive');
                // if (getWindowWidth() < 1000) {
                //     if (!isResponsive) {
                //         $.fn.fullpage.setAutoScrolling(false, 'internal');
                //         $.fn.fullpage.setFitToSection(false, 'internal');
                //         $('.main').addClass('fp-responsive');
                //     }
                // } else if (isResponsive) {
                //      $.fn.fullpage.setAutoScrolling(true, 'internal');
                //      $.fn.fullpage.setFitToSection(true, 'internal');
                //      $('.main').removeClass('fp-responsive');
                // }

               
            
        }


    
})(jQuery);

