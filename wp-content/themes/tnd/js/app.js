(function ($) {
    var SECTION = ".section"; 
    
    $(document).ready(function() {
        $site.init();
    });

    var $site = {
        init: function () {
            this._initFullPage();
            this._initScrolling();
        },

        _initFullPage: function () {
            $('#fullpage').fullpage({
                verticalCentered: false,
                css3: true,
                resize: false,
                scrollingSpeed: 1000,
                navigation: true,
                navigationPosition: 'right',

                //change navigation background when scrolling
                onLeave: function (index, nextIndex, direction) {
                    var $nextSlide = $($(SECTION)[nextIndex - 1]);
                    $nextSlide.children(0).prop("tagName") !== "IMG" ? $("#fp-nav span").css({
                        "background": "#333"
                    }) : $("#fp-nav span").css({"background": ""});
                }
            });
        },

        _initScrolling: function () {
            $(".scroll-down").click($.fn.fullpage.moveSectionDown);
            $(".scroll-up").click($.fn.fullpage.moveSectionUp);
        }
    }
})(jQuery);