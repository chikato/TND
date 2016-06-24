(function ($) {
    $(document).ready(function() {
        var $fp = $('#fullpage').fullpage({
            verticalCentered: false,
            css3: true,
            resize: false,
            scrollingSpeed: 1000,
            navigation: true,
            navigationPosition: 'right'/*,
            anchors: ["section1", "section2", "section3", "section4"]*/
        });

        $(".scroll-down").click($.fn.fullpage.moveSectionDown);
        $(".scroll-up").click($.fn.fullpage.moveSectionUp);
    });
})(jQuery);