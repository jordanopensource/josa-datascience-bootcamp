  (function(document, window, $){
    'use strict';

    var Site = window.Site;
    $(document).ready(function(){
        $(window).scroll(function() {
            // .scrollTop() retrieves vertical position of the scroll bar for the first element in a set of matched elements
            var scroll = $(window).scrollTop();
            var objectSelect = $('.body-section-container');

            // .offset() retrieves current position of element relative to document
            var objectPosition = objectSelect.offset().top;

            if (scroll > objectPosition) {
                $('.mobile-navbar').removeClass('mobile-undisplay-nav');
                $('.mobile-navbar').addClass('mobile-display-nav');
            }
            else {
                $('.mobile-navbar').removeClass('mobile-display-nav');
                $('.mobile-navbar').addClass('mobile-undisplay-nav');
            }
        });

        $('[data-toggle="tooltip"]').tooltip()

      Site.run();
    });
  })(document, window, jQuery);
