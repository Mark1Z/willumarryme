(function ($) {
    $(document).ready(function () {
        $('main').imagesLoaded(function () {
            $('main').height($('main').height());
        });
    });
})(jQuery);