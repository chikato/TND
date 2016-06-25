(function ($) {
    var SECTION = ".section";
    var $menu, $nav;
    
    $(document).ready(function() {
        $menu = $("#menu");
        $nav = $("#nav");
        $site.init();
    });

    var $site = {
        init: function () {
            this._initFullPage();
            this._initScrolling();
            this._initMenu();
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
                    !$nextSlide.find(".mask").length ? $("#fp-nav span").css({
                        "background": "#333"
                    }) : $("#fp-nav span").css({"background": ""});
                }
            });
        },

        _initScrolling: function () {
            $(".scroll-down").click($.fn.fullpage.moveSectionDown);
            $(".scroll-up").click(function () {
                $.fn.fullpage.moveTo(1);
            });
        },

        _initMenu: function () {
            $menu.click(function (e) {
                e.preventDefault();
                $menu.toggleClass("active");
                $nav.toggle();
            });
        }
    }
})(jQuery);