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
            this._cloneContact();
        },

        _initFullPage: function () {
            $('#fullpage').fullpage({
                verticalCentered: false,
                css3: true,
                scrollingSpeed: 1000,
                navigation: true,
                navigationPosition: 'right',
                scrollOverflow: true,
                scrollOverflowOptions: {
                    scrollbars: true,
                    mouseWheel: true,
                    hideScrollbars: false,
                    fadeScrollbars: false,
                    disableMouse: true
                },

                //change navigation background when scrolling
                onLeave: function (index, nextIndex, direction) {
                    var $nextSlide = $($(SECTION)[nextIndex - 1]);
                    !$nextSlide.find(".mask").length ?
                        ($("#fp-nav span").css({
                        "background": "#333"
                    }), $menu.addClass("black-menu")) :
                        ($("#fp-nav span").css({"background": ""}),
                        $menu.removeClass("black-menu"));
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
                $nav.width() ? $.fn.fullpage.setAllowScrolling(true) : $.fn.fullpage.setAllowScrolling(false);
                $menu.toggleClass("active");
                $nav.toggle();
            });
        },

        _cloneContact: function () {
            var $socialWrapper = $(".social-contact");
            var $socialIcons = $($(".banner-sidebar").html()).attr("id", "");

            if($socialWrapper.length) {
                $socialIcons.find('[class^="sfmsb-icon-"], [class*=" sfmsb-icon-"]')
                    .css({"color": ""});
                $socialWrapper.append($socialIcons);
            }
        }
    }
})(jQuery);