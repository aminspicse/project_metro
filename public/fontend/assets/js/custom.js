(function($) {
	'use strict';
	jQuery(document).on('ready', function(){
      
        
        
        // Home Slider JS
        $('.home-slider').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayHoverPause: true,
            navText: [
                "<i class='icofont-swoosh-left'></i>",
                "<i class='icofont-swoosh-right'></i>"
            ]
        });
        // Counter Up JS
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });


    }); 
    
    
})(jQuery);