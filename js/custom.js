(function ($) {

  "use strict";
/* ----------------------------------------------------------- */
	/*  1. PRE LOADER
	/* ----------------------------------------------------------- */ 

    $(window).load(function(){
      $('.preloader').fadeOut(1000); // set duration in brackets    
    });
    
/* ----------------------------------------------------------- */
	/*  2. MENU
	/* ----------------------------------------------------------- */ 

    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
          } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
          }
    });
    
/* ----------------------------------------------------------- */
	/*  3. PARALLAX EFFECT
	/* ----------------------------------------------------------- */ 

    $.stellar({
      horizontalScrolling: false,
    }); 

/* ----------------------------------------------------------- */
	/*  4. MAGNIFIC POPUP
	/* ----------------------------------------------------------- */ 

    $('.image-popup').magnificPopup({
        type: 'image',
        removalDelay: 300,
        mainClass: 'mfp-with-zoom',
        gallery:{
          enabled:true
        },
        zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
        // openerElement is the element on which popup was initialized, in this case its <a> tag
        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
        return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      }
    });

/* ----------------------------------------------------------- */
	/*  5. SMOOTH SCROLL
	/* ----------------------------------------------------------- */ 

    $(function() {
      $('.custom-navbar a, #home a').on('click', function(event) {
        var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
          }, 1000);
            event.preventDefault();
      });
    });  

    /* ----------------------------------------------------------- */
	/*  6. PORTFOLIO GALLERY
	/* ----------------------------------------------------------- */ 
	
		$('.filtr-container').filterizr();

		//Simple filter controls

	    $('.mu-simplefilter li').click(function() {
	       $('.mu-simplefilter li').removeClass('active');
	        $(this).addClass('active');
	    });


	/* ----------------------------------------------------------- */
	/*  7. PORTFOLIO POPUP VIEW ( IMAGE LIGHTBOX )
	/* ----------------------------------------------------------- */ 

	$('.mu-imglink').magnificPopup({
	  type: 'image',
	  mainClass: 'mfp-fade',
	  gallery:{
	    enabled:true
	  }
	});

})(jQuery);
